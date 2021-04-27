<?php
    //Task 2:
        if (!empty($_POST)) {
            $name = $_POST['name'];
            if ($_POST['gender'] == "Male") {
                echo "Приветствую мистер $name ";
            } else{
                echo "Приветствую мисис $name";
            }
        }
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <title>Задача к 8.2</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form action="homeTask2.php" method="post">
                <label>
                    Name:<input type = "text" name = "name">
                    </label>
                <label>
                    <br>
                    Male:<input type = "radio" id="male" value = "Male" name = "gender">
                </label>
                    <br>
                <label>
                   Female:<input type = "radio" id="female" value="Female" name ="gender">
                </label>
                    <br>
                <label>
                    <input type = "submit" value = "Submit" name = "submit">
                </label>
                <label>
                    <input type = "reset" value = "Reset" name = "reset">
                </label>
        </form>
    </body>
</html>
