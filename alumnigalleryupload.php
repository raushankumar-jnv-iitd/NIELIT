<?php include('./alumninav.php') ?>
<link rel="stylesheet" href="gallery123.css">

<br>
<br>
<br>
<br>

<div class="uploads">
<form action="gallaryuploads.php" method="post" enctype="multipart/form-data">
                  <label>Name:-<input type="text" name="name" placeholder="Enter Name" ></label>
                  <br>
                  <label>Email:- <input type="text" name="email" placeholder="Enter Email"></label>
                 <br>
                   <label>Select Image:-<input type="file" name="file_name" required></label>
                    <br>

                    <input type="submit" name="submit" value="Upload">
</form>
</div>

<?php include('./alumnifooter.php') ?>
