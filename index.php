<?php include 'header.php'; ?>
<?php
if (isset($_POST['reservationsubmit'])) {
  header("Location: reservation.php");
  # code...
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

      
        <form action="reservation.php" method="POST">
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
          <option value="gold">gold</option>
  
  
  
</select>
        
      
      
        
          <label for="datein">Check-in Date: </label>
          <input id="datein" type="date" name="datein" >
        
          <label for="dateout">Check-out Date: </label>
          <input id="dateout" type="date" >
          <input name = "reservationsubmit" type="submit" value="Make Reservation">
        </form>
        
      
      
      

      
      

    </main>

    
  </section>

  <section>
  <h1>Contact Us</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.0572538453316!2d30.70289991502753!3d36.88897857039739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3917f0d854aff%3A0xd6311a6a27601018!2sGrand%20Antalya%20Hotel!5e0!3m2!1str!2str!4v1619069089954!5m2!1str!2str" width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <section id="Contact" class="sectionadres">
    
  
    
      <div class="form">
        
        <div class="row">
          <div class="col25">
            <label for="">Name</label>
          </div>
          
          <div class="col75">
            <input type="text" placeholder="Your Name Here">
          </div>
        </div>
          <div class="row">
            <div class="col25">
              <label for="">Surname</label>
            </div>
            
            <div class="col75">
              <input type="text" placeholder="Your Surname Here">
            </div>
          </div>
            <div class="row">
              <div class="col25">
                <label for="">Message</label>
              </div>
              
              <div class="col75">
                <textarea name="" id="" cols="30" rows="5" placeholder="Message Here"></textarea>
              </div>
            </div>
            <div class="row">
              <input type="submit" value="Submit">
            </div>
        
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
  
  <section id="About">
    <h3>About Us</h3>

    

    <div id="container">
      <div id="sol">
        <h5 id="h5sol">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        </h5>
      </div>
      <div id= "sag">
        <span>T</span>
        <p id="psag">he Dark Lord has Nine. But we have One, mightier than they: the White Rider. He has passed through the fire and the abyss, and they shall fear him. We will go where he leads.</p>
      </div>
    </div>
  </section>
  
  

  </section>


  <?php include 'footer.php';?>