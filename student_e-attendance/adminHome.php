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
            font-size: 30px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
    button {
          background-color: #F7D8B5;
            border-radius: 17px;
            margin-right: 5px;         
            font-size: 18px;
            padding: 10px 30px;
            margin: 10px 200px;
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
    <br><br><br>
<H3>WELCOME ADMIN</H3>
<br><br><br><br><br><br><br><br><br>
<div class="button-container">
    <a href="genWrnLtr.php" class="centered-button">
        <button>GENERATE WARNING LETTER</a></button> </a>
    <a href="stuList.php" class="centered-button">
        <button>GENERATE QR CODE</a></button> </a>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br>
<?php require('footer.php'); ?>
