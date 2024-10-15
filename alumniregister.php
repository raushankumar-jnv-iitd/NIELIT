<?php
    include('connectdatabase.php'); 
    $pNumber=$_POST['pNumber'];
    $pName=$_POST['pName'];
    $pfathername=$_POST['pfathername'];
    $pCourseID=$_POST['pCourseId'];
    $pMobile=$_POST['pMobile'];
    $pEmail=$_POST['pEmail'];
    $pPassingYear=$_POST['pPassingYear'];
    $pDob=$_POST['pDob'];
    $pDirect=$_POST['pDirect'];
    $pGender=$_POST['pGender'];
    $password=$_POST['password'];

    

    
// Initialize cURL
$ch = curl_init();

// The data to send in the POST request
// POST request is mainly for obtaining authorization token 
// which will be used in actual data request

$data = http_build_query(array(
    'username' => 'alumniAdmin',
    'password' => 'AlumniAdmin@123',
    'grant_type' => 'password'
));

// Set the URL for the POST request
curl_setopt($ch, CURLOPT_URL, 'http://14.139.53.83/token');

// Set the POST options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded')
);

// Execute the POST request
$result = curl_exec($ch);

// Decode the response to get the token
$response = json_decode($result, true);
// print_r($response);
$token = $response['access_token'];
// print $token;

// Now let's make the GET request using the obtained token 
// Here I am requesting the NIELIT Centre names
curl_setopt($ch, CURLOPT_URL, "http://14.139.53.83/api/regnValidate?pNumber=".($pNumber)."&pDob=".($pDob)."&pName=".($pName)."&pGender=".($pGender)."&pFatherName=".($pfathername)."&pCourseID=".($pCourseID)."&pMobile=".($pMobile)."&pEmail=".($pEmail)."&pDirect=".($pDirect)."&pPassingYear=".($pPassingYear)."");

curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token)
);

// Execute the GET request
$result = curl_exec($ch);
//echo$result;

// Close the cURL handle
curl_close($ch);

// Now you can use the result from the GET request
$data = json_decode($result, true);
//echo$data;
//print_r($data) ;
if (!is_null($data)) {

foreach($data as $value){
        if (isset($value["status"]))
        {
           if($value["status"]=="Valid")
           {
           // $sql="insert into alumni (pNumber,pName,pfathername ,pEmail,password , pMobile,pCourseID,pPassingYear,pDob,pDirect,pGender) values('$pNumber','$pName','$pfathername','$pEmail',' $var_md5password','$pMobile','$pCourseID','$pPassingYear','$pDob','$pDirect','$pGender')";
           // $result=mysqli_query($con,$sql);
           $name=$value["name"];
           $courseCategory=$value["courseCategory"];
           $courseId=$value["courseId"];
           $courseName=$value["courseName"];
           $email=$value["email"];
           $mobileNo=$value["mobileNo"];
           $enrolmentType=$value["enrolmentType"];
           $instName=$value["instName"];
           $yearPassing=$value["yearPassing"];
           $joined= date('Y-m-d H:i:s');


           $sql="insert into user (name,courseCategory,courseId,courseName,email,mobileNo,enrolmentType,instName,yearPassing,password,joined) values ('$name','$courseCategory','$courseId','$courseName','$email','$mobileNo','$enrolmentType','$instName','$yearPassing','$password','$joined')";

          // $sql="insert into alumni (pNumber,pName,pfathername,pEmail,password,pMobile,pCourseID,pPassingYear,pDob,pDirect,pGender )values('$pNumber','$pName','$pfathername','$pEmail','$password','$pMobile','$pCourseID','$pPassingYear','$pDob','$pDirect','$pGender')";
   // $sql="insert into alumni (pNumber,pName,pfathername ,pEmail,password , pMobile,pCourseID,pPassingYear,pDob,pDirect,pGender) values('$pNumber','$pName','$pfathername','$pEmail',' $password','$pMobile','$pCourseID','$pPassingYear','$pDob','$pDirect','$pGender')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Successfully Register  ";

      //  header('Location: successregister.html');
      //  ?><a href="./login.php">Go to Login Page</a><?php
      //  exit();
    
    }
    else
    {
     echo"not register";
     //  header('Location: notregister.html');
     // header('Location:notregister.html');



    }
            
          
           }
           else
           {
            echo"Enter Correct data/input in form";
           // header('Location:notregister.html');

           }
        }
}
}
else
{
    echo"Data is Not Matched";
   // header('Location:notregister.html');

}
?>