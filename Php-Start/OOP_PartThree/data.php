<?php
    require_once "classes.php";

    $con = mysqli_connect("localhost","root","","booksPhpStart");
    mysqli_set_charset($con,"utf-8");

    if (mysqli_connect_errno()) {
        echo "Sorry,but you failed to access to the database";
    }
    $query = "SELECT *FROM books";
    $result = mysqli_query($con,$query);

    $books = array();

    while ($row = mysqli_fetch_array($result)) {
        $books[] = new $row['type']($row);
    }

?>