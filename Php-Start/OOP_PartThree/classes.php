<?php
    class Book {
        public $id;
        public $author;
        public $name;
        public $file_path;
        public $type;
        public $sort_order;

        public function __construct($row) {
            $this->id = $row['id'];
            $this->author = $row['author'];
            $this->name = $row['name'];
            $this->file_path = $row['file_path'];
            $this->type = $row['type'];
            $this->sort_order =$row['sort_order'];
        }
        public  function printBook() {}
    }

    class BookDoc extends Book {

        public function printBook()
        {
            echo "<img src = images/docIcon.png <br>";
            echo " $this->author ";
            echo "<a href = $this->file_path.doc>$this->name</a><br/>";


        }
    }

    class BookPdf extends  Book {
        public function printBook()
        {
            echo "<img src = images/pdfIcon.png <br>";
            echo " $this->author ";
            echo "<a href = $this->file_path.pdf>$this->name</a><br/>";

        }
    }

    class BookTxT extends Book {
        public function printBook()
        {
            echo "<img src = images/txtIcon.png <br>";
            echo " $this->author ";
            echo "<a href = $this->file_path.txt>$this->name</a><br/>";

        }
    }

?>