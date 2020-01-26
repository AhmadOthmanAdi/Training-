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


    class Student
    {
        var $pages; //attributes
        var $name;  //attributes
        var $author; //attributes


        function hasHoners(){

            if ($this->author >= 3.5){
                return true;
            }
            return false;
        } 
    }

    $student = new Student(2, 3, 6); //Object  //create new book data type
    $student2 = new Student(4, 2, 3); //Object  //create new book data type

    echo $student2->hasHoners();

    ?>





</body>

</html>