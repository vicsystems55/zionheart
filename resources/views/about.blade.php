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
                                <h3>We are <span>Charity++</span></h3>
                                <span>Making the world a better place</span>
                            </div>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusan tium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>

                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default current">
                                    <div class="panel-heading" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Voluptatem sequi nesciunt <i class="fa fa-angle-down"></i></a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="img-holder">
                                                <img src="images/about/thumb/img-1.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolo res.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingTwo">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Similique sunt in culpa <i class="fa fa-angle-down"></i></a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="img-holder">
                                                <img src="images/about/thumb/img-1.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolo res.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingThree">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Officia deserunt mollitia animi <i class="fa fa-angle-down"></i></a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="img-holder">
                                                <img src="images/about/thumb/img-1.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolo res.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <p>Perspiciatis unde omnis iste natus error sit vo luptatem</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow fadeInLeftSlow" data-wow-delay="0.3s">
                            <span class="icon"><i class="fi flaticon-heart"></i></span>
                            <h3>Become volunteer</h3>
                            <p>Perspiciatis unde omnis iste natus error sit vo luptatem</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow fadeInLeftSlow" data-wow-delay="0.6s">
                            <span class="icon"><i class="fi flaticon-business-1"></i></span>
                            <h3>Sponsorship</h3>
                            <p>Perspiciatis unde omnis iste natus error sit vo luptatem</p>
                            <a href="#" class="read-more">Read more</a>
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
                        <p>Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn theme-btn">Sing up</a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta-2 -->


        <!-- start volunteers -->
        <section class="volunteers section-padding">
            <div class="container">
                <div class="row section-title">
                    <div class="col col-xs-12">
                        <span>Meet us</span>
                        <h2>Our Volunteers</h2>
                    </div>
                </div> <!-- end section-title -->

                <div class="row volunteers-grid">
                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-1.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-2.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-4.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-5.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-6.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-7.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-8.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end volunteers -->


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
                                    2016 &copy; All rights reserved by <span><a href="#">charity++</a></span>
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
                    <p>Made with <span><i class="fa fa-heart"></i></span> by <a href="http://themeforest.net/user/themexriver">Themexriver</a></p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->

@endsection


