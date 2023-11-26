<?php
include_once("connection.php");

// Add lecturer record
if(isset($_POST['add'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $result = mysqli_query($connection, "INSERT INTO lect_detail(name,course,noIC,noTel) VALUES('$name','$course','$noIC','$noTel')");
    header("Location: manageLect.php");
}

// Edit lecturer record
if(isset($_POST['update'])) {
    $lecturerId = $_POST['lecturerId'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $noIC = $_POST['noIC'];
    $noTel = $_POST['noTel'];
    $result = mysqli_query($connection, "UPDATE lect_detail SET name='$name',course='$course',noIC='$noIC',noTel='$noTel' WHERE lecturerId=$lecturerId");
    header("Location: manageLect.php");
}

// Delete lecturer record
if(isset($_GET['delete'])) {
    $studentId = $_GET['delete'];
    $result = mysqli_query($connection, "DELETE FROM lect_detail WHERE lecturerId=$lecturerId");
    header("Location: manageLect.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MANAGE LECTURER</title>
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
            display: block;
            margin: auto;
        }

        button {
          background-color: #F7D8B5;
            border-radius: 17px;
            margin: auto;         
            font-size: 12px;
            padding: 10px 20px;
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
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </div>
            </header>
        </section>
    </div>
    <br><br>
    <div class="container">
        <h1>LECTURER DETAILS</h1>
        <br><br>
        <table>
            <tr>
                <th>Lecturer Id</th>
                <th>Name</th>
                <th>Course</th>
                <th>IC Number</th>
                <th>Telephone Number</th>
                <th>Actions</th>
            </tr>
            <?php
            require_once 'connection.php';
            $query = mysqli_query($connection,"select * from lect_detail");
            while($row = mysqli_fetch_array($query)){
                $lecturerId = $row['lecturerId'];
                $name = $row['name'];
                $course = $row['course'];
                $noIC = $row['noIC'];
                $noTel = $row['noTel'];
                ?>
                <tr>
                    <td><?php echo $lecturerId; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $course; ?></td>
                    <td><?php echo $noIC; ?></td>
                    <td><?php echo $noTel; ?></td>
                    <td><a href="editLect.php?id=<?php echo $lecturerId; ?>"><button>EDIT</button></a>
                    <a href="deleteLect.php?id=<?php echo $lecturerId; ?>"><button>DELETE</button></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br>
        <td><a href=addLect.php><button>ADD LECTURER</button></a></td>
    </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require('footer.php'); ?>
</html>
