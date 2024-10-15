<?php
 include('connectdatabase.php'); 

// Retrieve data from the HTTP POST request
$company = $_POST['company'];
$position = $_POST['position'];
$duration = $_POST['duration'];
$email=$_POST['email'];

// Insert the data into the database
$sql = "INSERT INTO experience (company, position, duration,email) VALUES ('$company', '$position', '$duration' ,'$email')";

if ($con->query($sql) === TRUE) {
    echo "Education details saved successfully.";
} else {
    echo "Error: ";
}

$conn->close();
?>
