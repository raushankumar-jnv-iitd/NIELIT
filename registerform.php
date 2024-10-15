<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registeration Form</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="bck">
        <div class="navvar">
            <div class="home">
                <a href="index.php">Home</a>
            </div>
            <div class="home">
                <a href="https://nielit.gov.in/nielit-news">Newsroom</a>

            </div>

        </div>
        

    </div>
    <form method="post" action="alumniregister.php">


      
        <div class="register">
            <br>
            <h1>Alumni Registeration Form</h1>

            <table class="table">
                
                <tbody>
                  <tr>
                        <td>Registeration Number :-</td>
                        <td><input type="text" name="pNumber" placeholder="Enter Registeration Number" required/></td>
                  </tr>
                  <tr>
                    <td>Name :-</td>
                    <td><input type="text" name="pName" placeholder="Enter Name" required/></td>
                  </tr>
                  <tr>
                    <td>Father Name :-</td>
                    <td><input type="text" name="pfathername" placeholder="Enter Father Name"  required/></td>
                  </tr>
                  <tr>
                    <td>Email :-</td>
                    <td><input type="pEmail" name="pEmail" required="" placeholder="Enter E-Mail"></td>
                  </tr>
                  <tr>
                    <td>Password :-</td>
                    <td> <input type="password" name="password" required placeholder="Enter Password"></td>
                  </tr>
                  <tr>
                    <td>Mobile Number :- </td>
                    <td><input type="number" name="pMobile" placeholder="Enter Mobile Number" required /></td>
                  </tr>
                
                  <tr>
                    <td>CourseID :-</td>
                    <td><input type="number" name="pCourseId" placeholder="Enter Course ID"  /></td>
                  </tr>
                 
                  <tr>
                    <td>Passing Year:- </td>
                    <td><input type="number" name="pPassingYear" placeholder="Enter Passing Year"/></td>
                  </tr>
                  <tr>
                    <td>Date Of Birth:-<br> </td>
                    <td><input type="date" name="pDob" id="date" pattern="\d{4}-\d{2}-\d{2}"></td>
                  </tr>
                  <tr>
                    <td>Enrollment Type :- </td>
                    <td> <br><input type="radio" name="pDirect" value=1> Direct
                        <br>
                        <input type="radio" name="pDirect" value=0> Accredited Institute / NIELIT Center
                        <br>
                        <br>
                    </td>
                  </tr>
                  <tr>
                    <td>Gender :-</td>
                    <td> <input type="radio" name="pGender" value="Male"> Male
                        <input type="radio" name="pGender" value="Female"> Female
                        <br>
                    </td>
                  </tr>                 
                </tbody>
              </table>
              <button class="btn"  name="submit">Submit</button>

    </form>
    
</body>
</html>
