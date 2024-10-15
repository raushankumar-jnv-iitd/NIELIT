<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">


</head>

<body>

<?php include('./alumninav.php') ?>
<br>
<br>
<br>
<br>


<?php

            session_start();
            include("alumnilogin.php");
            error_reporting(E_ALL);
            ini_set('display error', 1);
            $email = $_SESSION['email'];
          //  echo $email; 


    include('connectdatabase.php');  
    
      
            //to prevent from mysqli injection  
            
    // Include the database configuration file
    
    // Get images from the database
    $query = $con->query("SELECT * FROM pic ORDER BY pEmail DESC");
    $count=0;
    if($query->num_rows > 0)
    {
        while($row = $query->fetch_assoc())
        {
           if($row['pEmail']==$email)
           {
            $imageURL = 'uploads/'.$row["file_name"];
    
            $images[$count]=$imageURL;
            $count=$count+1;
           }
        }
    }
    else
    { 
      ?><p>No image(s) found...</p><?php 
    } 
            $sql="SELECT *FROM alumni where pEmail='$email'";
            $result=mysqli_query($con,$sql);
           // echo $result;
            if(mysqli_num_rows($result)>0)
            {
              while($row=mysqli_fetch_array($result))
              {
                $id=$row['id'];       
                $pName=$row['pName'];
                $pMobile=$row['pMobile'];
                $pPassingYear=$row['pPassingYear'];
                $pEmail=$row['pEmail'];
                $pCourseID=$row['pCourseID'];
               ?>

                
                <div class="main">
                  <div class="edit">
                    <br>
                    <br>
                  <a class ="link">Update</a> 
                  <a class="link">Upload</a>
                  </div>

                  <br>
                  <div>
                  <img class="pic" src="<?php echo $images[0]; ?>" alt="upload image" />
                  </div>
                  <br>
                  <br>
                  <div class="name">
                   <h1> <?php echo"$pName";?> </h1>
                   <br>
                   <br>
                  </div>
                
              <div class="passing">
              <?php echo"Passing Year :-";?>
                <?php echo"$pPassingYear";?>
              <br>
              <br>
                <?php echo"Email :-";?>
                <?php echo"$pEmail";?>
              <br><br>
                <?php echo"CourseID :-";?>
                <?php echo"$pCourseID";?>
              <br>
              </div>
              
                </div>
                <?php

              }
             
            }
?>


</body>
</html>
<?php include('./alumnifooter.php') ?>


    

