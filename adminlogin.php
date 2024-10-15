<?php      
 
        include('connectdatabase.php'); 

        if(isset($_POST["submit"]))
        {
                $email = $_POST['email'];  
                $password = $_POST['password'];  
              
                //to prevent from mysqli injection  
                $email = stripcslashes($email);  
                $password = stripcslashes($password);  
                $email = mysqli_real_escape_string($con, $email);  
                $password = mysqli_real_escape_string($con, $password);  
              
                $sql = "select *from admin where email = '$email' and password = '$password'";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                if($count==1){  
                   // echo "<h1>welcome $email</h1>";
                   session_start();
                   $_SESSION['email'] = $email;
                    header('Location: adminmain.php');
                }  
                else{ 
                               // header('Location: loginfail.html');
                              // echo"Not Login ";
                              header('Location:notlogin.html');

         
                }     
        }

           
    
?>
