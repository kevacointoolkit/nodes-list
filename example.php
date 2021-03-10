<?php

error_reporting(0);

$file=file_get_contents('ip.txt');


   $data = json_decode($file, true);  
      
 
    // var_dump($json_string); 
    var_dump ($data); 
    // print_r($data);


?>

