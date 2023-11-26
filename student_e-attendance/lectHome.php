<html>
    <head>
        <title>LECTURER HOME</title>
        <link rel="stylesheet" href="header.css">
        <style>

        body{
            background: url(backgroundlogin.jpg);
            background-repeat: no-repeat; 
  	        background-size: cover;
        }
            .button-container {
            display: flex;
            white-space: nowrap;
            justify-content: center;
            align-items: center;
        }

        button {
        transition: background-color 0.3s ease;
        border-radius: 17px;
        text-decoration:none;
        color: #fff;
            margin-right: 5px;         
            font-size: 18px;
            background-color: #F7D8B5;
            padding: 15px 50px;
            margin: 10px 50px;
            border: none;
            outline: none;
        }

        button:hover {
            background-color: #857F72;
        }

        h3{
            font-style: oblique;
            font-size: 40px;
            display: flex;
            justify-content: center;
            height: 50px;
        }

  
        </style>
    </head> 
    <body> 
    <div class="topnav">
    <section>
            <header>
                <a href="#" class="logo"><img src="logokypj.png" width="200px" heigth="150px"></a>
                <text = "Student E-Attendance">
                    <div class="topnav" id="myTopnav">
                <ul>
                    <li><a href="lectHome.php">HOME</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
   
    <br><br>
    <H3 font-size="60px">WELCOME LECTURER</H3>
    <br><br><br><br><br><br><br><br>

    <div class="button-container">
    <a href="stuAttend.php" class="centered-button">
        <button>STUDENT ATTENDANCE</a></button> </a>

    <a href="stuScan.php" class="centered-button">
        <button>STUDENT SCAN QR CODE</a></button> </a>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>
