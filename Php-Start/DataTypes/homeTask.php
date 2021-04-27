<?php
    //Task 1:
        $a = 152; // integer
        $b = '152'; // string
        $c = 'London'; // string
        $d = array(152); // array
        $e = 15.2; // float
        $f = false; // boolean
        $g = true; // boolean

    echo '<pre>';

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);

    echo '</pre>';

?>

<?php
    //Task 2.1 :
        $a = 5;
        $b = 3;

        $str1 = "Hello, dear students, today";
        $str1 .= " we have an exam, please be ready to ";
        $str1 .= " have $a tests , and you have $b tries. <br />";

        echo $str1;

    //Task 2.2 :
        $str2 = 'Hello, dear students, today';
        $str2 .= ' we have an exam, please be ready to ';
        $str2 .= 'have '.$a. ' tests , and you have '.$b.' tries. <br />';

        echo $str2;
?>


<?php
    //Task 3:
        $greetings = "Доброе утро,";
        $who1 = " дамы";
        $who2 = " и господа.";

        echo $greetings;
        echo $who1;
        echo $who2;

        $strRes = $greetings.$who1.$who2;
        print $strRes."<br />"."<br />";

?>

<?php
    //Task 4:
        $arr1 = array('1'=>1,'2'=>2,'3'=>3,'4'=>4);
        $arr2 = array(44,55,22,11,0);

        $arr1['element'] = 6;
        unset($arr2[0]);

        echo "Element 2 in array 1 :". $arr1[2]."<br />";
        echo "Element 2 in array 2 :". $arr2[2]."<br />";

        echo '<pre>';
            print_r($arr1);
            print_r($arr2);
        echo '</pre>';

        $countFirst = count($arr1);
        $countSecond = count($arr2);

        echo $countFirst. " - elements in first array.";
        echo $countSecond. " - elements in second array.";


?>
