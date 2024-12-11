<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
</head>
<body>
    <div class="form-div">
    <form action="0001_Exercise.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
    </div>
</body>
</html>

<?php 
    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is \${$total}";
?>
