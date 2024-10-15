<?php
include'connectdatabase.php';
if(isset($_POST['submit']))
{
    $date=$_POST['date'];
    $time=$_POST['time'];
    $venue=$_POST['venue'];
    $events=$_POST['events'];


    $sql="insert into alumnievents (date,time,venue,events) values('$date','$time','$venue', '$events')";
   // echo"$sql";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        echo" Thank You Successfully uploaded events ";
        header('Location:uploadedsuccess.html');


       // header('Location: adminsucces.html');
       // exit();
    }
    else
    {
       // header('Location: notregister.html');

    }
}
?>


