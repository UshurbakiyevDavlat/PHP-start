<?php
session_start();

    $answerOne = $_POST['answerOne'];
    $_SESSION['ansOne'] = $answerOne;

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест,вопрос 2</title>
</head>
<body>
<form action="homeTaskPage3.php" name ="answerTwo" method="post">
    <p>Как зовут главного героя аниме Блич?</p>
    <label>
        Айзен <input type = "radio" name = "answerTwo" id = "Айзен" value="Айзен"/>
    </label>
    <br/>
    <label>
        Ичиго <input type = "radio" name = "answerTwo" id = "Ичиго" value="Ичиго"/>
    </label>
    <br/>
    <label>
        Улькиора <input type = "radio" name = "answerTwo" id = "Улькиора" value="Улькиора"/>
    </label>
    <br/>
    <input type="submit" value="Далее">
</form>

</body>
</html>
