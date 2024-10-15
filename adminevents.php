<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Events</title>
    <link rel="stylesheet" href="event.css">

</head>

<body>
<?php include('./adminnav.php') ?>

<br>
<br>
<br>
<br>


<div class="admin-event">
         <div class="admin-up">
          <h2>Upcoming Events</h2>
           <!-- #region -->
           <?php                 
                              include('connectdatabase.php');  
                              $query = $con->query("SELECT * FROM adminevents ORDER BY id DESC");

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
                                          <div class="">
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
                                          </div>
                                          <br>
                                          <form method="POST" action="admineventsdelet.php">
                  <input type ='hidden' name='delet_id' value="<?php echo $row['id'];?>">
                  <button type="submit" name="deletpost">Delet</button>
              </form>
                                          <br>
                                          <?php
                                          
                                  }
                              }
                              else
                              {
                              
                                ?> <h3>No events available</h3><?php
                              }
                              

        ?>

         </div>
         <div class="admin-post">
          <h2>Events Post</h2>
           <!-- #region -->
           <form method="post" action="alumnieventspost.php" id="usrform">
            <br>
            <br>
            <label>Date</label>
            <input type="date" name="date" required>
            <label>Time</label>
            <input type="time" name="time" required>
            <br>
            <label>Venue</label>
            <br>
            <input type="text"  placeholder=" Enter Venue with Full addres or Location" name="venue" required >
            <br>
            <br>
            <label>Explain Your Events</label>

            <br>
            <textarea form="usrform" name="events" rows="10" cols="50"> </textarea>
            <br>
            
            <button type="submit" name="submit">Post</button>
            <br>
            </form>

          </div>
        <div class="alumni-post">
          <h2>Events posted by Alumni</h2>
               <!-- #region -->
<?php
               
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
            <div>
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
            <?php
    }
  }
?>
        </div>
</div>

<?php include('./alumnifooter.php') ;?>

</body>
</html>

