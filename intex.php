<?php 

	define('NAME','Pepa');
	
	$name = 'Ales';
	$age = 30;

	$stringOne = 'string one';
	$stringTwo = 'string two';

	$strings = $stringOne.' and '.$stringTwo;
	echo $strings;
	echo 'My name is '.$stringOne;

	echo "double quotes $name";
	echo "double quotes $name \" test\" ";

	echo $name[0];

	echo strlen($name);
	echo strtoupper($name);
	echo strtolower($name);

	echo str_replace('l','X',$name);

	$radius = 25;
	$pi = 3.14;

	echo gettype($pi);
	echo gettype($radius);

	$base = 2;
$exponent = 3;
$result = $base ** 2;
echo $result;  
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php 

	echo 'my name is', $name;
		echo 'my age is', $age;

?></h1>

<h5><?php 

	echo 'my age is', $age;

?></h5>
<h5><?php 

	echo 'from define', NAME;

?></h5>
</body>
</html>
