<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DOLE 10 | Online Registration of Establishment System</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/images/1020.gif" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets1/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">
    <link href="assets1/css/style2.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container mb-3">
            <div class="logo float-left" style="margin-right: 25px;">
                <!-- Uncomment below if you prefer to use an text logo -->

                <img src="assets1/img/lglogo.png" alt="" class="img-fluid" width="45px" height="80px">
            </div>

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an text logo -->
                <a href="index.php">
                    <h4>Republic of the Philippines</h4>
                    <h6>Department of Labor and Employment </h6>
                    <h4>Regional Office No. X (Northern Mindanao Region)</h4>
                </a>
                <a href="index.php"></a>
            </div>


            <nav class="main-nav float-right d-none d-lg-block">
                <img src="assets1/img/Socotec.jpg" alt="" class="img-fluid d1" width="60px" height="100px">
            </nav>
            <!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!-- ======= Intro Section ======= -->
    <section id="intro" class="clearfix">
        <div class="container" data-aos="fade-up">

            <div class="intro-info">
                <h2><span>O</span>nline <br> <span>R</span>egistration of <br> <span>E</span>stablishment <br><span>S</span>ystem</h2>

            </div>

            <div class="intro-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets1/img/intro-img.svg" alt="" class="img-fluid">
            </div>

            <div class="intro-info">
                <div class="col-sm-12 col-md-12 col-lg-11 mx-auto">
                    <div class="card card-signin my-0">
                        <div class="card-body">
                            <a href="pages/viewresults" class="btn btn-lg btn-info btn-block text-uppercase pl-3 pt-3 pb-3 pr-3" type="button" style="font-size:28px;"> <b>VIEW RESULTS </b><i class="fa fa-search"></i></a>
                            <a href="pages/registerclient" class="btn btn-lg btn-google btn-block text-uppercase pl-3 pt-3 pb-3 pr-3" type="button" data-toggle="modal" data-target="#termsandcons" style="font-size:28px;"><b>Register NOW</b> <i class="fa fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">


                </header>

                <div class="row about-container">

                    <div class="col-lg-12 content order-lg-1 order-2">


                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">


                            <p class="description" align="center" style="color:black;"><img src="assets1/img/onepager.png" alt=""></p>
                        </div>



                    </div>

                    <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                        <img src="assets1/img/about-img.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!--Modal Register Individual-->

        <div class="modal fade" id="modalCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><img src="assets/images/1020.gif" style="margin: 2px 10px 2px 0px;" alt="" height="20px" width="20px">Register Company Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="user" action="index.php" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="company_email" id="exampleFirstName" placeholder="Email (Preferably Company Email)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="company_pwd" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <div class="form-check">
                                        <input style="font-size: 11px;" type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label style="font-size: 11px;" class="form-check-label" for="exampleCheck1">By checking this means you agree to our <a target="_blank" href="pages/termsandconditions">Terms of Service and Privacy Statement</a>. We’ll occasionally send you account related emails.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <input type="submit" name="1020_preregister" class="btn btn-primary btn-user btn-block" placeholder="Register Account">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="termsandcons" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg text-dark" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Privacy Policy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                     <div class="modal-body"  style=" text-align: justify; text-justify: inter-word;">
                        <p>&nbsp;Please be informed that as an applicant of the various programs of the DOLE-X Regional Office, this office will require
                            your personal information that is protected under the Data Privacy Act of 2012</p><br>
                        <p>&nbsp;For this purpose, upon entering this DOLE-X Regional Office Online Portal you hereby freely give your iformal consent to allow this office
                            to collect and process your personal information.</p>
                        <p>&nbsp;Upon agreeing to the terms of this portal, and thus giving your consent, the regional office, including its authorized personnel will not be held
                            accountable or liable for the collection and processing of your personal information, to the extent that it is allowed by the existing laws and guidelines.</p>

                    </div>
                    <div class="modal-footer">
                        <a href="pages/registerclient" type="button" class="btn btn-md btn-block btn-primary"><b><i class="fa fa-check"></i> YES, REGISTER NOW!</b></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Company Register>
        <div class="modal fade" id="modalLoginCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Company Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" action="index.php" method="post">


                    </div>
                    <div class="modal-footer">


                        </form>
                    </div>
                </div>
            </div>
        </div-->

        <!--Modal Company Registration>
        <div class="modal fade" id="modalIndividual" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><img src="img/lglogo.png" style="margin: 2px 10px 2px 0px;" alt="" height="20px" width="20px">Register Individual Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="user" action="index.php" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="indiv_uname" id="exampleFirstName" placeholder="Email (Preferably Company Email)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="indiv_pwd">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="aep_prereg_individual" class="btn btn-primary btn-user btn-block" placeholder="Register Account">
                        </div>
                    </form>
                </div>
            </div>
        </div-->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-info">
                        <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d695.6564043342275!2d124.64723952192864!3d8.47921403849653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51e68fb2ec5970dc!2sPOEA+Regional+Extension!5e1!3m2!1sen!2sph!4v1562142119850!5m2!1sen!2sph" style="border:0" width="100%"></iframe>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>

                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="http://ro10.dole.gov.ph/default.php?retsamlakygee=906&amp;resource=d9681d05860552e9c3113da381f916fc">Transparency</a></li>
                            <li><a href="http://ro10.dole.gov.ph/index.php">Services</a></li>
                            <li><a href="http://ro10.dole.gov.ph/regionnewsarchive.php">News Archives</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>Trinidad Building,<br />
                            Corrales-Yacapin Street,<br />
                            Cagayan de Oro City<br />
                            <strong>Phone:</strong> (088) 858-1658<br />
                            <strong>Email:</strong> dole10.imsd@gmail.com</p>

                        <div class="social-links">
                            <strong>DOLE-X Hotline</strong><br>
                            <strong>Globe: 0977-114-6526 </strong><br>
                            <strong>Smart : 0928-233-7806&nbsp;</strong><br>
                            <a href="https://www.facebook.com/DOLE-NorthMin-1558318694219435/" target="_blank"><img alt="" src="assets1/img/facebookLogo.jpg" style="width: 200px; height: 60px;" /></a>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Department of Labor and Employment - ROX</strong>.
                <br>All Rights Reserved <?php echo date("Y"); ?>
            </div>
            <div class="credits">
                Designed and Developed by NIjp.wookie</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--Individual Register>
    <div class="modal fade" id="modalLoginIndividual" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Individual Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" action="index.php" method="post">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" name="indi_login_uname" placeholder="Email" required autofocus>
                            <label for="inputEmail"></label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="indi_login_pwd" placeholder="Password" required>
                            <label for="inputPassword"></label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" name="indi_login" class="btn btn-lg btn-primary btn-block text-uppercase" placeholder="SIGN IN">

                    </form>
                </div>
            </div>
        </div>
    </div-->


    <!-- Vendor JS Files -->
    <script src="assets1/vendor/jquery/jquery.min.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>
    <script src="assets1/vendor/counterup/counterup.min.js"></script>
    <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets1/vendor/venobox/venobox.min.js"></script>
    <script src="assets1/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets1/js/main.js"></script>

</body>

</html>