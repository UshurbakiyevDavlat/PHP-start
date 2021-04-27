<?php
    //Task 1 :
            $sum = 0;
            $i = 1;
            while ($i <= 25) {
                $sum += $i;
                $i++;
            } echo $sum."<br />";
?>

<?php
    //Task 2:
            $n  = 72;
            $s = 1;
            for ($i = 0; $i <= $n; $i++){
                $s = $i*$i;
                if ($s <= $n) echo $s.PHP_EOL;
            }
?>

<?php
    //Task 3:
            for ($i = 10;  $i > 0 ; $i--) {
                $buttons[$i] = "Кнопка ".$i;
            }

            natsort($buttons);

        echo "<ul>";
            foreach ($buttons as $key => $button) {
                echo "<li><a href = '#'>".$button."</a></li>";
            }
        echo "</ul>";


?>
