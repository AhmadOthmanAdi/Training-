<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <?php

function breakline(){
return "<br>";
}

    function getmax($num1, $num2, $num3)
    {

        if ($num1 >= $num2 && $num1 >= $num3) {

            return $num1;
        }
        elseif ($num2 >= $num1 && $num2 >= $num3) {
        
            return $num2;
        }
        else{
            $num3;
        }
    }

    echo getmax(10, 300, 20);

    echo breakline();

    echo "Great works"
    ?>



</body>

</html>