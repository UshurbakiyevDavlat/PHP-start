<?php
    class Car {
        public $name;
        public $color;
        public $fuel = 20;
        public $brand;
        public $wheels = 4;
        public $cost = 100;
        public $health = 100;

        public const LICENSE = 1;
        public const TAX_COEF = 1.5;
        public const PAY_COEF = 2.5;

        public function  __construct($cost,$fuel){
            $this->cost = $cost;
            $this->fuel = $fuel;
        }

        public function fuelConsumption($dist){
            echo "<p>".(($dist*$this->fuel)/100)."</p>";
        }

        public static  function  constPrint(){
            echo "<p>".self::LICENSE."</p>";
            echo "<p>".Car::TAX_COEF."</p>";
        }

        public static function  getMaxConst(){
            $arrConst = array(self::LICENSE,self::TAX_COEF,self::PAY_COEF);
            echo max($arrConst);
        }

    }

    $carOne = new Car(100,20);
    $carTwo = new Car(100,20);
    $carThree = new Car(100,20);
    $carFour = new Car(4000,13);
    $carFive = new Car(5000,10);

    $carOne->cost = 1000;
    $carTwo->cost = 2000;
    $carThree->cost = 3000;

    $carOne->fuelConsumption(3000);
    $carTwo->fuelConsumption(3000);
    $carFive->fuelConsumption(3000);

    echo Car::LICENSE."<br/>";
    Car::constPrint();
    Car::getMaxConst();

?>