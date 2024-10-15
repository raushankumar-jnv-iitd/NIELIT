<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Member</title>
    <link rel="stylesheet" href="member.css">

</head>
<body>

</body>
<?php include('./adminnav.php') ?>

<?php

   include('connectdatabase.php');  
  ?> 
  <br>
  <br>
  <br>
  <br>

  <div class="search">
    <h3>Alumni Search</h3>
    
  <form method="post" action="adminsearch.php">
    <label>
      <input type="text" name="pPassingYear" placeholder="Enter Passing Year">
    </label>
    <br>
    <label>
      <input type="text" name="pCourseID" placeholder="Enter CourseID">
    </label>
    <br>
    <button type="submit">Submit</button>
  </form>
 
   </div>
</body>
</html>
   
  <?php


    //to prevent from mysqli injection  
    
    
// Include the database configuration fil

/*

$query1 = $con->query("SELECT * FROM pic ORDER BY pEmail DESC");
$count=0;
if($query1->num_rows > 0)
{
    while($row = $query1->fetch_assoc())
    {
       // echo$row['pEmail'];
        $imageURL = 'uploads/'.$row["file_name"];
       // echo$imageURL;
        $images[$count]=$imageURL;
        $count=$count+1;
        ?><br><?php

       
    }
  }
  */

// Get images from the database
$query = $con->query("SELECT * FROM alumni ORDER BY pEmail DESC");
//$query1 = $con->query("SELECT * FROM pic ORDER BY pEmail DESC");
$count1=0;
if($query->num_rows > 0)
{
    ?><div class="main"> <?php
    while($row = $query->fetch_assoc() )
    {
       $email=$row['pEmail'];
       ?><div class="maint"><?php

       ?>
       <?php
         $query1 = $con->query("SELECT * FROM pic where email='$email'");
          $count=0;
          if($query1->num_rows > 0)
          {
              while($row1 = $query1->fetch_assoc())
              {
                 // echo$row['pEmail'];
                  $imageURL = 'uploads/'.$row1["file_name"];
                 // echo$imageURL;
                 // $images[$count]=$imageURL;
                 // $count=$count+1;
          
              }
        
          }
          ?>
          <br>           <br>

             <img class="pic" src="<?php echo $imageURL; ?>" alt="profile image" />
         <br>           <br>

         <?php echo"Name-";?>
           <?php echo"$row[pName]";?>
         <br>           <br>

          <?php echo"Passing Year-";?>
           <?php echo"$row[pPassingYear]";?>
           <br>           <br>


          <?php echo"Email-";?>
           <?php echo"$row[pEmail]";?>
           <br>           <br>

             
           <br>
           <form method="post" action="adminmoredetails.php">
            <input type="hidden" name="email"   value="<?php echo$email ?>">
            <button type="submit" name="submit">More Details</button>
           </form>
       <?php

       

       ?> </div><?php



    }
  }
    ?></div><?php
    include('./alumnifooter.php') ;


