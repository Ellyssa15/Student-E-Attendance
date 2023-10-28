<!DOCTYPE html>
<html lang="en">
<!DOCTYPE HTML>  
<html>
<head>
    <title>GENERATE WARNING LETTER</title>
    <link rel="stylesheet" href="header.css">
    <script>
    function displayAlert() {
  alert("Email sent successfully!");
}
</script>
<style>
  .container {
            margin-left: 10%;
            width: 80%;
            color: hsl(240, 54%, 15%);
            padding: 0.3rem;
            border: 2px solid #ccc;
            border-radius: 0.3rem;
            outline: none;
    }

    body {
      background:#FFFDE7
    }

    button{
          padding: 6px 20px;
          border: none;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer; 
    }
</style
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
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    <br><br><br>
            <div class="container">

            <form action="adminHome.php" method="POST">

                        <h1>Generate Student Warning Letter</h1>
                        <p>Fill out the form and your data will fill in a PDF</p>

                              <div class="form-group row">
                                    <div class="col-lg-6">
                                                <input type="text" name="fname" class="form-control" placeholder="First name">
                                    </div><br>

                                    <div class="col-lg-6">
                                                <input type="text" name="lname" class="form-control" placeholder="Surname" required>
                                    </div><br>
                              </div>

                              <div class="form-group row">

                                    <div class="col-lg-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div><br>

                                    <div class="col-lg-6">
                                                <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                    </div><br>

                              </div>
                              <div class="form-group">

                                   <textarea name="comment  " class="form-control" placeholder="Your comment" rows="10" cols="100" required></textarea>

                              </div><br>
                              <button onclick="displayAlert()">Send Email</button>

                        </form>
            </div>  
</body>
</html>
