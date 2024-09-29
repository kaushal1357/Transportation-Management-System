<?php
  session_start();
  include('admin/vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];

  // Function to get available vehicles
function getAvailableVehicles($pdo, $start_time, $end_time) {
  $query = "SELECT * FROM vehicles WHERE availability = 1 AND id NOT IN (
            SELECT vehicle_id FROM bookings WHERE 
            ((start_time < :end_time) AND (end_time > :start_time))
            )";
  $stmt = $pdo->prepare($query);
  $stmt->execute(['start_time' => $start_time, 'end_time' => $end_time]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>
  <!--End Navigation-->

  <style>
    .parallax {
      background-image: url("bus-people-public-transportation-34171.jpg");
      min-height: 700px; 
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    /* Parallax with 'pexels-photo-280310.jpeg' */
    .parallax1 {
      background-image: url("pexels-photo-280310.jpeg");
      min-height: 600px; 
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .navbar-fixed-top.scrolled {
      background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

    /* Ensure no overlapping */
    .container .row {
      margin-bottom: 20px;
    }

    .img-responsive {
      max-width: 100%;
      height: auto;
    }

    iframe {
      width: 100%;
      height: 350px;
      border: 0;
      margin-bottom: 20px;
    }

    /* Box-sizing to avoid overlap issues */
    * {
      box-sizing: border-box;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .page-header {
      margin-top: 20px;
    }
    .parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }


  </style>

  <body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">

    <div class="parallax foo">
      <div class="hero-text">
        <h1 class="animated rubberBand">Transportation Management System</h1>
        <p>A management system where you can easily manage vehicles</p>
        <?php if (isset($_SESSION['username']) == true) { ?>
          <a class="btn btn-success" href="usr">Book a Vehicle</a>
        <?php } else { ?>
          <a class="btn btn-success" href="usr">Login To Book A Vehicle</a>
        <?php } ?>
      </div>
    </div>

    <div>
      <br><br>
      <div id="bus_route" class="container">
        <div class="page-header">
          <h1 style="text-align: center">Bus Route</h1>
        </div>
        <div class="row">
          <div class="col-md-6 foo">
            <p><b>The Sanjan Yata Yat bus goes around the Balan city at different intervals. This is the route of the bus.</b></p>
            <img src="pexels-photo-136739.jpeg" class="img-responsive">
          </div>
          <div class="col-md-6">
          <iframe
  src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d932412.1267521078!2d85.32429!3d27.694657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39eb19f1a50463ff%3A0x13b89612e48cc61c!2sKalanki%2C%20Kathmandu%2C%20Nepal!3m2!1d27.695425!2d85.328357!4m5!1s0x39eb19f1a1e0f27%3A0x3b46ee6f6b7467c8!2sRing%20Road%2C%20Kathmandu%2C%20Nepal!3m2!1d27.709739!2d85.328360!5e0!3m2!1sen!2sbd!4v1645129896890"
  width="600"
  height="450"
  style="border:0;"
  allowfullscreen=""
  loading="lazy">
</iframe>

          <p>The Bus Route</p>
          </div>
        </div>
      </div>

      <br>
      <div class="page-header">
        <h1 style="text-align: center">Driver</h1>
      </div>

      <!-- Parallax background with the pexels-photo-280310.jpeg image -->
      <div class="parallax1"></div>

      <div id="driver" class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="font-size: 20px;">The drivers of Sanjan Yata Yat are very punctual and provide great service. Every one of them is professional and excels at their job.</p>
          </div>
        </div>
      </div>

      <div id="bus" class="container">
        <div class="page-header">
          <h1 style="text-align: center">Bus</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="pexels-photo-385998.jpeg" class="img-responsive">
          </div>
          <div class="col-md-6 foo1">
            <p style="font-size:20px;"><b>In Sanjan Yata Yat, we have four buses, each well-maintained. These buses cover different routes across Balan city and can also be hired.</b></p>
          </div>
        </div>
      </div>
    </div>

    <footer style="background-color: #2f2f2f; color: #fff; padding-top: 70px; padding-bottom: 70px;" class="container-fluid text-center">
      <p>All rights reserved by Sanjan Giri</p>
    </footer>

    <script>
      $(function() {
        $(document).scroll(function() {
          var $nav = $(".navbar-fixed-top");
          var $a = $(".parallax");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
        });
      });
    </script>

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script>
      window.sr = ScrollReveal();
      sr.reveal('.foo', { duration: 800 });
      sr.reveal('.foo1', { duration: 800, origin: 'top' });
    </script>

  </body>
</html>

