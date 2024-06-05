<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Age:</label>
        <br>
        <input type="text" name="age">
        <br><br>
        <input type="submit" value="Check">
    </form>
</body>
</html>
<?php 
    $age = "{$_POST["age"]}";

    if($age >=18)
    {
        echo "You may enter";
    }
    else
    {
        echo "You must be 18+";
    }
?>