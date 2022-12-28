<?php


 //sample1
 global $message;
 $message="welcome to php";
 echo $GLOBALS['message']."<br>";

 //sample2
 echo"Filename:".$_SERVER['PHP_SELF'];