<?php

/*function fun($fname='First',$lname="Last")
{
	$v = "$fname $lname";

	return $v;
}


$name = fun("Hey","Google");

echo "Hello $name";    */


function sum($eng,$sci,$maths)
{
	
	$v = $eng + $sci + $maths;

	return $v;
}

function percentage($st)
{
	$s = $st / 3;
	echo $s."%";
}
$total = sum(33,22,11);

percentage($total);


?>