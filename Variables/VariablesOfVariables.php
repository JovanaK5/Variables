<?php

$male = "John,Smith";//male is variable
$gender = "male";//gender is holding a variable name

echo $gender;
echo $$gender;

$student="John,Smith";
$male="student";
$gender="male";


echo "<br>";
echo $gender."<br>";
echo $$gender."<br>";
echo $$$gender;