<?php
include("connection.php");

if (isset($_POST['add'])) {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $qrtext = $_POST['qrtext'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status = $_POST['status'];

    $sql = "UPDATE stu_attend SET name = ?, qrtext = ?, date = ?, time = ?, status = ? WHERE studentId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $studentId, $name, $qrtext, $date, $time, $status);
    $stmt->execute();

    header("Location: stuAttend.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>STUDENT SCAN QR CODE</title>
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <style>
        body{
            background-color: #FFFDE7;
            background-repeat: no-repeat; 
  	        background-size: cover;
        }
        button {
          background-color: #F7D8B5;
            border-radius: 17px;
            margin-right: 5px;         
            font-size: 18px;
            padding: 10px 50px;
            margin: 10px 208px;
            border: none;
            outline: none;
            
        }

        button:hover{
            background:#857F72
        }
        .manual-input {
            display: none;
        }
    </style>
</head>
<body>
    <div class="topnav">
        <section>
            <header>
                <a href="#" class="logo"><img src="logokypj.png" width="200px" heigth="150px"></a>
                <div class="topnav" id="myTopnav">
            </header>
        </section>
    </div>
        <br>
        <label>SCAN QR CODE:</label>
        <input type="radio" name="scan" value="auto" checked> Auto
        <input type="radio" name="scan" value="manual"> Manual
        <br>
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <label>QR CODE</label>
                <input type="text" name="text" id="text" readonly="" placeholder="QR code" class="form-control">
                <br>
                <input type="text" name="qrtext" id="qrcode" placeholder="QR code" class="form-control manual-input">
                <button onclick="saveQRCode()">SAVE</button>
            </div>
        </div>
    </div>

    <script>
        let scanner = null;
        let scanMode = 'auto';
        let preview = document.getElementById('preview');
        let text = document.getElementById('text');
        let qrcode = document.getElementById('qrcode');
        let manualInput = document.querySelector('.manual-input');

        function startScanner() {
            scanner = new Instascan.Scanner({ video: preview });
            Instascan.Camera.getCameras().then(function(cameras){
                if(cameras.length > 0 ){
                    scanner.start(cameras[0]);
                } else{
                    alert('No cameras found');
                }
            }).catch(function(e) {
                console.error(e);
            });

            scanner.addListener('scan',function(c){
                text.value = c;
            });
        }

        function stopScanner() {
            scanner.stop();
        }

        function saveQRCode() {
  let qrCode = qrcode.value;

  // Send qrCode to server for saving
  fetch('saveQRCodeToDatabase.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'qrCode=' + qrCode
  })
  .then(response => response.text())
  .then(data => {
    alert('QR code saved: ' + qrCode);
    // Redirect to stuAttend.php or perform other actions
    window.location.href = 'stuAttend.php';
  })
  .catch(error => {
    console.error('Error:', error);
  });
}



        let scanRadio = document.getElementsByName('scan');
        for (let i = 0; i < scanRadio.length; i++) {
            scanRadio[i].addEventListener('change', function() {
                scanMode = this.value;
                if (scanMode === 'auto') {
                    startScanner();
                    manualInput.style.display = 'none';
                } else {
                    stopScanner();
                    manualInput.style.display = 'block';
                }
            });
        }

        startScanner();
    </script>

    <div class="button-container">
        <a href="lectHome.php" class="centered-button">
            <button>BACK</button>
        </a>
    </div>
</body>
<?php require('footer.php'); ?>
</html>
