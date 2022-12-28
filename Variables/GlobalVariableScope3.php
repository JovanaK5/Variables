<?php

  //sample1

 global $name;
 $name="Srini";
function print_name(){
	$name="php";
	echo $name;
}
print_name();
echo $name;


//sample2

global $message1;
$message11="welcome to php";

function print_message1(){
  echo $message1;
}print_message1();
echo $message1;


//sample3
global $message2;
$message2="welcome to php";

function print_message2(){
  global $message2;
  echo $message2;
}print_message2();
echo $message2;


