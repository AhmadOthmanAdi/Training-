<!DOCTYPE html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="url.php" method="post">
        <input type="password" name="password">
        <br>
        <input type="submit">

        <?php

        echo $_POST["password"]

        ?>


</body>