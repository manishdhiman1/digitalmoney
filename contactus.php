<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="../netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<script src="../netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<link href="vendor/bootstrap-select/responsive.css" rel="stylesheet" />
<link href="vendor/bootstrap-select/bootstrap-min.html" rel="stylesheet" />
<link href="vendor/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet" />
<link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet" />
<link href="vendor/animate/animate.css" rel="stylesheet" />

<!-- Custom Stylesheet -->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link class="skin" rel="stylesheet" href="css/skin/skin-1.css" />
<link rel="stylesheet" href="vendor/switcher/switcher.css" />
<link rel="stylesheet" href="vendor/rangeslider/rangeslider.css" />


<head>


<body>
    <?php include "includes/header.php" ?>
    <form method="post" action="" id="form1">

        <div>
            <div class="page-content bg-white">
                <!-- Banner  -->
                <div class="dlab-bnr-inr overlay-primary-dark">
                    <div class="container">
                        <div class="dlab-bnr-inr-entry">
                            <h1>Contact Us</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                </div>
                <!-- Banner End -->

                <!-- Get A Quote -->
                <div class="content-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Contact Us</h2>
                                <p>We deliver top-notch products without burning a hole in our customers’ pockets by
                                    giving out affordable, cost-effective and quality efficient services always.
                                    With us, you will never have to worry about the cost management</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">

                                <div class="dzFormMsg"></div>
                                <input type="hidden" class="form-control" name="dzToDo" value="Contact">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-user"></i></span>
                                            </div>
                                            <input name="ctl00$ContentPlaceHolder1$txtname" type="text"
                                                id="ContentPlaceHolder1_txtname" class="form-control"
                                                placeholder="Name" />
                                        </div>
                                        <span id="ContentPlaceHolder1_reqName" style="color:Red;visibility:hidden;">Name
                                            is Required</span>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-envelope"></i></span>
                                            </div>
                                            <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text"
                                                id="ContentPlaceHolder1_txtEmail" class="form-control"
                                                placeholder="Email Address" />
                                        </div>
                                        <span id="ContentPlaceHolder1_Email" style="color:Red;visibility:hidden;">Email
                                            is Required</span>
                                        <span id="ContentPlaceHolder1_Mail" style="color:Red;display:none;">Invalid
                                            email address</span>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-phone"></i></span>
                                            </div>
                                            <input name="ctl00$ContentPlaceHolder1$txtMobile" type="text" maxlength="10"
                                                id="ContentPlaceHolder1_txtMobile" class="form-control"
                                                placeholder="Mobile No." />
                                        </div>
                                        <span id="ContentPlaceHolder1_Mobile"
                                            style="color:Red;visibility:hidden;">Mobile No. is Required</span><br />

                                        <span id="ContentPlaceHolder1_RegularExpressionValidatorr"
                                            style="color:Red;visibility:hidden;">Enter Valid Mobile No.</span>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-list"></i></span>
                                            </div>
                                            <select name="ctl00$ContentPlaceHolder1$DropDownList1"
                                                id="ContentPlaceHolder1_DropDownList1" class="form-control">
                                                <option selected="selected" value="B2BPORTAL"> Select Any </option>
                                                <option value="AEPSPORTAL"> AEPS PORTAL </option>
                                                <option value="BBPSPORTAL"> BBPS PORTAL </option>
                                                <option value="DMTPORTAL"> DMT PORTAL </option>
                                                <option value="RechargePORTAL"> Recharge PORTAL </option>
                                                <option value="B2BPORTAL"> B2B PORTAL </option>
                                                <option value="WebDevelopment"> Web Development </option>

                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-sms"></i></span>
                                            </div>
                                            <textarea name="ctl00$ContentPlaceHolder1$txtMessage" rows="2" cols="20"
                                                id="ContentPlaceHolder1_txtMessage" class="form-control"
                                                placeholder="Message" style=" width: 1304px !important; ">
                                            </textarea>
                                            <span id="ContentPlaceHolder1_Message"
                                                style="color:Red;visibility:hidden;">This Field is Required</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <i class="fa fa-angle-right m-r10 isibtn"></i>
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$bttnSubmit" value="Submit"
                                            id="ContentPlaceHolder1_bttnSubmit"
                                            class="btn btn-primary d-inline-flex align-items-center" />
                                    </div>
                                </div>

                            </div>


                            <div class="col-xl-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                                <div class="dlab-media cf-r-img">
                                    <img src="images/about/img2.png" class="move-4" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call To action -->
                <section class="map-1">
                    <div class="container-fluid">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.258700051124!2d80.99793271451956!3d26.86352066867421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2b8703bffff%3A0x2815d6ecd35c7e68!2sSoftpay!5e0!3m2!1sen!2sin!4v1655878325906!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </section>
            </div>
            <script src="js/jquery.min.js"></script>

            <?php include "includes/footer.php" ?>
        </div>

    </form>



    <!-- JQUERY.MIN JS -->
    <script src="js/jquery.min.js"></script>
    <script src="vendor/wow/wow.js"></script><!-- WOW JS -->

    <script src="vendor/bootstrap/js/popper.min.js"></script><!-- POPPER.MIN JS -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="vendor/bootstrap-select/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT -->

    <script src="vendor/owl-carousel/owl.carousel.js"></script><!-- OWL-CAROUSEL JS -->
    <script src="vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
    <script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
    <script src="vendor/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->

    <script src="js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
    <script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
    <script src="js/custom.js"></script><!-- CUSTOM JS -->

    <script src="vendor/rangeslider/rangeslider.js"></script><!-- SWITCHER JS -->

</body>

</html>