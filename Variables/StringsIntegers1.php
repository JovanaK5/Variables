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

</body>
</html>