<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <!-- <title>Login & Signup Form | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Burak Keskin">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
  <body>
    <div id = "container">
        <div id = "social">
          <font>Hotel Manager</font>
          <a href="index.php"><i class="fas fa-home"></i>HomePage</a>
            <a href="gallery.php"><i class="fas fa-images"></i>Gallery</a>
            <a href="/Hotel/index.php#About"> <i class="fas fa-users"></i>About</a>
            <a href="/Hotel/index.php#Contact"> <i class="fas fa-address-book"></i>Contact Us</a>
            <a href="loginreg.php"> <i class="fas fa-user-alt"></i>Sign In/Sign Up</a>
          <a href="https://www.facebook.com/Grand-Antalya-Hotel-101651651586336/" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/grandantalyahotel/?igshid=mjw9j98ox24r" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/AntalyaGrand" target="_blank"><i class="fab fa-twitter"></i></a>
        
    </div>
    
    
  <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form id="loginform" action="admin.php" method="GET" class="login">
            <div class="field">
              <input id="loginemail" type="text" placeholder="Email Address" required>
            </div>
<div class="field">
              <input id="loginpassword" type="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input id="submit" type="submit" value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form id="signupform" action="index.php" method="GET" class="signup">
            <div class="field">
              <input id="signupemail" type="text" placeholder="Email Address" required>
            </div>
<div class="field">
              <input id="signuppassword" type="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
<div class="field">
              <input id="signupconfirmpass" type="password" placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input id="submit" type="submit" value="Signup">
            </div>
</form>
</div>
</div>
</div>
</div>


<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
      
      var loginemail = document.getElementById('loginemail')
      var loginpassword = document.getElementById('loginpassword')
      var signupemail = document.getElementById('signupemail')
      var signuppassword = document.getElementById('signuppassword')
      var signupconfirmpass = document.getElementById('signupconfirmpass')
      var loginform = document.getElementById('loginform')
      var signupform = document.getElementById('signupform')

      loginform.addEventListener('submit', (e) =>{
        let messages = []
        if (!loginpassword.value.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)) {
          
          alert('Check Your Password');
          e.preventDefault()
        }
        if (!loginemail.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
          
          alert('Check Your Email');
          e.preventDefault()
        }
        

        
        



      })
      signupform.addEventListener('submit', (e) =>{
        let messages = []
        if (!signuppassword.value.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)) {
          
          alert('Check Your Password');
          e.preventDefault()
        }
        if (signuppassword.value !== signupconfirmpass.value) {
          alert('Passwords Do Not Match!')
          e.preventDefault()
          
        }
        if (!signupemail.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
          
          alert('Check Your Email');
          e.preventDefault()
        }

        

        
        



      })
      
      


    </script>

  </body>
</html>
