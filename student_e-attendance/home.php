<html>
    <head>
        <title>HOME</title>
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
            margin: 10px 100px;
            border: none;
            outline: none;
        }

        button:hover {
            background-color: #857F72;
        }

        h3{
            font-style: georgia;
            font-size: 60px;
            display: flex;
            justify-content: center;
            height: 50px;
        }

        p {
            position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            font-family: italic;
            font-size: 25px;
        }
  
        </style>
    </head> 
    <body> 
    <br>
    <h3>WELCOME TO E-ATTENDANCE</h3><br>
    <br><br><br><br><br><br>

    <div class="button-container">
    <a href="stuLogin.php" class="centered-button">
        <button>Student</a></button> </a>
    <a href="lectLogin.php" class="centered-button">
        <button>Lecturer</a></button> </a>
    <a href="adminLogin.php" class="centered-button">
        <button>Admin</a></button> </a>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>
