<?php
    $array = array(1, 2, 5, 10, 255, 3);
    $sum = 0;
    $average = 0;
    foreach($array as $i)
    {
        $sum += $i;
    }
    $average = $sum / count($array) ;
    echo "<h1>The average of the array is $average</h1>";
?>