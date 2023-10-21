<html>
<head>
    <title>ADMIN HOME</title>
    <link rel="stylesheet" href="header.css">
</head>
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
<?php
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';
$path = 'images/';
$qrcode = $path.time().".png";
$qrimage = time().".png";

if(isset($_REQUEST['sbt-btn']))
{
	$qrtext = $_REQUEST['qrtext'];
	$query = mysqli_query($connection,"insert into qrcode set qrtext='$qrtext', qrimage='$qrimage'");
	if($query)
	{
		?>
		<script>
			alert("Data save successfully");
		</script>
		<?php
	}
}

QRcode :: png($qrtext, $qrcode, 'H',4 , 4);
echo "<img src='".$qrcode."'>";
?>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require('footer.php'); ?>