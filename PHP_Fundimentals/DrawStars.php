<?php 
$array = array(4,2,6,8,1);
function drawStars($arr)
{
    $result = array();
    $string = "";
    for($i = 0; $i < count($arr); $i++)
    {
        for($j = 1; $j <= $arr[$i]; $j++)
        {
            array_push($result, "*");
        }
        echo "<p>" . implode($string, $result) . "</p>";
        $string = "";
        $result = array();
    }
}

drawStars($array);
?>