<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Nested Loops Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Nested Loops Example</h1>
    <p>The outer loop exicutes 5 time ans the inner loop exicutes twice for each outer loop</p>
        <ul>
                <?php
                for($i = 1; $i <= 5; $i++) {
                    echo "<li>Blue car finished round $i! <ul>";
                    for($k = 1; $k <= 2; $k++) {
                       echo "<li> Driver just ran and finished round $k! </li>";
                    }
                    echo "</ul></li>";
                }
                ?>
            </ul>
    
</body>
</html>
    
