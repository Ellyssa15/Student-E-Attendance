<html>
    <head>
        <title>STUDENT DETAILS</title>
        <link rel="stylesheet" href="header.css">
        <style>
             body{
            background-color: #FFFDE7;
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
  <div class="col-sm-8" style="border: 2px solid black;padding:5px; text-align: center;">
   <h1>STUDENT DETAIL</h1>
  <br><br><br>

  <div class="form-group row d-flex align-items-center mb-1">
  <?php
session_start();
include("connection.php");

if (!isset($_SESSION['username'])) {
    header("Location: stuLogin.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM stu_detail WHERE studentid = '$username'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Welcome, " . $row['name'] . "! Your details are: <br>";
    echo "Student ID: " . $row['studentId'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "IC Number: " . $row['noIC'] . "<br>";
    echo "Telephone Number: " . $row['noTel'] . "<br>";
    echo "<img src='" . $row['qrimage'] . "' alt='QR Code'>";
} else {
    echo "Error fetching student details";
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
