<?php
// Include database connection file
include("connection.php");

// Initialize student data
$studentId = "";
$name = "";
$course = "";
$noIC = "";
$noTel = "";

// Retrieve student record for editing
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $studentData = mysqli_query($connection, "SELECT * FROM stu_detail WHERE studentId='$id'");

    if ($studentData && mysqli_num_rows($studentData) > 0) {
        $data = mysqli_fetch_assoc($studentData);
        $studentId = $data['studentId'];
        $name = $data['name'];
        $course = $data['course'];
        $noIC = $data['noIC'];
        $noTel = $data['noTel'];
    }
} 

/// Update student record
if(isset($_POST['update'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $update_query = "UPDATE stu_detail SET name='$name', course='$course',noIC='$noIC', noTel='$noTel' WHERE studentId='$studentId'";
    $result = mysqli_query($connection, $update_query);

    if ($result) {
        header("Location: stuList.php");
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="header.css">
    <style>
        body{
            background-color: #FFFDE7;
            background-repeat: no-repeat;
            background-size: cover;
        }
        form {
            margin: auto;
            width: 50%;
            padding: 50px;
            border: 1px solid #B0C4DE;
            border-radius: 5px;
            background-color: #F7D8B5;
        }
        input[type=text], input[type=email], input[type=tel] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #857F72;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: left;
        }
        input [type=submit]:hover {
            background-color: #B0C4DE;
        }
        button[type=reset] {
            background-color: #857F72;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 10px;
        }
        button[type=reset]:hover {
            background-color: #B0C4DE;
        }
        h2 {
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
                        <li><a href="adminHome.php">HOME</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </div>
            </header>
        </section>
    </div>
    <br><br>
    <div class="container">
        <h2>EDIT STUDENT</h2>
        <br><br>
        <div class="form">
        <form method="post" action="">
        <p>Student ID<input type="text" name="studentId" value="<?php echo $studentId; ?>"></p>
        <p>Name<input type="text" name="name" value="<?php echo $name; ?>"></p>
        <div class="form-group">
            <label>Course</label><br>
            <input type="radio" id="DDWD" name="course" value="DDWD">
            <label for="DDWD">DDWD</label>
            <input type="radio" id="DDWG" name="course" value="DDWG">
            <label for="DDWG">DDWG</label>
            <input type="radio" id="DSM" name="course" value="DSM">
            <label for="DSM">DSM</label>
            <input type="radio" id="DID" name="course" value="DID">
            <label for="DID">DID</label>
        </div><br>
        <p>No.IC<input type="text" name="noIC" value="<?php echo $noIC; ?>"></p>
        <p>No.Tel<input type="tel" name="noTel" value="<?php echo $noTel; ?>"></p>
        <p><br>
            <input type="submit" name="update" value="Edit Student">
            <button type="reset">Reset</button>
        </p>
    </form>
        </div>>
    </div>
</body>
<?php require('footer.php'); ?>
</html>
