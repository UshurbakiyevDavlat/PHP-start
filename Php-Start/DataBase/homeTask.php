<?php
    //Task 1:

    $con = mysqli_connect("localhost",'root','','php-start_news');
    mysqli_set_charset($con,"utf-8");

    if (mysqli_connect_errno()) {
        echo "Sorry, you have problems with connection with Data Base";
    }

    $query1 = "INSERT INTO user
    (`name`,`surname`,`email`,`password`,`country`,`city`,`gender`,`birthdate`,`register_date`)
    VALUES
    ('Yasmin','Ushurbakiyeva','yasy@gmail.com','ysa1234','Kz','Almaty','1','2002-10-25 00:00:00',CURRENT_TIMESTAMP ),
    ('Mukadam','Osmanova','osm@gmail.com','amdj1234','Kz','Almaty','1','1976-05-22 00:00:00',CURRENT_TIMESTAMP ),
    ('Mariam','Osmanova','osma@gmail.com','qwerty1234','Uz','Tashkent','1','1950-09-18 00:00:00',CURRENT_TIMESTAMP );
    ";

    $query2 = "
       DELETE FROM user
        WHERE name = 'Томас' OR name = 'Джон';
    ";

    /*
     * Queries for the second task.
     * 1)DELETE FROM user
        WHERE name = 'Томас';

     * 2)DELETE FROM user
        WHERE name = 'Томас' AND surname = 'Смит';

       3)DELETE FROM user
        WHERE name = 'Томас' OR name = 'Джон';
     * */

    $query3 = "
       UPDATE user
       SET surname = 'Ushurbakiev'
       ORDER BY id DESC
       LIMIT 3;
    ";

    /*
     * Queries for the third task.
     *1) UPDATE user
        SET name = 'Тимофей', surname = 'Опель'
        WHERE id = 3;

    2)UPDATE user
       SET surname = 'Ushurbakiev'
       ORDER BY id DESC
       LIMIT 3;
     * */

    $query4 = "
        SELECT COUNT(*) 
        FROM news
        WHERE status = 1 OR status = 0
        GROUP BY status;
    ";

    /*
     * Queries for the fourth task.
     * 1)SELECT * FROM news
        WHERE category_id = 3
        LIMIT 3;
       if ($count) {
        while ($row = mysqli_fetch_array($result)) {
           echo $row['h1'];
            echo "<br />";
           echo $row['content'];
           echo "<hr>";
        }
    }
     *
     * 2) SELECT * FROM user
      WHERE name = 'Davlat' OR name = 'Aziz'
     * if ($count) {
        while ($row = mysqli_fetch_array($result)) {
           echo $row['id'].";";
           echo $row['name'].";";
           echo $row['surname'].";"."<br>";
        }
    }
     * 3) SELECT COUNT(*)
        FROM news
        WHERE status = 1 OR status = 0
        GROUP BY status;

     * if ($count) {
        while ($row = mysqli_fetch_array($result)) {
           echo $row['COUNT(*)'];
        }
    }
     * */

    $query5 = "
        SELECT h1,short_content,id 
        FROM news 
        WHERE status = 1
        GROUP  BY h1,short_content,id;
    ";

    /*
     *Queries for the fifth task. version one.
     *  SELECT * FROM news
        WHERE status = 1

    if ($count) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<h1>{$row['h1']}</h1><br/>";
            echo "<p>{$row['short_content']}</p><br/>";
            echo "<a href = '/news/view/{$row['id']}'>Читать далее</a><br/>";

        }
    }
     *
     * */

    $result = mysqli_query($con,$query5);

    $count = mysqli_num_rows($result);
    $affected  = mysqli_affected_rows($result);

    //fifth task version two,good one.
    if ($count) {
        while ($row = mysqli_fetch_array($result)) {
            $i = 0;
            foreach($row as $key=>$item) {
                if (!is_int($key))continue;
                if ($i == 0) {
                    echo "<h1>{$item}</h1><br/>";
                }
                elseif($i ==1) {
                    echo "<p>{$item}</p><br/>";
                }
                else {
                    echo "<a href = '/news/view/{$item}'>Читать далее</a><br/>";
                }
                $i++;
            }
        }
    }

?>