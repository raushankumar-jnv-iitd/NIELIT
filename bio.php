<?php 
 include('connectdatabase.php'); 

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $bio=$_POST['bio'];
    echo$email;
    echo$bio;
    $sql = "insert into biointro (email,bio) values ('$email','$bio')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Successfully Update ALL Details ";
    
    }
}

?>