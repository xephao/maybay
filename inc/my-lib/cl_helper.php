<?php
  class Helper
{
    /*Initial constant*/
    function initial_site_config()
    {
        @session_start();
        @set_time_limit(0);
        @ini_set('upload_max_filesize','100M');
        @ini_set('default_charset','utf-8');
        @ini_set("magic_quotes_gpc","on");
        @ini_set("allow_url_fopen","on");
        @ini_set('display_errors','off');
        error_reporting(1);
        header('Content-Type: text/html; charset=utf-8');
        define('_ABSPATH_',realpath(dirname(__FILE__)."/../../"));
        }
/*
        // Multilanguage - luan
        //include _ABSPATH_."/inc/func/mp_language.class.php";
        //if ($_GET['lang'] != null)
        //  $_SESSION[lang] = $_GET['lang'];         
        $lang = new MP_Language();
        $language_file = $lang->getFileDir ( "text.php");
        require_once ($language_file);   
    
    
    function l($t)
    {
        global $_text;
        if(array_key_exists($t,$_text)) return $_text[$t];
        else return $t;
    }// End Multilanguage
*/    
    /*Resize Image - Using when upload Images*/
    /*Should change to upload class*/
    function resize_image($max_w,$max_h,$source_filename,$target_filename){
    
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
            if ($w >$h){
                $width = $max_w;
                $height =( $src_h/$src_w)*$width;
            
            }elseif ($w <$h){
                $height = $max_h;
                $width =($src_w/$src_h)*$height;
            }else{
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
    
    /*Read data of $_SERVER variable to get correct current URL */
    function get_url_of_current_page() {
    
        $pageURL = 'http';
        if((isset($_SERVER["HTTPS"]))&& ($_SERVER["HTTPS"] == "on")) 
            {$pageURL .= "s";}
        $pageURL .= "://";
        
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        
        return $pageURL;
    }
    
    /*Detect type of browser connect server - using to call exactly UI web, mobile or smartphone*/
    function detect_browser_type()
    {
        $userBrowser = $_SERVER['HTTP_ACCEPT']; 
        
        if(stristr($userBrowser, 'application/vnd.wap.xhtml+xml'))
        {    $_REQUEST['wap2'] = 1;    }
        
        elseif(stripos($_SERVER['HTTP_USER_AGENT'],"iPod"))
        {    $_REQUEST['iphone'] = 1;}
        
        elseif(stripos($_SERVER['HTTP_USER_AGENT'],"iPhone"))
        {    $_REQUEST['iphone'] = 1;}
        
        elseif(stripos($_SERVER['HTTP_USER_AGENT'],"Android"))
        {    $_REQUEST['Android'] = 1;}
        
        elseif(stripos($_SERVER['HTTP_USER_AGENT'],"IEMobile"))
        {    $_REQUEST['IEMobile'] = 1;}
        
        elseif(stristr($userBrowser, 'DoCoMo/' || 'portalmmm/'))
        {    $_REQUEST['imode'] = 1;    }
        
        elseif(stristr($userBrowser, 'text/vnd.wap.wml')) 
        {    $_REQUEST['wap'] = 1;    }
        
        elseif(stristr($userBrowser, 'text/html')) 
        {    $_REQUEST['html'] = 1;    }


        if(!defined('WAP'))
            define('WAP', isset($_REQUEST['wap']) || isset($_REQUEST['wap2']) || isset($_REQUEST['imode'])|| isset($_REQUEST['html'])|| isset($_REQUEST['Android'])|| isset($_REQUEST['iphone'])|| isset($_REQUEST['IEMobile']));
        if (WAP)
        {
            define('WIRELESS_PROTOCOL', isset($_REQUEST['wap']) ? 'wap' : (isset($_REQUEST['wap2']) ? 'wap2' : (isset($_REQUEST['iphone']) ? 'iphone' : (isset($_REQUEST['imode']) ? 'imode' : (isset($_REQUEST['IEMobile']) ? 'IEMobile' :(isset($_REQUEST['html']) ? 'html' : (isset($_REQUEST['Android']) ? 'Android' : '')))))));  

            if (WIRELESS_PROTOCOL == 'wap')
            {    $browser_t = "mobile";  }
            
            elseif (WIRELESS_PROTOCOL == 'wap2')
            {    $browser_t = "mobile";  }
            
            elseif (WIRELESS_PROTOCOL == 'imode')
            {    $browser_t = "mobile";  }
            
            elseif (WIRELESS_PROTOCOL == 'iphone')
            {    $browser_t = "smartphone";  }
            
            elseif (WIRELESS_PROTOCOL == 'Android')
            {    $browser_t = "smartphone";      }
            
            elseif (WIRELESS_PROTOCOL == 'IEMobile')
            {    $browser_t = "smartphone";      }
            
            elseif (WIRELESS_PROTOCOL == 'html')
            {     
                $mobile_browser = '0';

                if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i',
                    strtolower($_SERVER['HTTP_USER_AGENT']))){
                    $mobile_browser++;
                    }

                if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or 
                    ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
                    $mobile_browser++;
                    }

                $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
                $mobile_agents = array(
                    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
                    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
                    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
                    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
                    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
                    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
                    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
                    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
                    'wapr','webc','winw','winw','xda','xda-');

                if(in_array($mobile_ua,$mobile_agents))
                {    $mobile_browser++;        }
                
                if(isset($_SERVER['ALL_HTTP']))
                {
                    if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0) 
                    {    $mobile_browser++;        }
                }
                if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iemobile')>0)
                {    $mobile_browser++;        }
                
                if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0)
                {    $mobile_browser=0;        }
                
                if($mobile_browser>0){// do something wap
                    $browser_t = "mobile";            
                
                }else{
                    $_SESSION['Browser_d'] = "web";
                    $browser_t = "web";
                }
       
            } else {  // do something else html
      
                $_SESSION['Browser_d'] = "web";
                $browser_t = "web";
            }

        }else{
            $mobile_browser = '0';

            if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i',
                strtolower($_SERVER['HTTP_USER_AGENT']))){
                $mobile_browser++;
                }

            if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or 
                ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
                $mobile_browser++;
                }

            $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
            $mobile_agents = array(
                'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
                'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
                'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
                'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
                'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
                'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
                'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
                'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
                'wapr','webc','winw','winw','xda','xda-');

            if(in_array($mobile_ua,$mobile_agents))
            {    $mobile_browser++;    }
        
            if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iemobile')>0) {
                $mobile_browser++;    }
                
            if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0) {
                $mobile_browser++;    }
                
            if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
                $mobile_browser=0;    }
                
            if($mobile_browser>0){ // do something wap
                $browser_t = "mobile";
                
            }else{ // non-mobile
                $_SESSION['Browser_d'] = "web";
                $browser_t = "web";
            }
   
        }
        return $browser_t;
    } 

    function set_config_for_smarty()
    {
        //require (realpath(dirname(__FILE__))."/inc/smarty/Smarty.class.php");
        $smarty  = new Smarty;
        $smarty->template_dir = 'theme/default/';// check and config later for mobile
        $smarty->compile_dir  = 'compile/';

        return $smarty ;
    }
    function init_smarty($template_dir,$compile_dir)
    {
        $smarty  = new Smarty;
        $smarty->template_dir = $template_dir; //'../smallshop/theme/default/';// check and config later for mobile
        $smarty->compile_dir  = $compile_dir; //'compile/';
        return $smarty ; 
    }
    function set_config_value($config_data)
    {
        $value       = array();    
        for($i=0;$i<count($config_data);$i++) 
        {
            $value[$config_data[$i]['config_name']]=$config_data[$i]['config_value'];
        }
        define('_MAP_X_',($value['_MAP_X_'])?$value['_MAP_X_']:0);        
        define('_MAP_Y_',($value['_MAP_Y_'])?$value['_MAP_X_']:0);
        define('_MARKER_X_',($value['_MARKER_X_'])?$value['_MARKER_X_']:0);
        define('_MARKER_Y_',($value['_MARKER_Y_'])?$value['_MARKER_Y_']:0);
        define('_MAP_ZOOM_',($value['_MAP_ZOOM_'])?$value['_MAP_ZOOM_']:0);
        //define('_SERVER_URL_',$value['_SERVER_URL_']?$value['_SERVER_URL_']:'/khaihoanmon');
        //define('_THEME_DIR_',$value['_THEME_DIR_']?$value['_THEME_DIR_']:'/theme/default/frontend/web');
        //define('_NAME_SUPPORT_1_',$value['_NAME_SUPPORT_1_']?$value['_NAME_SUPPORT_1_']:'Ms.Lanh');
        //define('_NAME_SUPPORT_2_',$value['_NAME_SUPPORT_2_']?$value['_NAME_SUPPORT_2_']:'Ms.Lanh');
        //define('_NUM_PHONE_BANNER_',$value['_NUM_PHONE_BANNER_']?$value['_NUM_PHONE_BANNER_']:'0909359577');
        //define('_SKYPE1_',$value['_SKYPE1_']?$value['_SKYPE1_']:huynhthailuan_nt);
        //define('_SKYPE2_',$value['_SKYPE2_']?$value['_SKYPE2_']:huynhthailuan_nt);
        define('_NUM_GALLERY_',$value['_NUM_GALLERY_']?$value['_NUM_GALLERY_']:10);
        //define('_FACEBOOK_',$value['_FACEBOOK_']?$value['_FACEBOOK_']:'luanhuynhthai');
        define('_NUM_PAGE_',$value['_NUM_PAGE_']?$value['_NUM_PAGE_']:'10');
        
//        define('_MULTILANGUAGE_ENABLE_',$value['multi_language_enable']?$value['multi_language_enable']:1);
        define('_MULTILANGUAGE_ENABLE_',$value['_MULTILANGUAGE_ENABLE_']?$value['_MULTILANGUAGE_ENABLE_']:1);
        define('_MULTILANGUAGE_HIDE_MENU_',$value['_MULTILANGUAGE_HIDE_MENU_']=='true'?1:0);
        define('_MULTILANGUAGE_DEFAULT_',$value['_MULTILANGUAGE_DEFAULT_']?$value['_MULTILANGUAGE_DEFAULT_']:'en');
        define('_MULTILANGUAGE_FIXED_',$value['_MULTILANGUAGE_FIXED_']?$value['_MULTILANGUAGE_FIXED_']:'en');
        
        define('_FACEBOOK_',$value['_FACEBOOK_']?$value['_FACEBOOK_']:'en');
        define('_MULTILANGUAGE_ENABLE_',$value['_MULTILANGUAGE_ENABLE_']?$value['_MULTILANGUAGE_ENABLE_']:'en');
        define('_MULTILANGUAGE_HIDE_MENU_',$value['_MULTILANGUAGE_HIDE_MENU_']?$value['_MULTILANGUAGE_HIDE_MENU_']:'en');
        define('_MULTILANGUAGE_DEFAULT_',$value['_MULTILANGUAGE_DEFAULT_']?$value['_MULTILANGUAGE_DEFAULT_']:'en');
        define('_MULTILANGUAGE_FIXED_',$value['_MULTILANGUAGE_FIXED_']?$value['_MULTILANGUAGE_FIXED_']:'en');
    }
    
    
    function init_session_start()
    {
       @session_start(); 
    }
    
    function read_text_data_with_language($language_key,$path)
    {
        
    } 
    
    public static function get_time_stamp_with_timezone($time_zone){
        return gmdate("Y-m-d H:i:s", time() + 3600*($time_zone+date("0")));
    }
    
    public static function get_date_with_timezone($time_zone){
        return gmdate("Y-m-d", time() + 3600*($time_zone+date("0")));
    }
    public static function get_day_with_timezone_distance($time_zone,$distance){
        return gmdate("Y-m-d", time() + 3600*($time_zone+date("0"))+ 24*60*60*$distance);
    }
    public static function convert_date_to_sql_format($date)
    {
        $sqlDate = str_replace('/', '-', $date);
        $sqlDate = date('Y-m-d', strtotime($sqlDate));
        return $sqlDate;
    }                             
    public static function convert_sql_to_date_with_format($date,$format)
    {
        $newDate = date($format, strtotime($date));
        return $newDate ;
    }
    public static function go_url($url)
    {
        header("Location:".$url);    
    }
    
    // Convert a money value to eligible format for users
    // $value: float
    // $currency: default VND, else USD
    public static function convert_currency_to_display($value, $currency =  'VND')
    {
      // value is not a float value then throws exception
      if(!is_numeric($value))
      {       
        throw new Exception(sprintf('Invalid money value: %s not a number', $value));
      }
      
      if($currency == 'USD')
        return number_format($value, 2, ',', '.').' '.'USD';
      else
        return number_format($value, 0, ',', '.').' '.'VNĐ';      
    }
    
    public static function safe_input_data($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    public static function search_price($data) {
     switch ($data) {
         case '0':
             $arr_value['about'] = "0";
             $arr_value['to'] = "500000000";
             break;
         case '1':
             $arr_value['about'] = "500000000";
             $arr_value['to'] = "800000000";
             break;
         case '2':
             $arr_value['about'] = "800000000";
             $arr_value['to'] = "1000000000";
             break;
         case '3':
             $arr_value['about'] = "1000000000";
             $arr_value['to'] = "2000000000";
             break;
         case '4':
             $arr_value['about'] = "2000000000";
             $arr_value['to'] = "3000000000";
             break;
        case '5':
             $arr_value['about'] = "3000000000";
             $arr_value['to'] = "5000000000";
             break;
         case '6':
             $arr_value['about'] = "5000000000";
             $arr_value['to'] = "7000000000";
             break;
         case '7':
             $arr_value['about'] = "7000000000";
             $arr_value['to'] = "10000000000";
             break;
         case '8':
             $arr_value['about'] = "10000000000";
             $arr_value['to'] = "20000000000";
             break;
         case '9':
             $arr_value['about'] = "20000000000";
             $arr_value['to'] = "30000000000";
             break;
         case '10':
             $arr_value['about'] = "300000000000";
             $arr_value['to'] = "";
             break;
         
         default:
             $arr_value['about'] = "";
             $arr_value['to'] = "";
             break;
     }
      return $arr_value;
    }

    public static function search_area($data) {
     switch ($data) {
         case '0':
             $arr_value['about'] = "0";
             $arr_value['to'] = "30";
             break;
         case '1':
             $arr_value['about'] = "30";
             $arr_value['to'] = "50";
             break;
         case '2':
             $arr_value['about'] = "50";
             $arr_value['to'] = "80";
             break;
         case '3':
             $arr_value['about'] = "80";
             $arr_value['to'] = "100";
             break;
         case '4':
             $arr_value['about'] = "100";
             $arr_value['to'] = "150";
             break;
        case '5':
             $arr_value['about'] = "150";
             $arr_value['to'] = "200";
             break;
         case '6':
             $arr_value['about'] = "200";
             $arr_value['to'] = "250";
             break;
         case '7':
             $arr_value['about'] = "250";
             $arr_value['to'] = "300";
             break;
         case '8':
             $arr_value['about'] = "300";
             $arr_value['to'] = "500";
             break;
         case '9':
             $arr_value['about'] = "500";
             $arr_value['to'] = "";
             break;
 
         
         default:
             $arr_value['about'] = "";
             $arr_value['to'] = "";
             break;
     }
      return $arr_value;
    }
        public static function result_price($data) {
     switch ($data) {
        case '-1':
             $data = "Thỏa thuận";
             break;
         case '0':
             $data = "< 500 triệu";
             break;
         case '1':
             $data = "500 - 800 triệu";
             break;
         case '2':
             $data = "800 triệu - 1 tỷ";
             break;
         case '3':
            $data = "1 - 2 tỷ";
             break;
         case '4':
             $data = "2 - 3 tỷ";
             break;
        case '5':
             $data = "3 - 5 tỷ";
             break;
         case '6':
             $data = "5 - 7 tỷ";
             break;
         case '7':
             $data = "7 - 10 tỷ";
             break;
         case '8':
             $data = "10 - 20 tỷ";
             break;
         case '9':
             $data = "20 - 30 tỷ";
             break;
         case '10':
            $data = "> 30 tỷ";
             break;
         
         default:
             $data = "Thỏa thuận";
             break;
     }
      return $data;
    }

    public static function result_area($data) {
     switch ($data) {
         case '0':
            $data = "<= 30 m2";
             break;
         case '1':
             $data = "30 - 50 m2";
             break;
         case '2':
             $data = "50 - 80 m2";
             break;
         case '3':
             $data = "80 - 100 m2";
             break;
         case '4':
             $data = "100 - 150 m2";
             break;
        case '5':
            $data = "150 - 200 m2";
             break;
         case '6':
             $data = "200 - 250 m2";
             break;
         case '7':
             $data = "250 - 300 m2";
             break;
         case '8':
            $data = "300 - 500 m2";
             break;
         case '9':
            $data = ">= 500 m2";
             break;
         default:
             $data = "Tất cả";
             break;
     }
      return $data;
    }
}
?>
