<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title> Login </title>
</head>
<body>
  <div class="container">
    <div class="Login-form">
    <div class="card-body">
      <h1 class="card-title text-center">Login</h1>
    </div>
    <div class="card-text">
      <form action="login.php" method="post"> 
        <div class="mb-3 mt-3">
          <label for="user">Username:</label>
          <input type="text" class="form-control" id="usr" placeholder="Enter username" name="usr" required>
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Check 
          </label>
        </div>
        <!-- <a href="index.php"></a> -->
        <button class="btn btn-primary" id="submitButton" type="submit">Send</button>
        </form>
    </div>
    </div>
  </div>         
<div class="container mt-3">
<?php
    if (isset($_POST["usr"]) && isset($_POST["pwd"]))
    {
        include("db_conn.php");

        $user = $_POST["usr"];
        $pass = $_POST["pwd"];

        $qry = mysqli_query($conn, "select * from login where username = '$user' and password = '$pass'"); 
        $cek = mysqli_num_rows($qry);
        
        if($cek > 0) 
        {	
            session_start();
            $_SESSION['us']=$user;
            //$_SESSION['pwd']=$pass;
            header("location:index.php");
        }
        else 
        {
            echo "<font color='red'>username atau password salah!</font>";
        }
     }
?>
</div> 
</body>
</html>