<!DOCTYPE html>
<html lang="en">
<!DOCTYPE HTML>  
<html>
<head>
    <title>GENERATEWARNINGLETTER</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<style>

  .container {
            width: 125%;
            color: hsl(250, 60%, 15%);
            padding: 0.3rem;
            border: 2px solid #ccc;
            border-radius: 0.10rem;
            outline: none;
            background:white;
    }
    body {
      background:#FFFDE7
    }

    button{
          padding: 6px 20px;
          border: none;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer; 
    }

    <center>
          <FONT SIZE="1" COLOR="black" font face="Arial"> Copyright @ Student E-Attendance 
</style

<header>
    <img src="kypjlogo.jpg" width="270px" heigth="90px">
</header>


<body>
            <div class="container">

                        <form action="Generate.php" method="POST">

                        <h1>Generate Student Warning Letter</h1>

                              <div class="form-group row">
                                    <div class="col-lg-6">
                                                <input type="text" name="fname" class="form-control" placeholder="First name">
                                    </div><br>

                                    <div class="col-lg-6">
                                                <input type="text" name="lname" class="form-control" placeholder="Surname" required>
                                    </div><br>
                              </div>

                              <div class="form-group row">

                                    <div class="col-lg-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div><br>

                                    <div class="col-lg-6">
                                                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                    </div><br>

                              </div>
                              <div class="form-group">

                                   <textarea name="comment  " class="form-control" placeholder="Your comment" rows="10" cols="100" required></textarea>

                              </div><br>

                              <button type="submit" class="btn btn-block btn-success">Send Email</button><br><br>
                              <button> Save PDF </button>

                        </form>
            </div>  
</body>
<?php require('footer.php'); ?>
</html>
