<?php      
 
        include('connectdatabase.php'); 

        if(isset($_POST["submit"]))
        {
                $email=$_POST['email'];  
                echo$email;

                $password=$_POST['password'];  
                echo$password;
              
                //to prevent from mysqli injection  
                $email = stripcslashes($email);  
                $password = stripcslashes($password);  
                $email = mysqli_real_escape_string($con, $email);  
                $password = mysqli_real_escape_string($con, $password);  
              
                $sql = "select *from user where email = '$email' and password = '$password'";  
                $result = mysqli_query($con, $sql);  
               // echo$result;
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                //echo$count;
                if($count==1){  
                    echo "<h1>welcome $email</h1>";
                    $time=
                   session_start();
                   $_SESSION['email'] = $email;
                   
                   
// Set the default time zone
                   date_default_timezone_set('Asia/Kolkata');

// Get the current time
                     $current_date = date('Y-m-d H:i:s');
                     $current_time = date(' H:i:s');



// Output the current time
//echo "Current time in Indian Time Zone: " . $current_date;
//echo "Current time in Indian Time Zone: " . $current_time;
$sql="insert into loginalumni (email,time,date) values('$email','$current_time','$current_date')";

$result=mysqli_query($con,$sql);
echo$result;
if($result)
{
   // echo"Successfully time store  ";

  //  header('Location: successregister.html');
  //  ?><a href="./login.html">Go to Login Page</a><?php
  //  exit();

}
else
{
 echo"not register";
 //  header('Location: notregister.html');
 // header('Location:notregister.html');



}


                    header('Location: alumnimain.php');
                }  
                else{ 
                               // header('Location: loginfail.html');
                               echo"Not Login ";
                           //   header('Location:notlogin.html');
         
                }     
        }

           
    
?>
