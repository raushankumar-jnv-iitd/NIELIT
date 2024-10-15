
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Alumni Details</title>
    <link rel="stylesheet" href="update123.css">

</head>

<body>
<?php include('./alumninav.php') ?>
<br>
<br>
<br>
<br>


<?php
if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
    echo"Hello";
    echo$email;

//cdegre -college name,degre,passing year
    ?>
    
    <div class="main">  
    
    <div class="update">
        <h1>Education Details</h1>
        
        <div>
            <form method="post" action="education.php">
            <h3>College/University</h3>
            <input type="text" name="email" value="<?php echo$email?>">

            <table>
                <tr>
                    <td><label for="school">College Name</label></td>
                    <td><input type="text" id="school" name="cname" ></td>
                </tr>
                <tr>
                    <td><label for="degree">Degree:</label></td>
                    <td><input type="text" id="degree" name="cdegree" ></td>
                </tr>
                <tr>
                    <td><label for="major">Major:</label></td>
                    <td><input type="text" id="major" name="cmajor"></td>
                </tr>
                <tr>
                    <td><label for="startYear">Passing Year:</label></td>
                    <td><input type="number" id="startYear" name="cpass" min="1900" max="2099" ></td>
                </tr>
                
            </table>
            <h3>12th School/College</h3>
        
            <table class="table">
                <tr>
                    <td><label for="school">School Name</label></td>
                    <td><input type="text" id="school" name="ischool" ></td>
                </tr>
                <tr>
                    <td><label for="degree">Board Name:</label></td>
                    <td><input type="text" id="degree" name="iboard" ></td>
                </tr>
                <tr>
                    <td><label for="major">Percentage</label></td>
                    <td><input type="text" id="major" name="ipercent"></td>
                </tr>
                <tr>
                    <td><label for="startYear">Passing Year:</label></td>
                    <td><input type="number" id="startYear" name="ipass" min="1900" max="2099" ></td>
              </tr>
            </table>
            <h3>10th School</h3>
            <table class="table">
                <tr>
                    <td><label for="school">School Name</label></td>
                    <td><input type="text" id="school" name="hschool" ></td>
                </tr>
                <tr>
                    <td><label for="degree">Board Name:</label></td>
                    <td><input type="text" id="degree" name="hboard" ></td>
                </tr>
                <tr>
                    <td><label for="major">Percentage</label></td>
                    <td><input type="text" id="major" name="hpercent"></td>
                </tr>
                <tr>
                    <td><label for="startYear">Passing Year:</label></td>
                    <td><input type="number" id="startYear" name="hpass" min="1900" max="2099" ></td>
                </tr>
            </table>
            
            <button class="btn"  name="submit">Submit</button>
            </form>
        </div>
       
    </div>
<div>
<h1>Experience Details</h1>

 <form action="experience.php" method="post">

 <input type="text" name="email" value="<?php echo$email?>">

<table>
    <tr>
        <td><label for="company">Company:</label></td>
        <td><input type="text" id="company" name="company" required></td>
    </tr>
    <tr>
        <td><label for="position">Position:</label></td>
        <td><input type="text" id="position" name="position" required></td>
    </tr>
    <tr>
        <td><label for="startYear">Start Year:</label></td>
        <td><input type="number" id="startYear" name="start" min="1900" max="2099" required></td>
    </tr>
    <tr>
        <td><label for="endYear">End Year:</label></td>
        <td><input type="number" id="endYear" name="end" min="1900" max="2099"></td>
    </tr>
   
</table>

<input type="submit" value="Submit">
</form>
</div>

<div>
<h1>Certificate Course Details</h1>
    <form action="course.php" method="post">
    <input type="text" name="email" value="<?php echo$email?>">

<table>
    <tr>
        <td><label for="courseName">Course Name:</label></td>
        <td><input type="text" id="courseName" name="cname" required></td>
    </tr>
    <tr>
        <td><label for="provider">Course Provider:</label></td>
        <td><input type="text" id="provider" name="provider" required></td>
    </tr>
    <tr>
        <td><label for="completionYear">Completion Year:</label></td>
        <td><input type="number" id="completionYear" name="year" min="1900" max="2099"
                required></td>
    </tr>
  
</table>

<input type="submit" value="Submit">
</form>
</div>

</div>
<?php
    
}
?>
    
 
</body>

</html>
<?php include('./alumnifooter.php') ;?>
