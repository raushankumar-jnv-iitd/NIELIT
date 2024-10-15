<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="events.css">

</head>
<body>
</body>
</html>
<?php
include('connectdatabase.php');  

if(isset($_POST['eventspostbyadmin']))
{
    $id=$_POST['post_id'];
    //echo$deletid;


    $sql = "SELECT* FROM alumnievents WHERE id='$id'";
    

$query = $con->query("SELECT * FROM alumnievents Where id='$id'");

if($query)
{
    while($row = $query->fetch_assoc())
    {
            $id=$row['id'];       
            $date=$row['date'];
            $time=$row['time'];
            $venue=$row['venue'];
            $events=$row['events'];



            $sql2="insert into adminevents (date,time,venue,events) values('$date','$time','$venue', '$events')";
            // echo"$sql";
             $result=mysqli_query($con,$sql2);
         
             if($result)
             {
                 ?> <h3>Events Posted By Admin Successfull</h3><?php
                 header('Location:uploadedsuccess.html');

                // echo" Thank You Successfully uploaded events on Alumni portal ";
         
                // header('Location: adminsucces.html');
                // exit();                 
             }
             else
             {
                // header('Location: notregister.html');
                echo"Not uploaded on alumni portal";
         
             }
              
    }
}
else
{
    echo"No events available";
}
    
}
?>