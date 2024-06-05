<?php
    $db_server = "localhost:3308";
    $db_user = "root";
    $db_pass = "";
    $db_name = "studentsdb";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>login</legend>
        <form action="login.php" method="post">
        <label for="">username:</label> <br>
        <input type="text" name="username"> <br> <br>
        <label for="">password:</label> <br>
        <input type="password" name="password">
        <br><br>
        <input type="submit">
        </form>
    </fieldset>
</body>
</html>

<?php

    // $pass = $_POST['password'];

    $sql = "SELECT * FROM students WHERE name LIKE '{$_POST["username"]}' AND passwords LIKE '{$_POST["password"]}' ";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "username and password matched <br>";
            echo "Name: {$row["name"]} Marks: {$row["marks"]} <br> ";        
        }  
    }
    else
    {
        echo "incorrect username or password";
    }
?>