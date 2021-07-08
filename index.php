<?php 
include 'header.php';
include 'config.php';
#session_id(md5($_SERVER['REMOTE_ADDR']));
@ session_start();
#echo @ $_SESSION['loginemail'];
#$bura = $_SESSION['loginemail']
#$res =  mysqli_query($conn,"SELECT UserID FROM userinfo WHERE UserEmail = $bura)");
#$burak = mysqli_fetch_array($res);
#echo $burak;
?>
<?php
if (isset($_POST['reservationsubmit'])) {
  
  # code...
  $adults = $_POST['adults'];
$children = $_POST['children'];
$rooms = $_POST['rooms'];
$datein = $_POST['datein'];
$dateout = $_POST['dateout'];
$restype = 1;
$roomID = 1;
if(strtotime($dateout)-strtotime($datein)>1){



if($rooms == "standart"){
  $restype = 1;
  $roomID = 1;
}
if($rooms == "mid-tier"){
  $restype = 2;
  $roomID = 2;
}
if($rooms == "suit"){
  $restype = 3;
  $roomID = 3;
}

$test = "SELECT RoomID FROM room ORDER BY RoomID DESC LIMIT 1";
$test2 = "UPDATE room SET UserID1=3 WHERE RoomID = $test";
mysqli_query($conn, $test2);
$query = "INSERT INTO reservation (UserMail,Adults,Children, ReservationTypeID, CheckIn,CheckOut,RoomID1) 
  			  VALUES('{$_SESSION['loginemail']}','$adults', '$children', '$restype','$datein','$dateout','$roomID')";
  	mysqli_query($conn, $query);
$deneme = "UPDATE roomtype SET Quota = Quota -1 WHERE RoomTypeID = $restype";
mysqli_query($conn,$deneme);

    header("Location: checkout.php");
}
else{
  echo '<script language="javascript">';
echo 'alert("checkout date must me later than check in date")';
echo '</script>';
echo "<script>window.location.href='index.php';</script>";
}
}
?>

<?php

if(isset($_POST['SupportSubmit'])){
  #$_SESSION['UserID']= ;
  #$UserID = $_SESSION['UserID'];
  $SupName = $_POST['SupportName'];
  $SupSurname = $_POST['SupportSurname'];
  $Supmsg = mysqli_real_escape_string($conn,$_POST['SupportMsg']);
  $supmail = $_POST['supmail'];
  #$result =  mysqli_query($conn,"SELECT UserID FROM userinfo WHERE UserEmail = '{$_SESSION['loginemail']}'");
  #echo $result-> num_rows;
  $supportmsg = "INSERT INTO support (SupportName,SupportSurname,SupportMail,SupportMessage) VALUES('$SupName','$SupSurname','$supmail','$Supmsg')";
  mysqli_query($conn, $supportmsg);
  header("Location: index.php");


}


?>
<title>Home</title>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://tatilsepeti.cubecdn.net/Files/Images/Tesis/04412/1050X700/tsr04412637249689728363448.jpg" class="d-block w-100" height="600px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.luxuryescapes.com%2Flux-group%2Fimage%2Fupload%2Fq_auto%3Aeco%2Cc_fill%2Cg_auto%2Car_16%3A9%2Fvm03ot3lf22j7npwow8pe.jpeg&f=1&nofb=1" class="d-block w-100" height="600px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3225531/pexels-photo-3225531.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" height="600px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1134176/pexels-photo-1134176.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" height="600px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/pexels-photo-2507007.jpeg" class="d-block w-100" height="600px" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="img/pexels-photo-2506988.jpeg" class="d-block w-100" height="600px" alt="...">
            </div>
            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



 
  <section>
    
    

    <main>

      
        <form action="index.php" method="POST">
          <label for="adults">Adults: </label>
          <select id="adults" name="adults" >
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
        
        
          <label for="children">Children: </label>
          <select id="children" name="children" >
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
       
        
          <label for="rooms">Rooms: </label>
          <select id="rooms" name="rooms" >
          <option value="standart">standart</option>
          <option value="mid-tier">mid</option>
          <option value="suit">suit</option>
          
  
  
  
</select>
        
      
      
        
          <label for="datein">Check-in Date: </label>
          <input id="datein" type="date" name="datein" >
        
          <label for="dateout">Check-out Date: </label>
          <input id="dateout" type="date" name="dateout" >
          <input name = "reservationsubmit" type="submit" value="Make Reservation">
        </form>
        
      
      
      

      
      

    </main>

    
  </section>

  <section>
  <section id="About">
    <h3>About Us</h3>

    

    <div id="container">
      <div id="sol">
        <h5 id="h5sol">
        The chic, new, Grand Antalya Hotel treats business and leisure travelers to ultra-modern conveniences and boutique décor in the city neighbourhood. Just steps from some of Antalya’s most popular attractions.
        </h5>
      </div>
      <div id= "sag">
        <span>T</span>
        <p id="psag">he chic, new, Grand Antalya Hotel treats business and leisure travelers to ultra-modern conveniences and boutique décor in the city neighbourhood. Just steps from some of Antalya’s most popular attractions.
</p>
      </div>
    </div>
  </section>
  <h1>Contact Us</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.0572538453316!2d30.70289991502753!3d36.88897857039739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3917f0d854aff%3A0xd6311a6a27601018!2sGrand%20Antalya%20Hotel!5e0!3m2!1str!2str!4v1619069089954!5m2!1str!2str" width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <section id="Contact" class="sectionadres">
    
  
    
      <div class="form" >
      <form action="index.php" method="POST">
        <div class="row">
          <div class="col25">
            <label for="">Name</label>
          </div>
          
          <div class="col75">
            <input type="text" name="SupportName" placeholder="Your Name Here">
          </div>
        </div>
          <div class="row">
            <div class="col25">
              <label for="">Surname</label>
            </div>
            
            <div class="col75">
              <input type="text" name="SupportSurname" placeholder="Your Surname Here">
            </div>
          </div>
            <div class="row">
              <div class="col25">
                <label for="">Mail</label>
              </div>
              
              <div class="col75">
                <input type="text" name="supmail" id="" cols="30" rows="5" placeholder="Your Mail Here">
              </div>
            </div>
            <div class="row">
              <div class="col25">
                <label for="">Message</label>
              </div>
              
              <div class="col75">
                <textarea name="SupportMsg" id="" cols="30" rows="5" placeholder="Message Here"></textarea>
              </div>
            </div>
            <div class="row">
              <input type="submit" name= "SupportSubmit" value="Submit">
            </div>
            </form>
      </div>
      
      
      <div class="adres">
        <h2>ADDRESS</h2>

        <span class="span1">
          Tahılpazarı mh, Şarampol Cd. No:38/105, 07040 Muratpaşa/Antalya
        </span>
        <span class="span1">
          +90 242 241 9595 
        </span>
        <span class="span1">
          info@grandantalyahotel.com
        </span>
        <span class="span1">
          http://www.grandantalyahotel.com/
        </span>
      </div>
    
  </section>
</section>
  
  
  
  

  </section>


  <?php include 'footer.php';?>