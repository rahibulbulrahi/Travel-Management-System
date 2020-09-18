<!DOCTYPE html>
<html>
  <head>
    <title>Easy Travel - Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
  </head>
  <body>
    <section data-index="0" class="home">
    <div class="main-container" id="home">
      <!--Navbar Start-->
      <header>
        <nav>
            <h1>Easy Tour</h1>
            <ul>
            <li><a data-page="home" href="#home">Home</a></li>
            <li><a data-page="about" href="#about">About</a></li>
            <li><a data-page="service" href="#service">Services</a></li>
            <li><a data-page="destination" href="#destination">Destination</a></li>
            <li><a data-page="ontact" href="#contact">contact Us</a></li>
            <li><a href="#login">Log in</a></li>
            </ul>
        </nav>
    </header>
    
    <script src="js/header.js"></script>
      <!--Navbar Finish-->
      <!--Banner-->  
      <div class="banner_image">
        <div class="banner_content">
          <h1>Get Away On This Weekend</h1>
          <p>TO THE HEAVEN BEACH</p>
        </div>
      </div>
      </section>
      <!--Banner Finish-->
      <!--About-->
      <section data-index="1" class="about">   
      <div class="about" id="about">
        <h1 class="title">About Us</h1>
        <p class="about_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
          It has survived not only five centuries, but also the leap into electronic typesetting, 
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
          Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing 
          and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
          essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
          Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
          versions of Lorem Ipsum.</p>
      </div>
      </section>
      <!--Aboust Finish-->
      <!--Services-->
      <section data-index="2" class="service">
      <div class="services" id="service">
        <h1 class="title">Our Survices</h1>
        <p class="about_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus neque similique asperiores sequi, ea nobis ratione maxime quisquam repellat soluta sunt consectetur dicta quod rem voluptatibus atque earum aliquid culpa expedita numquam molestias perspiciatis temporibus. Neque reiciendis, dolor fugit quisquam eligendi aut dignissimos adipisci, incidunt, molestiae in nisi id?</p>

        <div class="diff_services">
          <div class="diff_service_item">
            <img class="image-resize" src="images/hotel.jpg" alt="service_image">
            <h3>Hotel Booking</h3>
            <p class="about_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet recusandae sint laborum aperiam, minima necessitatibus quaerat? Perferendis magnam cupiditate vitae.</p>
            <div class="btn"><a href="hotel.php">Hotel Booking</a></div>
          </div>
          <div class="diff_service_item">
          <img class="image-resize" src="images/flight.jpg" alt="service_image">
            <h3>Flight Booking</h3>
            <p class="about_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet recusandae sint laborum aperiam, minima necessitatibus quaerat? Perferendis magnam cupiditate vitae.</p>
            <div class="btn"><a href="#">Flight Booking</a></div>
          </div>
          <div class="diff_service_item">
          <img class="image-resize" src="images/package.jpg" alt="service_image">
            <h3>Package Booking</h3>
            <p class="about_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet recusandae sint laborum aperiam, minima necessitatibus quaerat? Perferendis magnam cupiditate vitae.</p>
            <div class="btn"><a href="#">Package Booking</a></div>
          </div>
        </div>
      </div>
      </section>
      <!--Services Finish-->
      <!--Destination-->
      <section data-index="3" class="destination">
      <div class="destination" id="destination">
        <h1 class="title">Destination</h1>
        <div class="destination_wrapper">
          <div class="tour-1 tour">
            <div class="tour_image">
              <img class="image-resize-1" src="images/t1.jpg" alt="tour_images">
            </div>
            <div class="tour_image">
             <img class="image-resize-1" src="images/t2.jpg" alt="tour_images">
            </div>
            <div class="tour_image">
             <img class="image-resize-1" src="images/t3.jpg" alt="tour_images">
            </div>
          </div>
          <div class="tour-2 tour">
          <div class="tour_image">
              <img class="image-resize-1" src="images/t4.jpg" alt="tour_images">
            </div>
            <div class="tour_image">
             <img class="image-resize-1" src="images/t5.jpg" alt="tour_images">
            </div>
            <div class="tour_image">
             <img class="image-resize-1" src="images/t6.jpg" alt="tour_images">
            </div>
          </div>
        </div>
      </div>
      </section>
      <!--Destination Finish-->
      <!--Contact-->
      <section data-index="4" class="contact">
      <div class="contact_us" id="contact">
        <h1 class="title">Contact Us</h1>
        <div class="form_wrapepr">
          <div class="form_input">
            <input type="text" placeholder="Name">
          </div>
          <div class="form_input">
            <input type="text" placeholder="Email">
          </div>
          <div class="form_input">
            <textarea placeholder="Message Us"></textarea>
          </div>
          <div class="btn">
            <a href="#">Submit</a>
          </div>
        </div>
      </div>
      </section>
      <!--Contact Finish-->
      <!--Footer-->
      <div class="footer">
        <a href="#">@ Easy Travel</a>
      </div>
      <!--Footer Finish-->
      <div class="arrow">
        <a href="#home"><img src="images/arrow.png" alt="up_arrow"></a>
      </div>
    </div>
  </body>
</html>