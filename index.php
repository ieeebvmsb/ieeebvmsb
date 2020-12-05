<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  * {
    /* border: 1px dotted green; */
    scroll-behavior: smooth;
    box-sizing: border-box;
  }
  .mySlide1, .mySlide2, .mySlide3, .mySlide4, .mySlide5 {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
  }
  .slideshow-container img {
    vertical-align: middle;
  }
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  /* Next & previous buttons */
  .slideshow-container .prev,
  .slideshow-container .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  /* Position the "next button" to the right */
  .slideshow-container .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  /* On hover, add a black background color with a little bit see-through */
  .slideshow-container .prev:hover,
  .slideshow-container .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  /* Caption text */
  .slideshow-container .text {
    color: #ffffff;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  /* Number text (1/3 etc) */
  .slideshow-container .numbertext {
    color: #ffffff;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  /* The dots/bullets/indicators */
  .slideshow-container .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #999999;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  .slideshow-container .active,
  .dot:hover {
    background-color: #111111;
  }
  /* Fading animation */
  /* .slideshow-container .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  } */
  /* @-webkit-keyframes fade {
    from {
      opacity: 0
    }
    to {
      opacity: 1
    }
  }
  @keyframes fade {
    from {
      opacity: 0
    }
    to {
      opacity: 1
    }
  } */

  .mySlide1 {
    animation: fade1 20s infinite;
  }
  .mySlide2 {
    animation: fade2 20s infinite;
  }
  .mySlide3 {
    animation: fade3 20s infinite;
  }
  .mySlide4 {
    animation: fade4 20s infinite;
  }
  .mySlide5 {
    animation: fade5 20s infinite;
  }

  @keyframes fade1 {
    0%{opacity: 1;}
    20%{opacity: 0;}
    40%{opacity: 0;}
    60%{opacity: 0;}
    80%{opacity: 0}
    100%{opacity: 1;}
  }
  @keyframes fade2 {
    0%{opacity: 0;}
    20%{opacity: 1;}
    40%{opacity: 0;}
    60%{opacity: 0;}
    80%{opacity: 0}
    100%{opacity: 0;}
  }
  @keyframes fade3 {
    0%{opacity: 0;}
    20%{opacity: 0;}
    40%{opacity: 1;}
    60%{opacity: 0;}
    80%{opacity: 0}
    100%{opacity: 0;}
  }
  @keyframes fade4 {
    0%{opacity: 0;}
    20%{opacity: 0;}
    40%{opacity: 0;}
    60%{opacity: 1;}
    80%{opacity: 0}
    100%{opacity: 0;}
  }
  @keyframes fade5 {
    0%{opacity: 0;}
    20%{opacity: 0;}
    40%{opacity: 0;}
    60%{opacity: 0;}
    80%{opacity: 1}
    100%{opacity: 0;}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .slideshow-container .prev,
    .slideshow-container .next,
    .slideshow-container .text {
      font-size: 11px
    }
  }

  /* XYZ */
  /* #slider {
    overflow: hidden;
  }
  #slider figure {
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    animation: 20s slider infinite;
    scroll-behavior: smooth;
  }
  #slider figure img {
    width: 20%;
    float: left;
  }
  @keyframes slider {
  	0% {
  		left: 0;
  	}
  	20% {
  		left: 0;
  	}
  	25% {
  		left: -100%;
  	}
  	45% {
  		left: -100%;
  	}
  	50% {
  		left: -200%;
  	}
  	70% {
  		left: -200%;
  	}
  	75% {
  		left: -300%;
  	}
  	95% {
  		left: -300%;
  	}
  	100% {
  		left: -400%;
  	}
  } */

  /* -------- */

  /* Slider CSS Start */
  /* .Slide {
    display: none;
  }
  img {
    vertical-align: middle;
    width: 100%;
    height: 400px;
  }
  .slideContainer {
    max-width: 600px;
    position: relative;
    margin: auto;
  }
  .prevBtn,
  .nextBtn {
    position: absolute;
    top: 50%;
    width: auto;
    padding: 10px;
    background-color: #2B32B2;
    color: #ee76ad;
    font-weight: bolder;
    font-size: 18px;
  }
  .nextBtn {
    right: 0;
  }
  .Caption {
    color: #2B32B2;
    font-weight: bold;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-size: 25px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  .Navdot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #ee76ad;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  .selected,
  .Navdot:hover {
    background-color: #2B32B2;
  }
  @media only screen and (max-width: 450px) {
    .p  revBtn,
    .nextBtn,
    .Caption {
      font-size: 16px;
    }
  } */
  /* Slider CSS End */
</style>

<head>
  <title>IEEE BVM SB | BVM Engineering College</title>
  <link rel="icon" href="images/IEEE Blue Kite.png" type="image/x-icon" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet" />

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/aos.css" />

  <link rel="stylesheet" href="css/ionicons.min.css" />
  <link rel="stylesheet" href="fonts/fontawesome/font-awesome.min.css" />

  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">IEEE BVM SB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="index.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
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
            <a class="nav-link dropdown-toggle" href="exofteam.php" id="dropdown04" data-toggle="dropdown"
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
          <li class="nav-item">
            <a href="society.php" class="nav-link">Society</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="loginPage.php" class="nav-link">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <!-- <div class="js-fullheight"> -->
  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            IEEE <strong>Student Branch</strong> BVM
          </h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <a href="contact.php" class="btn btn-primary btn-outline-white px-5 py-3">Get in touch</a>
          </p>
          <!-- <p><a href="index.php#about"><i class="arrow down"></i></a></p> -->
          <div id="section04" class="demo">
            <a  href="#section-counter"><span></span> </a>
          </div>
          <!-- <p>The IEEE BVM Student Branch connects engineers from various department of the institute to come together,
            identify problem statements and act accordingly to improvise and promote Technical Activities which can in
            turn be forted for "Advancing Technology for Humanity".</p> -->
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>WE AT IEEE BVM</h2>
          <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="50">0</strong>
              <span>Successful Events</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="100">0</strong>
              <span>Active Members</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="4">0</strong>
              <span>International and National Flagship events</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="back-top" style="display: none">
    <a title="Go to Top" data-goto="#home" class="smothscroll">
      <i class="fa fa-level-up"></i></a>
  </div>

  <section class="ftco-section" id="about">
    <div class="container">
      <div class="row no-gutters justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-4">About Us</h2>
          <p align="justify">
            To identify the important objectives for a technologist to
            improvise and sustain the technology for the benefit of the
            society, personal growth, and to achieve carrier goals by filling
            out the gap between the institutional Academics and Industry&#39;s
            practicality.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
          <a href="/" class="image" style="
                background-image: url('images/about/IEEEBVMSB_629.png');
                width: 80%;
              " data-scrollax=" properties: { translateY: '-20%'}">
          </a>
          <div class="text">
            <h2 class="heading"><a href="/">IEEE BVM SB</a></h2>
            <p align="justify">
              IEEE BVM SB was established on 29th August 2016. The main motto
              of the Student Branch is to connect engineers from various
              departments of the institute to come together, identify problem
              statements and act accordingly to improvise and promote
              Technical Activities which can, in turn, be formed for
              &quot;Advancing Technology for Humanity&quot;. It aims to give
              students the cutting- edge skills, confidence, and intellect
              with which they can easily face the competitive world and
              contribute to human welfare by organizing competitions,
              workshops, expert talks, seminars, and symposiums on different
              technical topics.
            </p>
            <!-- <p><a href="/" class="btn btn-primary px-4">Know More</a></p> -->
          </div>
        </div>
        <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
          <a href="https://bvmengineering.ac.in/" class="image image-2 order-2"
            style="background-image: url('images/about/bvmcollege.jpg')"
            data-scrollax=" properties: { translateY: '-20%'}"></a>
          <div class="text order-1">
            <h2 class="heading">
              <a href="https://bvmengineering.ac.in/">Our BVM</a>
            </h2>
            <p align="justify">
              “Work Is Worship” Birla Vishvakarma Mahavidyalaya Engineering
              College, an Autonomous Institute managed by Charutar Vidya
              Mandal was established in 1948 from donations made by the Birla
              Education Trust on the behest of Sardar Vallabhbhai Patel, the
              first Home Minister of independent India. The college was
              inaugurated by Lord Mountbatten, the Governor-General of India
              on 14 June 1948, and rose to prominence under the stewardship of
              Prof. Junnarkar and Prof. K.M. Dholakia. It was one of the few
              colleges in India that adopted the progressive credit system of
              relative grading in India. The college has awarded degrees to
              over 20,000 graduates.
            </p>
            <p>
              <a href="https://bvmengineering.ac.in/" class="btn btn-primary px-4">Know More</a>
            </p>
          </div>
        </div>
        <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
          <a href="https://www.ieee.org/" class="image" style="
                background-image: url('images/about/IEEEAdvancingTechnology.png');
                width: 80%;
                text-align: center;
              " data-scrollax=" properties: { translateY: '-20%'}"></a>
          <div class="text">
            <h2 class="heading"><a href="https://www.ieee.org/">IEEE</a></h2>
            <p align="justify">
              IEEE is the world’s largest technical professional organization
              dedicated to advancing technology for the benefit of humanity.
              IEEE and its members inspire a global community to innovate for
              a better tomorrow through its more than 419,000 members in over
              160 countries, and its highly cited publications, conferences,
              technology standards, and professional and educational
              activities. IEEE is the trusted “voice” for engineering,
              computing, and technology information around the globe.
            </p>
            <p>
              <a href="https://www.ieee.org/" class="btn btn-primary px-4">Know More</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="row row-custom bg-f7 col-12">
    <div class="container wrapper benefit-wrapper col-12">
      <h3 class="wrapper-title padding-bottom-30" style="color: black">
        IEEE Member Benefits
      </h3>
      <div class="benefit">
        <a href="https://standards.ieee.org/" class="">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE Standards Association</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://ieeexplore.ieee.org/" class="">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE Xplore Digital Library</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/products/resumelab.php" class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE Resume Lab</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/students/competitions/index.php" class="">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">Student Compeitions</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/education_careers/education/elearning_library/index.php" class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE eLearning Library</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/students/awards/index.php"
          class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">Scholarships, Grants, and Fellowships</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://theinstitute.ieee.org/" class="normal">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">The Institute Newletter</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/products/googleapps.php" class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">GoogleApps@IEEE</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://ieee-collabratec.ieee.org/" class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE Collabratec</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/products/googleapps.php" class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE e-mail Alias</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/membernet.php" class="normal">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE Membernet</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/membership_services/membership/students/awards/student_travel_grants.php"
          class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE Student Travel Grants</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://www.ieee.org/about/volunteers/tab/htc/special_interest_group_on_humanitarian_technology.php"
          class="normal">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE SIGHT</b>
        </a>
      </div>
      <div class="benefit">
        <a href="https://ieeetv.ieee.org/" class="benefit-text-lg">
          <i class="fa fa-chevron-circle-right fa-fw" style="color: #2b32b2"></i>
          <b style="color: black">IEEE TV</b>
        </a>
      </div>

      <div class="col-lg-12 text-center browse-all-link padding-top-30">
        <div class="hover-right">
          <br />
          <a href="https://www.ieee.org/benefits">
            <b style="color: #2b32b2">Browse All Benefits &nbsp;<i class="fa fa-external-link"></i></b>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- <div id="slider">
    <h1 align="center" style="color: #000000;"><b>Glimpses of Successes..</b></h1>
    <br>
    <figure>
      <img src="images/flagship/FE12.png" width="400px" height="450px">
      <img src="images/flagship/FE21.png" width="400px" height="450px">
      <img src="images/flagship/FE34.png" width="400px" height="450px">
      <img src="images/flagship/FE23.png" width="400px" height="450px">
      <img src="images/flagship/FE14.png" width="400px" height="450px">
    </figure>
  </div> -->

    <div class="slideshow-container">
      <h1 align="center" style="color: #000000;"><b>Glimpses of Successes..</b></h1>
      <br>
      <div class="mySlide1">
        <img src="images/flagship/FE12.png" style="width:100%">
      </div>
      <div class="mySlide2">
        <img src="images/flagship/FE21.png" style="width:100%">
      </div>
      <div class="mySlide3">
        <img src="images/flagship/FE34.png" style="width:100%">
      </div>
      <div class="mySlide4">
        <img src="images/flagship/FE12.png" style="width:100%">
      </div>
      <div class="mySlide5">
        <img src="images/flagship/FE21.png" style="width:100%">
      </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br>

  <!-- Slider HTML Code Starts -->
  <!-- <div class="slideContainer">
    <h1 align="center" style="color: #000000;"><b>Glimpses of Successes..</b></h1>
    <br>
    <div class="Slide">
      <img src="images/flagship/FE12.png" />
    </div>
    <div class="Slide">
      <img src="images/flagship/FE21.png" />
    </div>
    <div class="Slide">
      <img src="images/flagship/FE34.png" />
    </div>
    <div class="Slide">
      <img src="images/flagship/FE13.png" />
    </div>
    <div class="Slide">
      <img src="images/flagship/FE23.png" />
    </div>
    <a class="prevBtn">&#10094;</a>
    <a class="nextBtn">&#10095;</a>
  </div>
  <br />
  <div style="text-align:center">
    <span class="Navdot" onclick="currentSlide(1)"></span>
    <span class="Navdot" onclick="currentSlide(2)"></span>
    <span class="Navdot" onclick="currentSlide(3)"></span>
    <span class="Navdot" onclick="currentSlide(4)"></span>
    <span class="Navdot" onclick="currentSlide(5)"></span>
  </div> -->
  <!-- Slider HTML Code Ends -->

  <footer class="footer">
    <div class="text-dark font-small bg-light pt-4">
      <div class="container-fluid text-center text-md-l">
        <div class="container-fluid m-0 p-0 row">
          <div class="col-md-6 mt-md-0 mt-3 row ft-content">
            <h5 class="text-uppercase font-weight-bold col-12" style="height: fit-content">
              External Links
            </h5>
            <div class="container-fluid m-0 p-0 col-12">
              <ul class="border-right">
                <ul>
                  <a href="https://www.ieee.org/" target="_blank">IEEE</a>
                </ul>
                <ul>
                  <a href="https://ieee-npss.org/" target="_blank">IEEE NPSS</a>
                </ul>
                <ul>
                  <a href="https://bvmengineering.ac.in/" target="_blank">BVM</a>
                </ul>
              </ul>
            </div>
          </div>

          <div class="col-md-5 mb-md-0 mb-3 ft-content">
            <h5 class="text-uppercase font-weight-bold col-12">CONTACT US</h5>
            <p>Email: ieeebvm16@gmail.com</p>
            <p>
              Address: BVM Engineering college Vallabh Vidhyanagar Anand -
              388120
            </p>
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
      </div>

      <div class="footer-copyright text-center bg-dark text-light py-3">
        &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        Copyright Received |
        <a href="https://bvmengineering.ac.in/">IEEE BVM</a>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#2B32B2" />
    </svg>
  </div>

<!-- Slider Script Starts -->
  <!-- <script>
    document.querySelector(".prevBtn").addEventListener("click", () => {
      changeSlides(-1);
    });
    document.querySelector(".nextBtn").addEventListener("click", () => {
      changeSlides(1);
    });
    var slideIndex = 1;
    showSlides(slideIndex);
    function changeSlides(n) {
      showSlides((slideIndex += n));
    }
    function currentSlide(n) {
      showSlides((slideIndex = n));
    }
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("Slide");
      var dots = document.getElementsByClassName("Navdot");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      Array.from(slides).forEach(item => (item.style.display = "none"));
      Array.from(dots).forEach(
        item => (item.className = item.className.replace(" selected", ""))
      );
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " selected";
    }
</script> -->
<!-- Slider Script Ends -->

<!-- XYZ -->

    <!-- <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script> -->

    <!-- XYZ Ends -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <script src="js/scroll-down.js"></script>

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
  <script src="js/carousel.js"></script>
</body>

</html>
