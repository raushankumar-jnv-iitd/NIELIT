<?php
include 'connectdatabase.php';



$email=$_POST['email'];    
$cname = $_POST['cname'];
$provider = $_POST['provider'];
$year = $_POST['year'];


$sql = "insert into course (email, cname,provider,year) values ('$email','$cname', '$provider', '$year')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"All the Details Successfully updated  ";

      //  header('Location: successregister.html');
      //  ?><a href="./alumnihome.php">Go to Home Page Page</a><?php
      //  exit();
    
    }
    else
    {
     echo"not register";
     //  header('Location: notregister.html');
     // header('Location:notregister.html');

    }

?>
