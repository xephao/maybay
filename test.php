<?php
$str = htmlentities('<b>freetuts.net</b>');
  
echo 'Entity: ' . $str . '<br/>';
echo 'Decode: ' . html_entity_decode($str);
  phpinfo();
?>
