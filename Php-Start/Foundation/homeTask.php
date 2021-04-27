<?php
    //Task 1:
        //Type of comment number 1
        #Type of comment number 2
    /**
     Was created by Davlatbek 20.04.2021
     */
    echo  "Hello,Dear user!<br />";

?>

<?php
    //Task 2:
        $chanell = "ktk";
        $prodAddr = "Almaty, Sanatornyi 13 a";
        $carColor = "Grey";
        $waterTemp = 31;
        $phoneModel = "Samsung S21";

?>

<?php
    //Task 3:

        $num1 = 3;
        $num2 = 5;
        $num3 = 8;
        echo "$num1,$num2,$num3<br />";

        $sumOfNums = $num1+$num2+$num3;
        echo "$sumOfNums<br />";

        $resExp = 2+6+2/5-1;
        echo "$resExp<br />";

?>

<?php
    //Task 4:

        $a = 1;
        $b = 2;
        echo "$a,$b<br />";

        $c = &$a;
        $d = &$b;
        echo "$c,$d<br />";

        $a = 3;
        $b = 4;
        echo "$a,$b,$c,$d<br />";

?>

<?php
    //Task 5:

        const One = 41; // first way to create a const
        define("Two",33); // second way to create a const
        $sum = One + Two;
        echo $sum;
        //One = 2; nice try, but it is prohibited


?>
