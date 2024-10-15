<?php
// college
include 'connectdatabase.php';
echo"exp";


$email=$_POST['email'];    
$company = $_POST['company'];
$position = $_POST['position'];
$start = $_POST['start'];
$end = $_POST['end'];
echo"exp";


$sql = "insert into experience (email, company,position,start,end) values ('$email','$company', '$position', '$start', '$end')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Successfully Register  ";

      //  header('Location: successregister.html');
      //  ?><a href="./alumniprofile.php">Go to Login Page</a><?php
      //  exit();
    
    }
    else
    {
     echo"not register";
     //  header('Location: notregister.html');
     // header('Location:notregister.html');



    }

?>
