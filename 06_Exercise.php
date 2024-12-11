<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06_Exercise.php" method="post">
        <label>Username: </label> <br>
        <input type="text" name="username"> <br>
        <label>Password: </label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])) {

        // Getting the Global Variables
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Missing Username";
        } elseif(empty($password)) {
            echo "Missing Password";
        }
         else {
            echo "Hello {$username}";
        }
    }

?>
