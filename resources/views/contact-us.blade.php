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
                                <!-- <a class="nav-link" href="about-us.html">About Us</a> -->
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
                <div class="row">
                    <div class="col-6 banner-text-bg banner-text">
                        <h1>We Would Love To Hear From You</h1>                        
                    </div>
                    <div class="col-6">
                        <img src="images/contact_us_banner.png" alt="" width="100%">
                    </div>
                </div>

            </div>
            <div class="col-12 contact-us">
                <div class="row">
                    <div class="col-11 mx-auto contact-us-content">

                        <div class="row">
                            <div class="col-5 contact-info-box p-4 my-3">

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Global Headquarter
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">SVAM International Inc. <br />
                                                        233 East Shore Road, Suite 201<br />
                                                        Great Neck, NY 11023, USA</p>
                                                    <p class="phone-conatct position-relative"><a href="tel: +1-800-903-6716">+1-800-903-6716</a> (General)</p>
                                                    <p class="phone-conatct position-relative"><a href="tel: +1-888-680-8250">+1-888-680-8250</a> (Sales & Marketing)</p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Mexico
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">SVAM International De Mexico<br/>
                                                        Avenida del Software S/N<br/>
                                                        Parque Cientifico y Tecnologico de Tamaulipas<br/>
                                                        CP. 87138 Ciudad Victoria, Tamaulipas Mexico
                                                    <p class="phone-conatct  position-relative"><a href="tel: +52-834-107-1000">+52-834-107-1000</a></p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +52-800-002">+52-800-002</a>-SVAM</p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                India
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="office-info">
                                                <p class="company-name position-relative">North Shore Technologies Pvt Ltd.<br/>
                                                    Logix Techno Park<br/>
                                                    1st Floor, Tower ‘B’, Plot No 5, Sector 127<br/>
                                                    Noida - 201301, India
                                                <p class="phone-conatct  position-relative"><a href="tel: +91-120-4043400">91-120-4043400</a></p>
                                                <p class="email-conatct  position-relative"><a href="mailto: sales@svam.com">Sales@svam.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Bangladesh
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">SVAM Bangladesh Private Limited<br/>
                                                        Concord Colosseum,<br/>
                                                        Plot 156, 6th floor, Kemal Ataturk Avenue,<br/>
                                                        Banani, Dhaka, Bangladesh</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +880 1711-476692">+880 1711-476692</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Canada
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">SVAM International Canada Inc.<br/>
                                                        350 Queens Quay West<br/>
                                                        Unit 2012<br/>
                                                        Toronto ON M5V 3A7</p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class=" pt-3 regional-sales-office">Regional Sales Offices</h2>
                                <div class="accordion" id="regional-office-accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOneRegional">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRegional"
                                                aria-expanded="false" aria-controls="collapseOneRegional">
                                                West
                                            </button>
                                        </h2>
                                        <div id="collapseOneRegional" class="accordion-collapse collapse" aria-labelledby="headingOneRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">Dasham Sidhu<br/>
                                                        2955 Campus Drive #110<br/>
                                                        San Mateo, CA 94403</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +516-466-6655">516-466-6655 Ext. 238</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwoRegional">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwoRegional" aria-expanded="false" aria-controls="collapseTwoRegional">
                                                Southwest
                                            </button>
                                        </h2>
                                        <div id="collapseTwoRegional" class="accordion-collapse collapse" aria-labelledby="headingTwoRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">Tim Chase<br/>
                                                        107 Lost Peak Path<br/>
                                                        Georgetown, TX 78633</p>
                                                    <p class="phone-conatct"><a href="tel: +512-713-9632">512-713-9632</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThreeRegional">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThreeRegional" aria-expanded="false" aria-controls="collapseThreeRegional">
                                                Southeast
                                            </button>
                                        </h2>
                                        <div id="collapseThreeRegional" class="accordion-collapse collapse" aria-labelledby="headingThreeRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">Jerry McGee<br/>
                                                        1420 Noble Street<br/>
                                                        Longwood, FL 32750</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +407-765-9147">407-765-9147</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">Sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourRegional">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFourRegional" aria-expanded="false" aria-controls="collapseFourRegional">
                                                Mid-Atlantic
                                            </button>
                                        </h2>
                                        <div id="collapseFourRegional" class="accordion-collapse collapse" aria-labelledby="headingFourRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">John Donato<br/>
                                                        41 University Drive, Suite 400<br/>
                                                        Newtown, PA 18940</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +516-309-2200">516-309-2200</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: sales@svam.com">sales@svam.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 my-3 ps-4">
                                <h4>Reach us</h4>
                                <!-- <form method="post" action="{{ route('submit.contact.form') }}" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="w-100 py-2" for="">Choose Service</label>
                                            <select class="w-100 form-control" name="" id="">
                                                <option value="">Please select</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Salutations</label>
                                            <select class="w-100 form-control" name="" id="">
                                                <option value="">Please select</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">First Name</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Last Name</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Email</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Phone Number</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Country & Region</label>
                                            <select class="w-100 form-control" name="" id="">
                                                <option value="">Please select</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="w-100 py-2" for="">Subject</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <label class="w-100 py-2" for="">Message</label>
                                            <textarea class="w-100 form-control" placeholder="Please provide a brief description of your query" rows="3" cols="3"></textarea>
                                        </div>
                                        <div class="col-12 py-2">
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form> -->
     <form method="post" action="{{ route('submit.contact.form') }}">
    @csrf
    <div class="row">
        <div class="col-12">
            <label class="w-100 py-2" for="service">Choose Service</label>
            <select class="w-100 form-control" name="service" id="service">
                <option value="">Please select</option>
                <option value="service_1">Service 1</option>
                <option value="service_2">Service 2</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="salutation">Salutations</label>
            <select class="w-100 form-control" name="salutation" id="salutation">
                <option value="">Please select</option>
                <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="ms">Ms.</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="first_name">First Name</label>
            <input class="w-100 form-control" type="text" name="first_name" id="first_name" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="last_name">Last Name</label>
            <input class="w-100 form-control" type="text" name="last_name" id="last_name" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="email">Email</label>
            <input class="w-100 form-control" type="text" name="email" id="email" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="phone_number">Phone Number</label>
            <input class="w-100 form-control" type="text" name="phone_number" id="phone_number" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="country">Country & Region</label>
            <select class="w-100 form-control" name="country" id="country">
            <option value="">Please select</option>
    <option value="usa">United States</option>
    <option value="canada">Canada</option>
    <option value="uk">United Kingdom</option>
    <option value="australia">Australia</option>
            </select>
        </div>
        <div class="col-12">
            <label class="w-100 py-2" for="subject">Subject</label>
            <input class="w-100 form-control" type="text" name="subject" id="subject" />
        </div>
        <div class="col-12">
            <label class="w-100 py-2" for="message">Message</label>
            <textarea class="w-100 form-control" name="message" id="message" placeholder="Please provide a brief description of your query" rows="3" cols="3"></textarea>
        </div>
        <div class="col-12 py-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

                            </div>
                        </div>
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