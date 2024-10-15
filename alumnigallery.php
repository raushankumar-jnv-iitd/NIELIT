<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallary</title>
        <link rel="stylesheet" href="gallery123.css">

</head>
    <body>
    <?php include('./alumninav.php') ?>
     <br>
     <br>
     <br>
     <br>
     <a class="gallery-upload-alumni" href="alumnigalleryupload.php"><h6>Upload Image</h6></a>  
     
       <div class="gallery">
         <!-- #region -->
         <?php      
        include('connectdatabase.php');  
        $query = $con->query("SELECT * FROM admingallary ORDER BY file_name DESC");
         if($query->num_rows > 0)
        {
           ?> <div class="main"> <?php

                while($row = $query->fetch_assoc())
                {
                    $imageURL = 'alumniuploads/'.$row["file_name"];
                  ?>  <img class="pic" src="<?php echo $imageURL; ?>" alt="not show bcz of error" /><?php
                }
       }
       else
       { 
          ?> <p>No image(s) found...</p><?php
       } 
            
       ?>

     </div>
    </div>

           
    </body>

 </html>
<?php include('./alumnifooter.php') ?>

