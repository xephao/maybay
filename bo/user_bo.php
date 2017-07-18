<?php

class user_bo extends abstract_bo
{

    public function get_detail_by_email($email)
    {            
        $params[] = $email;   
        $params[] = $email;  
        
        $result  = $this->commander->get_data(user_statement::get_detail_by_email(),$params);   
                
         return $result[0];
    }    
    
    public function get_photos_by_user_id($user_id)
    {            
        $params[] = $user_id;   
        $result  = $this->commander->get_data(user_statement::get_photos_by_user_id(),$params);                              
                
         return $result;
    }        
    
    public function check_user_email_exists($user_email)
    {            
        $params[] = $user_email;   
        
        $result  = $this->commander->get_data(user_statement::check_user_email_exists(),$params);   
                
         return $result[0]['is_existing'];
    }          
    
    public function check_user_nickname_exists($user_nickname)
    {            
        $params[] = $user_nickname;   
        
        $result  = $this->commander->get_data(user_statement::check_user_nickname_exists(),$params);   
                
        return $result[0]['is_existing'];
    }          

    public function update_password_by_id($user_password, $user_id)
    {            
        $params[] = $user_password;   
        $params[] = $user_id;   
        
        $result  = $this->commander->execute_data(user_statement::update_password_by_id(),$params);                              
                
        return $result;
    }
    
    public function create_user_from_social_account($user_email,$nickname,$password,$provider_name,$provider_uid)
    {
        $params[]  = $user_email;
        $params[]  = $nickname;
        $params[]  = $password;
        $params[]  = $provider_name;
        $params[]  = $provider_uid;
        
        $result  = $this->commander->execute_data(user_statement::create_user_from_social_account(),$params);                              
        return $result;
    }
    
    public function get_acl_list($user_id,$active)
    {
        $params[]  = $user_id;
        $params[]  = $active;
        
        $result  = $this->commander->get_data(user_statement::get_acl_list(),$params);                              
        return $result;
    }
    
    public function get_hotel_mapping($user_id,$active)
    {
        $params[]  = $user_id;
        $params[]  = $active;
        
        $result  = $this->commander->get_data(user_statement::get_hotel_mapping(),$params);                              
        return $result[0];
    }
    
    public function update_login_timestamp($latest_login,$user_id)
    {
        $params[]  = $latest_login;
        $params[]  = $user_id;
        $result  = $this->commander->execute_data(user_statement::update_login_timestamp(),$params);                              
        return $result; 
    }
    
    public function get_list_with_all_related()
    {
        $params     = null;
        $result     = $this->commander->get_data(user_statement::get_list_with_all_related(),$params);                              
        return $result;
    } 
    
    public function get_list_user_with_all_related_of_hotel($hotel_id)
    {
        $params[]     = $hotel_id;
        $result     = $this->commander->get_data(user_statement::get_list_user_with_all_related_of_hotel(),$params);                              
        return $result;
    }
    
    public function get_user_detail($id)
    {
        $params[]     = $id;
        $result     = $this->commander->get_data(user_statement::get_user_detail(),$params);                              
        return $result[0];
    }
    
    public function reset_password($user_password,$user_id)
    {
        $params[]     = $user_password;
        $params[]     = $user_id;
        $result     = $this->commander->execute_data(user_statement::reset_password(),$params);
        return $result;
    } 
    
    public function active_user_for_hotel($user_id,$hotel_id,$created_by,$created_date,$modified_by,$modified_date,$is_active)
    {
        $params[]     = $user_id;
        $params[]     = $hotel_id;
        $params[]     = $created_by;
        $params[]     = $created_date;
        $params[]     = $modified_by;
        $params[]     = $modified_date;
        $params[]     = $is_active;
        $result     = $this->commander->execute_data(user_statement::active_user_for_hotel(),$params);
        return $result;
    }
      
}
?>