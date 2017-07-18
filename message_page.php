<?php 

include_once(dirname(__FILE__)."/inc/db/db_access.php");
include_once(dirname(__FILE__)."/inc/db/db_statement.php");
include_once(dirname(__FILE__)."/inc/configs/configuration_data.php");
include_once(dirname(__FILE__)."/inc/my-lib/cl_cart.php");
//include_once(dirname(__FILE__)."/inc/func/cl_language_helper.php");
//include_once(dirname(__FILE__)."/inc/func/cl_security_helper.php");

include_once(dirname(__FILE__)."/inc/my-lib/cl_helper.php");
//include_once(dirname(__FILE__)."/inc/func/mp_mailer.class.php");

include_once(dirname(__FILE__)."/bo/abstract_bo.php");
include_once(dirname(__FILE__)."/bo/config_bo.php");
include_once(dirname(__FILE__)."/bo/user_bo.php");




//include_once(dirname(__FILE__)."/frontend/place/homepage.php");
require (realpath(dirname(__FILE__))."/inc/smarty/Smarty.class.php");

$is_measure = 0; 
$is_debug = 0;
/*********************/
if($is_measure == 1)
{
    //Only use in debug mode
    //start measure time execute code
    $mtime = microtime(true);
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    $starttime = $mtime;
    $start_time = gmdate("Y-m-d H:i:s", time() + 3600*($timezone+date("0")));
}
/*******************/
//Define constant
define ("_SERVER_URL_",_DOMAIN_.'/'._SUB_DOMAIN_);
$server_url = _SERVER_URL_;
//$image_url  = 'http://localhost/images/business';
$image_url  = _SERVER_URL_.'/img_upload/place';

$adv_image_url  = _SERVER_URL_.'/img_upload';

$theme_dir      = _THEME_DIR_;
/*Define all variable*/
$cl_helper         =     new Helper();
//$browser_type      =     null ;
//$config_list       =      new array();


/*Setup Connection db*/
$conn            =      new db_access();
$conn->open_connection();

/*Setup folder theme and compile for FW smarty can run */
$smarty         =   $cl_helper->init_smarty('../estate/theme/default/','../estate/compile/');

/*Get browser type - let site know client connect is web, mobile or smartphone*/
$browser_type   =   $cl_helper->detect_browser_type();
$browser_type     = 'web';


/*Init Config object using in all page*/
$config_bo        =   new config_bo($conn,'config');
$config_data    =   $config_bo->get_active_list(1,0,100);
//$cl_helper->set_config_value($config_data);

//$helper->set_config_value($config_list);
$cl_helper->initial_site_config( );

//Get cart info from SESSION 
//include_once(dirname(__FILE__)."/frontend/cart/get_cart_info.php");
 
//Set language for user 
$cur_language = null;
//Get browser language
$br_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//Check language select by user
if((isset($_SESSION['language'])) || (!empty($_SESSION['language'])))
{
    $cur_language = $_SESSION['language'];
}
else
{
    $cur_language = $br_lang;
}
$lang_folder = "/languages/";
$lang_file   = $lang_folder. $cur_language. "/text.php";
include(dirname(__FILE__).$lang_file);

/*function l($t)
{
    global $_text;
    if(array_key_exists($t,$_text)) return $_text[$t];
    else return $t;
}*/

$cur_mod = "";
$cur_act = "";

if(isset($_GET['mod']))
    $cur_mod = $_GET['mod'];
if(isset($_GET['act']))
    $cur_act = $_GET['act'];
    
$smarty->assign("cur_mod",$cur_mod);
$smarty->assign("cur_act",$cur_act);
$smarty->assign("theme_dir",$theme_dir);
$smarty->assign("server_url",$server_url);

/*Final step after colect all data. Base on browser type to call exactly UI screen*/
if($is_measure == 1)
{
        $mtime = microtime(true);
        $mtime = explode(" ",$mtime);
        $mtime = $mtime[1] + $mtime[0];
        $endtime = $mtime;
        $end_time = gmdate("Y-m-d H:i:s", time() + 3600*($timezone+date("0"))); 
        $totaltime = ($endtime - $starttime);
        //$duration  = date("H:i:s", $totaltime);
        $str_time    = "Time1 = ". $start_time ." - time2 ".$end_time;
        $smarty->assign("total_time",$totaltime );
}

if($browser_type == 'web')
{
    $smarty->display('frontend/'.$browser_type.'/pages/displayMessage.tpl');
}
if($browser_type == 'smartphone')
{
    $smarty->display('frontend/'.$browser_type.'/pages/displayMessage.tpl');
}
if($browser_type == 'mobile')
{
    $smarty->display('frontend/'.$browser_type.'/pages/displayMessage.tpl');
}

?>


