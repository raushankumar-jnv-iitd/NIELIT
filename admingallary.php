<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gallary</title>
    <link rel="stylesheet" href="gallery123.css">

</head>
<body>
<?php include('./adminnav.php') ?>

             <!-- #region -->
             <!-- #region -->


<div class="upload-admin">
                    <h3> Select Image  to Upload:</h3>
                <form action="gallaryuploads.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file_name" required>
                    
                    <input type="submit" name="submit" value="Upload">
                    <br>
                    <br>
                </form>
            </div>
        
      
      <div class="admin-gallary">

      

          <div class="admin">
            <br>
            <br>
        
            <h2>Gallery On Alumni Page</h2>
             
            <?php      
    include('connectdatabase.php');  
    
      
        //to prevent from mysqli injection  
        
// Include the database configuration file

// Get images from the database
$query = $con->query("SELECT * FROM admingallary ORDER BY file_name DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'alumniuploads/'.$row["file_name"];
?>
    <div class="">
    <img class="img" src="<?php echo $imageURL; ?>" alt="not show bcz of error" />

    <form method="POST" action="admingallarydelet.php">
        <input type ='hidden' name='delet_id' value="<?php echo $row['id'];?>">
        <button type="submit" name="deletpost">Delet</button>
    </form>    
    </div>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } 

?>
                                   

          </div>
<div class="admin">
            <br>
            <br>
            <h2>Image Uploaded By Alumni</h2>

            
        <?php      
    include('connectdatabase.php');  
    
        //to prevent from mysqli injection  
        
// Include the database configuration file

// Get images from the database
$query = $con->query("SELECT * FROM alumnigallary ORDER BY file_name DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'alumniuploads/'.$row["file_name"];
?>
    <div>
    <img class="img" src="<?php echo $imageURL; ?>" alt="not show bcz of error" />

    <form method="POST" action="admingallarydelet.php">
        <input type ='hidden' name='delet_id' value="<?php echo $row['id'];?>">
        <button type="submit" name="deletpost">Delet</button>
    </form>
    <form method="POST" action="admingallaryupload.php">
        <input type ='hidden' name='id' value="<?php echo $row['id'];?>">
        <button type="submit" name="post">Post</button>
    </form>
    </div><?php
     }
}
?>

          </div>
      

      </div>
      
      
</body>
</html>
<?php     include('./alumnifooter.php') ;?>



