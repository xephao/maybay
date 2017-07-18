<?php
   class cl_user
   {
       function check_user_permission($acl_list,$module_id)
       {
           $number_acl = count($acl_list);
              //echo($number_acl);
           $check_acl  = 0;
           for($i =0; $i < $number_acl ;$i++)
              {
                  $temp_acl = $acl_list[$i];
                  //echo($temp_acl['ref_object']);
                  if($temp_acl['ref_object'] == $module_id)
                  {
                      //echo("OK");
                      $check_acl =$temp_acl['chmod'];
                      break;
                  }
              }
           return $check_acl;
       }
    }
?>
