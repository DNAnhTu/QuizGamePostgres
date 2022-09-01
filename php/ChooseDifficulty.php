<?php 
include("connection.php");

    $query1 = "select * from  one_choice where difficulty='easy' AND onhold=0 ORDER BY random() limit 1;" ;
    $result1 = pg_query($con, $query1);
    if (pg_num_rows($result1) === 1) {
        $row1 = pg_fetch_assoc($result1);
    } else {
       echo "Error fetching questions.";
    }

    $query1 = "select * from  true_false where difficulty='easy' AND onhold=0 ORDER BY random() limit 1;";
    $result2 = pg_query($con,$query1);
    if (pg_num_rows($result2) != 1) {
        echo "Error fetching questions." ;
    }

    $query1 = "select * from  multiple_choices where difficulty='easy' AND onhold=0 ORDER BY random() limit 1;";
    $result3 = pg_query($con,$query1);
    if (pg_num_rows($result3) === 1) {
        $row3 = pg_fetch_assoc($result3);
    } else {
        echo "Error fetching questions." ;
    }


    $query1 = "select * from  text_completion where difficulty='easy' AND onhold=0 ORDER BY random() limit 1;";
    $result4 = pg_query($con,$query1);
    if (pg_num_rows($result4) === 1) {
        $row4 = pg_fetch_assoc($result4);
    } else {
        echo "Error fetching questions: " ;
    }

    /*===============================================Medium============================================================ */

    $query2 = "select * from  one_choice where difficulty='medium' AND onhold=0 ORDER BY random() limit 1;" ;
    $result5 = pg_query($con, $query2);
    if (pg_num_rows($result5) === 1) {
        $row5 = pg_fetch_assoc($result5);
    } else {
        echo "Error fetching questions." ;
    }


    $query2 = "select * from  true_false where difficulty='medium' AND onhold=0 ORDER BY random() limit 1;";
    $result6 = pg_query($con,$query2);
    if (pg_num_rows($result6) != 1) {
        echo "Error fetching questions." ;
    }

    $query2 = "select * from  multiple_choices where difficulty='medium' AND onhold=0 ORDER BY random() limit 1;";
    $result7 = pg_query($con,$query2);
    if (pg_num_rows($result7) === 1) {
        $row7 = pg_fetch_assoc($result7);
    } else {
        echo "Error fetching questions." ;
    }

    $query2 = "select * from  text_completion where difficulty='medium' AND onhold=0 ORDER BY random() limit 1;";
    $result8 = pg_query($con,$query2);
    if (pg_num_rows($result8) === 1) {
        $row8 = pg_fetch_assoc($result8);
    } else {
        echo "Error fetching questions: " ;
    }


  /*===============================================Hard============================================================ */


    $query3 = "select * from  one_choice where difficulty='hard' AND onhold=0 ORDER BY random() limit 1;" ;
    $result9 = pg_query($con, $query3);
    if (pg_num_rows($result9) === 1) {
        $row9 = pg_fetch_assoc($result9);
    } else {
        echo "Error fetching questions."  ;
    }

    $query3 = "select * from  true_false where difficulty='hard' AND onhold=0 ORDER BY random() limit 1;";
    $result10 = pg_query($con,$query3);
    if (pg_num_rows($result10) != 1) {
        echo "Error fetching questions." ;
    } 

    $query3 = "select * from  multiple_choices where difficulty='hard' AND onhold=0 ORDER BY random() limit 1;";
    $result11 = pg_query($con,$query3);
    if (pg_num_rows($result11) === 1) {
        $row11 = pg_fetch_assoc($result11);
    } else {
        echo "Error fetching questions."  ;
    }


    $query3 = "select * from  text_completion where difficulty='hard' AND onhold=0 ORDER BY random() limit 1;";
    $result12 = pg_query($con,$query3);
    if (pg_num_rows($result12) === 1) {
        $row12 = pg_fetch_assoc($result12);
    } else {
        echo "Error fetching questions: "  ;
    }



?> 