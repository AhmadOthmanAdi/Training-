<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    <form action="SwitchCntrl.php" method="POST">

        <input type="text" name="grades">
        <input type="submit">


    </form>


    <?php

    $grade = $_POST["grades"];
    switch ($grade) {
        case "A";
            echo "Great Job!";

            /*needed otherwise proccess will kee[ going        
    */
            break;

        case "B";
            echo "Meh!";

        break;

        default:  
        echo "Invalid Code";
    }



    ?>




</body>

</html>