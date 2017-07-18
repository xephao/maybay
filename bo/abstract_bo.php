<?php
/*`config_id`, `config_name`, `config_value`, `config_description`, `ordering`, `is_active`*/
class abstract_bo
{
    protected $commander;                        
    protected $obj_name;                        
    protected $sql_cmd = "";                        
    protected $field_names = null;                        
    protected $params = null;                        
    protected $result = null;                        
    protected $debug_mode = false;                        

    public function __construct($conn, $table_name)
    {
        $this->commander = $conn;
        $this->obj_name  = $table_name;
    }
    
    public function get_list($from = 0, $size = 100)
    {            
        $params[] = $from;               
        $params[] = $size;               
        
        $result  = $this->commander->get_data(abstract_statement::get_list($this->obj_name),$params); 
        // debug mode 
        $this->sql_cmd = abstract_statement::get_list($this->obj_name);                            
                
        return $result;
    } 
    
    public function get_list_with_scope($scope_id,$is_active = null, $from = 0, $size = 100)
    {            
        $params[] = $scope_id;
        if($is_active != null)
        {
           $params[] = $is_active; 
        }               
        $params[] = $from;               
        $params[] = $size;               
        
        $result  = $this->commander->get_data(abstract_statement::get_list_with_scope($this->obj_name,$is_active),$params); 
        // debug mode 
        $this->sql_cmd = abstract_statement::get_list($this->obj_name);                            
                
        return $result;
    }
    
    public function get_total($is_active = null)
    {
        $params = null;
        if($is_active != null ){
           $params[] = $is_active; 
        }
        $result  = $this->commander->get_data(abstract_statement::get_total($this->obj_name,$is_active),$params); 
        
        return $result[0];
    } 
    
    public function get_total_with_scope($scope_id)
    {
        $params[] = $scope_id;
        $result  = $this->commander->get_data(abstract_statement::get_total_with_scope($this->obj_name),$params); 
        
        return $result[0];
    } 
    
    public function delete_record_with_id($obj_name,$obj_id)
    {            
        $params[] = $obj_id;   
        
        $result  = $this->commander->execute_data(abstract_statement::delete_record_with_id($this->obj_name,$obj_name),$params);
        
        // debug mode 
        $this->sql_cmd = abstract_statement::delete_record_with_id($this->obj_name,$obj_name);                              

        return $result;
    }
    
    public function create_record($field_names, $values)
    {            
        $params = $values;  
                
        $result  = $this->commander->execute_data(abstract_statement::insert($this->obj_name, $field_names),$params);     
        
        // debug mode
        /* abstract_statement::insert($obj, $field_names);  
         
         $this->sql_cmd = abstract_statement::insert($obj, $field_names);                         
         $this->field_names = $field_names;                         
         $this->params = $params;                         
         $this->result = $result;*/                         
                
         return $result;
    }
    
    public function get_record_detail($obj_name,$obj_id)
    {            
        $params[] = $obj_id;   
        
        $result  = $this->commander->get_data(abstract_statement::get_detail_by_id_v2($this->obj_name,$obj_name),$params);  
        
        // debug mode 
        $this->sql_cmd = abstract_statement::get_detail_by_id($this->obj_name);                          
                
        return $result[0];
    }
    
    public function update_record_with_scope($field_names, $values,$obj_name,$scope_id)
    {            
        $params = $values;  
                
        $result  = $this->commander->execute_data(abstract_statement::update_record_with_scope($this->obj_name, $field_names,$obj_name,$scope_id),$params);   
        
        // debug mode
        //abstract_statement::update_record_with_scope($this->obj_name, $field_names,$obj_name,$scope_id);    
        
        //$this->sql_cmd = abstract_statement::update_record_with_scope($this->obj_name, $field_names,$obj_name,$scope_id);                       
                
        return $result;
    }

    public function get_list_v2($from = 0, $size = 100)
    {            
        $params[] = $from;               
        $params[] = $size;               
        $result  = $this->commander->get_data(abstract_statement::get_list($this->obj_name),$params); 
        // debug mode 
        $this->sql_cmd = abstract_statement::get_list($this->obj_name);                            
                
        return $result;
    }
    public function get_total_with_search_content($obj_name,$search_value,$is_active =  null)
    {
          $params[] = $search_value;
          if($is_active <> null)
            $params[] = $is_active;
          
          $result  = $this->commander->get_data(abstract_statement::get_total_with_search_content($obj_name,$is_active),$params);
          return $result[0];
      }
      
    public function search_by_content($obj_name,$search_value,$is_active,$from,$size)
    {
          $params[] = $search_value ;
          if($is_active <> null)
            $params[] = $is_active;
          $params[] = $from;
          $params[] = $size;
          
          $result  = $this->commander->get_data(abstract_statement::search_by_content($obj_name,$is_active),$params);
          return $result;
    }
    
    public function get_active_list($obj = 'product', $is_active, $from = 0, $size = 100)
    {
        $params[] = $is_active;               
        $params[] = $from;               
        $params[] = $size;               
        
        $result  = $this->commander->get_data(abstract_statement::get_active_list($obj),$params); 
        // debug mode 
        $this->sql_cmd = abstract_statement::get_list($obj);                            
                
        return $result;
    }
    public function get_detail_by_id($obj_id)
    {            
        $params[] = $obj_id;   
        
        $result  = $this->commander->get_data(abstract_statement::get_detail_by_id($obj),$params);  
        
        // debug mode 
        $this->sql_cmd = abstract_statement::get_detail_by_id($obj);                          
                
        return $result[0];
    }      
    
    public function get_detail_by_link($obj, $obj_id)
    {
        $params[] = $obj_id;   
        
        $result  = $this->commander->get_data(abstract_statement::get_detail_by_link($obj),$params);  
        
        // debug mode 
        $this->sql_cmd = abstract_statement::get_detail_by_link($obj);                          
                
         return $result[0];
    }      
    
    public function delete_by_id($obj , $obj_id)
    {            
        $params[] = $obj_id;   
        
        $result  = $this->commander->execute_data(abstract_statement::delete_by_id($obj),$params);
        
        // debug mode 
        $this->sql_cmd = abstract_statement::delete_by_id($obj);                              

        return $result;
    }     
    
     public function change_status($obj, $obj_id)
     {
         $params[] = $obj_id;
         
         $result   = $this->commander->execute_data(abstract_statement::change_status($obj),$params); 
         
         // debug mode
         abstract_statement::change_status($obj);
         
         $this->sql_cmd = abstract_statement::change_status($obj);
         //echo("Result".$result);
         //$this->view_debug_info();
         return $result; 
     } 
     
     ///
    public function insert($obj = 'config', $field_names, $values)
    {            
        $params = $values;  
                
        $result  = $this->commander->execute_data(abstract_statement::insert($obj, $field_names),$params);     
        
        // debug mode
        /* abstract_statement::insert($obj, $field_names);  
         
         $this->sql_cmd = abstract_statement::insert($obj, $field_names);                         
         $this->field_names = $field_names;                         
         $this->params = $params;                         
         $this->result = $result;*/                         
                
         return $result;
    }  
    
    public function update_by_id($obj = 'config', $field_names, $values)
    {            
        $params = $values;  
                
        $result  = $this->commander->execute_data(abstract_statement::update_by_id($obj, $field_names),$params);   
        
        // debug mode
        abstract_statement::update_by_id($obj, $field_names);    
        
        $this->sql_cmd = abstract_statement::update_by_id($obj, $field_names);                       
                
        return $result;
    }        
    
    // Set value by field name of a table/object
    // obj: table name
    // field name: want to set value, example 'config_name'
    // list of values passing, it contains two values: value name AND key value
    public function set_field_name_by_id($obj = 'config', $field_name, $field_value, $obj_id)
    {          
        $params[] = $field_value;  
        $params[] = $obj_id; 
             
        $result  = $this->commander->execute_data(abstract_statement::set_field_name_by_id($obj, $field_name),$params);  
        
        $this->sql_cmd = abstract_statement::set_field_name_by_id($obj, $field_name);                        
                
        return $result;
    }    
    
    public function get_debug_mode()
    {
        return $this->debug_mode;
    }
    
    public function set_debug_mode($mode)
    {
        $this->debug_mode = $mode;
    }
    
    public function get_sql_cmd()
    {
        return $this->sql_cmd;
    }
    
    public function get_columns_of_table()
    {
        $array_columns   = array();
        $params[]       = $this->obj_name;
        $list  = $this->commander->get_data(abstract_statement::get_columns_of_table(),$params);
        
        for($i = 0; $i< count($list); $i++)
        {
           $array_columns[] = $list[$i]['name']; 
            }
         return $array_columns;    
    }
    
    //Remove column not need
    public function exclude_columns($source_array, $exclude_fields)
    {
        $product_columns = $source_array;
        for($i = 0; $i<count($exclude_fields);$i++)
        {
             //echo($del_val[$i]);
             $del_item =  $exclude_fields[$i];
             if(($key = array_search($del_item, $product_columns)) !== false) {
                unset($product_columns[$key]);
                }
             }
        //Re index column     
        $product_columns = array_values($product_columns);
         
        return $product_columns;
    }
    public function insert_v2($obj_name,$field_names, $values)
    {            
        $params = $values;  
        
        $result  = $this->commander->execute_data(abstract_statement::insert($obj_name, $field_names),$params);     
        return $result;
    }  
    public function view_debug_info()
    {
        echo '<br>==== START DEBUGGING INFORMATION ====';
        //echo '<br>obj_name = '; print_r('product_photo');
        echo '<br>field names = ';print_r($this->field_names);
        echo '<br>values = '; print_r($this->params);
        echo '<br>SQL comand = '; echo $this->sql_cmd;
        echo '<br>Command Result = '; echo $this->result;
        
        echo '<br>==== END DEBUGGING INFORMATION ====';
                
    }             
}
?>