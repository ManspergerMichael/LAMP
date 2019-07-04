<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTML Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="none.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
        <th>
            <tr>
                <td>User #</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Full Name</td>
                <td>Length of Full Name</td>
            </tr>
        </th>
    <?php
    $i = 1;
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel') 
     );
    
     
     foreach ($users as $arr) 
     {
        echo "<tr>";
        echo "<td>$i</td>";
        $name = "";
        foreach ($arr as $key => $value) 
        {
            echo "<td>$value</td>";
            $name = $name . $value;
        }
        echo "<td>$name</td>";
        $count = count($name);
        echo "<td>$count</td>";
        echo "</tr>";
        $i++;
     }
     echo "var dump: ". var_dump($count);

     
    ?>
    </table>
    
</body>
</html>