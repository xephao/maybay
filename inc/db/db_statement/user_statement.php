<?php
    class user_statement extends abstract_statement
    {       
       public static function get_detail_by_email()
       {
           $query   = "SELECT * FROM user AS u ";                
           $query  .= "LEFT JOIN user_group AS ug ON u.ref_user_group = ug.user_group_id ";                
           $query  .= "WHERE user_email = ? OR user_nickname = ?";
           return $query;
       }            
       
        public static function get_photos_by_user_id()
       {
           $query   = "SELECT * FROM user_photo ";                
           $query  .= "WHERE user_id = ?";
           
           return $query;
       }            

       public static function check_user_email_exists()
       {
           $query   = "SELECT count(*) AS is_existing FROM users ";                
           $query  .= "WHERE user_email = ?";
           
           return $query;
       }            

       public static function check_user_nickname_exists()
       {
           $query   = "SELECT count(*) AS is_existing FROM users ";                
           $query  .= "WHERE user_nickname = ?";
           
           return $query;
       }            
        public static function register()
       {
           $query  = "INSERT INTO users(user_nickname,   user_password, user_email, first_name, last_name) ";           
           $query .= "VALUES(";
           $query .= "?, ?, ?, ?, ?";                                  
           $query .= ")";         
           
            return $query; 
       }     

       // Reset password
       public static function update_password_by_id()
       {
            $query = "UPDATE users SET ";
            $query .= "user_password = ? ";
            $query .= "WHERE user_id = ?";      
           
           return $query; 
       } 

       public static function create_user_from_social_account()
       {
           $query = "INSERT INTO users (user_email,user_nickname,user_password,hybridauth_provider_name,hybridauth_provider_uid) ";
           $query .= "VALUES (?,?,?,?,?)";
           return $query;
       }
       
       public static function get_acl_list()
       {
           $query = "SELECT * FROM hms_acl WHERE ref_user = ? AND is_active = ? ";
           return $query ;
       }
       
       public static function get_hotel_mapping()
       {
           $query = "SELECT * FROM hms_mapping WHERE ref_user = ? AND is_active = ? LIMIT 0, 1" ;
           return $query;
       }
       
       public static function update_login_timestamp()
       {
           $query = "UPDATE user SET latest_login = ? WHERE user_id = ? " ; 
           return $query ;
       }
       
       public static function get_list_with_all_related()
       {
           $query =  "SELECT * FROM user AS u ";
           $query .= "LEFT JOIN hms_user_group AS ug ON u.ref_user_group = ug.user_group_id";
           return $query ;
       }
       
       public static function get_user_detail()
       {
           $query = "SELECT * FROM user WHERE user_id = ? ";
           return $query ;
       }
       
       public static function reset_password()
       {
           $query = "UPDATE user SET user_password = ? WHERE user_id = ? " ;            
           return  $query ;
       }
       
       public static function active_user_for_hotel()
       {
           $query = "INSERT INTO hms_mapping(ref_user,ref_hotel,created_by,created_date,modified_by,modified_date,is_active) ";
           $query .= "VALUES(?,?,?,?,?,?,?)";
           return $query;
       } 
       public static function get_list_user_with_all_related_of_hotel()
       {
           $query =  "SELECT * FROM user AS u ";
           $query .= "LEFT JOIN hms_user_group AS ug ON u.ref_user_group = ug.user_group_id ";
           $query .= "LEFT JOIN hms_mapping AS m ON u.user_id = m.ref_user ";
           $query .= "WHERE m.ref_hotel = ? ";
           
           echo($query);
           return $query;
       }       
    }
?>
