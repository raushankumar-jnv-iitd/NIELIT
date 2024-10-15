<?php
include 'connectdatabase.php';
$statusMsg = '';
if(isset($_POST['submit']))
{
    $file= $_FILES['file_name'];
    $email=$_POST['pEmail'];
   // print_r($file);
    $fileName=$_FILES['file_name']['name'];
    $fileTmpName=$_FILES['file_name']['tmp_name'];
    $fileSize=$_FILES['file_name']['size'];
    $fileType=$_FILES['file_name']['type'];
    $fileError=$_FILES['file_name']['error'];

    $fileExp=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExp));
    $allowed=array('jpg','jpeg','png','pdf');

    if(in_array($fileActualExt,$allowed))
    {
       if($fileError==0)
       {
        if($fileSize<1000000)
        {
            $fileNameNew=uniqid('',true).".".$fileActualExt;
            $fileDestination='uploads/'.$fileNameNew;

            if(move_uploaded_file($fileTmpName, $fileDestination)){
               
               $sql="insert into pic (file_name,email) values('$fileNameNew','$email')";
               $result=mysqli_query($con,$sql);
           
                if($result){
                    echo"The file ".$fileName. " has been uploaded successfully.";
                   // header('Location:uploadedsuccess.html');

                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
          
    }
}
    }
}
?>