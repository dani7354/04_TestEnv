<?php
session_start();
if(isset($_SESSION["username"])){
    header("Location: /administration.php");
    exit();
}
$page_title = "Simple Login Page";

if($_SERVER["REQUEST_METHOD"] == "POST" ){
            try{
                if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] == "admin" && $_POST["password"] == "123456789"  ){
                    session_regenerate_id();
                    $_SESSION["username"] = "admin";
                    header("Location: /administration.php");
                    exit();
                }
                header($_SERVER["SERVER_PROTOCOL"] . " 401 Unauthorized");
                $error = "Wrong username and/or password! (401)";
            }
            catch (Exception $exception){
                header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
                echo "<h1>500 Internal Server Error</h1>";
                exit();
            }
        }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $page_title ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="/"><?php echo $page_title ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!--<li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>-->
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
<div class="container">
    <h1 class="display-4">Welcome! Please log in to continue...</h1>
    <?php if(isset($error)){  ?>
        <small><?php  echo $error ?></small>
    <?php } ?>
    <form method="post" action="login.php">
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo (isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : ""); ?>" required>
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control"  placeholder="Password" value="<?php echo (isset($_POST["username"]) ?  htmlspecialchars($_POST["password"]) : ""); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
    </form>
</div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
