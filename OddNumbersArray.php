<?php
    $odds = array();
    for($i = 0; $i <= 20000; $i ++)
    {
        if($i % 2 != 0)
        {
            array_push($odds, $i);
        }
    }
    foreach ($odds as $i) 
    {
        echo "<p>$i</p>";
    }  
?>