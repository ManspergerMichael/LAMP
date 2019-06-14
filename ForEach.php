<?php
//foreach loops only work on arrays
//this loop iterates through the array, and prints each position of the array and the value in the element
    $x = array(1,3,5,7);
    foreach($x as $key => $value)
    {
      echo $key . " - " . $value ."<br />";
    } 
?>