<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="08_Exercise.php" method="post">
        <label>Username:</label> <br>
        <input type="text" name="username"> <br>
        <label>Password:</label> <br>
        <input type="password" name="password"> <br>

        <input type="submit" name="login" value="Log In"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");   // This would redirect the browser to the home page after hitting the login buttton
        }
        else {
            echo "Missing Username/Passowrd <br>";
        }


        // To Log-Out
        // Create a Log-out button in the home page
        // Use the isset() to check if the button gets clicked on
            // If button is clicked:
                // session_destroy();  // Destroys the session
                // header("Location: index.php");   // Redirects to the formal page

    }
?>
