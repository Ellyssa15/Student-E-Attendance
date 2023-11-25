<?php
// Include database connection file
include("connection.php");

// Add student record
if(isset($_POST['add'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $result = mysqli_query($connection, "INSERT INTO stu_detail(studentId,name,noIC,noTel) VALUES('$studentId','$name','$noIC','$noTel')");
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
        input[type=submit]{
            background-color: #857F72;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: left;
            margin-right: 10px;
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
                        <li><a href="lectHome.php">HOME</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </div>
            </header>
        </section>
    </div>
    <br><br><br><br>
    <div class="container">
        <h2>Add Student</h2>
        <div class="form">
            <form method="post" action="">
                <p>Student ID <input type="text" name="studentId"></p>
                <p>Name<input type="text" name="name"></p>
                <p>No.IC<input type="text" name="noIC"></p>
                <p>No.Tel<input type="text" name="noTel"></p>
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
