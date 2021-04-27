<?php
    //Task 1 :
            const MIN = 10, MAX = 50;
            $x = 70 ;

            if ($x == 10 || $x == 50) {
                echo "$x на границе промежутка MIN и MAX";
            } elseif ($x > 10 && $x < 50) {
                echo "$x входит в промежуток между MIN и MAX";
            } else {
                echo "$x не входит в промежуток между MIN и MAX";
            }
        echo "<br />";

?>


<?php
    //Task 2:
            $a = 4;
            $b = 4;
            $c = 1;

            $discr = ($b*$b) - 4 * $a * $c;

            if ($discr > 0) {

                $x1 = (-$b + sqrt($discr))/(2*$a);
                $x2 = (-$b - sqrt(($b * $b)-4*$a*$c))/(2*$a);

                echo $x1;
                    echo "<br />";
                echo $x2;

            } elseif ($discr == 0) {
                $x = (-$b + sqrt($discr))/(2*$a);
                echo $x;

            } else {
                echo "нет корней.";
            }
            echo "<br />";
?>

<?php
    //Task 3:
            $num1 = 2;
            $num2 = 4;
            $num3 = 3;

            if ($num1 > $num2 && $num1 < $num3) {
                echo "Среднее число $num1";

            } elseif ($num2 > $num1 && $num2 < $num3) {
                echo "Среднее число $num2";

            } else {
                echo "Среднее число $num3";
            }
            echo "<br />";
?>
