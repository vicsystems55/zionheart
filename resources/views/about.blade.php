@extends('layout')

@section('content')

    <!-- start page-wrapper -->
    <div class="page-wrapper about-page">

        @include('inc.header')


        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <h1>About us</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About us</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start about-details -->
        <section class="about-us-st section-padding">
            <div class="container">
                <h2><span>About</span> us</h2>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="left-col">
                            <div class="company">
                                <h3>We are <span>Zion Height</span></h3>
                                <span>Making the world a better place</span>
                            </div>
                            <p>Zion Height International is a Christian Organization founded in 1998 by a group of independent non-governmental organizations. They joined together as a confederation to maximize efficiency, achieve greater impact, and reduce poverty and injustice in Nigeria, Africa, and worldwide.
                                We are working in more than 30 countries with thousands of partners and communities to serve and protect. In emergencies helping people rebuild their livelihoods and campaign for long-lasting changes keeping women’s rights at the heart of everything we do.
                                Our finances and accountability
                                In 2018- 2019 were worked directly with 19.5 million people in our offices across 30 countries in Africa 53% of whom were women and campaigning programs across Africa.
                                Nearly 70% per Euro and improving lives in fighting inequality to beat poverty and building a better future for the world.
                                </p>


                        </div> <!-- end left-col -->
                    </div> <!-- end col -->

                    <div class="col col-md-6 wow fadeInRightSlow">
                        <div class="right-col">
                            <div class="video">
                                <img src="images/about/video-poster.jpg" alt="" class="img img-responsive">
                                <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1"  class="video-btn" data-type="iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end about-details -->


        <!-- start cta-4 -->
        <section class="cta-4 section-padding">
            <h2 class="hidden">CTA 4</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-4">
                        <div class="wow fadeInLeftSlow">
                            <span class="icon"><i class="fi flaticon-money-1"></i></span>
                            <h3>Donate money</h3>


                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow fadeInLeftSlow" data-wow-delay="0.3s">
                            <span class="icon"><i class="fi flaticon-heart"></i></span>
                            <h3>Become volunteer</h3>

                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow fadeInLeftSlow" data-wow-delay="0.6s">
                            <span class="icon"><i class="fi flaticon-business-1"></i></span>
                            <h3>Sponsorship</h3>

                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta-4 -->


        <!-- start cta-2 -->
        <section class="cta-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-5 col-sm-4 join-us">
                        <span>Join us</span>
                    </div>

                    <div class="col col-md-7 col-sm-8 sing-up  wow fadeInRightSlow">
                        <h3><span><img src="images/sing-up-icon.png" alt></span> Sign up for volunteer program</h3>
                        <span>Serve the humanity</span>

                        <a href="#" class="btn theme-btn">Sing up</a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta-2 -->





        <!-- start newsletter -->
        <section class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-5 children-holder"></div>
                    <div class="col col-md-7 subscribe">
                        <h3>Subscribe us</h3>
                        <p>For <span>news</span> updates and promotional <span>events</span></p>

                        <form action="#">
                            <div>
                                <input class="form-control" type="email" required placeholder="email address">
                                <button type="submit" class="btn theme-btn">Subscribe</button>
                            </div>
                        </form>
                        <div class="pluses">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- end newsletter -->


        <!-- start footer -->
        @include('inc.footer')
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->

@endsection


