<?php
 // Author: Le Quoc Huy
// Date created: 25/11/2014
// Description
/* 
*   This class manages upload file process
* 
*/

class file_upload_machine
{
    
    protected $uploaddir;    
    protected $log_file_name; 
    protected $user_name;
    protected $log_mode;
    
    // files size per upload
    // in MB
    protected $max_uploaded_files_size = 0; 
    
    // in KB
    protected $min_uploaded_files_size = 0; 
    
    // image width
    protected $uploaded_files_max_size = 0; 
    // image height
    protected $uploaded_files_min_size = 0; 
    
    // Error return enumeration
    protected $application_root = '';
    
    protected $count_ok = 0;
    
    protected $original_file_names;
    protected $uploaded_file_names;
    
    const DEFAULT_UPLOAD_FOLDER = 'tmp';
    const DEFAULT_LOG_FOLDER = 'logs';
    const DEFAULT_LOG_FILE = 'upload_log.txt';
    const UPLOAD_DIR_MODE = 0755;
    const RECURSIVE_CREATE_UPLOAD_DIR = true;  
    
    const INVALID_HTTP_POST_NAME = 1;                      
    const FILE_ALREADY_EXISTS = 2;                           
    const FILE_TOO_BIG = 3;                      
    const FILES_TOO_BIG = 4;                      
    const FILE_IS_NOT_AN_IMAGE = 5;
        
    const NO_UPLOAD_FILES_SELECTED = 6; 
    const INVALID_FILE_OBJECT = 7;  
    const TOTAL_FILES_SIZE_TOO_BIG =8;     
    const UNABLE_OPEN_LOG_FILE = 9;          
    const FAILED_CREATE_UPLOAD_FOLDER = 10;      
        
    
    // Initialize upload file options
    /*
    * files: object holds $_FILES
    * $single_uploaded_file: single uploaded file name    
    * $uploaddir: directory files uploaded to
    */
    public function __construct($uploaddir = '', $log_file_name = '', $log_mode = true, $website_folder = '')
    {
        // set application root
        $this->application_root = $_SERVER['DOCUMENT_ROOT'];
        
        if(trim($website_folder) !='')
            $this->application_root .= DIRECTORY_SEPARATOR.$website_folder;
        
        //$this->single_uploaded_file = $single_uploaded_file;
        if(trim($uploaddir) == '')
            $this->uploaddir = self::DEFAULT_UPLOAD_FOLDER;
        else
            $this->uploaddir = $uploaddir;
            
        // validate upload folder
        $this->validate_upload_folder();
        
        // generate new log file by date if necessary
        if(trim($log_file_name) == '')
        {
            $this->log_file_name = $this->application_root.DIRECTORY_SEPARATOR.self::DEFAULT_LOG_FILE;    
        }               
        else
            $this->log_file_name = $this->application_root.DIRECTORY_SEPARATOR.$log_file_name.'_'.date('Y_m_d').'.txt';
            
        // read max upload files size from php configuration
        $this->uploaded_files_max_size = $this->getMaximumFileUploadSize();
        
        // set mode to write log message or not
        $this->log_mode = $log_mode;
    }
    
    // validate upload folder
    protected function validate_upload_folder()
    {
        // if not exists then create
        if(!file_exists($this->uploaddir))
        {
            if(mkdir($this->uploaddir, self::UPLOAD_DIR_MODE, self::RECURSIVE_CREATE_UPLOAD_DIR))
            {
                    $format = 'Failed to create upload folder \'%s\'';
                    $error = sprintf($format, $this->uploaddir);
                    
                    $this->write_log($error);
                                  
                    // throw exception here
                    throw new Exception($error, self::FAILED_CREATE_UPLOAD_FOLDER);            
            }              
        } 
    }
    
    // only verify if we want to validate a HTTP POST name
    // else leave $file_http_post_name empty
    // validate if HTTP POST Name exists in $_FILES request
    // if not, return invalid http post name      
    protected function validate_http_post_name($file_http_post_name = '')
    {
        if($file_http_post_name <> '')
        {
            if(!array_key_exists($file_http_post_name, $_FILES))
                // throw exception here
                throw new Exception('Invalid HTTP POST name', self::INVALID_HTTP_POST_NAME);              
        }        
    }
    
    // verify if file name exists in the upload folder
    protected function validate_files_exist()
    {
        $path = $this->application_root.$this->uploaddir;
        
        foreach($_FILES as $file_obj)
        {   
            if(is_array($file_obj['name']))
            {
                foreach($file_obj['name'] as $file_name)
                {
                    $full_name = $path.DIRECTORY_SEPARATOR.$file_name;  
                                    
                    $this->is_file_exists($full_name, $file_name); 
                }                
            }
            else
            {
                $full_name = $path.DIRECTORY_SEPARATOR.$file_obj['name'];
                
                $this->is_file_exists($full_name, $file_obj['name']);
            }
                
        }    
    }
    
    // check if file exists
    private function is_file_exists($full_path_name, $file_name)
    {
        if(file_exists($full_path_name))
        {                                                            
            $format = 'File %s already exists in folder %s';
            $error = sprintf($format, $file_name, $this->uploaddir);
            
            $this->write_log($error);
                          
            // throw exception here
            throw new Exception($error, self::FILE_ALREADY_EXISTS);            
        }         
    }
    
    // make at least one file object in array $_FILES
    protected function validate_files_array()
    {
        if(count($_FILES) == 0)
        {
           // throw exception here
            $format = 'No upload files selected';
            $error = sprintf($format);
            
            // write log
            $this->write_log($error);
                          
            // throw exception here
            throw new Exception($error, self::NO_UPLOAD_FILES_SELECTED);  
        } 
    }
    
    // verify file name not empty
    protected function validate_file_name()
    {   
        foreach($_FILES as $file_obj)
        {
           if(trim($file_obj['name'] == ''))
           {
                // throw exception here
                $format = 'No file selected on client';
                $error = sprintf($format);  
                
                $this->write_log($error);
                              
                // throw exception here
                throw new Exception($error, self::INVALID_FILE_OBJECT); 
                break;                   
           }       
        }                   
    }
    
    // verify if files size is over the maximum upload file size
    protected function validate_files_size()
    {
        $total_files_size = 0.00;
        
        foreach($_FILES as $file_obj)
        {
            if(is_array($file_obj['size']))
            {
                foreach($file_obj['size'] as $file_size)
                {
                    $total_files_size += $file_size;
                }
                
            }
            elseif($file_obj['size'] == 0)
            {
                 // throw exception here
                $format = 'Uploaded file %s is too big, maximum allowed %s MB';
                $error = sprintf($format, $file_obj['name'], $this->uploaded_files_max_size/(1024*1024));
                
                // write log
                $this->write_log($error);
                              
                // throw exception here
                throw new Exception($error, self::FILE_TOO_BIG); 
            }
            // sum up file size
            else
            {
                $total_files_size += $file_obj['size'];
            }   
            
            // finally validate of total files size uploaded
            if($total_files_size > $this->uploaded_files_max_size)     
            {
                // throw exception here
                $format = 'Total uploaded files size (%s) is too big, maximum allowed %s MB';
                $error = sprintf(
                        $format, 
                        number_format ($total_files_size/(1024*1024),2), 
                        $this->uploaded_files_max_size/(1024*1024)
                    );
                 
                // write log   
                $this->write_log($error);
                              
                // throw exception here
                throw new Exception($error, self::TOTAL_FILES_SIZE_TOO_BIG);                 
            }      
        }        
    }
    
    // validate uploaded file is an actual image file type
    protected function validate_image_file()
    {
        foreach($_FILES as $file_obj)
        {
            if(is_array($file_obj['tmp_name']))
            {
                for($i = 0; $i < count($file_obj['tmp_name']);$i++)
                {
                    if(getimagesize($file_obj['tmp_name'][$i]) == false)  
                    {
                        $format = 'File %s is not an image';
                        $error = sprintf($format, $file_obj['name'][$i]);
                        
                        // write log   
                        $this->write_log($error);

                        throw new Exception($error, self::FILE_IS_NOT_AN_IMAGE);                        
                    }  
                }
            }  
            elseif(getimagesize($file_obj['tmp_name']) == false)        
            {
                $format = 'File %s is not an image';
                $error = sprintf($format, $file_obj['name']);
                
                // write log   
                $this->write_log($error);

                throw new Exception($error, self::FILE_IS_NOT_AN_IMAGE); 
            }            
        }       
    }
    
    // upload file after do all checks
    // use to upload single file is better
    // if one file failed to upload then return OK
    // if all files uploaded succesfully then return ALL_OK
    private function upload_files($new_file_name = '', $user_name ='')
    {           
        $count_ok = 0;
        
        foreach($_FILES as $file_obj)
        {
            $uploaded_file_name = '';        
                         
            $tmp_file_name = $file_obj['tmp_name'];                          
               
            if(is_array($file_obj['name']))  
            {
                for($i = 0; $i < count($file_obj['name']);$i++)
                {
                    $uploaded_file_name =  $file_obj['name'][$i];
                    
                    // format file name
                    $uploaded_file_name = $this->standardize_file_name($uploaded_file_name);
                    
                    $uploaded_file_path = $this->uploaddir.DIRECTORY_SEPARATOR.$uploaded_file_name;

                    $this->move_tmp_main_foler(
                        $uploaded_file_path, 
                        $file_obj['tmp_name'][$i], 
                        $file_obj['size'][$i],
                        $uploaded_file_name,
                        $new_file_name);  

                 }
            }
            else
            {
                $uploaded_file_name =  ($new_file_name=='')?basename($file_obj['name']) : $new_file_name; 
                $main_part = substr($uploaded_file_name, 0, strlen($uploaded_file_name)-4); 
                $ext = substr($uploaded_file_name,-3);
                if($ext == 'peg')
                {
                    $ext = 'jpeg';
                    $main_part = substr($uploaded_file_name, 0, strlen($uploaded_file_name)-5); 
                }
                // Add suffix part
                //$user = $_SESSION["admin"]; //Why get SESSION['admin']???
                $user = null;
                if(isset($_SESSION["admin"]))
                        $user = $_SESSION["admin"];
                elseif(isset($_SESSION["user"]))
                        $user = $_SESSION["user"];
                
                $submitter_id = 0;
                if($user["user_id"] <> null && $user["user_id"] > 0)
                {
                      $submitter_id   = $user["user_id"];   
                }        
                    
                $suffix_image = date("YmdHis").$submitter_id;  
                
                $uploaded_file_name = $main_part.'_'.$suffix_image.'.'.$ext;
                
                // format file name
                $uploaded_file_name = $this->standardize_file_name($uploaded_file_name);
                
                $uploaded_file_path = $this->uploaddir.DIRECTORY_SEPARATOR.$uploaded_file_name; 
                
                //$uploaded_file_name = $main_part.'_'.$suffix_image;//.'.'.$ext;                                                                                   
                $this->move_tmp_main_foler(
                    $uploaded_file_path, 
                    $file_obj['tmp_name'], 
                    $file_obj['size'],
                    $uploaded_file_name,
                    $new_file_name);
                    //Check how to pass with param    
                //$this->resize_photo(225,225,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/225x225_'.$uploaded_file_name);
                //$this->resize_photo(800,800,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/800x800_'.$uploaded_file_name);
                $this->resize_photo(450,450,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/450x450_'.$uploaded_file_name);
                $this->resize_photo(800,800,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/800x800_'.$uploaded_file_name);
				unlink($uploaded_file_path);
            }  
        }                
          
        if($this->count_ok == count($_FILES))
            return 'OK';
        elseif($this->count_ok > 0) 
            return 'OK'; 
        else return 'ERROR';
    }       
   
    // move the file from temporary folder to the target folder
    private function move_tmp_main_foler($uploaded_file_path, $tmp_file_name, $file_size, $uploaded_file_name, $new_file_name='')
    {
        if (move_uploaded_file($tmp_file_name, $uploaded_file_path)) 
        {
            // increase number of files uploaded successful
            $file_name = $uploaded_file_name;
             
            $this->original_file_names[] = $file_name;
            $this->uploaded_file_names[] = $file_name;
            
            $this->count_ok++;
            
            $file_size = number_format($file_size/1024);
            
            $format = 'File %s - %s KB uploaded succesfully by %s';
            
            $error = sprintf($format, basename($uploaded_file_path), $file_size, $this->user_name);

            //$this->write_log($error);
        } 
        else 
        {
            $format = 'Unknown error: failed to upload file %s to upload folder %s';
            
            $error = sprintf($format, basename($uploaded_file_path), $this->uploaddir);

            $this->write_log($error);
        } 
    }
    
    // resize the image to the smaller ones
    public function resize_photo($max_w,$max_h,$source_filename,$target_filename)
    {
        
        $src_im= imagecreatefromstring( file_get_contents ($source_filename));
        $src_w=imagesx($src_im);
        $src_h=imagesy($src_im);
        
        if ($src_w <= $max_w &&$src_h <= $max_h)
        {
            $width = $src_w;
            $height = $src_h;
        }
        else
        {
            $w = $src_w/$max_w;
            $h = $src_h/$max_h;
            if ($w >$h)
            {
                $width = $max_w;
                $height =( $src_h/$src_w)*$width;
            }
            elseif ($w <$h)
            {
                $height = $max_h;
                $width =($src_w/$src_h)*$height;
            }
            else
            {
                $width = $max_w;
                $height = $max_h;
            }
        }
        $dst_im = @imagecreatetruecolor($width,$height);
        $white = @imagecolorallocate($dst_im,255,255,255);
        imagefill($dst_im,0,0,$white);
        @imagecopyresampled($dst_im,$src_im,0,0,0,0,$width,$height,$src_w,$src_h);
        imagejpeg ( $dst_im,$target_filename );
        imagedestroy($dst_im);                  
    }
        
    //This function transforms the php.ini notation for numbers (like '2M') 
    // to an integer (2*1024*1024 in this case)  
    function convertPHPSizeToBytes($sSize)  
    {  
        if ( is_numeric( $sSize) ) {
           return $sSize;
        }
        $sSuffix = substr($sSize, -1);  
        $iValue = substr($sSize, 0, -1);  
        switch(strtoupper($sSuffix)){  
        case 'P':  
            $iValue *= 1024;  
        case 'T':  
            $iValue *= 1024;  
        case 'G':  
            $iValue *= 1024;  
        case 'M':  
            $iValue *= 1024;  
        case 'K':  
            $iValue *= 1024;  
            break;  
        }  
        return $iValue;  
    }  

    function getMaximumFileUploadSize()  
    {  
        return min( $this->convertPHPSizeToBytes(ini_get('post_max_size')), 
                    $this->convertPHPSizeToBytes(ini_get('upload_max_filesize')));  
    }  
    
    // process upload error files
    protected function process_error_files()
    {
         // write code here
         /*
         foreach ($_FILES["photo"]["error"] as $key => $error) 
            {
            if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["photo"]["tmp_name"][$key];
                    $name = $_FILES["photo"]["name"][$key];
                    
                    //move_uploaded_file($tmp_name, "data/$name");
                    echo 'UPLOAD_ERR_OK';
                }
            elseif ($error == UPLOAD_ERR_CANT_WRITE)  {
                  echo 'UPLOAD_ERR_CANT_WRITE';
            }
            elseif ($error == UPLOAD_ERR_EXTENSION){
                  echo 'UPLOAD_ERR_EXTENSION';
            }
            elseif ($error == UPLOAD_ERR_FORM_SIZE){
                  echo 'UPLOAD_ERR_FORM_SIZE';
            }
            elseif ($error == UPLOAD_ERR_INI_SIZE) {
                  echo 'UPLOAD_ERR_INI_SIZE';
            }
            elseif ($error == UPLOAD_ERR_INI_SIZE){
                  echo 'UPLOAD_ERR_INI_SIZE';
            }
            elseif ($error == UPLOAD_ERR_NO_FILE){
                  echo 'UPLOAD_ERR_NO_FILE';
            }
            elseif ($error == UPLOAD_ERR_NO_TMP_DIR){
                  echo 'UPLOAD_ERR_NO_TMP_DIR';
            }
            }
            */
    }
    
    // $file_size in KB
    protected function write_log($message)
    {
        if($this->log_mode)
        {
            // "a+": Open for reading and writing; place the file pointer at the end of the file. 
            // If the file does not exist, attempt to create it.   
            $myfile = fopen($this->log_file_name, "a+");
            
            if($myfile == FALSE )
            {
                $format = 'Unable to create or open log file %s';
                    $error = sprintf($format, $this->log_file_name);

                    throw new Exception($error, self::UNABLE_OPEN_LOG_FILE); 
            }
            
            $log_msg = date('Y-m-d H:s:i').' - ';
            $log_msg .= $message;
            $log_msg .= PHP_EOL;

            if (!fwrite($myfile, $log_msg))
                echo 'Unable to write log message'; 
        } 
    }
    
    // return uploaded file names
    protected function standardize_file_name($filename)
    {
        $formatted_filename = '';

        $formatted_filename = $this->get_english_string($filename);
        
        $formatted_filename = str_replace(' ', '', $formatted_filename);   
        $formatted_filename = strtolower($formatted_filename);
        
        return $formatted_filename;
    } 
    
    function get_english_string($vn_string)
    {
        for($i=0; $i < mb_strlen($vn_string,"UTF8"); $i++)
        {
            $item = mb_substr($vn_string,$i, 1,'UTF8');
            $vn_string = str_replace($item, $this->get_english_symbol($item) ,$vn_string);    
        } 
        return $vn_string;
    }

    function get_english_symbol($vn_character)
    {
        $vn_symbols = array(
        'a' => array(   "á", "à", "ả", "ã", "ạ", "Á", "À", "Ả", "Ã","Ạ",
                        "ă","ắ", "ằ", "ẳ", "ẵ", "ặ", "Ă", "Ắ", "Ằ", "Ẳ", "Ẵ","Ặ",
                        "â", "ấ", "ẩ", "ầ", "ậ", "ẫ", "Â", "Ấ", "Ầ", "Ẩ","Ẫ", "Ậ"),
        'd' => array(   "đ", "Đ"),
        'e' => array(   "e", "é", "è", "ẻ", "ẽ", "ẹ", "É", "È", "Ẻ", "Ẽ","Ẹ", "",
                        "ê", "ế", "ề", "ể", "ễ", "ệ", "Ế", "Ề", "Ể", "Ễ"),
        'i' => array(   "í", "ì", "ỉ", "ĩ", "ị", "Í", "Ì", "Ỉ", "Ĩ", "Ị"),
        'o' => array(   "ó", "ò", "ỏ", "õ", "ọ", "Ó","Ò", "Ỏ", "Õ","Ọ",
                        "ô", "ố", "ồ", "ổ", "ỗ", "ộ", "Ố", "Ồ", "Ổ", "Ỗ","Ộ",
                        "ơ", "ớ", "ờ", "ở", "ỡ", "ợ", "Ớ", "Ờ", "Ở", "Ỡ","Ợ"),
        'u' => array(   "ú", "ù", "ủ", "ũ", "ụ", "Ù", "Ú", "Ủ", "Ũ","Ụ",
                        "ư", "ứ", "ừ", "ử", "ữ", "ự", "Ư", "Ứ", "Ừ", "Ử","Ữ", "Ự"),
        'y' => array(   "ý", "ỳ", "ỷ", "ỹ", "ỵ", "Ý", "Ỳ", "Ỷ", "Ỹ", "Ỵ"));
     
         foreach($vn_symbols as $key => $value)
        {
            if(in_array($vn_character, $value))
            {
                return $key;
            }     
        }
        return $vn_character;      
    }
    
    // get list of original file names
    public function get_original_file_names()
    {
        return $this->$original_file_names;
    }  
    
    // return uploaded file names
    public function get_file_names()
    {
        return $this->uploaded_file_names;
    }    
    
    // function to upload single file
    public function process_upload($new_file_name = '')
    {    
        // validate File upload POST name
        //$this->validate_http_post_name($file_http_post_name);
        
        // validate_files_array is not empty
        $this->validate_files_array();
        
        // validate file name
        // not empty
        $this->validate_file_name();
        
        // validate files exist
        $this->validate_files_exist();
                                                  
        // validate file size
        $this->validate_files_size();
        
        // validate file type
        $this->validate_image_file();    
        
        // validate file height          
        // validate file width
         
         // upload file       
         return  $this->upload_files($new_file_name);
    }
    
    public function process_upload_v2($new_file_name = '',$obj_name)
    {    
        // validate File upload POST name
        //$this->validate_http_post_name($file_http_post_name);
        
        // validate_files_array is not empty
        $this->validate_files_array();
        
        // validate file name
        // not empty
        $this->validate_file_name();
        
        // validate files exist
        $this->validate_files_exist();
                                                  
        // validate file size
        $this->validate_files_size();
        
        // validate file type
        $this->validate_image_file();    
        
        // validate file height          
        // validate file width
         
         // upload file       
         return  $this->upload_files_v2($new_file_name,$obj_name);
    }
    
    public function process_upload_v3($new_file_name = '',$obj_name)
    {    
        // validate File upload POST name
        //$this->validate_http_post_name($file_http_post_name);
        
        // validate_files_array is not empty
        $this->validate_files_array();
        
        // validate file name
        // not empty
        $this->validate_file_name();
        
        // validate files exist
        $this->validate_files_exist();
                                                  
        // validate file size
        $this->validate_files_size();
        
        // validate file type
        //$this->validate_image_file();    
        
        // validate file height          
        // validate file width
         
         // upload file       
         return  $this->upload_files_v3($new_file_name,$obj_name);
    }
    
    // upload file after do all checks
    // use to upload single file is better
    // if one file failed to upload then return OK
    // if all files uploaded succesfully then return ALL_OK
    private function upload_files_v2($new_file_name = '', $obj_name, $user_name ='')
    {           
        $count_ok = 0;
        
        foreach($_FILES as $file_obj)
        {
            $uploaded_file_name = '';        
                         
            $tmp_file_name = $file_obj['tmp_name'];                          
               
            if(is_array($file_obj['name']))  
            {
                for($i = 0; $i < count($file_obj['name']);$i++)
                {
                    $uploaded_file_name =  $file_obj['name'][$i];
                    
                    // format file name
                    $uploaded_file_name = $this->standardize_file_name($uploaded_file_name);
                    
                    $uploaded_file_path = $this->uploaddir.DIRECTORY_SEPARATOR.$uploaded_file_name;

                    $this->move_tmp_main_foler(
                        $uploaded_file_path, 
                        $file_obj['tmp_name'][$i], 
                        $file_obj['size'][$i],
                        $uploaded_file_name,
                        $new_file_name);  

                 }
            }
            else
            {
                $uploaded_file_name =  ($new_file_name=='')?basename($file_obj['name']) : $new_file_name; 
                $main_part = substr($uploaded_file_name, 0, strlen($uploaded_file_name)-4); 
                $ext = substr($uploaded_file_name,-3);
                if($ext == 'peg')
                {
                    $ext = 'jpeg';
                    $main_part = substr($uploaded_file_name, 0, strlen($uploaded_file_name)-5); 
                }
                // Add suffix part
                //$user = $_SESSION["admin"]; //Why get SESSION['admin']???
                $user = null;
                if(isset($_SESSION["admin"]))
                        $user = $_SESSION["admin"];
                elseif(isset($_SESSION["user"]))
                        $user = $_SESSION["user"];
                
                $submitter_id = 0;
                if($user["user_id"] <> null && $user["user_id"] > 0)
                {
                      $submitter_id   = $user["user_id"];   
                }        
                    
                $suffix_image = date("YmdHis").$submitter_id;  
                
                $uploaded_file_name = $main_part.'_'.$suffix_image.'.'.$ext;
                
                // format file name
                $uploaded_file_name = $this->standardize_file_name($uploaded_file_name);
                
                $uploaded_file_path = $this->uploaddir.DIRECTORY_SEPARATOR.$uploaded_file_name; 
                
                //$uploaded_file_name = $main_part.'_'.$suffix_image;//.'.'.$ext;                                                                                   
                $this->move_tmp_main_foler(
                    $uploaded_file_path, 
                    $file_obj['tmp_name'], 
                    $file_obj['size'],
                    $uploaded_file_name,
                    $new_file_name);
                    //Check how to pass with param    
                $this->resize_photo(450,450,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/450x450_'.$uploaded_file_name);
                $this->resize_photo(800,800,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/800x800_'.$uploaded_file_name);
                if($obj_name == 'banner')
                {                        
                      $this->resize_photo(1000,1000,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/1000x1000_'.$uploaded_file_name);
                }elseif($obj_name == 'product')
                {
                      $this->resize_photo(180,180,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/180x180_'.$uploaded_file_name);
                      $this->resize_photo(300,300,$uploaded_file_path,$this->uploaddir.DIRECTORY_SEPARATOR.'/300x300_'.$uploaded_file_name);

                } 
                unlink($uploaded_file_path);
            }  
        }                
          
        if($this->count_ok == count($_FILES))
            return 'OK';
        elseif($this->count_ok > 0) 
            return 'OK'; 
        else return 'ERROR';
    } 
    
    private function upload_files_v3($new_file_name = '', $obj_name, $user_name ='')
    {           
        $count_ok = 0;
        
        foreach($_FILES as $file_obj)
        {
            $uploaded_file_name = '';        
                         
            $tmp_file_name = $file_obj['tmp_name'];                          
               
            if(is_array($file_obj['name']))  
            {
                for($i = 0; $i < count($file_obj['name']);$i++)
                {
                    $uploaded_file_name =  $file_obj['name'][$i];
                    
                    // format file name
                    $uploaded_file_name = $this->standardize_file_name($uploaded_file_name);
                    
                    $uploaded_file_path = $this->uploaddir.DIRECTORY_SEPARATOR.$uploaded_file_name;

                    $this->move_tmp_main_foler(
                        $uploaded_file_path, 
                        $file_obj['tmp_name'][$i], 
                        $file_obj['size'][$i],
                        $uploaded_file_name,
                        $new_file_name);  

                 }
            }
            else
            {
                $uploaded_file_name =  ($new_file_name=='')?basename($file_obj['name']) : $new_file_name; 
                $main_part = substr($uploaded_file_name, 0, strlen($uploaded_file_name)-4); 
                $ext = substr($uploaded_file_name,-3);
                if($ext == 'lsx')
                {
                    $ext = 'xlsx';
                    $main_part = substr($uploaded_file_name, 0, strlen($uploaded_file_name)-5); 
                }
                // Add suffix part
                //$user = $_SESSION["admin"]; //Why get SESSION['admin']???
                $user = null;
                if(isset($_SESSION["admin"]))
                        $user = $_SESSION["admin"];
                elseif(isset($_SESSION["user"]))
                        $user = $_SESSION["user"];
                
                $submitter_id = 0;
                if($user["user_id"] <> null && $user["user_id"] > 0)
                {
                      $submitter_id   = $user["user_id"];   
                }        
                    
                $suffix_image = date("YmdHis");  
                
                $uploaded_file_name = 'reason_'.$suffix_image.'.'.$ext;
                
                // format file name
                $uploaded_file_name = $this->standardize_file_name($uploaded_file_name);
                
                $uploaded_file_path = $this->uploaddir.DIRECTORY_SEPARATOR.$uploaded_file_name; 
                
                //$uploaded_file_name = $main_part.'_'.$suffix_image;//.'.'.$ext;                                                                                   
                $this->move_tmp_main_foler(
                    $uploaded_file_path, 
                    $file_obj['tmp_name'], 
                    $file_obj['size'],
                    $uploaded_file_name,
                    $new_file_name);
                    //Check how to pass with param    
               
                //unlink($uploaded_file_path);
            }  
        }                
          
        if($this->count_ok == count($_FILES))
            return 'OK';
        elseif($this->count_ok > 0) 
            return 'OK'; 
        else return 'ERROR';
    } 
} 
?>