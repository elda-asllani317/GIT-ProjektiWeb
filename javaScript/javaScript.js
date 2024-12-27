function nextStep() {
    clearErrors();
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
  
    if (!firstName || !lastName) {
      if (!firstName) document.getElementById('errorFirstName').textContent = "Please write your name.";
      if (!lastName) document.getElementById('errorLastName').textContent = "Please write your surname.";
      return;
    }

    document.getElementById('step1').style.display = 'none';
    document.getElementById('step2').style.display = 'block';
  }
    function previousStep() {
    // Show the first step and hide the second step
    document.getElementById('step1').style.display = 'block';
    document.getElementById('step2').style.display = 'none';
  }
  
  function clearErrors() {
    document.getElementById('errorFirstName').textContent = '';
    document.getElementById('errorLastName').textContent = '';
    document.getElementById('errorEmail').textContent = '';
    document.getElementById('errorPhone').textContent = '';
    document.getElementById('errorComment').textContent = '';
    document.getElementById('errorTerms').textContent = '';
  }
  
  document.getElementById('multiStepForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission
  
    clearErrors();
  
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let comment = document.getElementById('comment').value;
    let termsCheck = document.getElementById('termsCheck').checked;
  
    // Validate form inputs
    if (!email || !phone || !comment || !termsCheck) {
      if (!email) document.getElementById('errorEmail').textContent = "Email is required.";
      if (!phone) document.getElementById('errorPhone').textContent = "Phone is required.";
      if (!comment) document.getElementById('errorComment').textContent = "Comment is required.";
      if (!termsCheck) document.getElementById('errorTerms').textContent = "You must agree to the terms.";
      return;
    }
  
    // Navigate to demo page
    window.location.href = "getDemo.html"; 
  });
  
