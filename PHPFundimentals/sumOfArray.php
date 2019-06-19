<?php
    $array = array(1, 2, 5, 10, 255, 3);
    $sum = 0;
    foreach($array as $i)
    {
        $sum += $i;
    }
    echo "<h1>The sum of the array is $sum</h1>";
?>