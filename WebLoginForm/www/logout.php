<?php 
session_start();
if(isset($_SESSION["username"])){
    $_SESSION["username"] = null;
    session_destroy();
}
header("Location: /login.php");
exit();



?>
