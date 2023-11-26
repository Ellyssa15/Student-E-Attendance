<html>
    <head>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="login.css">
        <style>
          h3 {
              font-size:30px;
              color: #000;
          } 
          body {
            background: url(backgroundlogin.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            background-position:center;
          }
       
    </style>
    </head> 
    <body>
<div>
<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location: adminHome.php");
    } else {
        echo "<script> alert ('Username atau Password Salah');
        location='adminLogin.php'; </script>";
    }
}

mysqli_close($connection);
?>
  
   <br>
   <div class = "content">
   <br><h3>ADMIN LOGIN</h3>
        <form method="post">
        <img src="login icon.png" class="pic"><input type="text" name="username" placeholder="username" required><br><br>
        <img src="lock.png" class="pic"><input type="password" name="password" placeholder="password" required><br>
        <br><input type="checkbox" name="remember" require> Remember me <br>
        <br><br><input type="submit" name="submit" value="Log In"></form>
                
        </form>        
    </div>
</div>
</body>

    </html>
