<?php 
    
    
    if (isset($_POST['loginsubmit'])) {
      # code...
      $loginemail = $_POST['loginemail'];
      $loginpassword = $_POST['loginpassword'];
      if(filter_var($loginemail, FILTER_VALIDATE_EMAIL)) {
        //Valid email!
        if ($loginemail == "keskin@gmail.com" && $loginpassword == "Keskin05") {
            # code...
            echo "<script>window.location.href='user.php';</script>";
          
          }
          if ($loginemail == "admin@gmail.com" && $loginpassword == "Keskin05") {
            # code...
            echo "<script>window.location.href='admin.php';</script>";
          
          }
   }else{
    echo '<script language="javascript">';
    echo 'alert("wrong email format")';
    echo '</script>';
    echo "<script>window.location.href='loginreg.php';</script>";
   }
      
    
    
    }
    
    ?>