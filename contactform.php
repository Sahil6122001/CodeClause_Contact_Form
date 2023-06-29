<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <script>
       function generateCaptcha() {
  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  var captcha = "";
  for (var i = 0; i < 6; i++) {
    var randomIndex = Math.floor(Math.random() * chars.length);
    captcha += chars[randomIndex];
  }
  document.getElementById("captcha").textContent = captcha;
  document.getElementById("captcha-input").value = "";
}

function validateCaptcha() {
  var userCaptcha = document.getElementById("captcha-input").value.toLowerCase();
  var captcha = document.getElementById("captcha").textContent.toLowerCase();

  if (userCaptcha === captcha) {
    return true;
  } else {
    alert("Incorrect captcha! Please try again.");
    generateCaptcha();
    return false;
  }
  
}
function showSuccessAlert() {
  alert("Form submitted successfully!");
}


    </script>
</head>
<body>
    <div class="contact-form">
        <h1>CONTACT  FORM</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post" onsubmit="return validateCaptcha();">
           <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required> <br>
           <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required> <br>
           <input type="email" name="email" class="form-control" placeholder="Enter Email" required> <br>
           <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required> <br>
           <input type="text" id="captcha-input" class="form-control"placeholder="Captcha" required>
           <label for="captcha"></label>
           <div>
               <span id="captcha" class="captcha"></span>
               
               <button type="button" onclick="generateCaptcha()">Generate New Code</button>
           </div>
           <input type="submit" class="form-control submit" value="Submit">
       </form>
    </div>
</body>
</html>
