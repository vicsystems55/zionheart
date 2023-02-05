@extends('layout')

@section('content')

    <!-- start page-wrapper -->
    <div class="page-wrapper home-style-five">

        @include('inc.header')


        <!-- start urgent-causes -->
        {{-- <div class="urgent-causes-wrapper">
            <div class="container open-urgent-causes d-none">
                <button id="toggle-causes" class="btn"><i class="fa fa-angle-double-down"></i></button>
            </div>

            <div class="urgent-causes d-none">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-5">
                            <div class="topic">
                                <span>Urgent</span>
                                <h2>12 years old orphan fighting cancer</h2>
                                <a href="#">Support causes</a>
                            </div>
                        </div>

                        <div class="col col-md-6 col-md-offset-1">
                            <div class="goal-raised">
                                <p>Raised <span>$75,820</span></p>
                                <p>Target $1,00,000</p>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" data-percent="85"></div>
                            </div>
                            <div class="causes-clock">
                                <div>Ends in: </div>
                                <div id="causes-end-time"></div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div> --}}
        <!-- end urgent-causes -->


        <!-- start of hero -->
        <section class="main-banar">
            <div class="banar-inner">
                <div class="container">
                    <div class="banar-title">
                        <span>Africa</span>
                        <h1>Help us to Feed A Child <br /> for a week</h1>
                        <a href="#" class="btn theme-btn">Donate now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start cta-4 -->
        <section class="cta-5 section-padding">
            <h2 class="hidden">CTA 5</h2>
            <div class="container">
                <div class="row section-title-s4">
                    <div class="col col-md-8 col-md-offset-2">
                        <h2><span>Our</span> mission</h2>
                        <p>Helping people rebuild their livelihoods and campaign for long-lasting changes keeping women’s rights at the heart of everything we do.</p>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-md-4">
                        <div class="wow fadeInLeftSlow">
                            <span class="icon"><i class="fi flaticon-donation-1"></i></span>
                            <h3>Donation</h3>
                            <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="wow fadeInLeftSlow" data-wow-delay="0.5s">
                            <span class="icon"><i class="fi flaticon-medical"></i></span>
                            <h3>Rebuild</h3>
                            <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="wow fadeInLeftSlow" data-wow-delay="1s">
                            <span class="icon"><i class="fi flaticon-animal"></i></span>
                            <h3>Peace</h3>
                            <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta-4 -->


        <!-- start important-causes -->
        <section class="important-causes section-padding">
            <div class="container">
                <div class="row section-title-s4">
                    <div class="col col-md-8 col-md-offset-2">
                        <h2><span>Important</span> causes</h2>
                        <p>perspiciatis unde omnis iste natus error accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-md-4 left-col latest-causes">
                        <div class="recent-one">
                            <div class="img-progress">
                                <div class="img-holder">
                                    <img src="images/important-causes/img-1.jpg" alt class="img img-responsive">
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="85"></div>
                                </div>
                            </div>
                            <div class="content-details">
                                <span>07 days left</span>
                                <h3>Safe and reliable water matters</h3>
                                <p>Nam consequat lacus purus, ac hendrerit ipsum pellen tesque ut auris orci ante.</p>
                                <ul>
                                    <li>
                                        <h5>68.75%</h5>
                                        <span>Founded</span>
                                    </li>
                                    <li>
                                        <h5>$25,000</h5>
                                        <span>Target</span>
                                    </li>
                                    <li>
                                        <h5>07</h5>
                                        <span>Days left</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-8 right-col">
                        <div class="row important-causes-content">

                            <div class="col col-xs-6">
                                <div class="grid">
                                    <div class="details">
                                        <span class="time-count">15 days left</span>
                                        <h3>Safe and Reliable Water Matters</h3>
                                    </div>
                                    <div class="causes-info">
                                        <div class="goal-meter">
                                            <div class="goal">
                                                <span>Goal</span>
                                                <h4>12500</h4>
                                            </div>
                                            <div class="meter3" data-value="0.45">
                                                <span></span>
                                                <p>Complete</p>
                                            </div>
                                            <div class="raised">
                                                <span>Raised</span>
                                                <h4>12500</h4>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View causes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xs-6">
                                <div class="grid">
                                    <div class="details">
                                        <span class="time-count">15 days left</span>
                                        <h3>Fund raising for orphanat boston</h3>
                                    </div>
                                    <div class="causes-info">
                                        <div class="goal-meter">
                                            <div class="goal">
                                                <span>Goal</span>
                                                <h4>12500</h4>
                                            </div>
                                            <div class="meter3" data-value="0.35">
                                                <span></span>
                                                <p>Complete</p>
                                            </div>
                                            <div class="raised">
                                                <span>Raised</span>
                                                <h4>12500</h4>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View causes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xs-6">
                                <div class="grid">
                                    <div class="details">
                                        <span class="time-count">15 days left</span>
                                        <h3>Safe and Reliable Water Matters</h3>
                                    </div>
                                    <div class="causes-info">
                                        <div class="goal-meter">
                                            <div class="goal">
                                                <span>Goal</span>
                                                <h4>12500</h4>
                                            </div>
                                            <div class="meter3" data-value="0.45">
                                                <span></span>
                                                <p>Complete</p>
                                            </div>
                                            <div class="raised">
                                                <span>Raised</span>
                                                <h4>12500</h4>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View causes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xs-6">
                                <div class="grid">
                                    <div class="details">
                                        <span class="time-count">15 days left</span>
                                        <h3>Fund raising for orphanat boston</h3>
                                    </div>
                                    <div class="causes-info">
                                        <div class="goal-meter">
                                            <div class="goal">
                                                <span>Goal</span>
                                                <h4>12500</h4>
                                            </div>
                                            <div class="meter3" data-value="0.35">
                                                <span></span>
                                                <p>Complete</p>
                                            </div>
                                            <div class="raised">
                                                <span>Raised</span>
                                                <h4>12500</h4>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View causes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div> <!-- end container -->
        </section>
        <!-- end important-causes -->


        <!-- start events-nearby-s2 -->
        <section class="events-nearby-s2 section-padding parallax" data-bg-image="images/events-nearby-s2-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 left-col">
                        <i class="fi flaticon-agenda"></i>
                        <h2>Events nearby</h2>
                        <p>Aenean sed massa vel metus porttitor volutpat. Integer vehicula nisl at porttitor aliquet. Id dapibus tellus vel.</p>
                    </div>

                    <div class="col col-md-8 right-col">
                        <div class="content">
                            <div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#events" data-toggle="tab">Events</a>
                                    </li>
                                    <li>
                                        <a href="#volunteers" data-toggle="tab">Volunteers</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active fade in" id="events">
                                        <div class="event-s2-slider">
                                            <div class="box-wrapper">
                                                <div class="box">
                                                    <div class="events-header">
                                                        <img src="images/events-s2/img-1.jpg" alt class="img img-responsive">
                                                        <a href="#" class="btn theme-btn">Join events</a>
                                                    </div>
                                                    <div class="events-content">
                                                        <h3>Donation for flood affected.</h3>
                                                        <ul>
                                                            <li><i class="fi flaticon-interface-1"></i> 19 feb, 2023</li>
                                                            <li><i class="fi flaticon-clock-1"></i> 09:30 AM</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="box">
                                                    <div class="events-header">
                                                        <img src="images/events-s2/img-2.jpg" alt class="img img-responsive">
                                                        <a href="#" class="btn theme-btn">Join events</a>
                                                    </div>
                                                    <div class="events-content">
                                                        <h3>Donation for flood affected.</h3>
                                                        <ul>
                                                            <li><i class="fi flaticon-interface-1"></i> 19 feb, 2023</li>
                                                            <li><i class="fi flaticon-clock-1"></i> 09:30 AM</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="box">
                                                    <div class="events-header">
                                                        <img src="images/events-s2/img-1.jpg" alt class="img img-responsive">
                                                        <a href="#" class="btn theme-btn">Join events</a>
                                                    </div>
                                                    <div class="events-content">
                                                        <h3>Donation for flood affected.</h3>
                                                        <ul>
                                                            <li><i class="fi flaticon-interface-1"></i> 19 feb, 2023</li>
                                                            <li><i class="fi flaticon-clock-1"></i> 09:30 AM</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="box">
                                                    <div class="events-header">
                                                        <img src="images/events-s2/img-2.jpg" alt class="img img-responsive">
                                                        <a href="#" class="btn theme-btn">Join events</a>
                                                    </div>
                                                    <div class="events-content">
                                                        <h3>Donation for flood affected.</h3>
                                                        <ul>
                                                            <li><i class="fi flaticon-interface-1"></i> 19 feb, 2023</li>
                                                            <li><i class="fi flaticon-clock-1"></i> 09:30 AM</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box-wrapper">
                                                <div class="box">
                                                    <div class="events-header">
                                                        <img src="images/events-s2/img-1.jpg" alt class="img img-responsive">
                                                        <a href="#" class="btn theme-btn">Join events</a>
                                                    </div>
                                                    <div class="events-content">
                                                        <h3>Donation for flood affected.</h3>
                                                        <ul>
                                                            <li><i class="fi flaticon-interface-1"></i> 19 feb, 2023</li>
                                                            <li><i class="fi flaticon-clock-1"></i> 09:30 AM</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="volunteers">
                                        <h3>Our volunteers</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque odit labore a vero quis ratione expedita dolores blanditiis, magni officia illo dolor officiis porro placeat quibusdam quasi. Repudiandae optio, quod.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque odit labore a vero quis ratione expedita dolores blanditiis, magni officia illo dolor officiis porro placeat quibusdam quasi. Repudiandae optio, quod.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-nearby-s2 -->


        <!-- start about-st2 -->
        <section class="about-st3 section-padding">
            <h2 class="hidden">About us</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-md-7">
                        <div class="left-col">
                            <div class="logo">
                                <img src="images/logo-2.png" alt class="img img-responsive">
                            </div>
                            <span>Non-Profit Service for Humanity of the World</span>
                            <div class="our-location">
                                <img src="images/location-bg.png" alt class="img img-responsive">

                                <div class="location location-one">
                                    <div class="location-btn">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                    <div class="location-info">
                                        <h5>Team Water</h5>
                                        <ul>
                                            <li>
                                                <i class="fi flaticon-group-of-people-cartoon-variant"></i>
                                                3.5k
                                            </li>
                                            <li>
                                                <i class="fi flaticon-money-3"></i>
                                                $102k
                                            </li>
                                        </ul>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.7898246149844!2d89.5601340147084!3d22.810250485060976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901d89110f01%3A0x8dbefa2e360efc60!2z4Kaw4Kef4KeH4KayIOCmruCni-CnnA!5e0!3m2!1sbn!2sbd!4v1486012212575" class="map-link">See Location</a>
                                    </div>
                                </div>

                                <div class="location location-two">
                                    <div class="location-btn">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                    <div class="location-info">
                                        <h5>Team Water</h5>
                                        <ul>
                                            <li>
                                                <i class="fi flaticon-group-of-people-cartoon-variant"></i>
                                                3.5k
                                            </li>
                                            <li>
                                                <i class="fi flaticon-money-3"></i>
                                                $102k
                                            </li>
                                        </ul>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.7898246149844!2d89.5601340147084!3d22.810250485060976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901d89110f01%3A0x8dbefa2e360efc60!2z4Kaw4Kef4KeH4KayIOCmruCni-CnnA!5e0!3m2!1sbn!2sbd!4v1486012212575" class="map-link">See Location</a>
                                    </div>
                                </div>

                                <div class="location location-three">
                                    <div class="location-btn">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                    <div class="location-info">
                                        <h5>Team Water</h5>
                                        <ul>
                                            <li>
                                                <i class="fi flaticon-group-of-people-cartoon-variant"></i>
                                                3.5k
                                            </li>
                                            <li>
                                                <i class="fi flaticon-money-3"></i>
                                                $102k
                                            </li>
                                        </ul>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.7898246149844!2d89.5601340147084!3d22.810250485060976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901d89110f01%3A0x8dbefa2e360efc60!2z4Kaw4Kef4KeH4KayIOCmruCni-CnnA!5e0!3m2!1sbn!2sbd!4v1486012212575" class="map-link">See Location</a>
                                    </div>
                                </div>

                                <div class="location location-four">
                                    <div class="location-btn">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                    <div class="location-info">
                                        <h5>Team Water</h5>
                                        <ul>
                                            <li>
                                                <i class="fi flaticon-group-of-people-cartoon-variant"></i>
                                                3.5k
                                            </li>
                                            <li>
                                                <i class="fi flaticon-money-3"></i>
                                                $102k
                                            </li>
                                        </ul>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.7898246149844!2d89.5601340147084!3d22.810250485060976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901d89110f01%3A0x8dbefa2e360efc60!2z4Kaw4Kef4KeH4KayIOCmruCni-CnnA!5e0!3m2!1sbn!2sbd!4v1486012212575" class="map-link">See Location</a>
                                    </div>
                                </div>

                                <div class="location location-five">
                                    <div class="location-btn">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                    <div class="location-info">
                                        <h5>Team Water</h5>
                                        <ul>
                                            <li>
                                                <i class="fi flaticon-group-of-people-cartoon-variant"></i>
                                                3.5k
                                            </li>
                                            <li>
                                                <i class="fi flaticon-money-3"></i>
                                                $102k
                                            </li>
                                        </ul>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.7898246149844!2d89.5601340147084!3d22.810250485060976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901d89110f01%3A0x8dbefa2e360efc60!2z4Kaw4Kef4KeH4KayIOCmruCni-CnnA!5e0!3m2!1sbn!2sbd!4v1486012212575" class="map-link">See Location</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of col -->

                    <div class="col col-md-5">
                        <div class="right-col">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default current">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">The goal of the organisation</a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How to be volunteer?</a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Working process of the charit</a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-st2 -->


        <!-- start recent-news -->
        <section class="recent-news">
            <div class="container">
                <div class="row section-title-s3">
                    <div class="col col-md-10 col-md-offset-1">
                        <h2><span>Recent</span> news</h2>
                    </div>
                </div> <!-- end section-title -->

                <div class="row blog-grid">
                    <div class="col col-sm-4 col-xs-6 wow fadeInLeftSlow">
                        <div class="post">
                            <div class="entry-media entry-date">
                                <img src="images/latest-news/img-7.jpg" alt class="img img-responsive">
                                <div>
                                    <p>25</p>
                                    <span>Dec</span>
                                </div>
                            </div>
                            <div class="entry-body">
                                <div class="entry-title">
                                    <h3><a href="#">Charities to support people with disabilities</a></h3>
                                </div>
                                <div class="entry-date-author">
                                    <ul>
                                        <li><a href="#">Hasib sharif</a></li>
                                        <li><a href="#">Noverber 26</a></li>
                                        <li><a href="#">Non-profit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-4 col-xs-6 wow fadeInLeftSlow" data-wow-delay="0.3s">
                        <div class="post">
                            <div class="entry-media entry-date">
                                <img src="images/latest-news/img-8.jpg" alt class="img img-responsive">
                                <div>
                                    <p>15</p>
                                    <span>Dec</span>
                                </div>
                            </div>
                            <div class="entry-body">
                                <div class="entry-title">
                                    <h3><a href="#">FAA levies two more fines on amazon</a></h3>
                                </div>
                                <div class="entry-date-author">
                                    <ul>
                                        <li><a href="#">Hasib sharif</a></li>
                                        <li><a href="#">Noverber 26</a></li>
                                        <li><a href="#">Non-profit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-4 col-xs-6 wow fadeInLeftSlow" data-wow-delay="0.6s">
                        <div class="post">
                            <div class="entry-media entry-date">
                                <img src="images/latest-news/img-9.jpg" alt class="img img-responsive">
                                <div>
                                    <p>05</p>
                                    <span>Dec</span>
                                </div>
                            </div>
                            <div class="entry-body">
                                <div class="entry-title">
                                    <h3><a href="#">Charities to support people with disabilities</a></h3>
                                </div>
                                <div class="entry-date-author">
                                    <ul>
                                        <li><a href="#">Hasib sharif</a></li>
                                        <li><a href="#">Noverber 26</a></li>
                                        <li><a href="#">Non-profit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end recent-news -->


        <!-- start fun-fact -->
        <section class="fun-fact section-padding">
            <div class="container">
                <div class="row top-part">
                    <div class="col col-sm-4">
                        <span class="icon">
                            <i class="fi flaticon-eco-volunteer"></i>
                        </span>
                        <h3>Become <span>volunteer</span></h3>
                        <p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer cita tion.</p>
                    </div>
                    <div class="col col-sm-4">
                        <span class="icon">
                            <i class="fi flaticon-make-a-donation"></i>
                        </span>
                        <h3>Send <span>donation</span></h3>
                        <p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer cita tion.</p>
                    </div>
                    <div class="col col-sm-4">
                        <span class="icon">
                            <i class="fi flaticon-people"></i>
                        </span>
                        <h3>Sponsor <span>children</span></h3>
                        <p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer cita tion.</p>
                    </div>
                </div>

                <div class="row bottom-row">
                    <div class="col col-xs-3">
                        <h2 class="counter" data-count="19">00</h2>
                        <span>Countries</span>
                    </div>
                    <div class="col col-xs-3">
                        <h2 class="counter" data-count="41">00</h2>
                        <span>Causes</span>
                    </div>
                    <div class="col col-xs-3">
                        <h2 class="counter" data-count="85">00</h2>
                        <span>Volunteers</span>
                    </div>
                    <div class="col col-xs-3">
                        <h2 class="counter" data-count="38">00</h2>
                        <span>Events</span>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end fun-fact -->


        <!-- start gallery-st2 -->
        <section class="gallery-st2 sortable-gallery gallery section-padding">
            <h2 class="hidden">Gallery</h2>
            <div class="container">
                <div class="row section-title-s4">
                    <div class="col col-md-8 col-md-offset-2">
                        <h2><span>Our</span> Gallery</h2>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-lg-12">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All Projects</a></li>
                                <li><a data-filter=".education" href="#">Education</a></li>
                                <li><a data-filter=".food" href="#">Food</a></li>
                                <li><a data-filter=".water" href="#">Water</a></li>
                                <li><a data-filter=".africa" href="#">Africa</a></li>
                                <li><a data-filter=".asia" href="#">Asia</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container masonry-gallery popup-gallery">
                            <div class="box education">
                                <a href="images/gallery/big-photo/img-1.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-1.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box eudcation water">
                                <a href="images/gallery/big-photo/img-2.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-2.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box water eudcation asia">
                                <a href="images/gallery/big-photo/img-3.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-3.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box education africa">
                                <a href="images/gallery/big-photo/img-4.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-4.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box water water food">
                               <a href="images/gallery/big-photo/img-5.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-5.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box africa">
                                <a href="images/gallery/big-photo/img-6.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-6.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="box education asia">
                                <a href="images/gallery/big-photo/img-7.jpg">
                                    <div class="img-holder">
                                        <img src="images/gallery/masonry-gallery/img-7.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="hover-text">
                                        <div>
                                            <h3>Old stuffed ted</h3>
                                            <span>East coast, Virginia</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-st2 -->


        <!-- start testimonials -->
        <section class="testimonials section-padding">
            <div class="container">
                <div class="row section-title-single-heading">
                    <div class="col col-md-8 col-md-offset-2">
                        <h2><span>Clients'</span> testimonial</h2>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-md-10 col-md-offset-1">
                        <div class="client-testimonials testimonials-slider">
                            <div class="box">
                                <div class="box-inner">
                                    <div class="img-holder">
                                        <img src="images/testimonials/img-1.jpg" alt class="img img-circle">
                                    </div>
                                    <h3>Aaron ramsy</h3>
                                    <span>CEO, Arsen Jenga</span>
                                    <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-inner">
                                    <div class="img-holder">
                                        <img src="images/testimonials/img-2.jpg" alt class="img img-circle">
                                    </div>
                                    <h3>Irina malkova</h3>
                                    <span>CEO, Real Friend</span>
                                    <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-inner">
                                    <div class="img-holder">
                                        <img src="images/testimonials/img-1.jpg" alt class="img img-circle">
                                    </div>
                                    <h3>Aaron ramsy</h3>
                                    <span>CEO, Arsen Jenga</span>
                                    <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-inner">
                                    <div class="img-holder">
                                        <img src="images/testimonials/img-2.jpg" alt class="img img-circle">
                                    </div>
                                    <h3>Irina malkova</h3>
                                    <span>CEO, Real Friend</span>
                                    <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-inner">
                                    <div class="img-holder">
                                        <img src="images/testimonials/img-1.jpg" alt class="img img-circle">
                                    </div>
                                    <h3>Aaron ramsy</h3>
                                    <span>CEO, Arsen Jenga</span>
                                    <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end testimonials -->


        <!-- start partner -->
        <section class="partner">
            <h2 class="hidden">Partner</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-slider">
                            <div class="box">
                                <img src="images/partner/img-1.png" alt class="img img-responsive">
                            </div>
                            <div class="box">
                                <img src="images/partner/img-2.png" alt class="img img-responsive">
                            </div>
                            <div class="box">
                                <img src="images/partner/img-3.png" alt class="img img-responsive">
                            </div>
                            <div class="box">
                                <img src="images/partner/img-4.png" alt class="img img-responsive">
                            </div>
                            <div class="box">
                                <img src="images/partner/img-1.png" alt class="img img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partner -->


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
