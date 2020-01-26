<!DOCTYPE html>

<meta charset="utf-8">

<head>



</head>

<body>

<?php 
$phrase1= "Ahmad Othman Ammar Adi";
$phrase2= 25;

echo str_replace ("Hello", "panda", $phrase1);

echo ("<p>  my name is $phrase1 and i am $phrase2 years old </p> ");
echo ("<h1> But sometimes...i feel like $phrase2 <h1>" );
echo str_replace (25, 10.5, $phrase2);
echo substr($phrase1, 0 , 9);






?>
</body>

</html>