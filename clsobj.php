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


class Nbook{
    var $pages; //attributes
    var $name;  //attributes
    var $author; //attributes
}

class Book{
     var $pages; //attributes
     var $name;  //attributes
     var $author; //attributes
}

function __construct(){

    echo  "new Book Created <br>";
}

$book2 = new Nbook; //Object  //create new book data type

$book2 ->name = "melonny <br>";
$book2->pages = "200";
$book2->author = "me";


echo "name of first author<br>";
echo $book2->name;


$book1 = new Book; //Object  //create new book data type

$book1 ->name = "tonie";
$book1->pages = "200";
$book1->author = "me";

echo "name of second author<br>";
echo $book1->name;
  

?>





</body>
</html>