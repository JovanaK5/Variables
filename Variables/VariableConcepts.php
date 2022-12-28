<?php

  //define a variable
  $name = "John,Smith";

  //variables can be used as string and integers
  $message = 1;
  $message = "php is the best";
  echo $message . "<br>";

  //print variables with double quotes
  echo "name variable = $name" . "<br>";
  echo 'name variable = $name' . "<br>";

  //variable typing
  $lenght = 10;
  $breath = "20";
  $area = $lenght * $breath;
  echo "area: $area". "<br>";

  //variable is case sensitive
  $Name = "Walter White";
  echo "$name is not equal to $Name". "<br>";

  //variable scope
  $counter = 1;
  function show_counter(){
  	$counter = 2;
  	echo $counter;
  }
  show_counter();
  echo $counter . "<br>";


  //global variables
    global $count;
    $count = 1;
  function show_count(){
  	global $count;
  	$count = 2;
  	echo $count;
  }
  show_count();
  echo $count . "<br>";


  //static variable
  function counter_static(){
  	static $count = 1;
  	echo $count . "<br>";
  	$count = $count + 1;
  }
  counter_static() . "<br>";
  counter_static() . "<br>";
  counter_static() . "<br>";

  //predefined variables
  function print_global_variables(){
  	echo $GLOBALS['count'] . "<br>";
  }
  print_global_variables() . "<br>";

  //variable of variables
  $countofgcount = "count";
  echo $$countofcount;

  //isset function
  echo isset($$countofcount) ? "variable is set" : "variable is not set";




