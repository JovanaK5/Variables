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