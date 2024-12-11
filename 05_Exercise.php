<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="05_Exercise.php" method="post">
        <label>Enter a Country: </label>
        <input type="text" name="country"> <br>
        <input type="submit"> <br>
    </form>
</body>
</html>

<?php
    $capitals = array(
        "USA"   => "Wahsington D.C", 
        "Ghana" => "Accra", 
        "Japan" => "Kyoto", 
        "India" => "New Delhi"
    );

    $capital = $capitals[$_POST["country"]];

    echo $capital;

?>
