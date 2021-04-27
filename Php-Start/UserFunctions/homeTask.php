<?php
    //Task 1:
            $products = array (
                array ('name' => 'Телевизор','price' => '400','quantity'=>1),//1
                array ('name' => 'Телевизор','price' => '400','quantity'=>1),//1
                array ('name' => 'Телевизор','price' => '400','quantity'=>1),//1
            );

            function prodInfo($products, $key = '', $level = 0)
            {
                static $count = 0;
                static $sum = 0;

                if (is_array($products)) {
                    $level++;
                    foreach ($products as $key => $element) {
                        prodInfo($element, $key, $level);
                    }
                } else {
                    if ($key == "price") {
                        $sum += $products;
                    } elseif ($key == "quantity") {
                        $count += $products;
                    }
                }
                return array("sum" => $sum, "elements" => $count);
            }
                echo "<pre>";
            var_dump(prodInfo($products));
                echo "</pre>";
?>

<?php
    //Task 2 :
        function discrim ($a,$b,$c) {

            $discr = ($b*$b) - 4 * $a * $c;

            if ($discr > 0) {

                $x1 = (-$b + sqrt($discr))/(2*$a);
                $x2 = (-$b - sqrt(($b * $b)-4*$a*$c))/(2*$a);

                return array("x1 " => $x1,"x2" => $x2);

            } elseif ($discr == 0) {
                $x = (-$b + sqrt($discr))/(2*$a);
                return  $x;

            } else {
                return False;
            }
        }

        $a = 4;
        $b = 4;
        $c = 1;

            echo "<pre>";
        var_dump(discrim($a,$b,$c));
            echo "</pre>";

?>

<?php
    //Task 3:

            function deleteNegatives($digits) {
                    foreach ($digits as $key=>$elems) {
                        if ($elems < 0) unset($digits[$key]);
                    }
                    return $digits;
            }

            $arr = array(2,10, -2, -4, 5, 1, 6, 200, 1.6, -95);
                echo "<pre>";
                print_r(($arr));
                echo "</pre>";

            echo "<pre>";
                print_r(deleteNegatives($arr));
            echo "</pre>";

?>

<?php
    //Task 4 :
        $arr2 = array(2,10, -2, -4, 5, 1, 6, 200, 1.6, -95);

            function deleteNegativesLink(&$digits) {
                foreach ($digits as $key=>$elems) {
                    if ($elems < 0) unset($digits[$key]);
                }
                return $digits;
            }

            echo "<pre>";
            print_r(($arr2));
            echo "</pre>";

            deleteNegativesLink($arr2);
            echo "<pre>";
            print_r($arr2);
            echo "</pre>";

?>
