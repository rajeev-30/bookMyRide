<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">

<head>

    <title>Car Rental Portal | Page details</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"
        data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- About-us -->
    <link rel="stylesheet" href="team-css.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" /> -->
    <script src="https://kit.fontawesome.com/a5ba3abdc4.js" crossorigin="anonymous"></script>
</head>

<body>
    <<!-- Start Switcher -->
        <?php include('includes/colorswitcher.php'); ?>
        <!-- /Switcher -->

        <!--Header-->
        <?php include('includes/header.php'); ?>
        <?php
        $pagetype = $_GET['type'];
        $sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $result) { ?>
        <section class="page-header aboutus_page">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-heading">
                        <h1><?php echo htmlentities($result->PageName); ?></h1>
                    </div>
                    <ul class="coustom-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><?php echo htmlentities($result->PageName); ?></li>
                    </ul>
                </div>
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>
        </section>
        <section class="about_us section-padding">
            <div class="container">
                <div class="section-header text-center">


                    <h2><?php echo htmlentities($result->PageName); ?></h2>
                    <p><?php echo $result->detail; ?> </p>
                </div>
                <?php }
        } ?>
            </div>
        </section>
        <!-- /About-us-->
        <section class="about_us section-padding">
            <div class="container">
                <div class="section-header text-center">


                    <h2>About Us </h2>
                    <p style="font-size: 1.2em; font-weight: bold; font-family: Arial, sans-serif; color: #333333;">We offer a varied fleet of cars, ranging from the compact. All our vehicles have air conditioning, power steering, electric windows. All our vehicles are bought and maintained at official dealerships only. Automatic transmission cars are available in every booking class.</p>
<div style="font-style: italic; font-family: Georgia, serif; color: #404040;">As we are not affiliated with any specific automaker, we are able to provide a variety of vehicle makes and models for customers to rent.</div>
<p style="font-size: 1.1em; font-family: Arial, sans-serif; color: #3E3E3E; margin-top: 20px;">Our mission is to be recognised as the global leader in Car Rental for companies and the public and private sector by partnering with our clients to provide the best and most efficient Cab Rental solutions and to achieve service excellence.</p>
                </div>
            </div>

            <!-- Our team -->
            <div class="container">
                <div class="section-header text-center">
                    <div class="about">
                        <div>
                            <h2>Our Team</h2>
                            <!-- to help guide the
developer
in picking up the path and guide their learnings. -->
                        </div>
                    </div>
                    <div class="about1">
                        <div class="ab1">
                            <img src="assets/images/rajeev2.jpg" alt="" height="140px" width="140px">
                            <h5>Rajeev Kumar</h5>
                            <span class=" small text-uppercase text-muted">CEO - Founder</span>
                            <div class="icons">
                            <a href="https://www.instagram.com/rajjjeev.30/" target="main"><i
                                        class="fa-brands fa-instagram fa-lg"></i></a>
                                <a href="https://www.linkedin.com/in/rajeev-kumar-a24959226/" target="main"><i
                                        class="fa-brands fa-linkedin fa-lg"></i></a>
                                <a href="https://github.com/rajeev-30" target="main"><i
                                        class="fa-brands fa-github fa-lg"></i></a>
                                <a href="https://discord.com/channels/@me" target="main"><i
                                        class="fa-brands fa-discord fa-lg"></i></a>
                            </div>
                        </div>

                        <div class="ab1">
                            <img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" height="90px"">
          <h5>Aryan Narayan</h5>
          <span class=" small text-uppercase text-muted">Co-Founder</span>
                            <div class="icons">

                                <a href="#" target="main"><i
                                        class="fa-brands fa-instagram fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-linkedin fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-twitter fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-discord fa-lg"></i></a>
                            </div>
                        </div>

                        <div class="ab1">
                            <img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" height="90px"">
          <h5>kuldeep Jhakar</h5>
          <span class=" small text-uppercase text-muted">Tecchnical Lead</span>
                            <div class="icons">
                            <a href="#" target="main"><i
                                        class="fa-brands fa-instagram fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-linkedin fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-twitter fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-discord fa-lg"></i></a>
                            </div>
                        </div>

                        <div class="ab1">
                            <img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" height="90px"">
          <h5>Ankit Kumar</h5>
          <span class=" small text-uppercase text-muted">Marketing Managar</span>
                            <div class="icons">
                            <a href="#" target="main"><i
                                        class="fa-brands fa-instagram fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-linkedin fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-twitter fa-lg"></i></a>
                                <a href="#" target="main"><i
                                        class="fa-brands fa-discord fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                    crossorigin="anonymous"></script>
            </div>
            </div>

        </section>

        <!--Footer -->
        <?php include('includes/footer.php'); ?>
        <!-- /Footer-->

        <!--Back to top-->
        <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
        </div>
        <!--/Back to top-->

        <!--Login-Form -->
        <?php include('includes/login.php'); ?>
        <!--/Login-Form -->

        <!--Register-Form -->
        <?php include('includes/registration.php'); ?>

        <!--/Register-Form -->

        <!--Forgot-password-Form -->
        <?php include('includes/forgotpassword.php'); ?>
        <!--/Forgot-password-Form -->

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/interface.js"></script>
        <!--Switcher-->
        <script src="assets/switcher/js/switcher.js"></script>
        <!--bootstrap-slider-JS-->
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <!--Slider-JS-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->

</html>