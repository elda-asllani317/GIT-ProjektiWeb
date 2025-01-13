<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/contacStyle.css">
  <link rel="stylesheet" href="style/news1Style.css">
  
<link rel="abortant icon" type="x-icon" href="./image/Capture1-removebg-preview (1).png" />
  <title>Sign Up</title>
</head>
<body>

  <header>

    <input type="checkbox" id="check">
    <label for="check" class="checkInput">
      <i class="fa-solid fa-bars"></i>
    </label>
    <div>
      <a href="index.html">
        <img src="image/Capture-removebg-preview.png" alt="" />
      </a>
    </div>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a  href="news1.html">News</a></li>
      <li><a href="pricing.html">Pricing</a></li>
      <li><a href="contac.html">Contact</a></li>
      <li>
        <a class="singUp" href="signUp.html">Sign Up Free</a>
      </li>
    </ul>

  </header>  
    <sectiosn class="contact">
      <h2>Sign Up</h2>
      <form id="signUpForm">
      
        <div class="inputGroup">
          <input type="text" id="firstName" placeholder="First Name" maxlength="8" />
          <div id="errorFirstName" class="error-message"></div>
        </div>
        <div class="inputGroup">
          <input type="text" id="lastName" placeholder="Last Name" maxlength="8" />
          <div id="errorLastName" class="error-message"></div>
        </div>
        <div class="inputGroup">
          <input type="email" id="email" placeholder="Email" />
          <div id="errorEmail" class="error-message"></div>
        </div>
        <div class="inputGroup">
          <input type="password" id="pasi" placeholder="Password" />
          <div id="errorPassword" class="error-message"></div>
        </div>
        <div class="inputGroup">
          <label for="photo">Upload Photo (JPEG, PNG only):</label>
          <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png" >
          <div id="errorPhoto" class="error-message"></div>
        </div>
        <div class="terms">
          <input type="checkbox" id="termsCheck" />
          <label for="termsCheck">I agree to the terms of service</label>
          <div id="errorTerms" class="error-message"></div>
        </div>
        <div class="form-buttons">
          <button  id="signUpForm" type="submit">Submit</button>
        </div>
      </form>
    </section>

    <script src="javaScript/javaScript.js"></script>
</body>
</html>

