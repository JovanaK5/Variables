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

global $message;
$message="welcome to php";

function print_message(){
  echo $message;
}print_message();
echo $message;
