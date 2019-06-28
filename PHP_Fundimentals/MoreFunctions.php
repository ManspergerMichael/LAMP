<?php 
$array = array(1,4,8,8);

function MultipleOf5($arr)
{
   for($i = 0; $i < count($arr); $i++)
   {
       $arr[$i] = $arr[$i] * 5;
   }

   echo "<h3>Multiples of 5</h3> <ul>";

   foreach ($arr as $key) 
   {
        echo "<li>$key</li>";
   }
   echo "</ul>";

}

function  MultipleOfX($arr, $num)
{
    for($i = 0; $i < count($arr); $i++)
   {
       $arr[$i] = $arr[$i] * $num;
   }
   echo "<h3>Multiples of X</h3> <ul>";

   foreach ($arr as $key) 
   {
        echo "<li>$key</li>";
   }
   echo "</ul>";
}

function printArray($arr)
{
    echo "<h3>Print Array</h3><ul>";
    foreach($arr as $key)
    {
        echo "<li>$key</li>";
    }
    echo "</ul>";
}

MultipleOf5($array);
MultipleOfX($array, 2);

printArray($array);
?>