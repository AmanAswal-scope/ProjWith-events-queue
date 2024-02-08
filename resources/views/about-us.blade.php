<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- google font files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,500;1,600&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <title>SVAM - Cyber Security</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 navbar-bg">
        <header>
          <div class="row">
            <div class="col-12 col-md-11 mx-auto">
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                <a class="logo" href="index.html"><img class="logo-img" src="images/svam-logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-3">
                      <!-- <a class="nav-link" href="index.html">Home</a> -->
                      <a class="nav-link" href="{{ route('home.page') }}">Home</a> 

                    </li>
                    <li class="nav-item px-3">
                     <!-- <a class="nav-link" href="services.html">Services</a> -->
                      <a class="nav-link" href="{{ route('services.page') }}">Services</a> 
                    </li>
                    <li class="nav-item px-3">
                      <!-- <a class="nav-link active" href="about-us.html">About Us</a> -->
                      <a class="nav-link" href="{{ route('about.page') }}">About Us</a> 

                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#">Blog</a>
                    </li>
                  </ul>
                  <div class="call_section float-left">
                    <a href="{{ route('contact.page') }}" class="btn btn-primary d-inline-block">Contact us</a>
                    <div class="d-inline-block ps-2"><a href="#"><i class="text-white fas fa-search"></i></a></div>
                  </div>
                </div>
              </div>
              </nav>
            </div>
          </div>
        </header>
      </div>
      <div class="col-12 our-services-section">
        <div class="row">
            <div class="col-11 mx-auto">
        <h2 class="pt-5 pb-4 text-start">About us</h2>
        <div class="w-100">
          <p>SVAM International Inc. is a Global Information Technology (IT) services provider that commenced its operations in 1994 as an IT Staffing Company in New York. With the passing years, SVAM expanded its operations and became a leading provider of IT support and related services across multiple countries in the world. At SVAM, we believe that innovative technologies are the lifeline of businesses and therefore, we are committed to providing comprehensive, business-focused solutions like RPA, Mobile Force Automation, Consulting and Staffing Services, and Managed Services.</p>
        </div>
      </div>
      </div>  
      </div>
      <div class="col-12 our-team-box">
        <div class="row">
          <div id="ourTeam" class="col-11 mx-auto">
            <h1 class="pt-5 pb-4 text-center">Our Team</h1>
        <ul class="our-team-list">
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Anil-kapoor.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Anil Kapoor</strong></p>
            <p>Chief Executive Officer</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/vikas-dhablania.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Vikas Dhablania</strong></p>
            <p>Chief Operating Officer</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/kiran_bujle.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Kiran Bhujle</strong></p>
            <p> Global Cybersecurity Practice Leader</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Shahryar.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Shahryar Shaghaghi</strong></p>
            <p>Executive Advisor</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Kambiz_Mofrad.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Kambiz Mofrad</strong></p>
            <p>Chief Information Security Officer</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Tanuj_Mathur.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Tanuj Mathur</strong></p>
            <p>Director, Managed IT Services</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/matthew_lang.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Matthew Lang</strong></p>
            <p>Director, Business Development</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/yesica-heredia-guerrero.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Yesica Heredia Guerrero</strong></p>
            <p>IT Services Leader, Mexico</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/manish_sehgal.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>Manish Sehgal</strong></p>
            <p>VP of IT Operations, India</p>
          </li>
        </ul>
            </div>
            </div>
      </div>
      <div class="col-12 pb-md-5 awardsandcertifications">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <h1 class="pt-5 pb-4 text-center text-white">Awards & Certifications</h1>
            <ul class="award-item-list px-0">
              <li class="award-item"><img src="images/logo_nyc_small_business.png" alt=""></li>
              <li class="award-item"><img src="images/logo_state_newyork.png" alt=""></li>
              <li class="award-item"><img src="images/logo_cyberAB.png" alt=""></li>
              <li class="award-item"><img src="images/logo_hipaa_compliant.png" alt=""></li>
              <li class="award-item"><img src="images/logo_New_York_Empire_State_Development.png" alt=""></li>
              <li class="award-item"><img src="images/logo_CRN_MSP_500.png" alt=""></li>
              <li class="award-item"><img src="images/logo_ISO.png" alt=""></li>
              <li class="award-item"><img src="images/logo_cmmi.png" alt=""></li>
              <li class="award-item"><img src="images/logo_NMSDC.png" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 contact-section">
        <div class="row">
          <div class="col-11 mx-auto py-5">
            <p class="text-center">
              <span class="contact-us-img d-inline-block"><img src="images/contact_us.png" alt=""></span>
              <span class="d-inline-block px-4"><span class="d-block contact-us-text">Still have any questions about our services</span>
                    <button class="btn btn-primary mt-4">Contact now</button>
              </span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 footer-section">
        <div class="row">
          <div class="col-11 mx-auto py-4">
            <div class="w-100 pb-3"><img src="images/svam-logo.png" alt="" width="15%"></div>
            <div class="row border-bottom-footer-inner">
              <div class="col-12 col-sm-12 col-md-3 text-start">
                <span class="address-line d-block py-2">
                  <span class="btn-circle-white"><i class="fas fa-map-marker-alt"></i></span>
                  <span class="d-inline-block ps-2">233 East Shore Road, Suite 201<br/> Great Neck, NY 11023, USA</span>
                </span>
                <span class="phone d-block py-2">
                  <span class="btn-circle-white"><i class="fas fa-phone"></i></span>
                  <span class="d-inline-block ps-2">18009036716</span>
                </span>
                <span class="email d-block py-2">
                  <span class="btn-circle-white"><i class="fas fa-envelope"></i></span>
                  <span class="d-inline-block ps-2">sales@svam.com</span>
                </span>
              </div>
              <div class="col-12 col-sm-12 col-md-3">
                <h4><span>Services</span></h4>
                <ul>
                  <li><a href="vCiso-service.html">Virtual CISO</li>
                  <li><a href="services.html#ourservices">Third-party Risk Management</a></li>
                  <li><a href="services.html#ourservices">Assessments</a></li>
                  <li><a href="services.html#ourservices">Incident Response</a></li>
                  <li><a href="services.html#ourservices">Cybersecurity Strategy</a></li>
                  <li><a href="it-managed-services.html">IT Managed Services</a></li>
                  <li><a href="services.html#ourservices">Vulnerability Management</a></li>
                  <li><a href="services.html#ourservices">Cybersecurity Advisory</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3">
                <h4><span>About Us</span></h4>
                <ul>
                  <li><a href="about-us.html">Company Profile</li>
                  <li><a href="about-us.html#ourTeam">Our Team</a></li>
                  <li><a href="about-us.html#awardscertifications">Awards & Certifications</a></li>
                  <li><a href="about-us.html">Case Studies</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3">
                <h4><span>Blogs</span></h4>
                <ul>
                  <li><a href="">New Updates</li>
                  <li><a href="">Latest Blogs</a></li>
                  <!-- <li><a href="">Third-party Risk Management</a></li> -->
                </ul>
              </div>
              <div class="col-12 text-center pb-3">
                <span class="d-block pb-2">Connect with us</span>
                <span class="btn-circle-white"><i class="fab fa-linkedin-in"></i></span>
                <span class="btn-circle-white"><i class="fab fa-twitter"></i></span>
                <span class="btn-circle-white"><i class="fab fa-facebook-f"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center pb-4">
            Copyright © 2023 SVAM International Inc.
            <a href="privacy-policy.html" class="px-2">Privacy</a>
            <a href="cookie-policy.html" class="px-2">Terms</a>
            <a href="security-policy.html" class="px-2">Security Policy</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>