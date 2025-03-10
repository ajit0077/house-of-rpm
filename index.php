<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- bt-stylsheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- aos-styles -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- own-style -->
  <link rel="stylesheet" href="static/css/main.css">


</head>
<body>
<?php
    $page = "home"
  ?>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">
     <img src="static/img/logo.png" alt="Logo"  class="d-inline-block align-top"> 
      <!-- HOUSE OF RPM -->
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-3">
          <a class="nav-link <?php if($page == 'home') echo 'active'; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php if($page == 'about') echo 'active'; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php if($page == 'showreel') echo 'active'; ?>" href="showreel.php">Showreel</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php if($page == 'contact') echo 'active'; ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- hero-content -->
<div class="hero">
  <video class="video-bg" autoplay muted loop>
    <source src="static/video/hero_reel.mp4" type="video/mp4">
  </video>
  <div class="content">
    <h1>We Do RPM</h1>
    <p>Bringing Your Vision to Life, One Pixel at a Time.</p>
    <br>
    <a href="contact.php" class="contact-btn">Contact Us</a>
  </div> 
</div>

<!-- who-are-we -->

<div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="info-section">
          <h1>VFX</h1>
          <p>
            At DemoFX, we're not just another <span>VFX company</span> we're the architects of dreams, the creators of wonder, and the masters of visual storytelling. With our cutting-edge technology and boundless creativity, we bring fantasies to life, transport audiences to new worlds, and turn imagination into reality.
            Our team of passionate artists, designers, and technicians is dedicated to pushing the boundaries of visual effects. we're storytellers at heart. 
            With DemoFX, you're not just hiring a <span>VFX company</span> you're embarking on a journey of discovery, creativity, and limitless possibilities. Let us bring your vision to life and make your wildest dreams a reality.
            <span>Join us at DemoFX, where the impossible becomes possible, and every frame is a work of art.</span>
            </p>
            <a href="about.php" class="btn btn-danger btn-lg">
                Know More <i class="bi bi-arrow-right"></i>
            </a>
        </div>
</div>
  
    
<!-- what-we-provide -->

<div class="container">
    <div class="row gx-5">
      <div class="col-lg-4" data-aos="zoom-in-up" data-aos-offset="200" data-aos-duration="500">
        <div class="service-card">
          <img src="static/img/roto.jpg" alt="Service 1">
          <div class="overlay">
            <div class="overlay-content">
              <h3>ROTO</h3>
              <a href="showreel.php#roto" class="btn btn-read-more">Showreel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4" data-aos="zoom-in-up" data-aos-offset="250" data-aos-duration="500">
        <div class="service-card">
          <img src="static/img/paint.jpg" alt="Service 2">
          <div class="overlay">
            <div class="overlay-content">
              <h3>PAINT</h3>
              <a href="showreel.php#paint" class="btn btn-read-more">Showreel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4" data-aos="zoom-in-up" data-aos-offset="300" data-aos-duration="500">
        <div class="service-card">
          <img src="static/img/mm.jpg" alt="Service 3">
          <div class="overlay">
            <div class="overlay-content">
              <h3>MATCHMOVE</h3>
              <a href="showreel.php#matchmove" class="btn btn-read-more">Showreel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Why-choose-us -->

<div class="container why-us">
  <div class="row gy-4">
    <div class="col-lg-4">
      <div class="red-section">
        <h2>VFX</h2>
        <p>VFX, utilizes the latest technology and software to bring your visions to life. With state-of-the-art tools and techniques, we ensure high-quality visual effects that captivate audiences.
            Our team comprises talented artists and professionals with a passion for creativity. We thrive on pushing the boundaries of imagination and delivering innovative solutions tailored to your project's needs.
        </p>
      </div>
    </div>
    <div class="col-lg-8 align-items-stretch" style="display: grid;">
      <div class="row gy-4">
        <div class="col-lg-4" id="before" data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
          <div class="icon-card d-flex flex-column justify-content-center align-items-center ">
            <i class="bi bi-lightning-fill"></i>
            <h3>Creative Expertise</h3>
            <p>Our team of talented artists and professionals is fueled by a passion for creativity.
                We push the boundaries of imagination, delivering innovative solutions tailored to your project's needs.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000">
          <div class="icon-card d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-tv"></i>
            <h3>Industry Experience</h3>
            <p>With years of experience across film, television, advertising, and more, 
                our team brings extensive knowledge and expertise to every project. We tackle challenges with confidence and precision.</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1600">
          <div class="icon-card d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-truck"></i>
            <h3>Timely Delivery</h3>
            <p>Our commitment to deadlines is unwavering. 
                We prioritize efficiency,   on quality.it's our promise, ensuring your projects reach their destination on schedule, every time.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  

<!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h3><a href="index.php"><span>HOUSE OF RPM</span></a></h3>
        <p>Bringing Your Vision to Life, One Pixel at a Time.</p>
      </div>
      <div class="col-lg-4">
        <h4><span>Contact Us</span></h4>
        <address>
          <a href="https://maps.google.com" target="_blank"><i class="bi bi-geo-alt-fill"></i> 123 Main Street, City, Country</a><br>
          <a href="tel:+1234567890"><i class="bi bi-telephone-fill"></i> +1 234 567 890</a><br>
          <a href="mailto:info@example.com"> <i class="bi bi-envelope-fill"></i> info@example.com</a>
        </address>
      </div>
      <div class="col-lg-4">
        <h4><span>Quick Links</span></h4>
        <ul class="list-unstyled">
          <li>
            <a href="index.php"><i class="bi bi-link-45deg"></i> Home</a>
          </li>
          <li>
            <a href="about.php"><i class="bi bi-link-45deg"></i> About</a>
          </li>
          <li>
            <a href="showreel.php"><i class="bi bi-link-45deg"></i> Showreel</a>
          </li>
          <li>
            <a href="contact.php"><i class="bi bi-link-45deg"></i> Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

  
<!-- aos-js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- own-js -->
<script src="static/js/main.js"></script>

</body>
</html>