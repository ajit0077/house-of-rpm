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
    $page = "showreel"
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


<div class="container reel-container" style="margin-top:3%">
  <div class="row">
    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
      <video class="showreel-video" controls id="myVideo">
        <source src="static/video/hero_reel.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6 reel-prg" data-aos="fade-left" data-aos-duration="1000">
    <h1>Roto</h1>
      <p>
        Roto, a technique indispensable in the realm of visual effects and digital compositing, 
        involves the meticulous art of crafting precise outlines to seamlessly separate the foreground elements from the background. 
        It is an intricate process that demands both technical prowess and artistic finesse, as each contour and edge must be delicately 
        traced to ensure a flawless extraction. Whether in the creation of captivating movie scenes, immersive video games, or stunning 
        advertisements, roto plays a pivotal role in enhancing visual storytelling and bringing imaginative worlds to life. With its 
        ability to meticulously isolate subjects and manipulate environments,<span id="paint"></span> roto stands as a cornerstone technique in the toolkit of 
        visual effects artists, enabling the realization of awe-inspiring cinematic experiences.
      </p>
    </div>
  </div>
</div>


<div class="container reel-container">
  <div class="row">
    <div class="col-lg-6 order-lg-2" data-aos="fade-right" data-aos-duration="1000">
      <video class="showreel-video" controls id="myVideo">
        <source src="static/video/hero_reel.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6 order-lg-1 reel-prg" data-aos="fade-left" data-aos-duration="1000">
    <h1>Paint</h1>
      <p>
        In the world of visual artistry, the craft of painting transcends mere strokes of color on canvas, it is a meticulous process 
        of enhancing the essence of the subject matter. With a discerning eye and steady hand, artists meticulously retouch and refine 
        elements within the frame, imbuing each detail with depth, emotion, and resonance. Through careful consideration of light, texture, 
        and composition, they breathe life into their creations, evoking a sense of awe and wonder in the viewer. Every brushstroke is 
        imbued with intention, every hue chosen with purpose, as the canvas becomes a portal to worlds both familiar and fantastical. 
        In this delicate dance between imagination and reality, painters weave stories,<span id="matchmove"></span> evoke emotions, and capture fleeting moments of 
        beauty, leaving an indelible mark on the tapestry of human experience.
      </p>
    </div>
  </div>
</div>



<div class="container reel-container">
  <div class="row">
    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
      <video class="showreel-video" controls id="myVideo">
        <source src="static/video/hero_reel.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6 reel-prg" data-aos="fade-left" data-aos-duration="1000">
    <h1>Matchmove</h1>
      <p>
        In the realm of visual effects, matchmove serves as the cornerstone for creating captivating scenes that push the boundaries 
        of reality. It requires a delicate balance of technical expertise and artistic finesse, as matchmove artists meticulously analyze 
        camera movements, lighting conditions, and object interactions to achieve unparalleled realism. By seamlessly integrating CGI 
        elements into live-action footage, matchmove breathes life into fantastical worlds, transports viewers to distant galaxies, and 
        brings imaginary creatures to vivid existence. Through the precise alignment of virtual and real-world elements, matchmove elevates 
        storytelling to new heights, captivating audiences with mesmerizing visuals that blur the line between fantasy and reality.
      </p>
    </div>
  </div>
</div>


<!-- <div class="container">
    <div class="showreel-container" id="roto">
      <video class="showreel-video" muted autoplay>
        <source src="static/video/hero_reel.mp4" type="video/mp4">
      </video>
      <h2>Roto</h2>
      <p>Crafting precise outlines to seamlessly separate foreground from background.</p>
    </div>
</div>
<div class="container">
    <div class="showreel-container" id="paint">
      <video class="showreel-video" muted autoplay>
        <source src="static/video/hero_reel.mp4" type="video/mp4">
      </video>
      <h2>Paint</h2>
      <p>Enhancing visuals by meticulously retouching and refining elements within the frame.</p>
    </div>
</div> -->
<!-- <div class="container">
    <div class="showreel-container" id="matchmove">
      <video class="showreel-video" muted autoplay>
        <source src="static/video/hero_reel.mp4" type="video/mp4">
      </video>
      <h2>Matchmove</h2>
      <p>Achieving perfect integration of CGI elements into live-action footage through precise tracking and alignment.</p>
    </div>
</div> -->


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