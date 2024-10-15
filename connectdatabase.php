<?php
$con=mysqli_connect('localhost','root','','xyz');
if($con)
{
    //echo"Connection successfully";
}
else
{
   // die(mysqli_error($con));
   echo"Not connected";

}
?>