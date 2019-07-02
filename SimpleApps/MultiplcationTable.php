<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multiplcation Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    <h1>Multiplcation Table</h1>
        <table>
            <?php 
            for($i = 0; $i <= 10; $i++)
            {
                if($i % 2 == 0)
                {
                    echo "<tr class='even large'>";
                }
                else
                {
                    echo "<tr class='odd large'>";
                }
                
                for($j = 0; $j <=10; $j++)
                {
                    $sum = $i * $j;
                    if($sum == 0)
                    {
                        if($i == 0 && $j == 0)
                        {
                            echo "<td></td>";
                        }
                        if($j != 0 && $i == 0)
                        {
                            echo "<td><b>$j</b></td>";
                        }
                        if($i != 0 && $j == 0)
                        {
                            echo "<td><b>$i</b></td>";
                        }
                        
                    }
                    elseif($j % 2 == 0)
                    {
                        echo "<td>$sum</td>";
                    }
                    else
                    {
                        echo "<td>$sum</td>";
                    }
                    
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>


