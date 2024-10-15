function addEducation() {
    // Get input values
    var institution = document.getElementById('institution').value;
    var degree = document.getElementById('degree').value;
    var year = document.getElementById('year').value;
    var email =document.getElementById('email').value;
    //console.log(email);
  
    // Create a new list item
    var listItem = document.createElement('li');
    listItem.className = 'education-item';
  
    // Build the HTML content of the list item
    var itemContent = document.createTextNode(institution + ' - ' + degree + ' (' + year + ')'  );
    listItem.appendChild(itemContent);
  
    // Add the new list item to the education list
    var educationList = document.getElementById('educationList');
    educationList.appendChild(listItem);
  
    // Clear the input fields
    document.getElementById('institution').value = '';
    document.getElementById('degree').value = '';
    document.getElementById('year').value = '';
   // document.getElementById('email').value='';
  
    // Send the data to the server to store in the database
 saveEducation(institution, degree, year,email);
  }
  
  function saveEducation(institution, degree, year,email) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_education.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
    var data = 'institution=' + encodeURIComponent(institution) + '&degree=' + encodeURIComponent(degree) + '&year=' + encodeURIComponent(year) +'&email='+ encodeURIComponent(email);
    xhr.send(data);
  }
  