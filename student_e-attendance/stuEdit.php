<?php
// Include database connection file
include("connection.php");

// Initialize student data
$name = "";
$noIC = "";
$noTel = "";
$email = "";

// Retrieve student record for editing
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $studentData = mysqli_query($connection, "SELECT * FROM stu_detail WHERE name='$id'");

    if ($studentData && mysqli_num_rows($studentData) > 0) {
        $data = mysqli_fetch_assoc($studentData);
        $name = $data['name'];
        $noIC = $data['noIC'];
        $noTel = $data['noTel'];
        $email = $data['email'];<?php
// Include database connection file
include("connection.php");

// Initialize student data
$studentId = "";
$name = "";
$noIC = "";
$noTel = "";

// Retrieve student record for editing
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $studentData = mysqli_query($connection, "SELECT * FROM stu_detail WHERE id='$studentId'");

    if ($studentData && mysqli_num_rows($studentData) > 0) {
        $data = mysqli_fetch_assoc($studentData);
        $studentId = $data['studentId'];
        $name = $data['name'];
        $noIC = $data['noIC'];
        $noTel = $data['noTel'];
    }
}

/// Update student record
if(isset($_POST['update'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $update_query = "UPDATE stu_detail SET name='$name', noIC='$noIC', noTel='$noTel' WHERE id='$studentId'";
    $result = mysqli_query($connection, $update_query);

    if ($result) {
        // Redirect to another page after successful update
        header("Location: manageStu.php");
        exit(); // Make sure to exit after header redirection
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
        input [type = submit]{
            background-color: #857F72;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 10px;
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
        <h2>Edit Student</h2>
        <div class="form">
        <form method="post" action="">
        <p>StudentId<input type="text" name="studentId" value="<?php echo $studentId; ?>"></p>
        <p>Name<input type="text" name="name" value="<?php echo $name; ?>"></p>
        <p>No.IC<input type="text" name="noIC" value="<?php echo $noIC; ?>"></p>
        <p>No.Tel<input type="tel" name="noTel" value="<?php echo $noTel; ?>"></p>
        <p><br>
            <input type="submit" name="update" value="Edit Student">
            <button type="reset">Reset</button>
        </p>
    </form>
</body>
<?php require('footer.php'); ?>
</html>

    }
}

/// Update student record
if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $email = $_POST['email'];
    $update_query = "UPDATE stu_detail SET noIC='$noIC', noTel='$noTel', email='$email' WHERE name='$name'";
    $result = mysqli_query($connection, $update_query);

    if ($result) {
        header("Location: manageStu.php");
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
        <h2>Edit Student</h2>
        <div class="form">
        <form method="post" action="">
        <p>Name<input type="text" name="name" value="<?php echo $name; ?>"></p>
        <p>No.Ic<input type="text" name="noIC" value="<?php echo $noIC; ?>"></p>
        <p>No.Tel<input type="tel" name="noTel" value="<?php echo $noTel; ?>"></p>
        <p>Email <input type="email" name="email" value="<?php echo $email; ?>"></p>
        <p><br>
            <input type="submit" name="update" value="Edit Student">
            <button type="reset">Reset</button>
        </p>
    </form>
</body>
<?php require('footer.php'); ?>
</html>
