<?php

     class Figure {
        public $color;
        public $area;

            public function infoAbout(){
                echo "Это геометрическая фигура";
            }
    }
     class Rectangle extends Figure {
        public const NUMSIDE = 4;

        private $a;
        private $b;

        public function __construct($a,$b) {
            $this->infoAbout();

            $this->a = $a;
            $this->b = $b;
        }

        public function getArea(){
            $this->area = $this->a * $this->b;
            return $this->area;
        }

        final public function infoAbout()
        {
            echo "Это прямоугольник у него ".self::NUMSIDE."сторон<br/>";
        }


     }
     class Triangle extends Figure {
        public const NUMSIDE = 3;

        private $a;
        private $b;
        private $c;

        public function __construct($a,$b,$c) {
            $this->infoAbout();

            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function getArea(){
            $p = ($this->a + $this->b + $this->c)/2;
            $this->area = sqrt($p * ($p-$this->a)*($p-$this->b)*($p-$this->c));
            return $this->area;
        }

        final public function infoAbout()
        {
            echo "Это треугольник у него ".self::NUMSIDE."стороны<br/>";
        }


     }
     class Square extends Figure {
        public const NUMSIDE = 4;
        private $a;

        public function __construct($a) {
            $this->infoAbout();
            $this->a = $a;
        }

        public function getArea(){
            $this->area = $this->a * $this->a;
            return $this->area;
        }

        final public function infoAbout()
        {
            echo "Это квадрат у него ". self::NUMSIDE."стороны<br/>";
        }

     }

     $rect1 = new Rectangle(3,4);
     $rect2 = new Rectangle(5,7);

     $trian1 = new Triangle(3,3,3);
     $trian2 = new Triangle(1,1,1);

     $sq1 = new Square(5);
     $sq2 = new Square(8);

     echo $rect1->getArea()."<br/>";
     echo $rect2->getArea()."<br/>";

     echo $trian1->getArea()."<br/>";
     echo $trian2->getArea()."<br/>";

     echo $sq1->getArea()."<br/>";
     echo $sq2->getArea()."<br/>";



?>