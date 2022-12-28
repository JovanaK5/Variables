<?php

  //emty variable
$name;
echo $name;
//ternary perator
echo isset($name)?"Variable set" : "Variable not set" ;

$name="John,Smith";
echo isset($name)?"Variable set" : "Variable not set" ;

$firstname="test";
$name=$firstname;
$name="John,Smith";
echo isset($name)?"Variable set" : "Variable not set" ;
