<?php
// college
include 'connectdatabase.php';

if(isset($_POST['submit']))
{
$email=$_POST['email'];    
$cname = $_POST['cname'];
$cdegree = $_POST['cdegree'];
$cmajor = $_POST['cmajor'];
$cpass = $_POST['cpass'];

//12th
$ischool = $_POST['ischool'];
$iboard = $_POST['iboard'];
$ipercent = $_POST['ipercent'];
$ipass = $_POST['ipass'];
//10th
$hschool = $_POST['hschool'];
$hboard = $_POST['hboard'];
$hpercent = $_POST['hpercent'];
$hpass = $_POST['hpass'];




//database connecttion


// Prepare and execute the SQL query
//$sql = "insert into education (cname, cdegree, cmajor,cpass,ischool,iboard,ipercent,ipass,hschool,hboard,hpercent,hpass) values ('$cname', '$cdegree', '$cmajor', $cpass, $ischool, '$iboard','$ipercent','$ipass', $hschool, '$hboard','$hpercent','$hpass')";
   $sql="insert into education (email,cname,cdegree,cmajor,cpass,ischool,iboard,ipercent,ipass,hschool,hboard,hpercent,hpass) values('$email','$cname','$cdegree','$cmajor','$cpass','$ischool','$iboard','$ipercent','$ipass','$hschool','$hboard','$hpercent','$hpass')";
   // echo$sql;
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Successfully Register  ";
                    //  ?><a href="./alumniprofile.php">Now Fill the Next Section </a><?php


       // header('Location: index.php');

      //  exit();
    
    }
    else
    {
     echo"not register";
     //  header('Location: notregister.html');
     // header('Location:notregister.html');



    }
}
?>
