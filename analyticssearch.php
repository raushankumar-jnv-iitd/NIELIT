
<?php
 include('connectdatabase.php'); 
 include('adminanalytics.php');


if(isset($_POST['user']))
{
    $search=$_POST['search'];
    $user="user";
    $login="login";
if($search==$user)
{
      
$query = $con->query("SELECT * FROM user ORDER BY id DESC");
//$query1 = $con->query("SELECT * FROM pic ORDER BY pEmail DESC");
if($query->num_rows > 0)
{
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passing Year</th>
                    <th>Institute Name</th> 
                    <th>CourseName</th>
                    <th>CourseCategory</th>
                    <th>CourseID</th>
                    <th>EnrolmentType</th>

                    <th>Mobile Number</th>
          <?php

    while($row = $query->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>    <td><?php echo$count ?></td>
                <td> <?php echo$row['name'] ?> </td>
        
                <td> <?php echo$row['email'] ?> </td>
      
                <td> <?php echo$row['yearPassing'] ?> </td>
                <td> <?php echo$row['instName'] ?> </td>

                <td> <?php echo$row['courseName'] ?> </td>
                <td> <?php echo$row['courseCategory'] ?> </td>
                <td> <?php echo$row['courseId'] ?> </td>
                <td> <?php echo$row['enrolmentType'] ?> </td>

                <td> <?php echo$row['mobileNo'] ?> </td>




        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

  }
}
  

if($search==$login)
{
    
$query = $con->query("SELECT * FROM loginalumni ORDER BY id DESC");
//$query1 = $con->query("SELECT * FROM pic ORDER BY pEmail DESC");
if($query->num_rows > 0)
{
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th> 
          <?php

    while($row = $query->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>     <td><?php echo$count ?></td>
                <td> <?php echo$row['email'] ?> </td>
        
                <td> <?php echo$row['date'] ?> </td>
      
                <td> <?php echo$row['time'] ?> </td>
        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

  }
}
}


if(isset($_POST['submit']))
{
    $pass=$_POST['pass'];
    $courseId=$_POST['courseID'];
    $courseName=$_POST['courseName'];
    $enrolmentType=$_POST['$enrolmentType'];
    $instName=$_POST['instName'];


 
$sql = "SELECT * FROM user WHERE yearPassing='$pass'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) 
{
    // Loop through the results and output them
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passing Year</th>
                    <th>Institute Name</th> 
                    <th>CourseName</th>
                    <th>CourseCategory</th>
                    <th>CourseID</th>
                    <th>enrolmentType</th>
                    <th>Mobile Number</th>
          <?php

    while($row = $result->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>    <td><?php echo$count ?></td>
                <td> <?php echo$row['name'] ?> </td>
        
                <td> <?php echo$row['email'] ?> </td>
      
                <td> <?php echo$row['yearPassing'] ?> </td>
                <td> <?php echo$row['instName'] ?> </td>

                <td> <?php echo$row['courseName'] ?> </td>
                <td> <?php echo$row['courseCategory'] ?> </td>
                <td> <?php echo$row['courseId'] ?> </td>
                <td> <?php echo$row['enrolmentType'] ?> </td>
                <td> <?php echo$row['mobileNo'] ?> </td>




        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

}

$sql = "SELECT * FROM user WHERE courseId='$courseId'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) 
{
    // Loop through the results and output them
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passing Year</th>
                    <th>Institute Name</th> 
                    <th>CourseName</th>
                    <th>CourseCategory</th>
                    <th>CourseID</th>
                    <th>enrolmentType</th>

                    <th>Mobile Number</th>
          <?php

    while($row = $result->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>    <td><?php echo$count ?></td>
                <td> <?php echo$row['name'] ?> </td>
        
                <td> <?php echo$row['email'] ?> </td>
      
                <td> <?php echo$row['yearPassing'] ?> </td>
                <td> <?php echo$row['instName'] ?> </td>

                <td> <?php echo$row['courseName'] ?> </td>
                <td> <?php echo$row['courseCategory'] ?> </td>
                <td> <?php echo$row['courseId'] ?> </td>
                <td> <?php echo$row['enrolmentType'] ?> </td>

                <td> <?php echo$row['mobileNo'] ?> </td>




        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

}


$sql = "SELECT * FROM user WHERE courseName='$courseName'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) 
{
    // Loop through the results and output them
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passing Year</th>
                    <th>Institute Name</th> 
                    <th>CourseName</th>
                    <th>CourseCategory</th>
                    <th>CourseID</th>
                    <th>enrolmentType</th>

                    <th>Mobile Number</th>
          <?php

    while($row = $result->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>    <td><?php echo$count ?></td>
                <td> <?php echo$row['name'] ?> </td>
        
                <td> <?php echo$row['email'] ?> </td>
      
                <td> <?php echo$row['yearPassing'] ?> </td>
                <td> <?php echo$row['instName'] ?> </td>

                <td> <?php echo$row['courseName'] ?> </td>
                <td> <?php echo$row['courseCategory'] ?> </td>
                <td> <?php echo$row['courseId'] ?> </td>
                <td> <?php echo$row['enrolmentType'] ?> </td>

                <td> <?php echo$row['mobileNo'] ?> </td>




        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

}

$sql = "SELECT * FROM user WHERE enrolmentType='$enrolmentType'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) 
{
    // Loop through the results and output them
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passing Year</th>
                    <th>Institute Name</th> 
                    <th>CourseName</th>
                    <th>CourseCategory</th>
                    <th>CourseID</th>
                    <th>enrolmentType</th>

                    <th>Mobile Number</th>
          <?php

    while($row = $result->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>    <td><?php echo$count ?></td>
                <td> <?php echo$row['name'] ?> </td>
        
                <td> <?php echo$row['email'] ?> </td>
      
                <td> <?php echo$row['yearPassing'] ?> </td>
                <td> <?php echo$row['instName'] ?> </td>

                <td> <?php echo$row['courseName'] ?> </td>
                <td> <?php echo$row['courseCategory'] ?> </td>
                <td> <?php echo$row['courseId'] ?> </td>
                <td> <?php echo$row['enrolmentType'] ?> </td>

                <td> <?php echo$row['mobileNo'] ?> </td>




        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

}

$sql = "SELECT * FROM user WHERE instName='$instName'";

// Execute the query
$result = $con->query($sql);

// Check if any results were found
if ($result->num_rows > 0) 
{
    // Loop through the results and output them
    $count=0;
    
    
            ?> <table>  
                   <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passing Year</th>
                    <th>Institute Name</th> 
                    <th>CourseName</th>
                    <th>CourseCategory</th>
                    <th>CourseID</th>
                    <th>enrolmentType</th>

                    <th>Mobile Number</th>
          <?php

    while($row = $result->fetch_assoc() )
    {
       
        $count=$count+1;
        ?> 
        <div>
             
        <tr>    <td><?php echo$count ?></td>
                <td> <?php echo$row['name'] ?> </td>
        
                <td> <?php echo$row['email'] ?> </td>
      
                <td> <?php echo$row['yearPassing'] ?> </td>
                <td> <?php echo$row['instName'] ?> </td>

                <td> <?php echo$row['courseName'] ?> </td>
                <td> <?php echo$row['courseCategory'] ?> </td>
                <td> <?php echo$row['courseId'] ?> </td>
                <td> <?php echo$row['enrolmentType'] ?> </td>

                <td> <?php echo$row['mobileNo'] ?> </td>




        </tr>
        </div>
         <?php

    }       
    ?> </table>  <?php

}

}


?>



