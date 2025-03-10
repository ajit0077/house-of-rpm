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

{% block content %}

{% endblock %}


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