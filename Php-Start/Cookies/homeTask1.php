<?php
    if (empty($_COOKIE['name'])) {
        $name = "новичек";


        setcookie('name',$name,time() + 36000);


    }elseif (isset($_COOKIE['name'])){
        $name = "дружище";

    } else {
        $name = "новичек";
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание с куки 1</title>
</head>
<body>
        <p><?php echo "Добро пожаловать,$name!" ?></p>
</body>
</html>
