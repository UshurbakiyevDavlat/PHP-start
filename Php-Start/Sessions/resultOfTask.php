<?php
    session_start();

    $rightOne = "Наруто";
    $rightTwo = "Ичиго";
    $rightTree = "Луффи";



    if ($_SESSION['ansOne'] == $rightOne) {
        echo "1)+"."<br/>";
    } else echo "1)-"."<br/>";

    if ($_SESSION['ansTwo'] == $rightTwo) {
        echo "2)+"."<br/>";
    } else echo "2)-"."<br/>";

    if ($_POST['answerThird'] == $rightTree) {
        echo "3)+"."<br/>";
    } else {
        echo "3)-"."<br/>";
    }

    session_abort();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ResultOfTask</title>
</head>
<body>

</body>
</html>
