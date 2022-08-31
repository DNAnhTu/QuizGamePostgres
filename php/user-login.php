<?php
session_start();
include("connection.php");
$_SESSION["role"] = "";

$username=$_GET['username'];
$password=$_GET['password'];


$message="";

if (!empty($username) && !empty($password) && !is_numeric($username)) {
    
    
    $query = "select * from users where username = '$username' and password ='$password';";
    $result = pg_query($con,$query);
    
    if (pg_num_rows($result) ==1 ) {
        
        $row = pg_fetch_array($result);
        
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $row['role'];
        $_SESSION["log_status"] = "loggedin";
        $message= "done";
                   
    }
    else {
        $message="Inavlid username or password";
    }
}
else {
   
    $message="Fill username and password";
} 
echo  $message;
?>