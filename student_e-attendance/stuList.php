<?php
// Include database connection file
include_once("connection.php");

// Generate QR code for students who do not have one
if(isset($_POST['generate_qr'])) {
    $studentId = $_POST['studentId'];
    $result = mysqli_query($connection, "SELECT * FROM stu_detail WHERE studentId=$studentId");
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $qrtext = $row['studentId'] . " " . $row['name'] . " " . $row['noIC'] . " " . $row['noTel'];
        $qrcode = "images/" . $studentId . ".png";
        QRcode::png($qrtext, $qrcode, 'H', 4, 4);
        mysqli_query($connection, "UPDATE stu_detail SET qrimage='$qrcode', qrtext='$qrtext' WHERE studentId=$studentId");
        header("Location: stuList.php");
    }
}

// Display list of students with a "Generate QR" button
$query = mysqli_query($connection,"SELECT * FROM stu_detail");
?>

<!DOCTYPE html>
<html>
<head>
    <title>STUDENT LIST</title>
    <link rel="stylesheet" href="header.css">
    <style>
        body{
            background-color: #FFFDE7;
            background-repeat: no-repeat; 
  	        background-size: cover;
        }
        table {
            border-collapse: collapse;
            margin: auto; /* Center the table */
            width: 80%;
        }

        th, td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #F7D8B5;
            color: white;
        }
        h1 {
            text-align: center;
        }
        button {
          background-color: #F7D8B5;
            border-radius: 15px;
            margin:auto;         
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            outline: none;
            display: block;
        }

        button:hover{
            background:#857F72
        }
        .subject-container {
            text-align: center;
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
                        <li><a href="lectHome.php">HOME</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </div>
            </header>
        </section>
    </div>
    <br><br><br><br>
    <div class="container">
        <h1>STUDENT LIST</h1>
        <br>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>IC Number</th>
                <th>Telephone Number</th>
                <th>QR Text</th>
                <th>QR Code Image</th>
                <th>Actions</th>
            </tr>
            <?php while($row = mysqli_fetch_array($query)){ 
                $studentId = $row['studentId'];
                $name = $row['name'];
                $noIC = $row['noIC'];
                $noTel = $row['noTel'];
                $qrimage = $row['qrimage'];
                $qrtext = $row['qrtext'];
            ?>
                <tr>
                    <td><?php echo $studentId; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $noIC; ?></td>
                    <td><?php echo $noTel; ?></td>
                    <td><?php echo $qrtext; ?></td>
                    <td><img src="<?php echo $qrimage; ?>" alt="QR Code" width="100"></td>
                    <td>
                        <?php if(empty($qrimage)): ?>
                            <form method="post" action="generate.php">
                                <input type="hidden" name="studentId" value="<?php echo $studentId; ?>">
                                <button type="submit" name="generate_qr">Generate</button>
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <br><br><br><br><br><br>
    <td><a href="generate.php?id=<?php echo $studentId; ?>"><button>GENERATE STUDENT QR</button></a></td>
</body>
<br><br><br><br><br><br>
<?php require('footer.php'); ?>
</html>
