<html>
    <head>
        <title>STUDENT DETAILS</title>
        <link rel="stylesheet" href="header.css">
        <style>
             body{
            background: url(backgroundlogin.jpg);
            background-repeat: no-repeat; 
  	        background-size: cover;
            font-family: "Montserrat", sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            color: #212529;
            text-align: center;
             }
        .mb-1, .my-1 {
         margin-bottom: 0.25rem!important;}
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
                    <li><a href="logout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
<br>
</body> 

<div class="container">
<div class="row">
  <div class="col-sm-2">
  <div class="col-sm-8" style="padding:30px; text-align: center; ">
   <h1>STUDENT DETAIL</h1>
  <br><br><br>

  <div class="form-group row d-flex align-items-center mb-1">
  <?php
session_start();
include("connection.php");

if (!isset($_SESSION['studentId'])) {
    header("Location: stuLogin.php");
    exit();
}

$studentId = $_SESSION['studentId'];

$sql = "SELECT * FROM stu_detail WHERE studentId = '$studentId'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div style='text-align: left ;margin-left: 300px; font-size: 22px;font-family:ComicSansMS,ComicSans,cursive;'>";
    echo "<span style='font-weight: bold;'>Welcome,</span>  " . $row['name'] . "<span style='font-weight: bold;'>!!!</span><br><br>";
    echo "<span style='font-weight: bold;'>MATRIC NO:</span> " . $row['studentId'] . "<br><br>";
    echo "<span style='font-weight: bold;'>NAME:</span> " . $row['name'] . "<br><br>";
    echo "<span style='font-weight: bold;'>IC NUMBER:</span> " . $row['noIC'] . "<br><br>";
    echo "<span style='font-weight: bold;'>TELEPHONE NUMBER:</span> " . $row['noTel'] . "<br><br>";
    echo "<span style='font-weight: bold;'>QR CODE:</span><br>";
    echo "<img src='" . $row['qrimage'] . "' alt='QR Code' style='max-width: 200px; height: 200;'>";
    echo "</div>";
} else {
}
?>
    <div class="col-lg-6"></div>
    </div>
    <br><br><br><br><br>
</div>
</div>
</div>
</div>
<br><br>
    <?php require('footer.php'); ?>

</html>
