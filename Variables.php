<?php
//variable names are declared with $name
$first_name = "Michael";

echo "$first_name <br>";
//STRINGS-------

//string concatination with .
echo "My name is " . $first_name . ".<br>";
//or not
echo "$first_name don't need . for concatination<br>";
//double quotes are for strings that need variables and special charactors
//single quotes are read literaly

//NUMBERS------
$a = 10;
$sum = $a + 100;
echo "Some basic math: $sum <br>";

//php automaticly convrst int to float
$b = 10;
$c = 12.5;
$sum2 = $b + $c;
//strings don't do math
echo "int to float convrsion $sum2<br>";

//booleans
$d = true;
$e = false;


?>