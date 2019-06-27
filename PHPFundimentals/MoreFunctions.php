<?php 
$array = array(1,4,8,8);

function MultipleOf5($arr)
{
   foreach ($arr as $key) 
   {
       
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