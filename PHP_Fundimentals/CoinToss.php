<?php 
echo "<h1>Coin Toss 5000!!!</h1>";
$heads = 0;
$tails = 0;
$result = "";
for($i = 1; $i <= 5000; $i++)
{
    $rand = rand(1,2);
    if($rand == 1)
    {
        $result = 'heads';
        $heads ++;
    }
    if($rand == 2)
    {
        $result = 'tails';
        $tails ++;
    }
    echo "<p>Attempt #$i ... It's $result! ... So far there have been $heads heads and $tails tails.</p>";
}

?>