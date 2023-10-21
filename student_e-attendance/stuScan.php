<html>
    <head>
        <title>STUDENT SCAN QR CODE</title>
        <link rel="stylesheet" href="header.css">
        <style>
             body{
            background-color: #FFFDE7;
            background-repeat: no-repeat; 
  	        background-size: cover;
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
                    <li><a href="stuHome.php">HOME</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div><br><br>
    <label>MANUALY INPUT STUDENT ID: </label>
                    <input type="text" name="text" id="text" class="form-control">
<script type="text/javascript" src="./main.js"></script>
<script type="text/javascript" src="./llqrcode.js"></script>

<div style="display:none" id="result"></div>
		<div class="selector" id="qrimg" onclick="setimg()" align="right" ></div>
			<center id="mainbody"><div id="outdiv"></div></center>
				<canvas id="qr-canvas" width="100" height="100"></canvas>

<script type="text/javascript">load();</script>
<script src="./jquery-1.11.2.min.js"></script>
                
</html>
