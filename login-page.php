<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img class="logo" src="images/logo.png" alt="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="sheduling.html">Appointment</a></li>
                <li><a href="#">Blood Bank</a></li>
                <li><a href="#">Emergency Responses</a></li>
                <li><a href="#">Articles</a></li>
            </ul>
        </nav>
        
    </header>

    <form action="login.php" method="post" style="margin:50px 400px; padding: 30px; border:3px solid; border-radius: 10px">

            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?> 
                <label for="uname"><b>Enter Your Aadhar Number</b></label>
                <input type="text" placeholder="Enter Your Aadhar number" name="uname" required>

                <button type="submit">Login</button>
  
            </div>
    </form>
    
</body>
</html>