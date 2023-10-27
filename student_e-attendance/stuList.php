<html>
<head>
    <title>STUDENT LIST</title>
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
            padding: 10px 50px;
            margin: 10px 208px;
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
                    <li><a href="generate.php">GENERATE QR CODE</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    </div>
    <br><br><br>
<H3>STUDENT LIST</H3>    
<?php
include "connection.php";
?>
<table>
    <tr>
        <th>Student ID</th>
        <th>NAME</th>
        <th>NO IC</th>
        <th>NO TEL</th>
        <th>QR CODE</th>
</tr>
<?php
$record = mysql_query("SELECT * FROM stu_detail");
while ($data = mysql_fetch_array($record)) {
    ?>
    <tr>
        <td><?php echo $data['studentId'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['noIC'];?></td>
        <td><?php echo $data['noTel'];?></td>
        <td><?php echo $data['qrCode'];?></td>
        <td><a href="generate.php?No=<?php echo $data['name'];?>"><button>GENERATE</button></a></td>
</tr>
<?php
}
?>
</table>
</body>
<br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>
