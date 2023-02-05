@extends('layout')

@section('content')

    <!-- start page-wrapper -->
    <div class="page-wrapper contact-page">

        @include('inc.header')


        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <h1>Contact us</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start contact-main-content -->
        <section class="contact-main-content section-padding">
            <div class="container">
                <div class="row contact-info">
                    <div class="col col-sm-4">
                        <div class="wow slideInUpSlow">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <h3>Address</h3>
                            <p>7300 N Aliante Pkwy, North Las Vegas, NV 89084, United States</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow slideInUpSlow" data-wow-delay="0.2s">
                            <span class="icon"><i class="fa fa-envelope-o"></i></span>
                            <h3>Email</h3>
                            <p>support@charity.com</p>
                            <p>contact@charity.us</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow slideInUpSlow" data-wow-delay="0.4s">
                            <span class="icon"><i class="fa fa-fax"></i></span>
                            <h3>Phone</h3>
                            <p>+1 702-692-7777</p>
                            <p>+1 702-626-8888</p>
                        </div>
                    </div>
                </div> <!-- end contact info -->
            </div> <!-- end container -->

            <div class="row map-concate-form">
                <div class="col col-xs-12">
                    <div class="map" id="map"></div>
                </div>
                <div class="contact-form">
                    <div class="container">
                        <div class="row  wow bounceInUp">
                            <div class="col col-md-10 col-md-offset-1 form-inner">
                                <h3>Leave us a message</h3>
                                <form class="form row" id="contact-form">
                                    <div class="col col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="your name..">
                                    </div>
                                    <div class="col col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="your email..">
                                    </div>
                                    <div class="col col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="subject..">
                                    </div>
                                    <div class="col col-md-12">
                                        <textarea class="form-control" name="message" placeholder="write here.."></textarea>
                                    </div>
                                    <div class="col col-md-12">
                                        <button type="submit" class="bnt theme-btn">Send</button>
                                        <span id="loader"><img src="images/contact-ajax-loader.gif" alt="Loader"></span>
                                    </div>
                                    <div class="col col-md-12">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end contact-main-content -->


        <!-- start footer -->
        <footer>
            <div class="container">
                <div class="row upper-footer">
                    <div class="col col-md-5 col-xs-6">
                        <div class="widget about-widget">
                            <div class="logo">
                                <img src="images/logo.png" alt class="img img-responsive">
                            </div>

                            <div class="details">
                                <p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                                <p class="copyright">
                                    2023 &copy; All rights reserved by <span><a href="#">charity++</a></span>
                                </p>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-2 col-xs-6">
                        <div class="widget">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">Who we are</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Popular Campaigns</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-2 col-xs-6">
                        <div class="widget">
                            <h3>Help</h3>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Regulations</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="widget contact-widget">
                            <h3>Contact</h3>
                            <div>
                                <form action="#" class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="your name" required>
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" placeholder="email address" required>
                                    </div>
                                    <div>
                                        <textarea placeholder="write"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn theme-btn" type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end upper-footer -->
            </div> <!-- end container -->

            <div class="row lower-footer">
                <div class="col col-xs-12">
                    <p>Made with <span></span> by <a href="http://themeforest.net/user/themexriver">Vicsystems Technologies Ltd.</a></p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->


@endsection
