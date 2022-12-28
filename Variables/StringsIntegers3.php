<!DOCTYPE html>
<html>
<head>
	
	<title>Variable and constants</title>
</head>
<body>

<h1>Define Strings</h1>

	<?php
		$name="John,Smith";
		$message="This is a String Message"."<br>";
		echo $name .":". $message;
		echo "$name:$message";
	?>

<h1> Define Integers</h1>
<?php
	$version=7.0;
	echo "PHP version is $version";
?>


<h1>Combine String and Integer</h1>

 <?php
echo "$name:$message<br>";
echo "name:$name<br>";
$language="PHP";
echo "$language version is $version";

 ?>

 <h1>Add two values</h1>

 <?php

 	$firstvalue=10;
 	$secondvalue=20;
 	$total=$firstvalue + $secondvalue;

 	echo "Total: $total";
 ?>



</body>
</html>