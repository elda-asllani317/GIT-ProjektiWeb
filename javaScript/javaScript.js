document.getElementById('signUpForm').addEventListener('submit', function (event) {
  event.preventDefault();

  clearErrors();

  let firstName = document.getElementById('firstName').value;
  let lastName = document.getElementById('lastName').value;
  let email = document.getElementById('email').value;
  let phone = document.getElementById('phone').value;
  let photo = document.getElementById('photo').value;
  let termsCheck = document.getElementById('termsCheck').checked;


  if (!firstName || !lastName || !email || !phone || !photo || !termsCheck) {
    if (!firstName) document.getElementById('errorFirstName').textContent = "First Name is required.";
    if (!lastName) document.getElementById('errorLastName').textContent = "Last Name is required.";
    if (!email) document.getElementById('errorEmail').textContent = "Email is required.";
    if (!phone) document.getElementById('errorPhone').textContent = "Phone is required.";
    if (!photo) document.getElementById('errorPhoto').textContent = "Photo is required.";
    if (!termsCheck) document.getElementById('errorTerms').textContent = "You must agree to the terms.";
    return;
  }

  
  alert("Form submitted successfully!");
});

function clearErrors() {
  document.querySelectorAll('.error-message').forEach(error => (error.textContent = ''));
}