<?php
include_once(realpath(dirname(__FILE__))."/configs.php");
include_once(realpath(dirname(__FILE__))."/cl_helper.php");
include_once(realpath(dirname(__FILE__))."/file_upload_machine.php");

@session_start();
//@set_time_limit(0);
//@ini_set("memory_limit","80M");

/*if(empty($_SESSION["admin"])) 
{
    echo("please login");
}
else*/
//{    
    $obj_name = $_GET['obj'];
    //$seo_link = $_GET['sub'];
    $sub_domain = SUB_DOMAIN ;
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/'.$sub_domain.'/img_upload/'.$obj_name;  
  
    // object manage uploaded files
    try {
        $log_file = 'log_images';
        $upload_obj = new file_upload_machine($uploaddir, $log_file,true,'');
        
        $new_file_name = 'abc.jpg'; 
        //$ret = $upload_obj->process_upload('');
        
        $ret = $upload_obj->process_upload_v2('',$obj_name);
        
        if ($ret == "OK")
        {
            $file_names = $upload_obj->get_file_names();
            $single_file = $file_names[0];
            
            //echo $single_file;
            echo 'img_upload/'.$obj_name.'/'.$single_file;
        }
        else
        {
            echo "ERROR";
            //print_r($upload_obj->get_file_names());
        }
            
    } 
    catch (Exception $e) {
        echo $e->getMessage(), "\n";
        //echo "error";
    }
    
    /*$helper = new Helper();
        
    $uploaddir = realpath(dirname(__FILE__)).'/../../img_upload/cat_lev1/';

    $file = $uploaddir.basename($_FILES['uploadfile']['name']); 

    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {
          $user = $_SESSION["admin"];
          $submitter_id   = $user["user_id"]; 
          $imgurl = date("YmdHis").$submitter_id;          
          
          //$helper->resize_image(120,120, $file,    $uploaddir."f_".$imgurl.".jpg");
          $helper->resize_image(200,203,$file,$uploaddir."f_".$imgurl.".jpg");
          $return_value  = "f_".$imgurl.".jpg";
          echo($return_value); 
          
        } else {
            echo "error";
        } */
//}
?>