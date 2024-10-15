<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="member.css">


</head>
<body>
<?php include('./adminnav.php') ?>
<br>
<br>
<br>
<br>
</body>
</html>
<?php
include 'connectdatabase.php';

//include 'alumnimember.php';

?> 
 

 <div class="search">
    <h3>Admin Search</h3>
    
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

  <?php


if(isset($_POST['pPassingYear']))
{
        //echo"if cond";
        $coures=$_POST['pPassingYear'];
        $sql="SELECT *FROM alumni where pPassingYear='$coures'";
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
                    
            $email=$row['pEmail'];

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
                    ?><br><?php
            
                   
                }
          
            }
            ?>
            <div class="main-search">
              <br>
              <br>
              <br>
                  <img class="pic" src="<?php echo $imageURL; ?>" alt="profile image" />
                  <br>
              <br>
              <br>
                <?php echo" Name :-";?>
                <?php echo"$pName";?>
              <br>
           
              <br>
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
              <br>
              <form method="post" action="adminmoredetails.php">
            <input type="hidden" name="email"   value="<?php echo$email ?>">
            <button type="submit" name="submit">More Details</button>
           </form>
            </div>
            <br>
            <br>
            <?php
           
          }
        }
        
    
}
if(isset($_POST['pCourseID']))
{
        //echo"if cond";
        $coures=$_POST['pCourseID'];
        $sql="SELECT *FROM alumni where pCourseID='$coures'";
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
                     


            $email=$row['pEmail'];

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
                    ?><br><?php
            
                   
                }
          
            }
            ?>
            <div class="main-search"> 

              <br>
              <br>
              <br>
                  <img class="pic" src="<?php echo $imageURL; ?>" alt="profile image" />
                  <br>
              <br>
              <br>
                <?php echo" Name :-";?>
                <?php echo"$pName";?>
              <br>
             
              <br>
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
              <br>
              <form method="post" action="adminmoredetails.php">
            <input type="hidden" name="email"   value="<?php echo$email ?>">
            <button type="submit" name="submit">More Details</button>
           </form>
            </div>
            <br>
         
            <br>
            <?php
          }
        }
        
}
include('./alumnifooter.php') ;

?>




