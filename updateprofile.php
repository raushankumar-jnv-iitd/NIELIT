<?php include('./alumninav.php') ?>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile12345.css">


</head>

<body>
    <div class="profile">
    <div>
  <h1>Education Details</h1>

  <div class="education-form">
    <label for="institution">Institution:</label>
    <input type="text" id="institution" required>

    <label for="degree">Degree:</label>
    <input type="text" id="degree" required>

    <label for="year">Year:</label>
    <input type="number" id="year" required>

    <input type="text" id="email" value="tanu@gmail.com" required>

    <button onclick="addEducation()">Add Education</button>
  </div>

  <h2>Education List</h2>
  <ul id="educationList" class="education-list"></ul>

  <script src="education.js"></script>
</div>
<br>
<br>
  <div>
    <h1>Work Experience Details</h1>

  <div class="experience-form">
    <label for="company">company:</label>
    <input type="text" id="company" required>

    <label for="position">position:</label>
    <input type="text" id="position" required>

    <label for="duration">duration:</label>
    <input type="number" id="duration" required>

    <input type="text" id="email" value="tanu@gmail.com" required>

    <button onclick="addExperience()">Add Experience</button>
  </div>

  <h2>Experience List</h2>
  <ul id="experienceList" class="experience-list"></ul>

  <script src="experience.js"></script>
  </div>

  <br>
  <br>
  <div>
   <h1> Bio</h1>
    <form action="bio.php" method="post">
        <input type="text"  name="bio" placeholder="Describe Yourself in one line">
        <input type="text" name="email" value="tanu@gmail.com" required>
        <button type="submit" name="submit">Submit</button>
    </form>
  </div>

  </div>
  <br>


  <div>
    <br>
    <br>
  </div>

</body>
</html>
<?php include('./alumnifooter.php') ?>

