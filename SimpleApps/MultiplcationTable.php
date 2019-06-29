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
            for($i = 1; $i <= 10; $i++)
            {
                echo "<tr>";
                for($j = 1; $j <=10; $j++)
                {
                    $ii = $i * $j;
                    if($j % 2 == 0)
                    {
                        echo "<td class='even'>$ii</td>";
                    }
                    else
                    {
                        echo "<td class='odd'>$ii</td>";
                    }
                    
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>


