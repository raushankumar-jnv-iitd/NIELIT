<?php
 include('connectdatabase.php'); 

// Retrieve data from the HTTP POST request
$institution = $_POST['institution'];
$degree = $_POST['degree'];
$year = $_POST['year'];
$email=$_POST['email'];

// Insert the data into the database
$sql = "INSERT INTO education (institution, degree, year,email) VALUES ('$institution', '$degree', '$year' ,'$email')";

if ($con->query($sql) === TRUE) {
    echo "Education details saved successfully.";
} else {
    echo "Error: ";
}

$conn->close();
?>
