<?php 
$array = array(1,4,8,8);

function MultipleOf5($arr)
{
   for($i = 0; $i < count($arr); $i++)
   {
       $arr[$i] = $arr[$i] * 5;
   }

   echo "<p>Multiple of 5 result</p> <ul>";

   foreach ($arr as $key) 
   {
        echo "<li>$key</li>";
   }
   echo "</ul>";

}

MultipleOf5($array);

?>