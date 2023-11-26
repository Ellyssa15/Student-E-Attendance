<html>
<head>
    <title>ADMIN HOME</title>
    <link rel="stylesheet" href="header.css">
</head>
    <style> 
     body{  
            background: url(backgroundlogin.jpg);
            background-repeat: no-repeat; 
  	        background-size: cover;
        }
    h3{
            font-style: oblique;
            font-size: 50px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
    button {
          background-color: #F7D8B5;
            border-radius: 25px;
            font-size: 18px;
            padding: 15px 40px;
            margin: 15px 245px;
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
                <ul>
                    <li><a href="adminHome.php">HOME</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    <br><br>
<H3>WELCOME ADMIN</H3>
<br><br><br><br><br><br><br><br><br>
<div class="button-container">
    <a href="manageLect.php" class="centered-button">
        <button>MANAGE LECTURER</a></button> </a>
    <a href="stuList.php" class="centered-button">
        <button>MANAGE STUDENT</a></button> </a>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php require('footer.php'); ?>
