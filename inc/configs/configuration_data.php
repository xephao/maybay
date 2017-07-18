<?php
    define('_DOMAIN_','http://localhost:8080');
    // define('_DOMAIN_','http://hotelkhanhhoa.vn/');
    define('_SUB_DOMAIN_','maybay');  
    define('_ADMIN_FOLDER_','admin');  
    define('_RECEPTIONIST_FOLDER_','frontend');  
    define('_BOSS_FOLDER_','boss');  
    define('_WEBSITE_NAME_','Vé máy bay'); 
    define('_FRONTEND_TITLE','Công ty TNHH sản xuất phần mềm S4U'); 
    define('_FRONTEND_DESC','Công ty TNHH sản xuất phần mềm S4U, developer, solution,C#, PHP, Java, Nha Trang'); 
    define('_FRONTEND_KEYWORD',''); 
    define('_DB_PREFIX_','s4u_'); 
    define('_TABLE_PREFIX_','hms_'); 
    define('_PREFIX_','hms_'); 
    define('_RUN_MODE_','demo'); 
    //define('_RUN_MODE_','prodution'); 
    
    //For theme 

    // define('_THEME_ADMIN_DIR_','http://hotelkhanhhoa.vn/app/theme/default/admin');

    // define('_THEME_DIR_','http://hotelkhanhhoa.vn/app/theme/default/frontend/web');

    // define('_THEME_RECEPTIONIST_DIR_','http://hotelkhanhhoa.vn/app/theme/default/frontend');

    // define('_THEME_BOSS_DIR_','http://hotelkhanhhoa.vn/app/theme/default/boss');


    define('_THEME_ADMIN_DIR_','http://localhost:8080/maybay/theme/default/admin');
    define('_THEME_DIR_','http://localhost:8080/maybay/theme/default/frontend/web');
    define('_THEME_RECEPTIONIST_DIR_','http://localhost:8080/maybay/theme/default/frontend');
    define('_THEME_BOSS_DIR_','http://localhost:8080/maybay/theme/default/boss');
    
    //For monitor and security 
    define('_IS_DEBUG_',0);
    define('_IS_MEASURE_',0);
    define('_IS_LOG_',0);
    define('_IS_CAPTCHA_',0);
    define('_USE_PREFIX_',1);
    define('_USE_SCOPE_',1);
    define('_RETURN_FORMAT_','str'); //string= echo, json, xml
    
    //Default Code use for code fields if not have the config in system
    define('_TIMEZONE_',+7);
    define('_EXPIRED_TIME_',' +6 month');
    define('_AUTO_CREATE_CODE_',1);
    define('_PREFIX_CODE_ROOM_','ROOM_0');
    define('_PREFIX_CODE_ORDER_','HMS_ORDER_000');
    define('_PREFIX_CODE_BOOKING_','HMS_BOOK_000');
    define('_PREFIX_CODE_CHECKIN_','HMS_CHKIN_000');
    define('_PREFIX_CODE_CHECKOUT_','HMS_CHKOUT_000');
    define('_PREFIX_TRACK_ACT_','TRACK_ACT_000');
    define('_PREFIX_TRANSFER_PERIOD_','TPC_0');
?>
