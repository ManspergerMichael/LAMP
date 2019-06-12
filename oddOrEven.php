<?php
    for($i=0;$i<=20000;$i++)
    {
        if($i % 2 == 0)
        {
            echo "<p>Number is $i. This is an even number</p>";
        }
        elseif ($i % 2 != 0) {
            echo "<p>Number is $i. This is an odd number</p>";
        }
    }
?>