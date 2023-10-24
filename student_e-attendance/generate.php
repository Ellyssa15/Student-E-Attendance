<html>
<head>
    <title>GENERATE QR CODE</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    <link rel="stylesheet" type="text/css" href="css/style.css/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
</head>
    <style> 
     body{  
            background: url(backgroundlogin.jpg);
            background-repeat: no-repeat; 
  	        background-size: cover;
        }
    h3{
            font-style: oblique;
            font-size: 30px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
    button {
          background-color: #F7D8B5;
            border-radius: 17px;
            font-size: 18px;
            padding: 10px 50px;
            margin-left: 400px ;
            border: none;
            outline: none;
            
        }

        button:hover{
            background:#857F72
        }

</style>
</head> 
<body>
<div class="topnav">
    <section>
            <header>
                <a href="#" class="logo"><img src="logokypj.png" width="200px" heigth="150px"></a>
                    <div class="topnav" id="myTopnav">
            </header>
        </section>
    </div>
    <br><br><br>
    <div class="container">          
   <div class="table-responsive">  
    <h3 align="center">QR Generation Form</h3><br/>
    <div class="box">
     <form method="post" action="qrcode.php" > 
      <div class="form-group">
         <label>QR Text</label>
         <input type="text" name="qrtext" id="qrtext" placeholder="Enter QR Text" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="sbt-btn" value="QR Generate" class="btn btn-success" />
       <input type="submit" name="sbt-btn" value="Back" class="btn btn-success" onclick="window.location.href='stuList.php'" />
      </div>
     </form>
    </div>
   </div>  
  </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require('footer.php'); ?>
