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
            $this->setpages($aPages);
        }

        function getpages()
        {
            return $this->pages;
        }

        function setpages($pages)
        {
            if ($pages == 300 || $pages == 100) {
                $this->pages = $pages;
            }
            else{
                $this->pages = "Not Rated";
            }
        }
    }


    $book2 = new Book(12, 200); //Object  //create new book data type

    $book1 = new Book("moi", "made here"); //Object  //create new book data type

    
    echo $book2->getpages();


    ?>
</body>

</html>