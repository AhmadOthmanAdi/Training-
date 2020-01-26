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

    class Book
    {
        public $pages;
        private $name;

        function __construct($aPages, $aName)
        {
            $this->pages = $aPages;
            $this->name = $aName;
        }

        function getpages()
        {
            return $this->pages;
        }

        function setpages($pages)
        {
            $this->pages = $pages;
        }
    }


    $book2 = new Book("me", "thismade here"); //Object  //create new book data type

    $book1 = new Book("moi", "made here"); //Object  //create new book data type

    $book1->setpages(300);
    echo $book1->getpages();


    ?>
</body>

</html>