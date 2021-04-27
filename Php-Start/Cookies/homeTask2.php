<?php
    $name = "новичек";
    $lastVisit = "";

if (empty($_COOKIE['Info'])) {

    $lastVisitZero = date("Y-m-d_h:i:s");
    $newName = "дружище";
    $arr = array($newName,$lastVisitZero);
    $arr = serialize($arr);

    setcookie('Info',$arr,time() + 36000);


}elseif (isset($_COOKIE['Info'])){
    $info = unserialize($_COOKIE['Info']);

    $name = $info[0];
    $lastVisit = $info[1];

    $newVisit = date("Y-m-d_h:i:s");

    $arr = array($name,$newVisit);
    $arr = serialize($arr);

    setcookie('Info',$arr,time() + 36000);

}


?>

    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание с куки 2</title>
    </head>
    <body>
    <p><?php echo "Добро пожаловать,$name!" ?></p>
        <br/>
    <p><?php echo "дата последнего визита:$lastVisit" ?></p>
    </body>
    </html>
