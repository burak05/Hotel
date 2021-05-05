<?php 
include 'header.php';
session_id(md5($_SERVER['REMOTE_ADDR']));
session_start();
if (isset($_POST['loginsubmit'])) {
  # code...
  $_SESSION['loginemail'] = $_POST["loginemail"];
  $_SESSION['loginpassword'] = $_POST["loginpassword"];
  
    if(filter_var($_SESSION['loginemail'], FILTER_VALIDATE_EMAIL)&& preg_match("/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{6,})$/",$_SESSION['loginpassword'])) {
    //Valid email!
    
    
    
    if ($_SESSION['loginemail'] === "admin@gmail.com" ) {
      # code...
      $_SESSION["customer"] = 1;
      header("Location: admin.php");
      
    }else{
      $_SESSION["customer"] = 2;
      header("Location: user.php");
    }
    
    
    
    }else{
echo '<script language="javascript">';
echo 'alert("wrong email format")';
echo '</script>';
echo "<script>window.location.href='loginreg.php';</script>";
}
  


}
if (isset($_POST['signupsubmit'])) {
  # code...
  $_SESSION['signupemail'] = $_POST["signupemail"];
  $_SESSION['signuppassword'] = $_POST["signuppassword"];
  $_SESSION['confpassword'] = $_POST["confpassword"];
  
    if(filter_var($_SESSION['signupemail'], FILTER_VALIDATE_EMAIL)&& preg_match("/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{6,})$/",$_SESSION['signuppassword'])&& preg_match("/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{6,})$/",$_SESSION['confpassword'])&&$_SESSION['confpassword']===$_SESSION['signuppassword']) {
    //Valid email!
    
    
    
    if ($_SESSION['signupemail'] !== "admin@gmail.com" ) {
      # code...
      $_SESSION['loginemail'] = $_SESSION['signupemail'];
      header("Location: user.php");
      
    }else{
      
      header("Location: index.php");
    }
    
    
    
    }else{
echo '<script language="javascript">';
echo 'alert("wrong email format")';
echo '</script>';
echo "<script>window.location.href='loginreg.php';</script>";
}
  


}
session_commit();

?>


<title>Login</title>  
    
  <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">Signup Form</div>
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
          <form id="loginform" action="loginreg.php" method="POST" class="login">
            <div class="field">
              <input id="loginemail" type="text" placeholder="Email Address" name="loginemail" required>
            </div>
<div class="field">
              <input id="loginpassword" type="password" placeholder="Password" name="loginpassword" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input id="submit" type="submit" value="Login" name="loginsubmit">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form id="signupform" action="loginreg.php" method="POST" class="signup" name="signupsubmit">
            <div class="field">
              <input id="signupemail" type="text" placeholder="Email Address" name="signupemail" required>
            </div>
<div class="field">
              <input id="signuppassword" type="password" name = "signuppassword" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
            </div>
<div class="field">
              <input id="signupconfirmpass" type="password" name="confpassword" placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input id="submit" type="submit" value="Signup" name="signupsubmit">
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
    /* 
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
        if(loginemail.value !== "admin@gmail.com"){
          document.getElementById('loginform').action = 'user.php';
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
      
      */


    </script>
    

    