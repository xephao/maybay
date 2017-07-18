<?php      
    include_once("logger.php");                

    // include once in database access layer                          
   class db_access
   {
        //property declaration
        private $mysqli;
        private $err_no = 0;
        private $err_msg = "";
        private $last_insert_id = -1;
                       
        //method declaration         
        public function open_connection() 
        {               
            
            //$this->mysqli = new mysqli("localhost","root","nothing","phucbinhland");
            $this->mysqli = new mysqli("localhost","root","","phucbinhland");
            //$this->mysqli = new mysqli("localhost","xephaoma_project","nothing110","xephaoma_hotel");
            //$this->mysqli = new mysqli("localhost","twonhat1_admin","nothing11083A@","twonhat1_smallshop");
            if (mysqli_connect_errno()) { 
                
                if(($_GET['debug'])&&($_GET['debug'] == 1))
                $msg = sprintf("Wrong DB connection: %s - %s\n",mysqli_connect_errno(), mysqli_connect_error()); 
                else
                    $msg = 'Database connection failed.';
                
                // write_log information here
                $this->err_no = mysqli_connect_errno();
                $this->err_msg = mysqli_connect_error();
                                
                $logger = new Logger();
                $logger->write_log($msg);
                
                return;
            }   
        }
                            
        public function close_connection(){
            
            $this->mysqli->close();
        }           
        
        public function get_data($sql_cmd, $input)
        {    
            $result = null;             
            
            if (mysqli_connect_errno()) {
                
                return;
            } 
            
            // Directive to get data as UTF8 characters
            $utf_formatter = $this->mysqli->prepare("SET NAMES utf8");            
            $utf_formatter->execute(); 
            // End UTF Directive
                    
            if ($stmt = $this->mysqli->prepare($sql_cmd)) { 
                
                $this->bindVars($stmt,$input);
                
                $stmt->execute(); 
                
                // Write log message
                /*echo $this->err_msg;
                $this->err_no = $this->mysqli->errno;
                $this->err_msg = $this->mysqli->error;
                
                if ($this->err_no) { 
                    
                    $msg = sprintf("Error: %s - %s\n",$this->err_no, $this->err_msg);                 
                                    
                    $logger = new Logger();
                    $logger->write_log($msg);
                    
                    return;
                } */
                // end write log
                
                $meta = $stmt->result_metadata(); 
                
                while ($field = $meta->fetch_field()) 
                { 
                    $params[] = &$row[$field->name]; 
                } 
                                                                        
                call_user_func_array(array($stmt, 'bind_result'), $params); 
                
                while ($stmt->fetch()) { 
                    foreach($row as $key => $val) 
                    { 
                        $c[$key] = $val; 
                    } 
                    $result[] = $c; 
                } 
                
                $stmt->close(); 
            } 
            
            return $result; 
        }                         
        
   private function bindVars($stmt,$params) 
   {            
        if ($params != null) {
            $types = '';                        //initial sting with types
        
            foreach($params as $param) {        //for each element, determine type and add
                if(is_int($param)) {
                    $types .= 'i';              //integer
                } elseif (is_float($param)) {
                    $types .= 'd';              //double
                } elseif (is_string($param)) {
                    $types .= 's';              //string
                } else {
                    $types .= 'b';              //blob and unknown
                }
            }
     
            $bind_names[] = $types;             //first param needed is the type string
                                                // eg:  'issss'
     
            for ($i=0; $i<count($params);$i++) {//go through incoming params and added em to array
                $bind_name = 'bind' . $i;       //give them an arbitrary name
                $$bind_name = $params[$i];      //add the parameter to the variable variable
                $bind_names[] = &$$bind_name;   //now associate the variable as an element in an array
            }
     
                                                //call the function bind_param with dynamic params
           
            call_user_func_array(array($stmt,'bind_param'),$bind_names);
        }
        return $stmt;                           //return the bound statement 
    }
        
    public function get_error_no()
    {
        return $this->err_no;
    }
    
    public function get_error_msg()
    {
        return $this->err_msg;
    }
    
    public function get_last_insert_id()
    {
        return $this->last_insert_id;
    }
    
    public function execute_data($sql_cmd, $input)
    {     
        $error_code = 0;
        
        $result = null;
        
        if (mysqli_connect_errno()) { 
            
            return;
        } 
                
        // Directive to get data as UTF8 characters
        $utf_formatter = $this->mysqli->prepare("SET NAMES utf8");            
        $utf_formatter->execute(); 
                        
        // End UTF Directive
        if ($stmt = $this->mysqli->prepare($sql_cmd)) { 
            
            $this->bindVars($stmt,$input);
            
            $stmt->execute();  
            
            $this->err_no = $this->mysqli->errno;
            $this->err_msg = $this->mysqli->error;   
            
            $result = $this->mysqli->affected_rows;         
            
            if ($this->err_no) { 
                
                $msg = sprintf("Error: %s - %s\n",$this->err_no, $this->err_msg);                 
                                
                $logger = new Logger();
                $logger->write_log($msg);
                
                return;
            }
            else
            {
                //echo("CMD".$sql_cmd);
                /*$params[] = null;
                $last_id = $this->get_data("SELECT LAST_INSERT_ID() AS LAST_ID",$params);
                $this->last_insert_id = $last_id[0]['LAST_ID'];*/ 
                if(strpos($sql_cmd, 'INSERT') !== false)
                {
                     //$params = null;
                     //$last_id = $this->get_data("SELECT LAST_INSERT_ID() AS LAST_ID",$params);
                     $this->last_insert_id = $this->mysqli->insert_id ;//$last_id[0]['LAST_ID'];
                }              
            } 
                        
            $stmt->close();             
        }             
        
        return $result; 
    }
    
    /*Start INS 11092015*/
    public function set_status_auto_commit($status = TRUE)
    {
       mysqli_autocommit($this->mysqli,$status); 
    }
    
    public function commit()
    {
        mysqli_commit($this->mysqli);
    }
    
    public function rollback()
    {
        mysqli_rollback($this->mysqli);
    }
    /*End INS 11092015*/
    public function get_latest_id()
    {
        return $this->last_insert_id;
    }              
   }
?>
