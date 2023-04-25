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
Website Use: You may use our website for personal, non-commercial purposes only. You may not use our website for any illegal, fraudulent, or unauthorized purposes. You agree to comply with all applicable laws and regulations when using our website.

</p>
<p>
  Rental Information: Our website provides information about car rental services, including rates, availability, and terms of rental. This information is provided for general informational purposes only and may be subject to change without notice. We do not guarantee the accuracy or completeness of the information on our website and are not responsible for any errors or omissions.

</p>
<p>
  Booking and Payment: If you make a reservation or booking through our website, you agree to provide accurate and complete information. You are responsible for providing a valid payment method and authorize us to charge the applicable fees for the rental service. All payments are final and non-refundable, unless otherwise specified.

</p>
<p>
  Rental Agreement: When you rent a car through our website, you will be subject to the terms and conditions of the rental agreement provided by the car rental provider. It is your responsibility to review and understand the rental agreement, including any additional fees, charges, or insurance requirements.

</p>
<p>
  Cancellation and Changes: If you need to cancel or modify your reservation, you must do so in accordance with the cancellation policy specified in the rental agreement. We are not responsible for any changes or cancellations made by the car rental provider or for any fees or charges incurred as a result.

</p>
<p>
 Intellectual Property: Our website and its content, including but not limited to text, graphics, logos, images, and software, are owned by us or our licensors and are protected by intellectual property laws. You may not use, reproduce, modify, or distribute our website or its content without our prior written consent.

</p>
<p>
 Privacy: We are committed to protecting your privacy and will handle your personal information in accordance with our Privacy Policy, which is available on our website. By using our website, you consent to the collection, use, and disclosure of your personal information as described in our Privacy Policy.

</p>
<p>
<br> Disclaimer of Warranties: Our website is provided on an "as is" and "as available" basis, without warranties of any kind, express or implied. We do not warrant that our website will be error-free, uninterrupted, or free from viruses or other harmful components. We are not responsible for any loss or damage arising from your use of our website.

</p>
<p> Limitation of Liability: To the maximum extent permitted by law, we shall not be liable for any direct, indirect, incidental, consequential, or special damages arising from your use of our website or your reliance on any information or content provided on our website, even if we have been advised of the possibility of such damages.

</p>
<p>
 Indemnification: You agree to indemnify and hold us harmless from and against any claims, damages, liabilities, and expenses, including reasonable attorney's fees, arising from your use of our website, your violation of these terms and conditions, or your violation of any rights of another party. </p>

</p>
        </div>


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