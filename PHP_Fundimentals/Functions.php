<?php
    

    function AVG($array)
    {
        $sum = 0;
        $avg = 0;
        foreach ($array as $i) 
        {
            $sum += $i;
        }
        $avg = $sum / count($array);
        return $avg;
    }
    $arr = array(5,3,6,2,6,2,3);
    echo "The average of the array is " . AVG($arr);

?>