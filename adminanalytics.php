<?php 
include('connectdatabase.php'); 
include('./adminnav.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gallary</title>
    <link rel="stylesheet" href="analytics1234.css">

</head>
<body>
<br>
<br>
<br>
<br>
<div class="head">
    <h1>Analytics Of NIELIT Alumni Network</h1>
</div>
<form action="analyticssearch.php" method="post">
<div class="nav">
    
    <div>
    <input type="search" name="pass" placeholder="Enter Passing Year">

    </div>
    <div>
    <input type="text" name="courseID" placeholder="Enter CourseID">

    </div>
    <div>
    <input type="text" name="courseName" placeholder="Enter CourseName">
    </div>
    <div>
    <input type="text" name="type" placeholder="Enter Enrolnment Type">
    </div>
    <div>
    <input type="text" name="instName" placeholder="Enter Institute Name">
    </div>
   
    <button type="submit" name="submit">Search</button>
</div>
</form>
<form action="analyticssearch.php" method="post">
<div class="user">
    
    <div>
    <input type="radio" name="search" value="login" required>Login
    </div>
    <div>
    <input type="radio" name="search" value="user" required>user
    </div>
    <button type="submit" name="user">Search</button>
</div>
</form>
</body>
</html>
<br>
<br>
<br>


<br>
<br>
<br>
<br>
<br>
