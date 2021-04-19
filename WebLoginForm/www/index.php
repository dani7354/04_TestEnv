<?php
session_start();
if(isset($_SESSION["username"])){
    header("Location: /administration.php");
}
else{
    header("Location: /login.php");
}
?>
