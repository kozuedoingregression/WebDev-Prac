<?php
    $db_server = "localhost:3308";
    $db_user = "root";
    $db_pass = "";
    $db_name = "studentsdb";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    $sql = "SELECT * FROM students WHERE marks > 70 ";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "Name: {$row["name"]} Marks: {$row["marks"]} <br> ";        
        }  
    }
    else
    {
        echo "no result found";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>