<?php 
$score = rand(50,100);
$grade = '';
if($score >= 90){
    $grade = 'A';
}
if($score >= 80 && $score <= 89)
{
    $grade = 'B';
}
if($score >= 70 && $score <= 79)
{
    $grade = 'C';
}
if($score <= 69)
{
    $grade = 'D';
}

echo "<h1>Your Score: $score/100</h1> <h2>Your Grade: $grade";

?>