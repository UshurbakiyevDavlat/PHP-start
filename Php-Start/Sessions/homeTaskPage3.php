<?php
session_start();


    $answerTwo = $_POST['answerTwo'];
    $_SESSION['ansTwo'] = $answerTwo;

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест,вопрос 3</title>
</head>
<body>
<form action="resultOfTask.php" name ="answerThird" method="post">
    <p>Как зовут главного героя аниме Ванпис?</p>
    <label>
        Луффи <input type = "radio" name = "answerThird" id = "Луффи" value="Луффи" />
    </label>
    <br/>
    <label>
        Нами <input type = "radio" name = "answerThird" id = "Нами" value="Нами"/>
    </label>
    <br/>
    <label>
        Эйс <input type = "radio" name = "answerThird" id = "Эйс" value="Эйс"/>
    </label>
    <br/>
    <input type="submit" value="Далее">
</form>

</body>
</html>
