<?php
include'connectdatabase.php';
if(isset($_POST['post']))
{
    $id=$_POST['id'];
    //echo$deletid;


    $sql = "SELECT* FROM alumnigallary WHERE id='$id'";
    

$query = $con->query("SELECT * FROM alumnigallary Where id='$id'");

if($query)
{
    while($row = $query->fetch_assoc())
    {
            $id=$row['id'];       
            $file_name=$row['file_name'];
        



            $sql2="insert into admingallary (file_name) values('$file_name')";
            // echo"$sql";
             $result=mysqli_query($con,$sql2);
         
             if($result)
             {
                 ?> <h3>Image uploaded on alumni portal  By Admin Successfull</h3><?php
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



