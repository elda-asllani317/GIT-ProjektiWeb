
<?php include './inc/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    createContact($firstName, $lastName);
    header('Location:  readContac.php'); // Ridrejto pas krijimit
    exit;
}
?>
<!DOCTYPE html>
<html lang="sq">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Contact</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .container img {
      width: 410px;
      height: 400px;
    }

    .left-section {
      width: 45%;
    }

    .left-section h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .left-section p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .right-section {
      width: 50%;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .right-section h2 {
      text-align: center;
      font-size: 22px;
      color: #333;
      margin-bottom: 20px;
    }

    .inputGroup {
      margin-bottom: 15px;
    }

    .inputGroup input {
      width: 100%;
      padding: 12px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
      margin-bottom: 5px;
    }

    .form-buttons {
      text-align: center;
      margin-top: 20px;
    }

    .form-buttons button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-buttons button:hover {
      background-color: #0056b3;
    }

    .thank-you-message {
      text-align: center;
      font-size: 18px;
      color: green;
      display: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="left-section">
      <h2>We're on hand to help you along the way</h2>
      <p>Product enquiries? Interested in one of our services? Reach out here and we’ll be in touch shortly.</p>
      <div class="contact-info">
        <p>Email: final@project.com</p>
        <p>Phone: +44 (0)123 456 7890</p>
        <a href="https://www.google.com/maps">
          <img src="./img/ubt.png" alt="">
        </a>
      </div>
    </div>
    <div class="right-section">
      <h2>Create Contact</h2>
      <form method="POST" action="">
        <div class="inputGroup">
          <input type="text" name="first_name" placeholder="First Name" maxlength="8" required />
        </div>
        <div class="inputGroup">
          <input type="text" name="last_name" placeholder="Last Name" maxlength="8" required />
        </div>
        <div class="form-buttons">
          <button type="submit">Create</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function validateForm() {
      var firstName = document.getElementById("firstName").value.trim();
      var lastName = document.getElementById("lastName").value.trim();
      var errorFirstName = document.getElementById("errorFirstName");
      var errorLastName = document.getElementById("errorLastName");
      var isValid = true;

      // Kontrollo fushën e emrit
      if (firstName === "") {
        errorFirstName.style.display = "block";
        isValid = false;
      } else {
        errorFirstName.style.display = "none";
      }

      // Kontrollo fushën e mbiemrit
      if (lastName === "") {
        errorLastName.style.display = "block";
        isValid = false;
      } else {
        errorLastName.style.display = "none";
      }

      // Nëse gjithçka është e vlefshme, dërgo formularin
      if (isValid) {
        document.getElementById("contactForm").submit();
      }
    }
  </script>
</body>


</html>