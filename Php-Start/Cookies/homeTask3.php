<?php

    if(empty($_COOKIE['countOfVisits'])){
        static $countVisits = 1;
        setcookie('countOfVisits',$countVisits,time()+36000);
    } elseif (isset($_COOKIE['countOfVisits'])) {
        $countVisits = $_COOKIE['countOfVisits'];
        $countVisits++;
        setcookie('countOfVisits',$countVisits,time()+36000);
    }

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 3</title>
</head>
<body>
    <p><?php echo "Кол-во посещений страницы за все время:$countVisits";?></p>
</body>
</html>
