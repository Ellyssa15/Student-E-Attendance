<!DOCTYPE html>
<html>
<head>
    <title>GENERATE QR CODE</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
    <link rel="stylesheet" type="text/css" href="css/style.css/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style> 
        body{  
            background: url(backgroundlogin.jpg);
            background-repeat: no-repeat; 
            background-size: cover;
        }
        h2{
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
        .box{
            background-color: #F7D8B5;
            border-radius: 10px;
            padding: 10px;
        }
        label{
            font-size: 16px;
            font-weight: bold;
        }
        input[type="text"]{
            border-radius: 5px;
            border: none;
            padding: 5px;
            width: 100%;
            font-size: 14px;
        }
        input[type="submit"]{
            background-color: #857F72;
            color: white;
            border-radius: 10px;
            font-size: 15px;
            padding: 10px 30px;
        }
        input[type="submit"]:hover{
            background-color: #F7D8B5;
            color: #857F72;
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
    <br>
    <div class="container">          
        <div class="table-responsive">  
            <h2>QR Generation Form</h2><br/>
            <div class="box">
                <form method="post" action="qrcode.php" > 
                    <div class="form-group">
                        <label>Student ID</label>
                        <input type="text" name="studentId" id="studentId" placeholder="Enter Student ID" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>No IC</label>
                        <input type="text" name="noIC" id="noIC" placeholder="Enter No IC" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>No Tel</label>
                        <input type="text" name="noTel" id="noTel" placeholder="Enter No Tel" required class="form-control" />
                    </div>
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
    <script>
        // Function to refresh the QR code
        function refreshQRCode() {
            var qrimage = document.getElementById("qrimage");
            qrimage.src = qrimage.src + '?' + new Date().getTime();
        }

        setInterval(refreshQRCode, 5000);
    </script>
</body>
<?php require('footer.php'); ?>
</html>
