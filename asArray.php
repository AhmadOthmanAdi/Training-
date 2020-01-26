<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <form action="asArray.php" method="post">
        Enter your name :<input type="text" name="student">

        <br>
        <input type="submit">

        <?php
        
         $grades = array("jim" => "B-", "mark" => "C-");

        echo $grades[$_POST["student"]];


        ?>



</body>