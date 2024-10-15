
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
    <div class="im">
    <img src="<?php echo $imageURL; ?>" alt="not show bcz of error" />

    <form method="POST" action="admingallarydelet.php">
        <input type ='text' name='delet_id' value="<?php echo $row['id'];?>">
        <button type="submit" name="deletpost">Delet</button>
    </form>    
    </div>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } 

?>

           


