<?php include 'header.php';
include 'config.php';
#session_start();
#$loginemail= $_SESSION['loginemail'];
#$userid = "SELECT UserID FROM userinfo WHERE UserEmail = '$loginemail'";
if(isset($_POST['StandartRoom'])){
  
  $addstandartroom= "INSERT INTO room (RoomType,RoomPrice,UserID1) VALUES(1,400,'$userid')";
  mysqli_query($conn, $addstandartroom);
  header("Location: reservation.php");
}




?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Reservation</title>

    



 
  <section>
    
    

    <main>

      
    <form action="checkout.php" method= "POST">   
    <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="img/Standart.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Standart Room 1</h3>
        <h6 class="w3-opacity">From $40</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <input type="submit" name="StandartRoom" value="Standart Room" class="w3-button w3-block w3-black w3-margin-bottom"></input>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="img/Double.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Mid-Tier Room</h3>
        <h6 class="w3-opacity">From $60</h6>
        <p>Double-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <input type="submit" name="MidRoom" value="Mid Room" class="w3-button w3-block w3-black w3-margin-bottom"></input>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="img/Suit.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Suit Room</h3>
        <h6 class="w3-opacity">From $100</h6>
        <p>2 Double-size bed</p>
        <p>2*25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <input type="submit" name="SuitRoom" value="Suit Room" class="w3-button w3-block w3-black w3-margin-bottom"></input>
      </div>
    </div>
    
    </div>
  </div>
      

      
  </form>  

    </main>

    
  

  