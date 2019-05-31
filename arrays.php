<?php
$arrayOne = array(4,'poop',true);
//or
$arrayTwo = [];

//var dump displays information about the variable
var_dump($arrayOne);

//push
array_push($arrayOne, "pee");
echo "<br>$arrayOne[3]<br>";

echo "Associtive arrays (dictionary, map, ect.)<br>";
//array(key => value)
$dict = array("Moby" => "Dick", "Life" => 42);
echo "The meaning of life is " .$dict["Life"];


?>