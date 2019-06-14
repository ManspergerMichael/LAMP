<?php
//foreach loops only work on arrays
//this loop iterates through the array, and prints each position of the array and the value in the element
    echo "<h3> Array iteration with key value pair</h3>";
    $x = array(1,3,5,7);
    foreach($x as $key => $value)
    {
      echo $key . " - " . $value ."<br />";
    } 

    echo "<h3>Array iteration with array value</h3>";
    $x = array(1,3,5,7);
    foreach($x as $value)
    {
        echo $value ."<br />";
    }

    echo "<h3>Key-Value iteration with associtive array</h3>";
    $x = array("hi" => "Dojo", "awesome" => "game");
    foreach($x as $key => $value)
    {
    echo $key . " - " . $value ."<br />";
    }

    echo "<h3>Iteration of accositive array with only value printed</h3>";
    $x = array("hi" => "Dojo", "awesome" => "game");
    foreach($x as $key => $value)
    {
    echo $value ."<br />";
    }

    echo "<h3>Iteration of 2D array with key value</h3>";
    $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
    foreach($x as $key => $value)
    {
        echo "Key is {$key}.";
        echo "var_dumping value: ";
        var_dump($value);
        echo "<br>";
    }


?>