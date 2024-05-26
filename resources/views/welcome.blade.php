<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GreenQuest</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/welcome/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/welcome/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/welcome/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/welcome/img/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/welcome/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/welcome/fonts/font-awesome/css/font-awesome.css" />

    <!-- Slider
    ================================================== -->
    <link href="assets/welcome/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="assets/welcome/css/owl.theme.css" rel="stylesheet" media="screen" />

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="assets/welcome/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/welcome/css/nivo-lightbox/nivo-lightbox.css" />
    <link rel="stylesheet" type="text/css" href="assets/welcome/css/nivo-lightbox/default.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#page-top" class="page-scroll">
                    <img src="assets/welcome/img/logo_bg.png" class="logo-nav" alt="Logo">
                </a>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#services" class="page-scroll">Our Team</a></li>
                    <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
                    <li><a href="#faqs" class="page-scroll">FAQs</a></li>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>


                    @if (Route::has('login'))

                        @auth

                            <li>
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>

                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                </li>

                            @endif
                        @endauth

                    @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 intro-text">
                            <h1>GreenQuest</h1>
                            <p>
                                "Menanam Harapan, Membesarkan Masa Depan" 
                            </p>
                            <a href="#about" class="btn btn-custom btn-lg page-scroll">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Welcome to <span>GreenQuest</span></h2>
                        <hr />
                        <p>
                            Greenquest adalah sebuah inisiatif digital yang berkomitmen untuk memulihkan 
                            keanekaragaman hayati bumi kita. Kami berdedikasi untuk mendukung Sustainable Development Goals (SDGs), 
                            terutama dalam mengambil tindakan segera melawan perubahan iklim dan mengelola hutan secara berkelanjutan.
                        </p>
                        <p>
                            Dengan platform yang mudah digunakan, kami mengajak individu dan organisasi untuk 
                            berkontribusi pada penanaman pohon dan pemulihan ekosistem. Setiap donasi yang diberikan 
                            akan langsung dialokasikan untuk penanaman pohon dan perawatan hutan.  Kami menjamin transparansi 
                            penuh dan menyediakan laporan berkala kepada para donatur, memastikan setiap sumbangan Anda memberikan 
                            dampak nyata.
                        </p>
                        <!-- <a href="#services" class="btn btn-custom btn-lg page-scroll">View All Services</a> -->
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <!-- <div class="about-media"><img src="assets/welcome/img/about-1.jpg" alt=" " /></div> -->
                    <div class="about-desc">
                        <h3>Visi</h3>
                        <p>
                            Menjadi pelopor dalam upaya reforestasi global, menciptakan dunia di mana manusia 
                            dan alam dapat hidup berdampingan dalam harmoni.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <!-- <div class="about-media"><img src="assets/welcome/img/about-2.jpg" alt=" " /></div> -->
                    <div class="about-desc">
                        <h3>Misi</h3>
                        <p>
                            Menggalang dana dan sumber daya untuk mendukung penanaman pohon secara masif dan berkelanjutan, 
                            membangun kesadaran dan pendidikan tentang pentingnya hutan untuk kesehatan planet kita, dan 
                            mendorong partisipasi aktif masyarakat dalam upaya pelestarian lingkungan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section -->
    <div id="services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 section-title text-center">
                <h2>Our Team</h2>
                <hr />
                <p>
                    Anggota tim GreenQuest 
                </p>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="service-media">
                        <img src="assets/welcome/img/services/service-1.jpg" alt=" " />
                    </div>
                    <div class="service-desc">
                        <h3>Lyonard Gemilang</h3>
                        <p>
                            "Stop black people from planting trees"
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-media">
                        <img src="assets/welcome/img/services/service-2.jpg" alt=" " />
                    </div>
                    <div class="service-desc">
                        <h3>Virgananta Saputra</h3>
                        <p>
                            "Gas terus sampe pingsan"
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-media">
                        <img src="assets/welcome/img/services/service-3.jpg" alt=" " />
                    </div>
                    <div class="service-desc">
                        <h3>Ahmad Jawahirul</h3>
                        <p>
                            "Kurang ngaji"
                        </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-media">
                        <img src="assets/welcome/img/services/service-4.jpg" alt=" " />
                    </div>
                    <div class="service-desc">
                        <h3>Arthurito Keintjem</h3>
                        <p>
                            "Rakha bisnis"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Project Gallery</h2>
                <hr />
                <p>
                    Galeri GreenQuest 
                </p>
            </div>
            
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-4 lawn">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="assets/welcome/img/portfolio/foto1-large.jpg" title="Project Title"
                                    data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Foto 1</h4>
                                    </div>
                                    <img src="assets/welcome/img/portfolio/foto1-small.jpg" class="img-responsive"
                                        alt="Project Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 planting">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="assets/welcome/img/portfolio/foto2-large.jpg" title="Project Title"
                                    data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Foto 2</h4>
                                    </div>
                                    <img src="assets/welcome/img/portfolio/foto2-small.jpg" class="img-responsive"
                                        alt="Project Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 lawn">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="assets/welcome/img/portfolio/foto3-large.jpg" title="Project Title"
                                    data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Foto 3</h4>
                                    </div>
                                    <img src="assets/welcome/img/portfolio/foto3-small.jpg" class="img-responsive"
                                        alt="Project Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 lawn">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="assets/welcome/img/portfolio/foto5-large.jpg" title="Project Title"
                                    data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Foto 4</h4>
                                    </div>
                                    <img src="assets/welcome/img/portfolio/foto5-small.jpg" class="img-responsive"
                                        alt="Project Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 planting">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="assets/welcome/img/portfolio/foto6-large.jpg" title="Project Title"
                                    data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Foto 5</h4>
                                    </div>
                                    <img src="assets/welcome/img/portfolio/foto6-small.jpg" class="img-responsive"
                                        alt="Project Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 garden">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="assets/welcome/img/portfolio/foto7-large.jpg" title="Project Title"
                                    data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Foto 6</h4>
                                    </div>
                                    <img src="assets/welcome/img/portfolio/foto7-small.jpg" class="img-responsive"
                                        alt="Project Title" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Section -->
    <div id="faqs" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>FAQs</h2>
                    <hr />
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="faq-question">What is GreenQuest's mission?</div>
                                <div class="faq-answer">GreenQuest's mission is to promote environmental sustainability
                                    through tree planting and conservation efforts.
                                </div>
                            </div>
                            <div class="item">
                                <div class="faq-question">How can I get involved with GreenQuest?</div>
                                <div class="faq-answer">You can get involved with GreenQuest by volunteering for tree
                                    planting events,
                                    donating to support our projects, or spreading awareness about our mission.
                                </div>
                            </div>
                            <div class="item">
                                <div class="faq-question">How does GreenQuest ensure the sustainability of its projects?
                                </div>
                                <div class="faq-answer">GreenQuest works closely with local communities and
                                    environmental experts to
                                    ensure that tree planting projects are sustainable and have a positive long-term
                                    impact.
                                </div>
                            </div>
                            <div class="item">
                                <div class="faq-question">Is my donation tax-deductible?</div>
                                <div class="faq-answer">Yes, donations made to GreenQuest are tax deductible to the
                                    extent allowed by
                                    law. Please consult with your tax advisor for more information.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Us</h2>
                <hr />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed
                    dapibus leonec.
                </p>
            </div>
            <div class="col-md-10 col-md-offset-1 contact-info">
                <div class="col-md-4">
                    <h3>Alamat</h3>
                    <hr />
                    <div class="contact-item">
                        <p>Jl. Veteran No.10-11, Ketawanggede,</p>
                        <p>Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Jam Kerja</h3>
                    <hr />
                    <div class="contact-item">
                        <p>Senin-Sabtu: 07:00 - 18:00</p>
                        <p>Sunday: CLOSED</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Info</h3>
                    <hr />
                    <div class="contact-item">
                        <p>Phone: +1 123 456 1234</p>
                        <p>Email: info@company.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h3>Leave us a message</h3>
                <form name="sentMessage" id="contactForm" novalidate action="{{ route('message.send') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name"
                                    required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email"
                                    required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                            required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <div id="footer">
        <div class="container text-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="social">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript" src="assets/welcome/js/jquery.1.11.1.js"></script>
            <script type="text/javascript" src="assets/welcome/js/bootstrap.js"></script>
            <script type="text/javascript" src="assets/welcome/js/SmoothScroll.js"></script>
            <script type="text/javascript" src="assets/welcome/js/nivo-lightbox.js"></script>
            <script type="text/javascript" src="assets/welcome/js/jquery.isotope.js"></script>
            <script type="text/javascript" src="assets/welcome/js/owl.carousel.js"></script>
            <script type="text/javascript" src="assets/welcome/js/jqBootstrapValidation.js"></script>
            <!-- <script type="text/javascript" src="assets/welcome/js/contact_me.js"></script> -->
            <script type="text/javascript" src="assets/welcome/js/main.js"></script>
</body>

</html>