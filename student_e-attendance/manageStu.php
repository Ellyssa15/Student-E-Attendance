<?php
include_once("connection.php");

// Add student record
if(isset($_POST['add'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $email = $_POST['email'];
    $result = mysqli_query($connection, "INSERT INTO stu_detail(studentId,name,noIC,noTel,email) VALUES('$studentId','$name','$noIC','$noTel','$email')");
    header("Location: manageStu.php");
}

// Edit student record
if(isset($_POST['update'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $email = $_POST['email'];
    $result = mysqli_query($connection, "UPDATE stu_detail SET name='$name',noIC='$noIC',noTel='$noTel',email='$email' WHERE studentId=$studentId");
    header("Location: manageStu.php");
}

// Delete student record
if(isset($_GET['delete'])) {
    $studentId = $_GET['delete'];
    $result = mysqli_query($connection, "DELETE FROM stu_detail WHERE studentId=$studentId");
    header("Location: manageStu.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MANAGE STUDENT</title>
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
            width: 100%;
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
        h2 {
            text-align: center;
        }
        button {
    display: block;
    margin: auto;
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
        <h2>STUDENT LIST</h2>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>IC Number</th>
                <th>Telephone Number</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php
            require_once 'connection.php';
            $query = mysqli_query($connection,"select * from stu_detail");
            while($row = mysqli_fetch_array($query)){
                $studentId = $row['studentId'];
                $name = $row['name'];
                $noIC = $row['noIC'];
                $noTel = $row['noTel'];
                $email = $row['email'];
                ?>
                <tr>
                    <td><?php echo $studentId; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $noIC; ?></td>
                    <td><?php echo $noTel; ?></td>
                    <td><?php echo $email; ?></td>
                    <td>
                        <a href="editStu.php?id=<?php echo $studentId; ?>">Edit</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br>
        <form method="post">
            <label>Student ID:</label>
            <input type="text" name="studentId" required><br>

            <label>Name:</label>
            <input type="text" name="name" required><br>

            <label>IC Number:</label>
            <input type="text" name="noIC" required><br>

            <label>Telephone Number:</label>
            <input type="text" name="noTel" required><br>

            <label>Email:</label>
            <input type="text" name="email" required><br>

            <input type="submit" name="add" value="Add">
        </form>
    </div>
</body>
<?php require('footer.php'); ?>
</html>
