<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile123.css">


</head>

<body>
<?php include('./alumninav.php') ?>
<div class="bck">
<br>
<br>
<br>
<br>



<?php
if(isset($_POST['submit']))
{
           $email=$_POST['email'];
          //  echo $email; 


    include('connectdatabase.php');  
    
      
            //to prevent from mysqli injection  
            
    // Include the database configuration file
    
    // Get images from the database
    $query = $con->query("SELECT * FROM pic ORDER BY email DESC");
    $count=0;
    if($query->num_rows > 0)
    {
        while($row = $query->fetch_assoc())
        {
           if($row['email']==$email)
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
                  <br>
                  <div>
                  <img class="pic" src="<?php echo $images[$count-1]; ?>" alt="upload image" />
                  <div class="details">
                    <div >
                      <a class="link">Joined Date :-
                    <?php  
                                   $sql = "SELECT * FROM user WHERE email='$email'";

                                   // Execute the query
                                   $result = $con->query($sql);
                                   
                                   // Check if any results were found
                                   if ($result->num_rows > 0)
                                    {
                                       // Loop through the results and output them
                                       while ($row = $result->fetch_assoc()) {
                                           // Output the data       
                                           $joined=$row['joined'];
                                          
                                       }
                                       
                                       echo$joined;
                                    }
                                  
                    
                    ?>
                      </a>
                    </div>
                 

               
                   </div>

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
<div>

<div class="details">
    <div>
      Education
      
      <br>
<?php
     // echo$email;
    
  $sql = "SELECT * FROM education WHERE email='$email'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) {
    // Loop through the results and output them
    while ($row = $result->fetch_assoc()) {
        // Output the data       
        $email=$row['email'];
        $cname=$row['cname'];
        $cdegree=$row['cdegree'];
        $cmajor=$row['cmajor'];
        $cpass=$row['cpass'];
    }
      
      ?> 
      <div>
        <p>College Name :-<?php echo$cname  ?></p>
        
        <br>
        <p>Degree :- <?php echo$cdegree ?> </p>
        <br>
        <p>Major :-        <?php echo$cmajor ?></p>
        <br>
        <p>Passing Year :         <?php echo$cpass ?></p>
        <br>

      </div>
      <?php
   
   
}
?>
    </div>
    <div>
         Experince
         <?php
     // echo$email;
    
  $sql = "SELECT * FROM experience WHERE email='$email'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) {
    // Loop through the results and output them
    while ($row = $result->fetch_assoc()) {
        // Output the data
               
        $email=$row['email'];
        $company=$row['company'];
        $position=$row['position'];
        $start=$row['start'];
        $end=$row['end'];
        /*
        $cname=$row['cname'];
        $cdegree=$row['cdegree'];
        $cmajor=$row['cmajor'];
        $cpass=$row['cpass'];
        */
    }
      
      ?> 
      
      <div>
        
        <p>Company Name :-<?php echo$company ?></p>
        
        <br>
        <p>Position :- <?php echo$position ?> </p>
        <br>
        <p>Start Year :-        <?php echo$start ?></p>
        <br>
        <p>End Year :         <?php echo$end ?></p>
        <br>

      </div>
      <?php
}
?>
    </div>

    <div>
      Courrse
      <?php
     // echo$email;
    
  $sql = "SELECT * FROM course WHERE email='$email'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) {
    // Loop through the results and output them
    while ($row = $result->fetch_assoc()) {
        // Output the data       
        $email=$row['email'];
        $cname=$row['cname'];
        $provider=$row['provider'];
        $year=$row['year'];
    }
      
      ?> 
      <div>
        <p>Course Name :-<?php echo$cname  ?></p>
        
        <br>
        <p>Course Provider :- <?php echo$provider ?> </p>
        <br>
        <p>Completion Year :-<?php echo$year ?></p>
        <br>
        <br>

      </div>
      <?php
      
}
}
?>
    </div>
  
  
  
</div>
</div>
</div>

</body>
</html>
<?php include('./alumnifooter.php') ?>



    

