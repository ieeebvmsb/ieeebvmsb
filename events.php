<?php

ini_set('display_errors','off');
session_start();

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>IEEE BVM SB | BVM Engineering College</title>
  <link rel="icon" href="images/IEEE Blue Kite.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="fonts/fontawesome/font-awesome.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    .eventNav {
      margin-right: 20px;
    }
    .eventNav td {
      font-size: 18px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="">IEEE BVM SB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active">
            <a href="events.php" class="nav-link">Events</a>
          </li>

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="events.php" id="dropdown04" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Events</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="events.php#flagship">Flagship Events</a>
              <a class="dropdown-item" href="events.php.#Others">Others</a>
            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="team.php" id="dropdown04" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Teams</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="team.php">Executive Committee</a>
              <a class="dropdown-item" href="npss.php">NPSS Committee</a>
              <a class="dropdown-item" href="r&d.php">R&D Officers</a>
              <a class="dropdown-item" href="exofteam.php">Executive Officers</a>
              <a class="dropdown-item" href="branch.php">Branch Reprensentative</a>
              <a class="dropdown-item" href="design.php">Design Team</a>
              <a class="dropdown-item" href="dev.php">Developer Team</a>
              <a class="dropdown-item" href="docteam.php">Documentation Team</a>
              <a class="dropdown-item" href="publicity.php">Publicity Team</a>
            </div>
          </li>
          <li class="nav-item"><a href="society.php" class="nav-link">Society</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
          <li class="nav-item">
            <a href="loginPage.php" class="nav-link">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- END nav -->

  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">EVENTS</h1>
        </div>
      </div>
    </div>
  </div>



  <div id="back-top" style="display: block; ">
    <a title="Go to Top" data-goto="#home" class="smothscroll"> <i class="fa fa-level-up"></i></a>
  </div>

  <br><br>

  <div align="center" class="eventNav">
    <h1 align="center" style="color: #000000;"><b>Navigate through Events...</b></h1>
    <br>
    <div class="row">
      <div class="col-md-6">
        <table border="0px">
          <tr align="center">
            <th style="font-size: 25px;">FLAGSHIP EVENTS</th>
          </tr>
          <?php
            $q="SELECT * FROM events WHERE EventType = 'Flagship'";
            $sql=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($sql))
            {
          ?>
          <tr>
            <td><b>&#8226; <u><a href="#<?php echo $row['EventTitle']; ?>"><?php echo $row['EventTitle']; ?></a></u></b></td>
          </tr>
          <?php
            }
          ?>
        </table>
      </div>
      <div class="col-md-6">
        <table border="0px">
          <tr align="center">
            <th style="font-size: 25px;">EVENTS</th>
          </tr>
          <?php
            $q="SELECT * FROM events WHERE EventType = 'Other'";
            $sql=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($sql))
            {
          ?>
          <tr>
            <td><b>&#8226; <u><a href="#<?php echo $row['EventTitle']; ?>"><?php echo $row['EventTitle']; ?></a></u></b></td>
          </tr>
          <?php
            }
          ?>
        </table>
      </div>
    </div>
  </div>

  <section class="ftco-section" id="flagship">
    <div class="container">
      <div class="row no-gutters justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading"></span>
          <h2 class="mb-4"> FLAGSHIP EVENTS | IEEE BVM SB </h2>

        </div>
      </div>
      <?php
        $q="SELECT * FROM events WHERE EventType = 'Flagship'";
        $sql=mysqli_query($conn,$q);
        while($row=mysqli_fetch_assoc($sql))
        {
      ?>
      <div class="block-3 d-md-flex ftco-animate" id="<?php echo $row['EventTitle']; ?>" data-scrollax-parent="true">
        <a href="/events" class="image <--image-2 order-2-->" style="background-image: url('<?php echo $row['EventThumbnail']; ?>');"
          data-scrollax=" properties: { translateY: '-20%'}"></a>
        <div class="text order-1">
          <h2 class="heading"><a href="/events"><?php echo $row['EventTitle']; ?></a>
          </h2>
          <p align="justify"><?php echo $row['EventAbstract']; ?></p>
          <p><a type="button" href="/events" data-toggle="modal" data-target="#<?php echo $row['EventCode']; ?>"
              class="btn btn-primary px-4">View More</a></p>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
    </div>
  </section>


  <section class="ftco-section" id="Others">
    <div class="container">
      <div class="row no-gutters justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading"></span>
          <h2 class="mb-4"> EVENTS | IEEE BVM SB </h2>

        </div>
      </div>
      <div class="row">
        <?php
          $q="SELECT * FROM events WHERE EventType = 'Other'";
          $sql=mysqli_query($conn,$q);
          while($row=mysqli_fetch_assoc($sql))
          {
        ?>
        <div class="block-3 d-md-flex ftco-animate" id="<?php echo $row['EventTitle']; ?>" data-scrollax-parent="true">
          <a href="/events" class="image <--image-2 order-2-->" style="background-image: url('<?php echo $row['EventThumbnail']; ?>');"
            data-scrollax=" properties: { translateY: '-20%'}"></a>
          <div class="text order-1">
            <h2 class="heading"><a href="/events"><?php echo $row['EventTitle']; ?></a>
            </h2>
            <p align="justify"><?php echo $row['EventAbstract']; ?></p>
            <p><a type="button" href="/events" data-toggle="modal" data-target="#<?php echo $row['EventCode']; ?>"
                class="btn btn-primary px-4">View More</a></p>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
  </section>

  <!-- Flagship Event1 popup -->
  <?php
    $q="SELECT * FROM events";
    $sql=mysqli_query($conn,$q);
    while($row=mysqli_fetch_assoc($sql))
    {
  ?>
  <div class="modal fade" id="<?php echo $row['EventCode']; ?>" tabindex="-1" role="dialog" aria-labelledby="eventpopup1Label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h1 class="h1"><?php echo $row['EventTitle']; ?></h1>
          <div class="row flex-row-reverse">
            <div class="col-12 col-md-6">
              <img class="img-fluid" src="<?php echo $row['EventTitleImage']; ?>" alt="event logo">
            </div>
            <div class="col-12 col-md-6 mt-2" align="justify">
              <?php echo $row['EventDescription']; ?>
              <div class="mt-3">
                Start Date : <?php echo $row['EventStartDate']; ?>
                <br>
                End Date : <?php echo $row['EventEndDate']; ?>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <h4 class="h4 text-center">Event Gallery</h4>
            <img class="img-fluid mt-3" src="<?php echo $row['EventPhoto0']; ?>" alt="event image 1">
            <img class="img-fluid mt-3" src="<?php echo $row['EventPhoto1']; ?>" alt="event image 2">
            <img class="img-fluid mt-3" src="<?php echo $row['EventPhoto2']; ?>" alt="event image 3">
            <img class="img-fluid mt-3" src="<?php echo $row['EventPhoto3']; ?>" alt="event image 4">
          </div>
          <br>
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
              <p><a href="<?php echo $row['EventReport']; ?>" class="btn btn-primary px-4" target="_blank">Know
                  More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    }
  ?>

  <footer class="footer">

    <div class=" text-dark font-small bg-light pt-4">
      <div class="container-fluid text-center text-md-l">
        <div class="container-fluid m-0 p-0 row">
          <div class="col-md-6 mt-md-0 mt-3 row ft-content">
            <h5 class="text-uppercase font-weight-bold col-12" style="height: fit-content;">External Links</h5>
            <div class="container-fluid m-0 p-0  col-12  ">
              <ul class="border-right  ">
                <ul><a href="https://www.ieee.org/" target="_blank">IEEE</a></ul>
                <ul><a href="https://ieee-npss.org/" target="_blank">IEEE NPSS</a></ul>
                <ul><a href="https://bvmengineering.ac.in/" target="_blank">BVM</a></ul>
              </ul>
            </div>
          </div>

          <div class="col-md-5 mb-md-0 mb-3 ft-content">
            <h5 class="text-uppercase font-weight-bold col-12 ">CONTACT US</h5>
            <p>Email: ieeebvm16@gmail.com</p>
            <p>Address: BVM Engineering college
              Vallabh Vidhyanagar
              Anand - 388120</p>
          </div>

          <div class="col-md-1 mb-md-0 mb-3">
            <div class="row">
              <div class="col-md-6">
                <a href="https://facebook.com/ieeebvm/" class="fa fa-social fa-facebook hvr-pop"></a>
              </div>
              <div class="col-md-6">
                <a href="http://bit.ly/bvmsbYT" class="fa fa-social fa-youtube hvr-pop"></a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <a href="https://linkedin.com/in/ieee-bvm-sb-55928918b/" class="fa fa-social fa-linkedin hvr-pop"></a>
              </div>
              <div class="col-md-6">
                <a href="https://t.me/ieeebvm" class="fa fa-social fa-telegram hvr-pop"></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="https://instagram.com/ieee_bvm?igshid=r8dodh3528vy"
                  class="fa fa-social fa-instagram hvr-pop"></a>
              </div>
              <div class="col-md-6">
                <a href="https://twitter.com/ieeebvm?s=09" class="fa fa-social fa-twitter hvr-pop"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-copyright text-center bg-dark text-light py-3">
          &copy;
          <script>document.write(new Date().getFullYear())</script> Copyright Received |
          <a href="http://bvmengineering.ac.in/"> IEEE BVM</a>
        </div>
      </div>

  </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#2B32B2" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle2.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
