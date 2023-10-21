<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="login.css">
        <style>
          h3 {
              font-size: 30px;
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
    <?php
    session_start();
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query=$mysqli->query("select * from studentlogin where username='$username' and password='$password'");
        $queryRow=$query->num_rows;
        if($queryRow==TRUE) {
            $_SESSION['username']=$username;
            header("location:stuHome.php");
        }else {
            echo "<script> alert ('Username atau Password Salah');
            location='stuLogin.php'; </script>";
        }
    }
    ?>
   <br>
   <div class = "content">
   <br><h3>STUDENT LOG IN</h3>
        <form method="post">
        <img src="login icon.png" class="pic"><input type="text" placeholder="Username" name="Username" required><br><br>
        <img src="lock.png" class="pic"><input type="password" placeholder="Password" name="Password" required><br>
               <br><input type="checkbox" name="remember"> Remember me <br>
               <br><input type="submit" name="submit" value="Log In"></form>
                
        </form> 
    </div>

</body>
    </html>