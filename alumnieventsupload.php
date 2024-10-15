<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="event.css">

</head>
<body>
<?php include('./alumninav.php') ?>

        <br>
        <br>
        <br>
        <br>
            <div class="post">
            <form method="post" action="alumnieventspost.php" id="usrform">
             <table class="table">   
            <tr>
             <td>Name</td>
             <td> <input type="text" name="name" placeholder="Enter Name"></td>
             <br>
            </tr>
            <tr>
             <td>Email</td>
             <td><input type="email" name="email" placeholder="Enter Email"></td>
             <br>
            </tr>
            <tr>
             <td>Contact No-</td>
             <td><input type="text" name="mobileNo" placeholder="Enter MobileNumber"></td>
             <br>
            </tr>
            <tr>
            <td>Date</td>
             <td><input type="date" name="date" required></td>
             <br>
           </tr>
           <tr>
            <td>Time</td>
            <td> <input type="time" name="time" required></td>
            <br>
           </tr>
            <tr>
            <td>Venue</td>
            
             <td><input type="text"  placeholder=" Enter Venue with Full addres or Location" name="venue" required ></td>
            </tr>
            <tr>
             <td>Explain Your Events</td>
             <td><textarea form="usrform" name="events" rows="10" cols="50"> </textarea></td>
            </tr>
            <tr>
            <td> <button class="btn" type="submit" name="submit">Post</button></td>
             </tr>
             </table> 
            </form>
            </div>
<?php include('./alumnifooter.php') ?>

</body>
</html>