<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./index.css">

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
       

    </div>
    <div class="head">
        <h1>Welcome To NIELIT Alumni Network </h1>
    </div>
    <div class="login-admin">
          <h2>Admin Login <br></h2>
        <form action="adminlogin.php" method="post">
            <input type="email" name="email" placeholder="Enter Email "required>
            <br>
            <input type="password" name="password" placeholder="Enter Password" required>
            <br>
            <br>
            <button class="btn" type="submit" name="submit">Login</button>

        </form>
    </div>
</body>
</html>
<?php include('./footer.php') ?>
