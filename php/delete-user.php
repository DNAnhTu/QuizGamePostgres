<?php
include("connection.php");

$sql = "DELETE FROM users WHERE username='" . $_GET["username"] . "'";
if (pg_query($con, $sql)) {
    header ("location: administrator.php");
} else {
    echo "Error deleting record: " . pg_error($con);
}
pg_close($con);
?> 