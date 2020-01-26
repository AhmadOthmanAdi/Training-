<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <form action="array.php" method="post">
        Apples:<input type="checkbox" name="fruits[]" value="apples">
        Banana:<input type="checkbox" name="fruits[]" value="Banana">
        Berry:<input type="checkbox" name="fruits[]" value="Berry">

        <br>
        <input type="submit">

        <?php

        $fruits = $_POST["fruits"];
        echo $fruits[0];



        ?>



</body>