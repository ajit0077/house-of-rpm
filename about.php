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
    $page = "about"
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

<section class="custom-hero" data-aos="zoom-in-up" data-aos-duration="1500">
    <div class="custom-hero-content">
      <h1>House Of <strong><u>RPM</u></strong></h1>
      <h3>"Bringing Your Vision to Life, One Pixel at a Time."</h3>
      <p>Join us on our journey to success.</p>
    </div>
</section>
  
<div class="container">
    <div class="row about-row g-4">
      <div class="col-lg-4" data-aos="flip-left" data-aos-duration="1000">
        <div class="about-card">
          <h2 class="bottom-border-left-to-right">Our Objective</h2>
          <p>At House of RPM, we thrive on the collective dedication of our vibrant team, which plays an integral role in our achievements. As a premier VFX studio and development firm, our services extend to clients spanning the US, Canada, UK, Europe, and Asia Pacific. What distinguishes us from our rivals is our unparalleled services, bespoke packages, extensive expertise, and industry insights. Our unwavering dedication ensures exceptional outcomes, with every project receiving meticulous attention from inception to fruition. Our diverse team of proficient experts serves as the bedrock of our success in the VFX domain and beyond. Grounded in principles of quality, commitment, and outstanding service, we continue to shine amidst a competitive landscape.</p>
        </div>
      </div>
      <div class="col-lg-4" data-aos="flip-up" data-aos-duration="1000">
        <div class="about-card">
          <h2 class="bottom-border-left-to-right">Our Ethos</h2>
          <p>At House of RPM, our ethos revolves around a profound passion for creating exceptional visuals through cutting-edge technology and unleashing our creative prowess. We approach each project with meticulous attention to detail and an unwavering commitment to surpassing expectations. Our dedication to excellence is evident in our use of state-of-the-art technological infrastructure, ensuring the highest standards in all our endeavors. We are dedicated to delivering unmatched quality in every project, with our team deeply embedded in our culture of excellence and committed to exceptional delivery. Our focus on each project is sharp and uncompromising, driven by our commitment to providing unparalleled dedication and service to our clients.</p>
        </div>
      </div>
      <div class="col-lg-4" data-aos="flip-right" data-aos-duration="1000">
        <div class="about-card">
          <h2 class="bottom-border-left-to-right">Our Principles</h2>
          <p>At House of RPM, punctuality is our priority. We vigilantly monitor each project's progress and diligently work towards delivering projects with unwavering commitment to deadlines. Our six-step project approach ensures timely delivery, every time.Customer satisfaction drives us daily. At House of RPM, we recognize that excellence extends beyond delivering top-notch work to leading VFX studios worldwide. It's about shaping brighter futures for all stakeholders involved.House of RPM boasts a coveted roster of some of the most skilled creatives in the visual effects landscape today. We serve as trusted partners to production companies across the US, Canada, UK, Asia Pacific, and Europe.</p>
        </div>
      </div>
    </div>
  </div>
  

  <div class="closure">
  <p class="closing-paragraph">At <strong><u>House of RPM</u></strong>, our ethos, principles, and objectives serve as the guiding light illuminating our journey towards excellence. With a steadfast commitment to integrity, innovation, and customer satisfaction, we weave a tapestry of trust and reliability in all our endeavors. As we bid adieu to this glimpse into our ethos, let us embark together on a boundless expedition, fueled by passion and propelled by purpose. Join us at House of RPM as we continue to redefine possibilities and shape the future with unwavering dedication and an unyielding spirit of collaboration. Together, let's build a legacy that echoes through the corridors of time, inspiring generations to come.</p>
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