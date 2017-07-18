<?php 
    //echo(realpath(dirname(__FILE__)));
    @session_start();
    @set_time_limit(0);
    @ini_set("memory_limit","80M");    
    define('_ABSPATH_',realpath(dirname(__FILE__)."/../../"));
    define('_PAGE_SIZE_',20);
    include_once(realpath(dirname(__FILE__))."/db_access.php");
    include_once(realpath(dirname(__FILE__))."/db_statement.php");
    include_once(realpath(dirname(__FILE__))."/../my-lib/cl_helper.php");
    include_once(realpath(dirname(__FILE__))."/../my-lib/cl_user.php");
    include_once(realpath(dirname(__FILE__))."/../configs/configuration_data.php");
    include_once("logger.php");                

    // set Time        
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    $helper = new Helper();

    @ini_set('upload_max_filesize','10M');
    @ini_set('default_charset','utf-8');
    @ini_set("magic_quotes_gpc","on");
    @ini_set("allow_url_fopen","on");
    //@ini_set('display_errors','off');
    //error_reporting(0);

    header('Content-Type: text/html; charset=utf-8');
                             
    require (realpath(dirname(__FILE__))."/../smarty/Smarty.class.php");
    $smarty = new Smarty;

    $_SERVER['SERVER_NAME'].='';
    
    $curURL = $helper->get_url_of_current_page();
    
    $pos = strpos($curURL, '/admin'); //Thinking how to avoid hardcode
    if($pos != 0)
    {
            $smarty->template_dir = '../theme/default/';
            $smarty->compile_dir  = '../compile/';
            
    }
    else
    {
            $smarty->template_dir = 'theme/default/';
            $smarty->compile_dir  = 'compile/';
            $smarty->plugins_dir[] = 'inc/smarty/plugins';
    }
    $smarty->compile_check = true;
   
    function get_debugging()
    {
        if(_DEBUG_)
        {
            @ini_set('display_errors',1);
            return true;
        }
        else
        {
            @ini_set('display_errors','off');
            return false;
        }
    }
?>