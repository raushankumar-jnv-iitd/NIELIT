<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Events</title>
    <link rel="stylesheet" href="event.css">

</head>

<body>
      <!-- #region -->

      <?php include('./alumninav.php') ?>
      <br>
      <br>
      <br>
      <br>

       <div>
       <a> <h3 class="upevent"> Upcoming Event</h3></a>

       <a href="alumnieventsupload.php"><h3 class="postevent">Post Events</h3></a>
       </div>



             

    
        <div class="up">
\
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
                                          <br>
                                          <br>
                                          <?php
                                          
                                  }
                              
                              }

                              else
                              {
                                  echo"No events available";
                              }

        ?>
        </div>
        <?php include('./alumnifooter.php') ?>

</body>
</html>


