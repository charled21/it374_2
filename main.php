<body>
            <!-- php for login start-->

            <?php

            $con = mysqli_connect("localhost","root","","rusty_db_01");

            if (isset($_POST['username'])){
            
              $username = ($_POST['username']);
              $password = ($_POST['password']);
              $password = (sha1($password)); 
            
            $query = "SELECT * FROM `login_accounts` WHERE username='$username'
            and password='".($password)."'";
             $result = mysqli_query($con,$query) or die(mysql_error());
             $rows = mysqli_num_rows($result);
                    if($rows==1){
                 $_SESSION['username'] = $username;
                 
            include "php\login-history.php";
            header("Location: userpanel.php");
                     }else{
             echo "
             <script type=\"text/javascript\">alert(\"Incorrect username or password!\");
             window.location.href = \"main.php\";
             </script>
             ";
            }
                }else{
                    
            ?>
            <!--php for login end--->
            
            <!------------------------------modal----------------------------------->
            <section id="modal-section">
                <div class="modal fade" id="accountmodal" tabindex="-1" role="dialog" aria-labelledby="accountmodal-label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="accountmodal-label">LOGIN PANEL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="modal-form">
                                        <div class="form-group row justify-content-center">
                                            <div class="col-lg-10 col-sm-10">
                                                <p>USERNAME </p><input type="text" name="username" class="form-control input-txt-style" placeholder="username" >
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-center">
                                            <div class="col-lg-10 col-sm-10">
                                                <p>PASSWORD</p><input type="password" name="password" class="form-control" placeholder="*********" >
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-xs-4 row"> <p class="modal-text mr-2">Don't have an account yet?<p> <a href="register.php">Click here</a></div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="submit" id="modal-btn">Login</button>
                                        </div>

                                        
                                        
                                        </form>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <!--php login wrap close begin-->
            <?php } ?>
            <!--php login wrap close end-->

            <!-------------------------------modal end------------------------------>
                                

            <!-- ---------------------topbar start-------------------------- -->
            <div id="topbar"></div>
            <!-- ---------------------topbar end-------------------------- -->
            <!-- ---------------------header-------------------------- -->
            <section>
                <header id="header" class="fixed-top header-transparent">

                    <div class="container d-flex align-items-center">
                        <div class="col-lg-12 col-md-6 header-nav ">
                        <nav class="navbar navbar-expand-md">
                            <div class="row">
                                <a class="navbar-main"href="#">RUSTY</a>
                                <a id="nav-main"href="#">DEVS</a>
                            </div>
                                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapse-items" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                            <div class="collapse navbar-collapse" id="collapse-items">
                                <ul class="col-md-6">
                                
                                </ul>
                                
                                <ul class="col-md-6 navbar-nav m-0 ml-lg-auto p-3 p-lg-0 justify-content-between" >
                                        <li>
                                            <a class="nav-link" href="#about" id="abt-btn">ABOUT</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#services" id="srv-btn">SERVICES</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#porttwo" id="prt-btn">PORTFOLIO</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="#footer-personal" id="contact-us">CONTACT US</a>
                                        </li>
                                        <!-- <li>
                                            <a id="account-btn" class="nav-link" data-toggle="modal" data-target="#accountmodal">ACCOUNT</a>
                                        </li>     -->
                                </ul>
                            </div>
                        </nav>
                        </div>
                    </div>
                </header>
            </section>
            <!-- ---------------------header end-------------------------- -->

            <!-- ---------------------landing cover-------------------------- -->
            <section id="landingcover"> 
                <div class="col-lg-12 landingcover-ss" >
                    <div class="container-fluid" >
                        <div class="row landing-container align-items-center" >
                            <!-- <div class="row"> -->
                                <div class="col-lg-6 col-md-6 text-center">
                                    <p class="text-style">Require Fast and Efficient Alternative?</p>
                                    <button class="btn btn-primary button-style" data-toggle="modal" data-target="#accountmodal" id="gs-btn">GET STARTED</button>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/landing-img.png">
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- ---------------------landing cover end-------------------------- -->

            <!-- ---------------------about -------------------------- -->
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 text-center">
                            <div class="about-img" data-aos="fade-up-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <!--PORTRAIT -->
                                <img src="<?php echo base_url(); ?>/assets/img/portrait3.gif">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about-content" data-aos="fade-up-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <!-- CONTENT-->
                            <h2>About Us</h2>
                            <p>We at RUSTY DEVS specialize in website designing and various forms of digital art.</p>
                            <ul>
                                <li>We want to develop eye-catching but affordable web solutions for businesses </li>
                                <li>Produce quick, smooth, efficient and user friendly interfaces</li>
                                <li>Our top priority is customer satisfaction through innovative and effective strategies</li>
                            </ul>
                            <p>About a year ago, curiousity and fascination got us motivated in creating an impact online. 
                            Seeing as people and small businesses alike aren't reaching their proper audience because of dull, bulky and very confusing interfaces. 
                            We wanted to build a place where people can go to and ask for great but affordable designs,  
                            get technical help without being laughed at how ridiculous they want their website to look. Somewhere we can 
                            connect to their core, so they can convey whats in their heart and out into the digital world. </p><p>That is OUR GOAL, 
                            this is OUR ROLE, we are RUSTY DEVS.</p>
                            
                            </div>
                        </div>
                    </div>  
                </div>
            </section>
            <!-- ---------------------about end-------------------------- -->

            <!-- ---------------------services-------------------------- -->
            <section id="services" class="serv-bg">
                <div class="container" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Services</h1>
                    <div class="row">
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                            <div class="box">
                                <div id="icon-1" class="box-img"></div>
                                <!-- #BOX 1 HERE-->
                                <h5>Documentation</h5>
                                <p>Provide technical manuals and online related informations</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                            <div class="box">
                                <!-- #BOX 2 HERE-->
                                <div id="icon-2" class="box-img"></div>
                                <h5>Front End</h5>
                                <p>Experienced in HTML, CSS, and Javascript as well as in several other Frameworks</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                            <div class="box">
                                <!-- #BOX 3 HERE-->
                                <div id="icon-3" class="box-img"></div>
                                <h5>Back End</h5>
                                <p>Create and setup a database for your website</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                            <div class="box">
                                <!-- #BOX 4 HERE-->
                                <div id="icon-4" class="box-img"></div>
                                <h5>Pixel Art</h5>
                                <p>Create fun and cute pixel arts for game sprites and assets</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                            <div class="box">
                                <!-- #BOX 5 HERE-->
                                <div id="icon-5" class="box-img"></div>
                                <h5>Image Manipulation</h5>
                                <p>Edit and enhance image depending on the application</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                            <div class="box">
                                <!-- #BOX 6 HERE-->
                                <div id="icon-6" class="box-img"></div>
                                <h5>3D Sculpting</h5>
                                <p>Produce basic 3D sculpts with simple rigs for various uses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ---------------------services end-------------------------- -->

            <!-- ---------------------portfolio 2 start-------------------------- -->
            <section id="porttwo">
                <div id="portfolio-bg"></div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000">
                    <div class="container-fluid ">
                        <header>
                            <h3></h3>
                        </header>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="owl-carousel">
                                    <div class="portfolio-item">
                                        <img src="<?php echo base_url(); ?>/assets/img/carousel3.jpg" class="portfolio-img">
                                    </div>
                                    <div class="portfolio-item">
                                        <img src="<?php echo base_url(); ?>/assets/img/carousel2.jpg" class="portfolio-img">
                                    </div>
                                    <div class="portfolio-item">
                                        <img src="<?php echo base_url(); ?>/assets/img/carousel1.jpg" class="portfolio-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------portfolio 2 end-------------------------- -->