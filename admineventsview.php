<?php
?> <link rel="stylesheet" href="profile.css"><?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="events.css">

</head>
<body>
   <!-- #region -->



   <div class="upload">
        <br>
        <h1> Post  an Events</h1>

        <br>
        <br>
        <form method="post" action="alumnieventspost.php">
            <br>
            <br>
            <label>Date</label>
            <input type="date" name="date" required>
            <label>Time</label>
            <input type="time" name="time" required>
            <br>
            <label>Venue</label>
            <br>
            <input type="text"  placeholder=" Enter Venue with Full addres or Location" name="venue" required>
            <br>
            <br>
            <label>Explain Your Events</label>
            <br>
            <br>
            <textarea form="usrform" name="events" rows="10" cols="50" required> </textarea>
            <br>
            <br>
            <button type="submit" name="submit">Post</button>
            <br>
        </form>
    </div>
</body>
</html>

<?php
include('connectdatabase.php');  


if(isset($_POST['show_the_events']))
{
    
  ?> <h1>Events Posted By Alumni</h1><?php

    //to prevent from mysqli injection  
    
// Include the database configuration file

// Get images from the database
$query = $con->query("SELECT * FROM alumnievents ORDER BY id DESC");

if($query->num_rows > 0)
{
    while($row = $query->fetch_assoc())
    {
            $id=$row['id'];       
            $date=$row['date'];
            $time=$row['time'];
            $venue=$row['venue'];
            $events=$row['events'];
            

            ?>
            <div class="main">
              <br>
                <?php echo"Date :";?>
                <?php echo"$date";?>
              <br>
              <br>
                <?php echo"Time :";?>
                <?php echo"$time";?>
              <br>
              <br>
                <?php echo"Venue/Address:-";?>
                <?php echo"$venue";?>
              <br>
              <br>
                <?php echo"Events Name :-";?>
                <?php echo"$events";?>
              <br>
              <br>
              <form method="POST" action="admineventsdelet.php">
                  <input type ='hidden' name='delet_id' value="<?php echo $row['id'];?>">
                  <button type="submit" name="deletpost">Delet</button>
              </form>
              <form method="POST" action="admineventspost.php">
                  <input type ='hidden' name='post_id' value="<?php echo $row['id'];?>">
                  <button type="submit" name="eventspostbyadmin">Post</button>
              </form>
            </div>
            <br>
            <?php
    }
}
else
{
      
         

         ?> <h1>No events available</h1><?php

     
}
}
?>