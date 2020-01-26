<!DOCTYPE html>

<head>
    <meta charset="utf-8">


</head>

<body>



    <form action="nTesting.php" method="get">
        <input type="number" name="number">
        <br>
        <input type="number" name="snumber">
        <input type="submit">
    </form>


    Number is  :<?php
                    echo $_GET["number"] + $_GET["snumber"];



                    ?>





</body>