<?php


 //sample1
 global $message;
 $message="welcome to php";
 echo $GLOBALS['message']."<br>";

 //sample2
 echo"Filename:".$_SERVER['PHP_SELF'];

 //sample3
 global $name;
 $name="John,Smith";

 function print_name(){
    echo $GLOBALS['name'];
 }

 print_name();