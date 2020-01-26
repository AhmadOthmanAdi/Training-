<!DOCTYPE html>
<head>

<meta charset="utf-8">
<title>game</title>

</head>


<body>
<form action ="madlip.php" mehod="get">


color: <input type="text" name="color"><br>
Plural noun: <input type="text" name="Pluralnoun"><br>
Name:<input type="text" name="name">

<input type="submit">




</form>
<br><br>
<?php 

$color = $_GET["color"];
$pluralnoun = $_GET["Pluralnoun"];
$name = $_GET["name"];

echo "Hello $color friends <br>";
echo "i $pluralnoun missed $name<br>";


?>


</body>