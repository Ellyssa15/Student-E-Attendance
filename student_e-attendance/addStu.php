<?php
include("connection.php");

// Add student record
if(isset($_POST['add'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $result = mysqli_query($connection, "INSERT INTO stu_detail(studentId,name,course,noIC,noTel) VALUES('$studentId','$name','$course','$noIC','$noTel')");
    header("Location: manageStu.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
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
            padding: 20px;
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
        button[type=submit] {
            background-color: #857F72;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        button[type=submit]:hover {
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
                        <li><a href="lectHome.php">HOME</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </div>
            </header>
        </section>
    </div>
    <br><br><br><br>
    <div class="container">
        <h2>ADD STUDENT</h2>
        <div class="form">
            <form method="post" action="">
                <p>Student ID <input type="text" name="studentId"></p>
                <p>Name<input type="text" name="name"></p>
                <div class="form-group">
                        <label>Choose Course</label><br>
                        <input type="radio" id="DDWD" name="course" value="DDWD">
                        <label for="DDWD">DDWD</label>
                        <input type="radio" id="DDWG" name="course" value="DDWG">
                        <label for="DDWG">DDWG</label>
                        <input type="radio" id="DSM" name="course" value="DSM">
                        <label for="DSM">DSM</label>
                        <input type="radio" id="DID" name="course" value="DID">
                        <label for="DID">DID</label>
                    </div><br>
                <p>IC Number<input type="text" name="noIC"></p>
                <p>Telephone Number<input type="text" name="noTel"></p>
                <p><br>
                    <input type="submit" name="add" value="Add Student">
                    <button type="reset">Reset</button>
                </p>
            </form>
        </div>
    </div>
</body>
<?php require('footer.php'); ?>
</html>
