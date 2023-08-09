<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_description; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Add other meta tags as needed -->
    <!-- Add CSS and JavaScript references if needed -->
</head>

<body>
    <!-- Include the content from the PHP code -->
    <?php include('./layout/header.php'); ?>

    <!-- Your other HTML content here -->
    <div class="dynamicDiv" id="dd.0.0">
        <div class="overlay" id="overlay">
            <div class="overlay-container">
                <div class="close-container">
                    <a href="#" class="close-mobile toggle-mobile"></a>
                </div>

                <div class="box-wrap">

                    <div class="mobile-menu">
                        <h4><a href="hcp/">Healthcare Professionals</a></h4>
                    </div>

                    <div class="mobile-menu clearfix">
                        <h4><a href="aboutus/">About Us</a></h4>
                    </div>

                    <div class="mobile-menu clearfix">
                        <h4><a href="nclex/">NCLEX-RN</a></h4>
                    </div>

                    <div class="mobile-menu clearfix">
                        <h4><a href="contact/">Contact Us</a></h4>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- Hero-->
    <div class="dynamicDiv" id="dd.0.2">
        <section class="main-hero clearfix">
            <!--<div class="col col-1" style="background-image:url('images/students.jpg') no-repeat;">-->

            <div class="col col-1" style="background:url('images/MOK_1034.jpg') no-repeat;">
                <div class="col-bg"></div>
                <div class="col-bar d-md-flex flex-md-column align-items-md-center">
                    <div class="col-wrapper pull-right text-center">
                        <h2 style="color:white">Healthcare <b><span>Professionals</b></span></h2>
                        <p class="hidden-xs">Join our in-house NCLEX exam training for (RN), and a successful career start in USA, UK, or Canada</p><a class="btn btn-gold  font-weight-bold track-event" href="hcp/" id="button_CareersInTheUSA">Start Your Journey</a>
                    </div>
                </div>
            </div>
            <div class="col col-2" style="background: url('images/partners.jpg') no-repeat;">


                <div class="col-bg"></div>
                <div class="col-bar d-md-flex flex-md-column align-items-md-center">
                    <div class="col-wrapper text-center">
                        <h2 style="color:white">Healthcare <b><span>Organizations</span></b></h2>
                        <p class="hidden-xs">Join our database of recruiters in USA, UK, and Canada. Our Nurses and other have gone through thorough training and have met all the standards required to work excellently.</p><a class="btn btn-gold font-weight-bold track-event" href="partners/index.php" id="button_StaffingSolutions">Staffing Solutions</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="dynamicDiv" id="dd.0.4">
        <section class="clearBoth section bg-grey text-center py-13">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <h2>Start Your Career in USA,Canada or UK Now!</h2>

                        <a class="btn btn-gold" href="apply/">Apply Now</a>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="dynamicDiv" id="dd.0.8">
        <!-- Social Widget-->
        <div class="dynamicDiv" id="dd.0.12">
            <ul class="socials-fixed">
                <li><a href="https://web.facebook.com/DyvaxHub" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a h ref="https://twitter.com/dyvaxhub" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/dyvax-hub/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/@DyvaxHub" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                <li><a href="https://www.instagram.com/dyvaxhub/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>



        <!-- Prefooter Section-->
        <div class="dynamicDiv" id="dd.0.9">
            <section class="prefooter pt-11">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-col text-center text-md-left">
                            <h5>Our Offices</h5>
                            <p>
                                Minnesota Office: </br>
                                5747 westbroadway ave suite, 212D, </br>
                                Crystal MN 55428

                            </p>
                            <p>
                                Kenya Office: </br>
                                Nairobi Garage, Delta Corner Annex, Ring Rd </br>
                                Westlands Ln, Nairobi. </br>
                                <a href="tel:+254 769 136787"> +254 769 136787 </a>
                            </p>

                        </div><!-- .footer-col -->
                        <div class="visible-xs hidden-sm hidden-md hidden-lg col-xs-12 footer-col text-md-left">

                        </div><!-- .footer-col -->
                        <div class="col-md-3 col-sm-6 col-xs-12 footer-col text-center text-md-left visible-sm visible-md visible-lg hidden-xs">
                            <h4></h4>
                            <ul class="nolist">
                                <li>
                                    <a href="hcp/">Jobs in the USA,Canada and UK</a>
                                </li>
                                <li>
                                    <a href="aboutus/">Who We Are</a>
                                </li>
                                <li>
                                    <a href="apply/">Apply Now</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 hidden-xs visible-sm visible-md visible-lg col-md-push-3 footer-col">
                            <h4>About Us </h4>
                            <ul class="nolist">
                                <li class="list-group-item">
                                    <a href="">Overview</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Our Mission</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Our Culture</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Our Pledge</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 hidden-lg social footer-col text-center">
                            <ul class="nolist">
                                <li>
                                    <a href="https://web.facebook.com/DyvaxHub" target="_blank"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/dyvaxhub" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/dyvax-hub/" target="_blank"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@DyvaxHub" target="_blank"><i aria-hidden="true" class="fa fa-youtube-play"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/dyvaxhub/" target="_blank"><i aria-hidden="true" class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section>
        </div>

        <!-- Social Footer Section-->
        <div class="dynamicDiv" id="dd.0.10">
            <div class="social-bar">



                <div class="container">

                    <div class="row">


                        <div class="col-md-2 col-xs-12 text-center text-md-right totop"><a href="#"><img alt="back to top arrow" src="../images/upAllArrow.gif" /></a></div>

                        <div class="col-lg-3 visible-lg social text-right">
                            <ul class="nolist">
                                <li><a href="https://web.facebook.com/DyvaxHub" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/dyvaxhubHealthcare" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/dyvax-hub/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/@DyvaxHubHealthcareFL" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/dyvaxhubhealthcare/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .social-bar -->



            <!-- Social Widget-->
            <div class="dynamicDiv" id="dd.0.12"></div>

        </div><!--#page-->
    </div>

    <?php include('layout/chat.php'); ?>

    <script>
        $(document).ready(function() {
            echo.init();
        });
    </script>

    <script>
        $('.intro').text(cut(100)).append("...");

        function cut(n) {
            return function textCutter(i, text) {
                var short = text.substr(0, n);
                if (/^\S/.test(text.substr(n)))
                    return short.replace(/\s+\S*$/, "");
                return short;
            };
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <div class="wrapper1">
        <div class="header1">
            <ul>
                <li class="active form_1_progressbar">
                    <div class="">
                        <p>1</p>
                    </div>
                </li>
                <li class="form_2_progressbar">
                    <div class="">
                        <p>2</p>
                    </div>
                </li>
                <li class="form_3_progressbar">
                    <div class="">
                        <p>3</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form_wrap">

            <div class="form_1 data_info">
                <div class="container text-center p-4 " style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3">
                        <div class="row g-0">
                            @if (session()->has('message'))
                            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                                {{session('message')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <h2 class="mt-3">Landlord</h2>
                            <form class="row g-3 p-sm-3" action="/propertymanager/apartment/store" method="post">
                                @csrf
                                <div class="col-md-12 col-lg-6">
                                    <label for="new" class="form-label"><img src="/images/new.png" class="mx-3" width="45px"></label>
                                    <button class="btn btn-info" id="new" name="new" value="new">New Landlord</button>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="existing" class="form-label"><img src="/images/man (1).png" class="mx-3" width="45px"></label>
                                    <button class="btn btn-primary" id="existing" name="existing" value="existing">Existing Landlord</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="/propertymanager/apartment/index" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="form_2 data_info" style="display: none">
                <div class="container text-center p-4" style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h2 class="mt-3">Add Landlord</h2>

                            <form class="row g-3 p-sm-3" method="POST" action="/propertymanager/landlord/store">
                                @csrf
                                <div class="col-md-12 col-lg-6">
                                    <label for="FirstName" class="form-label"><img src="/images/user (1).png" class="mx-3" width="30px">First Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="FirstName" placeholder="John" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="SecondName" class="form-label"><img src="/images/user (1).png" class="mx-3" width="30px">Second Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="SecondName" placeholder="Demethew" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="mobile" class="form-label"><img src="/images/phone-call.png" class="mx-3" width="30px"></label>Mobile Number</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="mobile" placeholder="254712345678" required>
                                    <div class="col-auto mt-3">
                                        <span id="passwordHelpInline" class="form-text">
                                            Use the 254 format 254712345678.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="email" class="form-label"><img src="/images/placeholder (1).png" class="mx-3" width="30px">Landlord Email</label>
                                    <input type="email" class="form-control text-center border-bottom border-0 border-dark-subtle" name="email" placeholder="kaya@gmail.com" required>
                                </div>
                                <div class="col-lg-12">
                                    <label for="password" class="form-label"><img src="/images/policy.png" class="mx-3" width="30px">Password</label>
                                    <input type="password" class="form-control text-center border-bottom border-0 border-dark-subtle" name="password" placeholder="*********" required>
                                    <div class="col-auto mt-3">
                                        <span id="passwordHelpInline" class="form-text">
                                            Must be 8-20 characters long.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button class="btn text-white btn-primary" id="form2back">Back</button>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button type="submit" class="btn text-white" style="background:  #8A2BE2" id="form2">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form_3 data_info" style="display: none">
                <div class="container text-center p-4 " style="margin-top: 2rem;justify-content: center;">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h2 class="mt-3">Add apartment</h2>

                            <form class="row g-3 p-sm-3" action="/propertymanager/apartment/store" method="post">
                                @csrf
                                <div class="col-md-12 col-lg-6">
                                    <label for="ApartmentName" class="form-label"><img src="/images/building.png" class="mx-3" width="30px">Apartment Name</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="name" placeholder="The Residence" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="landlord" class="form-label"><img src="/images/user (1).png" class="mx-3" width="30px">Landlord Name</label>
                                    <select class="form-select border-bottom border-0 border-dark-subtle" id="landlord" name="landlord" type="landlord" list="landlords" required>
                                        <option class="text-center" value="" selected="" disabled="">Select Landlord</option>
                                        @foreach ($landlords as $landlord)
                                        <option class="text-center" value="{{$landlord->id}}" {{(@$landlord_id == $landlord->id) ? "selected" : ""}}>{{$landlord->firstName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="units" class="form-label"><img src="/images/residential.png" class="mx-3" width="30px"></label>Number of Units</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="units" placeholder="Enter number of units" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="location" class="form-label"><img src="/images/placeholder (1).png" class="mx-3" width="30px">Apartment Location</label>
                                    <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="location" placeholder="Enter apartment location" required>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="payment_type" class="form-label"><img src="/images/receive-money.png" class="mx-3" width="30px">Payment Type</label>
                                    <select class="form-select border-bottom border-0 border-dark-subtle" id="payment_type" name="payment_type" type="payment_type" list="payment_type" onchange="togglePaymentFields()">
                                        <option class="text-center" value="" selected="" disabled="">Select Payment Method</option>
                                        @foreach ($payments as $payment)
                                        <option class="text-center" value="{{$payment->id}}" {{(@$payment_id == $payment->id) ? "selected" : ""}}>{{$payment->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="tillNumberFields" style="display: none;">
                                    <div class="col-md-12 col-lg-6">
                                        <label for="till_number" class="form-label"><img src="/images/payment-method.png" class="mx-3" width="30px"></label>Till Number</label>
                                        <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="till_number" placeholder="Enter till number">
                                    </div>
                                </div>

                                <div id="paybillFields" style="display: none;">
                                    <div class="col-md-12 col-lg-6">
                                        <label for="paybill_account" class="form-label"><img src="/images/payment-method (1).png" class="mx-3" width="30px"></label>Paybill Account</label>
                                        <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="paybill_account" placeholder="Enter paybill account number">
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <label for="paybill_acc" class="form-label"><img src="/images/wallet (1).png" class="mx-3" width="30px"></label>Account Number</label>
                                        <input type="text" class="form-control text-center border-bottom border-0 border-dark-subtle" name="paybill_acc" placeholder="Enter payment details">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="water_rate" class="form-label"><img src="/images/water-meter.png" class="mx-3" width="30px"></label>Water Rate</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="water_rate" placeholder="Enter rate per unit">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="garbage" class="form-label"><img src="/images/recycling-bag.png" class="mx-3" width="30px"></label>Garbage Charge</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="garbage" placeholder="Enter monthly charge">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="service" class="form-label"><img src="/images/cost.png" class="mx-3" width="30px"></label>Service Charge</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="service" placeholder="Enter amount">
                                </div>
                                <div class="col-12 mt-3">
                                    <span id="passwordHelpInline" class="form-text">
                                        Choose only one that applies.
                                    </span>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="comissin_rate" class="form-label"><img src="/images/salary.png" class="mx-3" width="30px"></label>Comission Rate</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="comissin_rate" placeholder="Enter % comission.">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="comission_amount" class="form-label"><img src="/images/salary.png" class="mx-3" width="30px"></label>Comission Amount</label>
                                    <input type="number" class="form-control text-center border-bottom border-0 border-dark-subtle" name="comission_amount" placeholder="Enter comission amount">
                                </div>
                                <div class="mt-4 col-6">
                                    <button class="btn text-white btn-primary" id="form3back">Back</button>
                                </div>
                                {{-- <div class="mt-4 col-4"></div> --}}
                                <div class="mt-4 col-6">
                                    <button type="submit" class="btn text-white" style="background:  #8A2BE2" id="form3">Done</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="modal_wrapper">
            <div class="shadow">
                <div class="success_wrap">
                    <span class="modal_icon">
                        <img src="/images/check.png" class="mx-3" width="35px">
                    </span>
                    <p>Apartment Successfully Added</p>
                </div>
            </div>
        </div> --}}

    </div>
</body>

</html>