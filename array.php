<!DOCTYPE html>
<html>
<head>
	<title>This is Array in PHP</title>
</head>
<body>
	<h2>Array</h2>
	<?php

	$emp = array("Allha","Ammi", "Papa");

	#echo $emp[0]."<br>";
	#echo $emp[1]."<br>";
	#echo count($emp);   //size of array
	/*for ($i=0; $i < count($emp); $i++) { 
		echo $emp[$i]."<br>";
	}

	#foreach loop
	foreach ($emp as $value) {
		echo $value."<br>";
	}   */
 
	/*$emp = array("Allha" => 99,"Ammi"=>27,"Papa"=>22);   //Associative array
	#ksort($emp);    // key sort 
	asort($emp);		//value ke hisaab se sort krega
	arsort($emp);
	krsort($emp);
	foreach ($emp as $key => $value) {
		echo $key." = ". $value."<br>";
	}*/



	#2-D Array

	$emp = array(
		array("Allha",99,100000000000000000),
		array("Ammi",27,10000000000000000),
		array("Papa",22,100000000000000000)
	);

	echo $emp[1 ][2];
	

	$marks = array(69,85,74,45,48,23);
	#sort($marks);  //sort ascending order
	rsort($marks); // rsort descending order 
	foreach ($marks as $value){
		echo $value." ";
	

	?>

</body>
</html>