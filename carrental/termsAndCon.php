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
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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
                <div style="padding-left: 200px; padding-right: 200px; padding-top: 40px; padding-bottom: 40px;">

<p>
Eligibility: You must be at least 18 years of age and have the legal capacity to enter into a binding contract to use the car rental website. By signing up, you represent and warrant that you meet these requirements.

</p>
<p>
<br>    Account Creation: You will need to create an account with the car rental website to access its features. You are responsible for providing accurate and complete information during the signup process, including your name, contact details, and payment information. You agree to keep your account information up-to-date and secure, and you are solely responsible for any activity that occurs under your account.

</p>
<p>
<br>   Rental Agreement: Renting a car through the website is subject to a separate rental agreement, which you must review and accept before making a reservation. The rental agreement will outline the terms and conditions of the car rental, including the rental period, fees, insurance, and other terms specific to the rental transaction.
</p>
<p>
<br>   Payment and Charges: You agree to pay all fees and charges associated with your car rental reservation, including rental fees, taxes, insurance premiums, and any other applicable charges. Payment may be required at the time of reservation or at the time of pick-up, as specified in the rental agreement.

</p>
<br>   Cancellation and Refunds: Cancellation policies and refund procedures may vary depending on the rental agreement and the car rental provider. It is your responsibility to review and understand the cancellation and refund policies before making a reservation.
<p></p>
<p>
<br>   Liability and Insurance: You are responsible for any damage, loss, or theft of the rented vehicle during the rental period, as specified in the rental agreement. You may be required to provide a valid driver's license, insurance coverage, and other documentation as part of the rental process.

</p>
<p>
<br>   Prohibited Use: You agree not to use the car rental website for any illegal, fraudulent, or unauthorized purposes, including but not limited to misrepresenting your identity, tampering with the website, or using it to facilitate any criminal activity.

</p>
<p>
<br>   Intellectual Property: The car rental website and its contents, including but not limited to logos, trademarks, and other intellectual property, are owned by the website operator or its affiliates. You agree not to use, copy, reproduce, or modify any of the website's content without obtaining prior written consent from the website operator.

</p>
<p>
<br>   Indemnification: You agree to indemnify, defend, and hold harmless the car rental website operator, its affiliates, and their respective officers, directors, employees, and agents from any and all claims, damages, losses, liabilities, costs, and expenses arising from your use of the website, your breach of these terms and conditions, or your violation of any applicable laws or regulations.

</p>
<p>
Modification and Termination: The car rental website operator reserves the right to modify, suspend, or terminate your account or access to the website at any time, without notice or liability. You may also terminate your account at any time by contacting the website operator in writing.

</p>                </p>

        </div>


                <<!--Footer -->
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