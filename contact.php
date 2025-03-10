<?php
session_start();
?>
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
$page = "contact";
require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';

// Email Configuration
define('SMTP_HOST', 'smtp.here');
define('SMTP_PORT', 123);
define('SMTP_USERNAME', 'abcd@xyz');
define('SMTP_PASSWORD', 'abcd@xyz');
define('SMTP_SECURE', 'ssl');


// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'db_user');
define('DB_PASSWORD', 'db_pass');
define('DB_NAME', 'horpm');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Start session
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection


// $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO enquiries (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    // if ($conn->query($sql) === TRUE) {
    //     try {
    //         $mail = new PHPMailer(true);
    //         $mail->isSMTP();
    //         $mail->Host = SMTP_HOST;
    //         $mail->SMTPAuth = true;
    //         $mail->Username = SMTP_USERNAME; 
    //         $mail->Password = SMTP_PASSWORD; 
    //         $mail->SMTPSecure = SMTP_SECURE;
    //         $mail->Port = SMTP_PORT;

    //         $mail->setFrom(SMTP_USERNAME, "House Of RPM"); 
    //         $mail->addAddress(SMTP_USERNAME, "House Of RPM"); 

    //         $mail->isHTML(true);
    //         $mail->Subject = 'New Enquiry | Website | '.$name;
    //         $mail->Body = 'Name : ' . $name . ',<br>'.
    //                       'email : ' . $email . ',<br>'.
    //                       'subject : ' . $subject . ',<br>'.
    //                       'message : ' . $message . ',<br>'.
    //                       '<br> Thanks,<br> House of <u>RPM<u>.';

    //         $mail->send();
    //         $_SESSION["successMessage"] = "Enquiry submitted successfully!";
    //     } catch (Exception $e) {
    //         $_SESSION["errorMessage"] = "Error sending email: " . $mail->ErrorInfo;
    //     }

    //     header("Location: contact.php");
    //     exit();
    // } else {
    //     $_SESSION["errorMessage"] = "Error: " . $sql . "<br>" . $conn->error;
    // }
}

$successMessage = isset($_SESSION["successMessage"]) ? $_SESSION["successMessage"] : "";
unset($_SESSION["successMessage"]);

$errorMessage = isset($_SESSION["errorMessage"]) ? $_SESSION["errorMessage"] : "";
unset($_SESSION["errorMessage"]);

// $conn->close();
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

<h1 class="text-center contact-heading">
    <strong><span class="underline-on-load">CONTACT</span></strong>
  </h1>
  


<!-- embeded-map -->
<div class="container-fluid" style="height: 40vh;">
    <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.9967374122198!2d73.95044687503687!3d18.48380698260263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e9e42e461051%3A0xae5557c2264c1fd5!2sBhekrai%20Nagar%20PMP%20Depot!5e0!3m2!1sen!2sin!4v1712422442124!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    

<div class="container form-content" >
    <div class="row">
        <div class="col-lg-4">
            <div class="contact-info-card">
                <i class="bi bi-geo-alt"></i>
                <div class="info">
                    <h5>Address</h5>
                    <p>123 Main Street, City, Country</p>
                </div>
            </div>
            <div class="contact-info-card">
                <i class="bi bi-telephone"></i>
                <div class="info">
                    <h5>Phone</h5>
                    <p>+1 234 567 890</p>
                </div>
            </div>
            <div class="contact-info-card">
                <i class="bi bi-envelope"></i>
                <div class="info">
                    <h5>Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
          <div id="message-container" class="message-container">
              <!-- Message content will be dynamically added here -->
          </div>

          <!-- Contact Form -->
          <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="row">
                  <div class="col">
                      <input type="text" name="name" class="form-control" placeholder="Name" maxlength="256" required="">
                  </div>
                  <div class="col">
                      <input type="email" name="email" class="form-control" placeholder="Email" maxlength="254" required="">
                  </div>
              </div>
              <div class="row mt-3">
                  <div class="col">
                      <input type="text" name="subject" class="form-control" placeholder="Subject" maxlength="254" required="">
                  </div>
              </div>
              <div class="row mt-3">
                  <div class="col">
                      <textarea name="message" cols="40" rows="8" class="form-control" placeholder="Message" style="resize:none" required=""></textarea>
                  </div>
              </div>
              <div class="text-center mt-3">
                  <button type="submit" class="btn btn-danger px-5">Submit</button>
              </div>
          </form>
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var messageContainer = document.getElementById("message-container");

    // Function to show message
    function showMessage(message, isSuccess) {
        var className = isSuccess ? "success-message" : "error-message";
        messageContainer.innerHTML = `<i class="bi bi-hand-${isSuccess ? 'thumbs-up' : 'thumbs-down'}"></i><div>${message}</div>`;
        messageContainer.classList.add(className, "visible");
        setTimeout(function() {
            messageContainer.classList.remove("visible");
        }, 2000);
    }

    // Retrieve success and error messages from PHP if available
    <?php if (!empty($successMessage)) { ?>
        showMessage("<?php echo addslashes($successMessage); ?>", true);
    <?php } ?>

    <?php if (!empty($errorMessage)) { ?>
        showMessage("<?php echo addslashes($errorMessage); ?>", false);
    <?php } ?>
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>