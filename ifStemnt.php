<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php


    $ismale = false;
    $istall = true;
    if ($ismale && $istall) {
        echo "Male or Tall male";
    } elseif ($ismale && !$istall) {
        echo "male but not tall";
    } elseif (!$ismale && $istall) {
        echo "Tall not male";
    } else {
        echo "neither both";
    }






    ?>







</body>