<?php
    //Task 1:

        if(!empty($_POST)) {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);
            $num3 = intval($_POST['num3']);
            $num4 = intval($_POST['num4']);
            $num5 = intval($_POST['num5']);
            $num6 = intval($_POST['num6']);
            $num7 = intval($_POST['num7']);

            $Nums = array($num1, $num2, $num3, $num4, $num5, $num6, $num7);

            echo "Max value:" . max($Nums);
            echo "<br />";
            echo "Min value:" . min($Nums);
            echo "<br />";

            $arMean = array_sum($Nums) / count($Nums);
            $str = "Ariphmetic mean:%.2f";
            printf($str,$arMean);

            echo "<br />";
            echo "<hr>";
        }
?>


<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Задача к 8.1 </title>
        <meta charset="utf-8">
    </head>

        <body>
            <form action="homeTask1.php" METHOD="post">
                <label>
                    Num1:<input type="text" value="" name="num1">
                </label>
                    <br>
                <label>
                    Num2:<input type="text" value="" name="num2">
                </label>
                <br>
                <label>
                    Num3:<input type="text" value="" name="num3">
                </label>
                    <br>
                <label>
                    Num4:<input type="text" value="" name="num4">
                </label>
                <br>
                <label>
                    Num5:<input type="text" value="" name="num5">
                </label>
                <br>
                <label>
                    Num6:<input type="text" value="" name="num6">
                </label>
                <br>
                <label>
                    Num7:<input type="text" value="" name="num7">
                </label>
                <br>
                <label>
                    <input type = "submit" value="Submit" name="submit">
                </label>
                <br>
            </form>
        </body>
</html>


