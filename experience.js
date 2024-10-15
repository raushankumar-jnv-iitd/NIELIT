function addExperience() {
  // Get input values
  var company = document.getElementById('company').value;
  var position = document.getElementById('position').value;
  var duration = document.getElementById('duration').value;
  var email =document.getElementById('email').value;
 // console.log(email);

  // Create a new list item
  var listItem = document.createElement('li');
  listItem.className = 'experience-item';

  // Build the HTML content of the list item
  var itemContent = document.createTextNode(company + ' - ' + position + ' (' + duration + ')'  );
  listItem.appendChild(itemContent);

  // Add the new list item to the experience list
  var experienceList = document.getElementById('experienceList');
  experienceList.appendChild(listItem);

  // Clear the input fields
  document.getElementById('company').value = '';
  document.getElementById('position').value = '';
  document.getElementById('duration').value = '';
 // document.getElementById('email').value='';

  // Send the data to the server to store in the database
saveExperience(company, position, duration,email);
}

function saveExperience(company, position, duration,email) {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save_experience.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  var data = 'company=' + encodeURIComponent(company) + '&position=' + encodeURIComponent(position) + '&duration=' + encodeURIComponent(duration) +'&email='+ encodeURIComponent(email);
  xhr.send(data);
}
