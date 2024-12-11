<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="03_Exercise.php" method="post">
        <label>Enter a numbre to count to:</label> <br>
        <input type="text" name="count"> <br>
        <input type="submit" value="start"> <br>
    </form>

</body>
</html>

<?php 
    $counter = $_POST["counter"];

    for($i = 0; $i < $counter; $i++) {
        echo "{$i}.<br>";
    }

?>
