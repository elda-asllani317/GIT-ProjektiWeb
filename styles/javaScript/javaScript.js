
function nextStep() {
    clearErrors();
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
  
    if (!firstName || !lastName) {
      if (!firstName) document.getElementById('errorFirstName').textContent = "Please write your name.";
      if (!lastName) document.getElementById('errorLastName').textContent = "Please write your surname.";
      return;
    }
  
    // Hide the first step and show the second step
    document.getElementById('step1').style.display = 'none';
    document.getElementById('step2').style.display = 'block';
  }
  