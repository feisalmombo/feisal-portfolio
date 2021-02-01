<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>My Portfolio | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="My Portfolio" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('portfolio/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('portfolio/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- Timeline -->
    <link href="{{ asset('portfolio/css/timeline.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- Font-awesome icons -->
    <link href="{{ asset('portfolio/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- // Custom Theme files -->
    <!-- Online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Header -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
        <div class="container">
            <h1 class="wthree-logo">
                <a href="{{ url('/') }}" id="logoLink"><span style="color: #ffffff">My</span>Portfolio</a>
            </h1>
            <div class="nav-item  position-relative">
                <a href="#menu" id="toggle">
                    <span></span>
                </a>
                <div id="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#tl" class="scroll">About</a></li>
                        <li><a href="#news" class="scroll">News</a></li>
                        <li><a href="#tl" class="scroll">Timeline</a></li>
                        <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                        <li><a href="#testi" class="scroll">Testimonials</a></li>
                        <li><a href="#contact" class="scroll">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- // Header -->
    <!-- Banner -->
    <div id="home" class="banner-w3pvt  d-flex justify-content-center align-items-center clip-wthree">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6"></div>
                <img src="{{ asset('portfolio/images/feisal-image.png') }}" alt="feisal-image" class="img-fluid" />
                <div class="col-lg-6 bnr-txt-w3pvt  d-sm-flex justify-content-center align-items-center">
                    <div class="bnr-w3pvt-txt">
                        <h4>Hi,I am</h4>
                        <h2 style="color: #ffffff">Feisal Mombo</h2>
                        <h3>a Software Developer with passion of creativity</h3>
                        <p class="text-white mt-sm-4 mt-2"> I study a Bachelor of Science in Software Engineering as my professional specialized in web
                            development, system development, database design, system analyst and design and using that
                            knowledge gets from the University of Dodoma to solve all problems facing society in a form of
                            computerized form.</p>
                        {{-- <a href="#about" class="scroll bnr-btn">read more</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Banner -->
    <!-- About -->
    <section class="about-portfolio sec-space" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-sec-portfolio_pvt">
                        <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
                        <h4 class="portfolio_pvt-head">about me</h4>
                        <p class="title-text text-capitalize">The information about me</p>
                    </div>
                    <div class="ab-pvtw3 my-4">
                        <p class="my-3"> I was born in 1993. I live in Dar es Salaam and work as a Freelancer Software Developer. I’ve been a professional developer for more than 2 years.
                            I’ve mostly worked professionally with PHP in Laravel framework, Angular, CSS, HTML, Bootstrap, JavaScript, JqQuery and but also a little bit with Python.
                            I’ve published more than 15 projects online.
                        </p>
                        <p> I have excellent design and coding skills, as well as an ability convert client requirement into
                            exciting applications.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-md-4 w3pvt-ab text-center position-relative">
                    <div class="ab-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                    <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portfolio/images/idea.png') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="feed-title my-3">positive solutions</h4>
                    <p> This brings new and good quality on a services.</p>
                    {{-- <a href="#tl" class="btn-portfolio_pvt scroll">Read more<span class="fa fa-long-arrow-right"
                            aria-hidden="true"></span></a> --}}
                </div>
                <div class="col-lg-3 col-md-6 mt-4 w3pvt-ab text-center">
                    <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portfolio/images/customer.png') }}" alt="customer" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="feed-title my-3">satisfied customers</h4>
                    <p> Accepts the good quality and experience the services.</p>
                    {{-- <a href="#tl" class="btn-portfolio_pvt scroll">Read more<span class="fa fa-long-arrow-right"
                            aria-hidden="true"></span></a> --}}
                </div>
            </div>
            <div class="row ab-grid-bottom">
                <div class="col-lg-3 col-md-6 my-lg-4 w3pvt-ab text-center  position-relative">
                    <div class="ab-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                    <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portfolio/images/talking.png') }}" alt="talking" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="feed-title my-3">Consulting</h4>
                    <p> Engaged in the business of giving expert advice to people working in a specific field.</p>
                    {{-- <a href="#tl" class="btn-portfolio_pvt scroll">Read more<span class="fa fa-long-arrow-right"
                            aria-hidden="true"></span></a> --}}
                </div>
                <div class="col-lg-3 col-md-6 my-lg-4 mt-md-0 mt-4 w3pvt-ab text-center position-relative">
                    <div class="ab-border rsp-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                    <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portfolio/images/database.png') }}" alt="database" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="feed-title my-3">Database Design</h4>
                    <p> Database design is the organization of data according to a database model.</p>
                    {{-- <a href="#tl" class="btn-portfolio_pvt scroll">Read more<span class="fa fa-long-arrow-right"
                            aria-hidden="true"></span></a> --}}
                </div>
                <div class="col-lg-3 col-md-6 my-lg-4 mt-sm-5 mt-4 w3pvt-ab text-center position-relative">
                    <div class="ab-border"><span class="fa fa-arrow-circle-right" aria-hidden="true"></span></div>
                    <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portfolio/images/system.png') }}" alt="system" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="feed-title my-3">System Development</h4>
                    <p> Systems development is the process of defining, designing, testing and implementing a new software application or program.</p>
                    {{-- <a href="#tl" class="btn-portfolio_pvt scroll">Read more<span class="fa fa-long-arrow-right"
                            aria-hidden="true"></span></a> --}}
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-4 mt-sm-5 mt-4 w3pvt-ab text-center">
                    <div class="clip-each clip-border d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portfolio/images/hosting.png') }}" alt="hosting" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="feed-title my-3">Web Hosting</h4>
                    <p> When a hosting provider allocates space on a web server for a website to store its files, they are hosting a website.</p>
                    {{-- <a href="#tl" class="btn-portfolio_pvt scroll">Read more<span class="fa fa-long-arrow-right"
                            aria-hidden="true"></span></a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <!-- carousel -->
    <div class="cliptop-blog-wthree" id="news">
        <div class="container">
            <div class="title-sec-portfolio_pvt">
                <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
                <h4 class="portfolio_pvt-head text-white">latest news</h4>
                <p class="title-text text-capitalize">See the latest information</p>
            </div>
            <div class="row blog pt-5 mt-md-3">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex team-agile-row">
                                    <div class="col-lg-4 col-md-6 w3-slide-grid">
                                        <h5><a href="#">MarketPlace</a></h5>
                                        <div class="box20">
                                            <img src="{{ asset('portfolio/images/marketplace.PNG') }}" alt="marketplace" class="img-fluid" />
                                            <div class="box-content">
                                                <h3 class="title">MarketPlace</h3>
                                                <span class="post text-capitalize">27 Jan 2021</span>
                                            </div>
                                            <ul class="icon">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-share"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4  w3-slide-grid">
                                        <h5><a href="#">ZURA</a></h5>
                                        <div class="box20">
                                            <img src="{{ asset('portfolio/images/zura.PNG') }}" alt="zura" class="img-fluid" />
                                            <div class="box-content">
                                                <h3 class="title">ZURA</h3>
                                                <span class="post text-capitalize">27 Jan 2021</span>
                                            </div>
                                            <ul class="icon">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-share"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 w3-slide-grid">
                                        <h5><a href="#">RPMS</a></h5>
                                        <div class="box20">
                                            <img src="{{ asset('portfolio/images/rpms.PNG') }}" alt="rpms" class="img-fluid" />
                                            <div class="box-content">
                                                <h3 class="title">RPMS</h3>
                                                <span class="post text-capitalize">27 Jan 2021</span>
                                            </div>
                                            <ul class="icon">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-share"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.item-->
                            <div class="carousel-item">
                                <div class="d-flex team-agile-row">
                                    <div class="col-lg-4 col-md-6  w3-slide-grid">
                                        <h5><a href="#">Reporting</a></h5>
                                        <div class="box20">
                                            <img src="{{ asset('portfolio/images/reporting.PNG') }}" alt="reporting" class="img-fluid" />
                                            <div class="box-content">
                                                <h3 class="title">Reporting</h3>
                                                <span class="post">27 Jan 2021</span>
                                            </div>
                                            <ul class="icon">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-share"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4  w3-slide-grid">
                                        <h5><a href="#">Scala Logistic Agency</a></h5>
                                        <div class="box20">
                                            <img src="{{ asset('portfolio/images/scala.PNG') }}" alt="scala" class="img-fluid" />
                                            <div class="box-content">
                                                <h3 class="title">Scala Logistic Agency</h3>
                                                <span class="post">27 Jan 2021</span>
                                            </div>
                                            <ul class="icon">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-share"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4  w3-slide-grid">
                                        <h5><a href="#">Blog Updates</a></h5>
                                        <div class="box20">
                                            <img src="{{ asset('portfolio/images/blog_updates.PNG') }}" alt="blog_updates" class="img-fluid" />
                                            <div class="box-content">
                                                <h3 class="title">Blog Updates</h3>
                                                <span class="post">27 Jan 2021</span>
                                            </div>
                                            <ul class="icon">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-share"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    </div>
    <!-- // Carousel -->
    <!-- timeline -->
    <section class="timeline-w3pvt" id="tl">
        <div class="container">
            <div class="row">
                <div id="timeline">
                    <div class="row timeline-movement timeline-movement-top">
                        <div class="timeline-badge timeline-future-movement">
                            <p>2020</p>
                        </div>
                    </div>
                    <div class="row timeline-movement">
                        <div class="timeline-badge center-left" style="background-color: #17a2b8;">

                        </div>
                        <div class="col-lg-6  timeline-item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                        <div class="timeline-panel-ul clearfix">
                                            <div class="lefting-wrap">
                                                <ul>
                                                    <li class="img-wraping"><a href="#"><img src="{{ asset('portfolio/images/blog_updates.PNG') }}" class="img-fluid"
                                                                alt="blog_updates" /></a></li>
                                                </ul>
                                            </div>
                                            <div class="righting-wrap">
                                                <ul>
                                                    <li><a href="#" class="importo">Blog Updates</a></li>
                                                    <li><span class="causale" style="color:#000; font-weight: 600;">Information about it
                                                        </span> </li>
                                                    <li><span class="causale">From this customer can know more information about financial sector to this blog. </span> </li>
                                                    <li>
                                                        <p><small class="text-muted"><span class="fa fa-clock-o"></span>
                                                                27/01/2021, 05:50 PM</small></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row timeline-movement">
                        <div class="timeline-badge center-right">
                        </div>
                        <div class="offset-lg-6 col-lg-6  timeline-item">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-12">
                                    <div class="timeline-panel debits  anim animate  fadeInRight">
                                        <div class="timeline-panel-ul clearfix">
                                            <div class="lefting-wrap">
                                                <ul>
                                                    <li class="img-wraping"><a href="#"><img src="{{ asset('portfolio/images/reporting.PNG') }}" class="img-fluid"
                                                                alt="reporting" /></a></li>
                                                </ul>
                                            </div>
                                            <div class="righting-wrap">
                                                <ul>
                                                    <li><a href="#" class="importo">Incidents Umojaswitch Reporting</a></li>
                                                    <li><span class="causale" style="color:#000; font-weight: 600;">
                                                        Information about it </span> </li>
                                                    <li><span class="causale">This can help customers to report all incidence to heldesk. </span> </li>
                                                    <li>
                                                        <p><small class="text-muted"><span class="fa fa-clock-o"></span>
                                                                27/01/2021, 05:50 PM</small></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row timeline-movement">
                        <div class="timeline-badge center-left">
                        </div>
                        <div class="col-lg-6  timeline-item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="timeline-panel credits  anim animate  fadeInLeft">
                                        <div class="timeline-panel-ul  clearfix">
                                            <div class="lefting-wrap">
                                                <ul>
                                                    <li class="img-wraping"><a href="#"><img src="{{ asset('portfolio/images/scala.PNG') }}" class="img-fluid"
                                                                alt="scala" /></a></li>
                                                </ul>
                                            </div>
                                            <div class="righting-wrap">
                                                <ul>
                                                    <li><a href="#" class="importo">Scala Logistic Agency</a></li>
                                                    <li><span class="causale" style="color:#000; font-weight: 600;">Information about it
                                                        </span> </li>
                                                    <li><span class="causale">Simplify means of transportation. </span> </li>
                                                    <li>
                                                        <p><small class="text-muted"><span class="fa fa-clock-o"></span>
                                                                27/01/2021, 5:50 PM</small></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row timeline-movement timeline-movement-top">
                        <div class="timeline-badge timeline-future-movement">
                            <p>2021</p>
                        </div>
                    </div>
                    <div class="row timeline-movement">
                        <div class="timeline-badge center-right">
                        </div>
                        <div class="offset-lg-6 col-lg-6  timeline-item">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-11">
                                    <div class="timeline-panel debits  anim animate  fadeInRight">
                                        <div class="timeline-panel-ul clearfix">
                                            <div class="lefting-wrap">
                                                <ul>
                                                    <li class="img-wraping"><a href="#"><img src="{{ asset('portfolio/images/zura.PNG') }}" class="img-fluid"
                                                                alt="zura" /></a></li>
                                                </ul>
                                            </div>
                                            <div class="righting-wrap">
                                                <ul>
                                                    <li><a href="#" class="importo"> ZURA</a></li>
                                                    <li><span class="causale" style="color:#000; font-weight: 600;">Information about it
                                                         </span> </li>
                                                    <li><span class="causale">Get License online. </span> </li>
                                                    <li>
                                                        <p><small class="text-muted"><span class="fa fa-clock-o"></span>
                                                                27/01/2021, 5:50 PM</small></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row timeline-movement">
                        <div class="timeline-badge center-left">

                        </div>
                        <div class="col-lg-6  timeline-item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="timeline-panel credits  anim animate  fadeInLeft">
                                        <div class="timeline-panel-ul clearfix">
                                            <div class="lefting-wrap">
                                                <ul>
                                                    <li class="img-wraping"><a href="#"><img src="{{ asset('portfolio/images/rpms.PNG') }}" class="img-fluid"
                                                                alt="rpms" /></a></li>
                                                </ul>
                                            </div>
                                            <div class="righting-wrap">
                                                <ul>
                                                    <li><a href="#" class="importo"> RPMS</a></li>
                                                    <li><span class="causale" style="color:#000; font-weight: 600;">Information about it
                                                        </span> </li>
                                                    <li><span class="causale">Get the performance management system. </span> </li>
                                                    <li>
                                                        <p><small class="text-muted"><span class="fa fa-clock-o"></span>
                                                                27/01/2021, 5:50 PM</small></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Timeline -->
    <!-- portfolio -->
    <section class="wthree-row w3-gallery cliptop-portfolio-wthree" id="portfolio">
        <div class="container">
            <div class="title-sec-portfolio_pvt">
                <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
                <h4 class="portfolio_pvt-head text-white">my portfolio</h4>
                <p class="title-text text-capitalize">These are my work</p>
            </div>
            <ul class="demo mt-5 pt-lg-5">
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/blog_updates.PNG') }}" alt="blog_updates" class="img-fluid" />
                        <div class="p-mask">
                            <h4>Blog Updates</h4>
                            <p>Gives information about financial sector.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/zura.PNG') }}" alt="zura" class="img-fluid" />
                        <div class="p-mask">
                            <h4>ZURA</h4>
                            <p>This makes the easy way of getting a digital license online by a single click.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/rpms.PNG') }}" alt="rpms" class="img-fluid" />
                        <div class="p-mask">
                            <h4>RPMS</h4>
                            <p>This regulate the performance management system.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/scala.PNG') }}" alt="scala" class="img-fluid" />
                        <div class="p-mask">
                            <h4>Scala Logistic Agency</h4>
                            <p>Offering a transportation solution whereby customers can request for transport of their cargos online via scala SYSTEM in a very easy and user friendly manner.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/marketplace.PNG') }}" alt="marketplace" class="img-fluid" />
                        <div class="p-mask">
                            <h4>MarketPlace</h4>
                            <p>MarketPlace is a smarter way to find financial products.Compare loans from multiple providers in one simple search.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/reporting.PNG') }}" alt="reporting" class="img-fluid" />
                        <div class="p-mask">
                            <h4>Reporting</h4>
                            <p>Provide the information about ATM machines direct via Help desk.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/highhub_company.PNG') }}" alt="highhub_company" class="img-fluid" />
                        <div class="p-mask">
                            <h4>High Hub Company</h4>
                            <p>This is website that provides all information about company and the services that provides to the customer.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-grid1">
                        <img src="{{ asset('portfolio/images/edms.PNG') }}" alt="edms" class="img-fluid" />
                        <div class="p-mask">
                            <h4>EDMS</h4>
                            <p>This makes the company division for the employement to a certain department.</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <!-- // Gallery container -->
    </section>
    <!-- // Portfolio -->
    <!-- testimonials -->
    <div class="testimonials" id="testi">
        <div class="container">
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="row testi-w3pvt">
                            <div class="col-lg-6">
                                <div class="testi-left-grid">
                                    <div class="testi-agile">
                                        <p>
                                            They worked untiringly to meet my goals for App development. I noticed a rapid boost in my business through the app. Highly Recommended!

                                        </p>
                                    </div>
                                    <div class="testi-pos">
                                        <img src="{{ asset('portfolio/images/teacher.jpg') }}" alt="" class="img-fluid rounded-circle mb-3" />
                                        <h4>Joan Thomas</h4>
                                        <span>Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testi-agile">
                                    <p>
                                        They worked untiringly to meet my goals for App development.
                                        I noticed a rapid boost in my business through the app. Highly Recommended!
                                    </p>
                                </div>
                                <div class="testi-pos">
                                    <img src="{{ asset('portfolio/images/dr.jpg') }}" alt="" class="img-fluid rounded-circle mb-3" />
                                    <h4>Kelvin Mkabi</h4>
                                    <span>Pilot</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row testi-w3pvt">
                            <div class="col-lg-6">
                                <div class="testi-agile">
                                    <p>
                                        They worked untiringly to meet my goals for App development.
                                        I noticed a rapid boost in my business through the app. Highly Recommended!

                                    </p>
                                </div>
                                <div class="testi-pos">
                                    <img src="{{ asset('portfolio/images/dr.jpg') }}" alt="" class="img-fluid rounded-circle mb-3" />
                                    <h4>Peter Mtuka</h4>
                                    <span>Manager</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testi-agile">
                                    <p>
                                        They worked untiringly to meet my goals for App development.
                                        I noticed a rapid boost in my business through the app. Highly Recommended!

                                    </p>
                                </div>
                                <div class="testi-pos">
                                    <img src="{{ asset('portfolio/images/dr.jpg') }}" alt="" class="img-fluid rounded-circle mb-3" />
                                    <h4>Khatimu Mkalimu</h4>
                                    <span>Doctor</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row testi-w3pvt">
                            <div class="col-lg-6">
                                <div class="testi-agile">
                                    <p>
                                        They worked untiringly to meet my goals for App development.
                                        I noticed a rapid boost in my business through the app. Highly Recommended!

                                    </p>
                                </div>
                                <div class="testi-pos">
                                    <img src="{{ asset('portfolio/images/teacher.jpg') }}" alt="" class="img-fluid rounded-circle mb-3" />
                                    <h4>Zuhura Mwanga</h4>
                                    <span>Shopkeeper</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testi-agile">
                                    <p>
                                        They worked untiringly to meet my goals for App development.
                                        I noticed a rapid boost in my business through the app. Highly Recommended!

                                    </p>
                                </div>
                                <div class="testi-pos">
                                    <img src="{{ asset('portfolio/images/teacher.jpg') }}" alt="" class="img-fluid rounded-circle mb-3" />
                                    <h4>Khadija Mohammed</h4>
                                    <span>Engineer</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- // Testimonials -->
    <!-- contact -->
    <div class="section" id="contact">
        <div class="map-grid clipbottom-wthree">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126771.96422011407!2d38.988461958203125!3d-6.815518099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c41585a79fe95%3A0x3e582ad82389c528!2sMloganzila%20Campus%20of%20MUHAS!5e0!3m2!1sen!2sus!4v1611668576638!5m2!1sen!2sus"
                style="border:0" allowfullscreen></iframe>
            <div class="portfolio-contact-pos  clipbottom-wthree">
                <div class="portfolio-contact-pos-grid">
                    <div class="title-sec-portfolio_pvt">
                        <span class="title-icon-wthree fa fa-hashtag" aria-hidden="true"></span>
                        <h4 class="portfolio_pvt-head text-white">contact me</h4>
                        <p class="title-text text-capitalize">You can communicate with me by submit your information.</p>
                    </div>
                    <form action="#" method="POST" class="contact-wthree">
                        <div class="form-group d-flex">
                            <label>
                                <span class="fa fa-user text-white" aria-hidden="true"></span>
                            </label>
                            <input class="form-control" type="text" placeholder="Enter your name..." name="email"
                                required="">
                        </div>
                        <div class="form-group d-flex">
                            <label>
                                <span class="fa fa-envelope text-white" aria-hidden="true"></span>
                            </label>
                            <input class="form-control" type="email" placeholder="Enter your email..." name="email"
                                required="">
                        </div>
                        <div class="form-group d-flex">
                            <label>
                                <span class="fa fa-edit text-white"></span>
                            </label>
                            <input class="form-control" type="text" placeholder="Subject" name="email" required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="contact-comment" placeholder="Your message"
                                required></textarea>
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="btn btn-block text-uppercase">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <section class="contact-details">
        <div class="container-fluid px-0">
            <div class="row m-0 contact-row-w3pvt py-5">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center align-items-center p-0">
                            <span class="field-icon fa fa-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-10 cd-grid">
                            <ul>
                                <li>+255 684 456 287</li>
                                <li>+255 654 197 535</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-lg-0 my-4">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center align-items-center p-0">
                            <span class="field-icon fa fa-map-marker" aria-hidden="true"></span>
                        </div>
                        <div class="col-10 cd-grid">
                            <p>Hospital Kibamba, Dar es Salaam<br>
                                Tanzania.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center align-items-center p-0">
                            <span class="field-icon fa fa-envelope-o fa-lg" aria-hidden="true"></span>
                        </div>
                        <div class="col-10 cd-grid">
                            <ul>
                                <li>
                                    <a href="#">feisalmombo29@gmail.com</a>
                                </li>
                                <li>
                                    <a href="#">feisalmombo29@yahoo.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Contact -->
    <!-- social -->
    <section class="social_w3ls_pvt position-relative py-5">
        <div class="container py-lg-5">
            <ul class="py-4">
                <li><a href="https://www.facebook.com/feisal.mombo.3/" target="_blank"><span class="fa fa-facebook"
                            aria-hidden="true"></span></a></li>
                <li><a href="https://twitter.com/FeisalMombo" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                <li><a href="#" target="_blank"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>
                <li><a href="https://www.linkedin.com/in/feisal-mombo-332322135/" target="_blank"><span class="fa fa-linkedin"
                            aria-hidden="true"></span></a></li>
                <li><a href="#" target="_blank"><span class="fa fa-pinterest" aria-hidden="true"></span></a></li>
            </ul>
        </div>
    </section>
    <!-- // Social -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="cpy-right text-center">
                <p class="text-white">© {{  date('Y') }} My Portfolio. All rights reserved | Developed by
                    <a href="#" class="text-dark font-weight-bold"> Feisal Mombo.</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- // Footer -->
    <!-- js -->
    <script src="{{ asset('portfolio/js/jquery-2.2.3.min.js') }}"></script>
    <!-- js -->
    <!--  menu toggle -->
    <script src="{{ asset('portfolio/js/menu.js') }}"></script>
    <!-- testimonials  Responsiveslides -->
    <script src="{{ asset('portfolio/js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- // Testimonials  Responsiveslides -->
    <!-- gallery -->
    <script src="{{ asset('portfolio/js/jquery.picEyes.js') }}"></script>
    <script>
        $(function () {
            // PicturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- // Gallery -->
    <!-- Scrolling Nav JavaScript -->
    <script src="{{ asset('portfolio/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('portfolio/js/timeline.js') }}"></script>
    <script src="{{ asset('portfolio/js/move-top.js') }}"></script>
    <script src="{{ asset('portfolio/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- // End-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('portfolio/js/SmoothScroll.min.js') }}"></script>
    <!-- // Smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('portfolio/js/bootstrap.min.js') }}"></script>
</body>

</html>
