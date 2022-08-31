<?php
    $con = pg_connect("host=localhost port=5432 dbname=quizgame user=postgres password=Tu01228671340");
    if (!$con) {
        die("Error fail: " . pg_last_error());
    }
?>