<?php
class abstract_statement
{       
    public static $field_names = array();  

    public static function get_list($obj_name)
    {
        $query   = "SELECT * FROM ". $obj_name ." ";                
        //$query  .= " ORDER BY ordering DESC ";
        $query  .= " LIMIT ?, ?";
        //echo($query);
        return $query;   
    }
    
    public static function get_list_with_scope($obj_name,$is_active)
    {
        $query   = "SELECT * FROM ". $obj_name ." ";
        if($obj_name == 'hms_hotel')
            $query  .= "WHERE hotel_id = ? ";//"AND is_active = 1";        
        else                
            $query  .= "WHERE ref_hotel = ? ";//"AND is_active = 1";
        if($is_active != null)
        {
            $query .= "AND is_active = ? ";
        }
        $query  .= " LIMIT ?, ?";
        return $query;   
    }             
   
    public static function get_total($obj_name,$is_active)
    {
        $query = "SELECT Count(*) AS total FROM ". $obj_name ;
        
        if($is_active != null)
        {
            $query .= "WHERE is_active = ? ";
        }
        return $query ;
    }
    
    public static function get_total_with_scope($obj_name)
    {
        $query = "SELECT Count(*) AS total FROM ". $obj_name. " " ;
        
        if($obj_name == 'hms_hotel')
            $query  .= "WHERE hotel_id = ? ";//"AND is_active = 1";        
        else                
            $query  .= "WHERE ref_hotel = ? ";//"AND is_active = 1";
            
        return $query ;
    }
    
    public static function update_record_with_scope($table_name, $field_names,$obj_name,$scope)
    {
        // modifie each item
        //var_dump($field_names);
        for($i = 0; $i < count($field_names); $i++)  
        {
            $field_names[$i] .= " = ?";
        }
        
        // Build Update query
        $query  = "UPDATE ".$table_name." SET ";  
        $query  .= implode(",", $field_names);
        if($obj_name !='hotel')
        {       
            $query  .= " "."WHERE ".$obj_name."_id = ? AND ref_hotel = ".$scope;
        }else{
            $query  .= " "."WHERE ".$obj_name."_id = ? "; 
        }
        return $query; 
    }
    
    public static function delete_record_with_id($table_name,$obj_name)
    {
        $query = "DELETE FROM ".$table_name." WHERE ".$obj_name."_id = ? " ;
        return $query ;
    }
    public static function get_active_list($obj_name)
    {
        $query   = "SELECT * FROM ".$obj_name." ";                
        $query  .= "WHERE is_active = ? ";  //Recheck               
        $query  .= "ORDER BY created_date DESC LIMIT ?, ?";
       
        return $query;
    }
    
    public static function get_detail_by_id($obj_name)
    {
        $query   = "SELECT * FROM ".$obj_name." ";                
        $query  .= "WHERE ".$obj_name."_id = ?";
        return $query;
    }
    
    //Use when table have prefix and id dont have prefix
    public static function get_detail_by_id_v2($table_name,$obj_name)
    {
        $query   = "SELECT * FROM ".$table_name." ";                
        $query  .= "WHERE ".$obj_name."_id = ?";
        return $query;
    }
    
    public static function get_detail_by_link($obj_name)
    {
        $query   = "SELECT * FROM ".$obj_name." ";                
        $query  .= "WHERE ".$obj_name."_seo_link = ?";
        return $query;
    } 
    
    public static function delete_by_id($obj_name)
    {
        $query = "DELETE FROM ".$obj_name." WHERE ".$obj_name."_id = ? " ;
        //echo($query);
        return $query ;
    }
    
    public static function change_status($obj_name)
    {
        $query = "UPDATE ".$obj_name." SET is_active = (NOT is_active) WHERE ".$obj_name."_id = ? " ;
        
        return $query ;
    }
    
    public static function insert($obj_name, $field_names)
    {                    
        $questions_list = array();
        
        for($i = 0; $i < count($field_names); $i++)  
        {
            $questions_list[] = "?";   
        }
        
        $query   = "INSERT INTO ".$obj_name."( ";
        $query   .= implode(",", $field_names);
        $query   .= ") ";
        $query   .= " VALUES( ";          
        $query   .= implode(",", $questions_list);           
        $query   .= " )";

        return $query ;
    }
    
    public static function update_by_id($obj_name, $field_names)
    {
        // modifie each item
        //var_dump($field_names);
        for($i = 0; $i < count($field_names); $i++)  
        {
            $field_names[$i] .= " = ?";
        }
        
        // Build Update query
        $query  = "UPDATE ".$obj_name." SET ";  
        $query  .= implode(",", $field_names);       
        $query  .= " "."WHERE ".$obj_name."_id = ?";
        return $query; 
    }
    
    public static function set_field_name_by_id($obj_name, $field_name)
    {        
        // Build Update query
        $query  = "UPDATE ".$obj_name." SET ";  
        $query  .= $field_name." = ? ";
        $query  .= "WHERE ".$obj_name."_id = ?";   

        return $query; 
    }
    
    public static function get_columns_of_table()
    {
        $query  = "SELECT COLUMN_NAME AS name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 's4u_hms' AND TABLE_NAME = ?"; 
      
        return $query ;
    }
    
    public static function get_total_with_search_content($obj_name,$is_active)
    {
        if($obj_name == 'news')
            $query = "SELECT count(*) AS total FROM ".$obj_name." WHERE  ".$obj_name."_title LIKE CONCAT('%', ? , '%') ";
        else
            $query = "SELECT count(*) AS total FROM ".$obj_name." WHERE  ".$obj_name."_name LIKE CONCAT('%', ? , '%') ";
        if($is_active <> null)
        {
            $query .= "AND is_active = ?";
        }        
        return $query ;
    }
    
    public static function search_by_content($obj_name,$is_active)
    {
        if($obj_name == 'news')
                $query = "SELECT * FROM ".$obj_name." WHERE ".$obj_name."_title LIKE CONCAT('%', ? , '%') ";
        else
        $query = "SELECT * FROM ".$obj_name." WHERE ".$obj_name."_name LIKE CONCAT('%', ? , '%') ";
        if($is_active <> null)
        {
            $query .= "AND is_active = ? ";
        }
        
        $query .= "ORDER BY created_date DESC LIMIT ?,? "; 
        return $query ;
    }
 }
?>