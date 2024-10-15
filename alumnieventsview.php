<?php
?> <link rel="stylesheet" href="profile.css"><?php

include('connectdatabase.php');  
  ?> <h1>Upcoming Events </h1><?php

    //to prevent from mysqli injection  
    
// Include the database configuration file

// Get images from the database
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
            </div>
            <?php
    }
}
else
{
    echo"No events available";
}

?>