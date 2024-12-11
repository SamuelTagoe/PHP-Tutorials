<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 450px;
            margin-top: 170px;
            margin-left: 450px;
            background-color: burlywood;
            padding-top: 80px;
            padding-bottom: 50px;
            border-radius: 5px;
        }

        .form-container:hover {
            background-color: orange;
            transform: scale(1.1);
            box-shadow: 5px 5px rgba(0, 0, 0, 0.5);
        }

        .form-container form {
            display: inline-block;
        }
        .form-container input {
            margin-bottom: 20px;
            transition: .5s ease;
        }

        .form-container form input:hover {
            transform: scale(1.5);
        }

        .button {
            margin-left: 35px;
            height: 35px;
            width: 70px;
            text-align: center;
            border-radius: 10px;
            background-color: black;
            color: white;
            transition: .5s ease-in-out;
        }

        .button:hover {
            transform: scale(1);
            box-shadow: 3px 3px rgba(0, 0, 0, 0.4);
            background-color: transparent;
            border: 2px solid black;
            color: black;
        }

    </style>

</head>
<body>
        <div class="form-container">
            <form action="11_Check_Boxes.php" method="post">
                <input type="checkbox" name="foods[]" value="pizza">
                Pizza <br>
                <input type="checkbox" name="foods[]" value="Hamburger">
                Hamburger <br>
                <input type="checkbox" name="foods[]" value="Hot Dog">
                Hot Dog <br>
                <input type="checkbox" name="foods[]" value="Taco">
                Taco <br>
                <input type="submit" value="foods[]" name="submit">
            </form>
        </div>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {

        $foods = $_POST["foods"];

    }
    
?>
