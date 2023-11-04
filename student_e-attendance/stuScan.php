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
    <div class="container">
        <h2>STUDENT SCAN QR CODE</h2>
        <label>SUBJECT:</label>
        <select name="subject" id="subject" class="form-control">
            <option value="DDWD2653">DDWD2653</option>
            <option value="DDWD3343">DDWD3343</option>
            <option value="DDWD3723">DDWD3723</option>
            <option value="DDWD3773">DDWD3773</option>
            <option value="DDWD3783">DDWD3783</option>
        </select>
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
            // ...
            alert('QR code saved: ' + qrCode);
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
