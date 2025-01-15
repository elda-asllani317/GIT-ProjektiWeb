document.getElementById('signUpForm').addEventListener('submit', function (event) {
 event.preventDefault(); // Prevent form submission for validation

  clearErrors(); // Clear any previous error messages

  let firstName = document.getElementById('firstName').value;
  let lastName = document.getElementById('lastName').value;
  let email = document.getElementById('email').value;
  let pasi = document.getElementById('pasi').value;
  let photo = document.getElementById('photo').value;
  let termsCheck = document.getElementById('termsCheck').checked;

  let isValid = true; 

  if (!firstName || !lastName || !email || !pasi || !photo || !termsCheck) {
    isValid = false;
  }

  if (!firstName) document.getElementById('errorFirstName').textContent = "First Name is required.";
  if (!lastName) document.getElementById('errorLastName').textContent = "Last Name is required.";
  if (!email) document.getElementById('errorEmail').textContent = "Email is required.";
  if (!pasi) document.getElementById('errorPassword').textContent = "Password is required.";
  if (!photo) document.getElementById('errorPhoto').textContent = "Photo is required.";
  if (!termsCheck) document.getElementById('errorTerms').textContent = "You must agree to the terms.";

  if (isValid) {
    document.getElementById('signUpForm').submit();
    // document.getElementById('signUpForm').reset();
  //  window.location.href="./get";
  }
});

// Clear error messages
function clearErrors() {
  document.querySelectorAll('.error-message').forEach(error => (error.textContent = ''));
}
