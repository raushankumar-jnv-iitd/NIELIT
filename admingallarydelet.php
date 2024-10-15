<?php
include('connectdatabase.php');  
if(isset($_POST['deletpost']))
{
    $id=$_POST['delet_id'];
    echo"$id";
    //echo$deletid;

    $sql = "DELETE FROM alumnigallary WHERE id='$id'";
    $sql1 = "DELETE FROM admingallary WHERE id='$id'";

    $result=mysqli_query($con,$sql);

if ($result) 
{
    echo"$id";

  echo "Events deleted successfully";
  header('Location:deletsuccess.html');

}
 else
{

  echo "Error deleting record: ";
}  

$result1=mysqli_query($con,$sql1);

if ($result1) 
{
    echo"$id";

  echo "Events deleted successfully";
}
 else
{
  echo "Error deleting record: ";
}  
}
?>



