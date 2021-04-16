<?php

////////////////////////////////
   #function call by value
///////////////////////////////
/*function testing($string)          # $string
{
	$string = "And something extra.";
}

$str = "This is a string";
testing($str);

echo $str;


///////////////////////////////////
    #function call by reference
//////////////////////////////////
function testing(&$string)         # &$string
{
	$string .= " And something extra.";  # concadenate se dono reference print ho jate hai
}

$str = "This is a string,";
testing($str);

echo $str;

*/

function first($num)
{
	$num += 5;
}

function second(&$num)
{
	$num += 7;
}


$number = 10;

first($number);

echo "Original Value is $number<br>";

second($number);

echo "Original reference is $number<br>";

?>