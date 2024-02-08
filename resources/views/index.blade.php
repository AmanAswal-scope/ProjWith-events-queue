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
 <!-- <link rel="stylesheet" href="css/main.css" /> -->

 <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />


 <!-- <link rel="stylesheet" href="css/responsive.css" />  --> 
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
                      <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item px-3">
                   <!--   <a class="nav-link" href="services.html">Services</a> 
                      <a class="nav-link" href="/services">Services</a> -->
                      <a class="nav-link" href="{{ route('services.page') }}">Services</a> 

                    </li>
                    <li class="nav-item px-3">
                    <!--  <a class="nav-link" href="about-us.html">About Us</a> -->
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
      <div class="col-12 navbar-bg">
        <div class="banner">
        <div class="row">
          <div class="col-11 mx-auto"> 
            <div class="row">
              <div class="col-12 col-md-8 col-lg-6 banner-text-bg banner-text">
                <h1>Managing all your cybersecurity risks</h1>
            <h6 class="d-none d-md-inline-block">At SVAM International, our goal is to build trust through outcomes. We have a long history of providing
              exceptional deliverables aligned with specific needs of our clients. We do this by working closely with
              our clients to give them what they need to understand cyber security within their business. We are excited
              to work with you, and we look forward to a wonderful relationship.</h6>
            <a href="contact-us.html" class="btn btn-primary btn-talk-to-expert">Talk to an Expert <i
                class="fas fa-long-arrow-alt-right arrow-animate" aria-hidden="true"></i></a>
              </div>
            </div>     
        </div>
      </div>
    </div>
      </div>
      <div class="col-12 py-md-5 who-we-what-bx">
        <div class="row">
          <div class="col-12 col-md-11 mx-auto py-3">
            <div class="row">
              <div class="col-12 pb-2 pb-md-4 pb-lg-0 col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center who-we-are">Who we are</h5>
                    <p class="card-text">We are a team of cybersecurity experts who are passionate about helping
                      businesses protect themselves from cyber threats. Our team has decades of experience in the
                      cybersecurity industry and is dedicated to staying up to date with the latest threats and trends.
                      We believe that cybersecurity should be accessible to businesses of all sizes, and we work closely
                      with our clients to develop customized solutions that meet their specific needs.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 pb-2 pb-md-4 pb-lg-0 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center wht-we-do">What we do</h5>
                    <p class="card-text">We make cybersecurity approachable and well-defined to provide our clients with
                      the peace of mind they need to focus on running their businesses. We have the people, processes
                      and technology to assess, analyze and mitigate the threats your business faces.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 pb-2 pb-md-0 pb-lg-0 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center why-we-do">Why we do it</h5>
                    <p class="card-text">We believe the world needs cybersecurity to maintain our way of life. We have a
                      deep passion for bringing the world a more stable and secure cybersecurity existence. We have all
                      seen what a lack of cybersecurity can do to a person, a company, a town, a state or even a country
                      and we work tirelessly to prevent those events from occurring.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 ourservicestabbg our-services-section">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-11 mx-auto">
        <h2 class="text-center pt-3 pb-2 pt-md-5 pb-md-4">Our Services</h2>
        <!-- <div class="w-100"> -->
          <!-- <div class="row">
            <div class="col-11 mx-auto"> -->
              <ul class="nav nav-pills nav-justified tab-bg custom-tab-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active py-md-4" id="cyber-security-advisory" data-bs-toggle="tab"
                    data-bs-target="#cybersecurityadvisory" type="button" role="tab" aria-controls="home"
                    aria-selected="true">Cyber Security Advisory<span class="nav-item-arrow"></span></button>
    
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link py-md-4" id="it-managed-services" data-bs-toggle="tab"
                    data-bs-target="#itmanagedservices" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">IT Managed Services<span class="nav-item-arrow"></span></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link py-md-4" id="vCISO-services" data-bs-toggle="tab" data-bs-target="#vCISOservices"
                    type="button" role="tab" aria-controls="contact" aria-selected="false">vCISO Services<span
                      class="nav-item-arrow"></span></button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cybersecurityadvisory" role="tabpanel"
                  aria-labelledby="cyber-security-advisory">
                  <div class="row">
                    <div class="col-12 col-md-11 mx-auto pt-4">
                      <div class="row">
                        <div class="col-12 col-md-6 order-2 order-md-1">
                          <h3 class="pb-0 pb-md-3">Cyber Security Advisory</h3>
                          <p>Cybersecurity is a critical aspect of any business, and it's essential to have a robust
                            strategy in place to protect your company, customers, and data from cyber threats. At SVAM, we
                            offer cybersecurity services that can help you safeguard your business and mitigate risks. Our
                            cybersecurity experts will work with you to assess your existing operational and IT practices
                            and identify risks. We'll then develop a comprehensive cybersecurity strategy that includes
                            security audits, policies, and guidelines for employees, and training programs to educate your
                            staff on security principles.With our cybersecurity strategy services, you can rest assured that
                            your business is protected from cyber threats. Contact us today to learn more about how we can
                            help you safeguard your business and mitigate risks.</p>
                          <ul>
                            <li>Risk assessments and management Vulnerability assessments and management Cyber liability
                              insurance consultation Change Management
                            </li>
                            <li>Third-party Risk Management</li>
                            <li>Vendor due diligence</li>
                            <li>Access Management consultation</li>
                            <li>Incident Response Planning</li>
                            <li>IR Table-Top Exercises</li>
                            <li>Penetration Testing</li>
                            <li>Policy development and management<br /> <a class="learn-more" href="services.html">Learn
                                more <span class="bounce">>></span></a></li>
                          </ul>
                        </div>
                        <div class="col-12 pb-3 pb-md-4 col-md-6 order-1 order-md-2 text-end">
                          <img src="images/security_advisor_img.png" class="w-100 w-md-auto" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="itmanagedservices" role="tabpanel" aria-labelledby="it-managed-services">
                  <div class="row">
                    <div class="col-12 col-md-11 mx-auto pt-4">
                      <div class="row">
                        <div class="col-12 col-md-6 order-2 order-md-1">
                          <h2 class="pb-3">IT Managed Services</h2>
                          <p>SVAM Security understands the SMB ‘s struggles and challenges, from predicting cash flow to
                            managing an ever-growing to-do list. Managing your business can be daunting when you're working
                            with limited resources and budgets. SVAM’s small business (SMB) solutions are tailored to your
                            needs, taking the burden of network security and technology off your shoulders, and letting you
                            focus on your core business. Our team of technology professionals has done the groundwork for
                            you, so you can focus on running your business<br /> <a class="learn-more"
                              href="it-managed-services.html">Learn more <span class="bounce">>></span></a></p>
    
                        </div>
                        <div class="col-12 pb-3 pb-md-4 col-md-6 order-1 order-md-2 text-end">
                          <img src="images/it_managed_services.png" class="w-100 w-md-auto" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="vCISOservices" role="tabpanel" aria-labelledby="vCISO-services">
                  <div class="row">
                    <div class="col-12 col-md-11 mx-auto pt-4">
                      <div class="row">
                        <div class="col-12 col-md-6 order-2 order-md-1">
                          <h2 class="pb-3">vCISO Services</h2>
                          <p>A virtual CISO is a security expert who provides consulting services to organizations
                            part-time or as needed. They can help organizations develop and implement cybersecurity
                            strategies, assess security posture, and identify and mitigate risks. If you are looking for a
                            way to improve your organization's cybersecurity posture, virtual CISO consulting services can
                            be a great option.<br /> <a class="learn-more" href="vCiso-service.html">Learn more <span
                                class="bounce">>></span></a></p>
                        </div>
                        <div class="col-12 pb-3 pb-md-4 col-md-6 order-1 order-md-2 text-end">
                          <img src="images/vciso_services.png" class="w-100 w-md-auto" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- </div>
          </div> -->
        <!-- </div> -->
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
              <span class="d-inline-block px-4"><span class="d-block contact-us-text">Still have any questions about our
                  services</span>
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