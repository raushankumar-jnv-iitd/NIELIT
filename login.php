<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Login</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <div class="bck">
        <div class="navvar">
            <div class="home">
                <a href="index.php">Home</a>
            </div>
            <div class="home">
                <a href="https://nielit.gov.in/nielit-news">Newsroom</a>

            </div>

        </div>
        <div class="head">
            <h1>Welcome To NIELIT Alumni Network </a></h1>
        </div>

    </div>
   

    <div class="login">
        <br>
        <h3>Alumni Login</h3>
        <br>
        <form action="alumnilogin.php" method="post">

            <input type="email" name="email" placeholder="Enter Email " required>
            <br>
            
            <input type="password" name="password" placeholder="Enter Password" required>
            <br>
        
            <button class="btn" type="submit" name="submit">Login</button>
            <br>
            <br>
        </form>
        <br>

        <div class="reg">
            <h4>If Not Register <a href="registerform.php"> Click Here</a></h4>
            <br>
            <h4>Forget Password<a href="forget.php"> Click Here</a></h4>
            <br>
            <h4>Only Admin <a href="admin.php"> Click Here</a></h4>
        </div>
         <br>
         <br>

    </div>
</body>
</html>
<?php include('./footer.php') ?>
