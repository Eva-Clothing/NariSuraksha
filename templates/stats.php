<?php 
 
include('../server/complainserver.php') 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>NariSuraksha- Helping women</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

 
  <link href="../assets/css/profile_page.css" rel="stylesheet">

   
  </head>
  <body> 


   <!-- ======= Header ======= -->
   <header id="header">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Nari Suraksha- Platform for women safety and help</span></a></h1>
        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="landing.php">Home</a></li>
          <li><a href="profile.php">Go to Profile</a></li>
          <li><a href="help.php">Call for help</a></li>
          <li><a href="#">Team of warriors</a></li>
          <li class="drop-down"><a href="">Report Harrasments</a>
                  <ul>
                    <li><a href="report.php">Report Mobile numbers</a></li>
                    <li><a href="stats.php">Show statistics of reported calls</a></li> 
                  </ul>
        </li> 
          <li><a href="testimonial.php">Message from users</a></li>

        </ul>

        <img href="profile.php"  class='nav-avatar' style="height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;"
                src="..\assets\img\prof.jpg"> 
         <button style="border:3px solid #000000;border-radius:8px 0px 8px 0px;"><a href="profile.php?logout='1'"><b  style="color:#006494;font-size:15px;">Logout</b></a>  </button>
          

      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Nari Suraksha</h1>
      <h2>Report your harassment calls here, We will resolve it</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="profile.php" class="btn-get-started scrollto">View your profile</a>
        <a href="#rep" class="btn-get-started scrollto">Report a number</a>
      </div>
    </div>
  </section><!-- End Hero -->


    <!-- chart -->
    <h3 style="text-align:center;">Statistics of complains registered by user</h3>
    <br/>
    <section style="text-align:center;">
    <div id="chartContainer" style="height: 370px; width: 50%;"></div>
    <div id="chartContainer1" style="height: 370px; width: 50%;"></div>
    <div id="chartContainer2" style="height: 370px; width: 50%;"></div>
    <div id="chartContainer3" style="height: 370px; width: 50%;"></div>
</section>
    <!-- chart end -->
   
   


 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>NariSuraksha</h3>
            <p>
              Ajay Road <br>
              Raipur, Amanaka Road<br>
              India <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Heroes working</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Report a number</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Call for help</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Your message to us</h4>
            <p>If you face any issues, just submit your E-Mail or number and we will get back to you</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

    <!-- canvas for chart -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>
    
<style>

body {
    font-family: 'Lato', sans-serif
}

h1 {
    margin-bottom: 40px
}

label {
    color: #333
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px
}

.card {
    margin-left: 10px;
    margin-right: 10px
}
</style>

<script>
    input.setAttribute('size',input.getAttribute('placeholder').length);
</script>

<!DOCTYPE HTML>
<html>
<head>
