<?php
    require_once "data.php";

    if (isset($books)) {
        foreach ($books as $item) {
            $item->printBook();
        }
    }

?>