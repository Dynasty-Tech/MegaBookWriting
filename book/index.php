<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mega Book Writing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../book/css/beeta-owl.carousel.min.css">
    <link rel="stylesheet" href="../book/css/beeta-owl.theme.css">
    <link rel="stylesheet" href="../book/css/beeta-owl.theme.default.min.css">
   
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <?php if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    } ?>
</head>


<body>

    <main>
        <div class="wrapper">
            <?php include('nav.php'); ?>
            <!-- header -->
            <section class="hero-section section-margin-y">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-7 px-3 py-5" style="max-width:665px;" data-aos="fade-right">
                                <h1 class="hero-text">With the help of our impeccable book writing services, become the next big thing.</h1>
                                <p class="hero-para mt-4">We know writing a book that people will love to read isn’t as easy as it may seem. Our experienced yet creative book writer works round the clock to transform your story into your legacy!</p>
                                <div class="d-flex mt-4">
                                    <img src="assets/publishers.png" height="53" />
                                    <p class="hero-para ms-2">Join with <span class="fw-bold">4600+ Publishers </span>and start <br> getting feedbacks right now </p>
                                </div>

                                <a class="btn-theme-primary" type="submit" href="contact.php">Get a free quote</a>
                                <a class="btn" type="submit" href="contact.php"><i class="bi bi-arrow-up-right"></i> Learn more</a>
                            </div>
                            <div class="col-lg-4 form-col d-none d-md-none d-sm-none d-lg-block card-body-border-gradient" data-aos="fade-up">
                                <form method="POST" action="mails.php">
                                    <p class="form-text">One step closer to become the best!</p>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" name="email" required>
                                    </div>

                                    <div class="mb-3">
                                        <input type="numbers" class="form-control" id="exampleInputnumber" placeholder="Phone Number" name="phoneNumbar" required>
                                    </div>
                                    <p>Do you have a manuscript that is ready to publish? </p>
                                    <div class="mb-3 col-lg-start">
                                        <select class="btn btn-transparent border w-100 text-start" name="services" required>
                                            <option class="dropdown-item " value="">Select</option>
                                            <option class="dropdown-item" value="Action">Action</option>
                                            <option class="dropdown-item" value="Another action">Another action</option>
                                            <option class="dropdown-item" value="Something else here">Something else here</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-dark w-100" name="services_btn">Send Message</button>

                                </form>
                                <br>
                                <p class="section-text text-center">50% off on all services</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- clients we worked with -->
            <section class="cta-section section-margin-y d-none">
                <div class="container">
                    <div class="row justify-content-center">
                        <p class="svg">Clients we worked with</p>
                        <div class="col-9 p-3" style=" background-color: #0A0A25;">
                            <ul class="list-group list-group-horizontal justify-content-center">
                                <li class="list-item"><img src="./assets/Company logo.svg" width="100px" /></li>
                                <li class="list-item"><img src="./assets/Company logo-1.svg" width="100px" /></li>
                                <li class="list-item"><img src="./assets/Company logo-2.svg" width="100px" /></li>
                                <li class="list-item"><img src="./assets/Company logo-3.svg" width="100px" /></li>
                                <li class="list-item"><img src="./assets/Company logo-4.svg" width="100px" /></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>
            <!--Section-1 -->
            <section>
                <div class="container-fluid section-margin-y">
                    <div class="container ">
                        <div class="row justify-content-between">
                            <div class="col-lg-6 img-col offers d-none d-lg-block d-sm-none d-md-none" data-aos="fade-right"></div>
                            <div class="col-lg-6 d-md-12 d-sm-12 ps-3 " data-aos="fade-left">
                                <h6 class="section-subtitle">Mega book writing</h6>
                                <h1 class="section-title">
                                    Entrust Our Professionals & Become A Well-Recognized Author
                                </h1>
                                <p class="section-text pt-3">
                                    Writing a book is not a cakewalk for everyone and it requires
                                    great inspiration, passion and dedication towards the task.
                                    Writing a book is a process that includes a lot of steps like
                                    planning, organizing, writing and editing. In today’s time, a
                                    lot of people are writing books but only a few of them are
                                    getting recognition and success. If you want to be a
                                    well-recognized author and want your book to stand out from
                                    the rest, you need to hire the right book or ghost writing
                                    services. And that’s where we come into play! We have been in
                                    the industry for a while and we have the experience that is
                                    necessary to help you with your book.
                                </p>
                                <p class="section-text pt-3">
                                    Writing a book is not a cakewalk for everyone and it requires
                                    great inspiration, passion and dedication towards the task.
                                    Writing a book is a process that includes a lot of steps like
                                    planning, organizing, writing and editing. In today’s time, a
                                    lot of people are writing books but only a few of them are
                                    getting recognition and success. If you want to be a
                                    well-recognized author and want your book to stand out from
                                    the rest, you need to hire the right book or ghost writing
                                    services. And that’s where we come into play! We have been in
                                    the industry for a while and we have the experience that is
                                    necessary to help you with your book.
                                </p>
                                <div>
                                    <a class="btn-theme-primary" type="submit" href="contact.php">Get a free quote</a>
                                    <a class="btn btn-theme-outlined " href="#">Live chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section Content-->
            <section class="section-margin-y">
                <div class="conatiner-fluid bg-light-section">
                    <div class="container p-5">
                        <div class="row ">

                            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-left">
                                <h1 class="section-1-heading-h1">We Give Your Book the New Heights it Deserves</h1>
                                <p class="section-text text-white">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>
                                <p class="section-text text-white">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers.</p>
                                <div>
                                    <a class="btn btn-theme-outlined-light text-white" type="submit" href="contact.php">Get a free quote</a>
                                </div>
                            </div>
                            <div class="col-lg-6 index-image-section-3 d-none d-sm-none d-lg-block d-md-block" data-aos="fade-right">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--Services -->
            <?php include('common/services.php'); ?>

            <!--Banners-->
            <section class="section-margin-y">
                <div class="container p-3 d-block banner">
                    <div class="row align-items-center justify-content-center px-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-lg-start text-sm-start">
                            <h3>Try it for free</h3>
                            <p>We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start.</p>
                            <div>
                                <a class="btn-theme-primary" type="submit" href="contact.php">Get a free quote</a>
                                <a class="btn btn-theme-outlined" href="">Live chat</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-lg-block d-md-block ps-3 text-end rounded-start">
                            
                            <img src="../book/assets/banner-2.jpg" class="rounded-start" width="400" />
                        </div>
                    </div>
                </div>
            </section>
            <!--Section Content Reversed-->
            <section class="section-margin-y">
                <div class="container-fluid bg-light">
                    <div class="container p-5">
                        <div class="row p-3">
                            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-down-left">
                                <h1>We Give Your Book the New Heights it Deserves</h1>
                                <p class="section-text ">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>
                                <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers.</p>
                                <div>
                                    <a class="btn-theme-outlined" href="contact.php">Get a free quote</a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-sm-none d-lg-block d-md-block text-end" data-aos="fade-down-right">
                                <img src="assets/book.jpg" width="600" height="500" />
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <!-- Numbers -->
            <section class="percentage-section section-margin-y">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-sm-12 col-md container-percentage">
                            <h1 class="text-lg-center text-sm-start">We Amplify Your Story with Our Creativity</h1>
                            <ul class="list-group list-group-horizontal justify-content-center">
                                <li class="list-item">
                                    <h1>99%</h1>
                                    <h6>Customer Retention</h6>
                                    <img src="./assets/Ellipse 24.png" />
                                </li>
                                <li class="list-item ">
                                    <h1>98%</h1>
                                    <h6>Customer Satisfaction</h6>
                                    <img src="./assets/Ellipse 25.png" />
                                </li>
                                <li class="list-item">
                                    <h1>97%</h1>
                                    <h6>Published Authors</h6>
                                    <img src="./assets/Ellipse 26.png" />
                                </li>
                                <li class="list-item">
                                    <h1>96% </h1>
                                    <h6>Positive Feedback</h6>
                                    <img src="./assets/Ellipse 27.png" />
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </section>
            <!--Section Content Centered-->
            <section class="section-margin-y d-none">
                <div class="container-fluid bg-light">
                    <div class="container p-5 text-center">
                        <div class="row p-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 text-start text-lg-center">
                                <h1>We Give Your Book the New Heights it Deserves</h1>
                                <p class="section-text ">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>

                            </div>
                        </div>
                        <div class="row d-none d-lg-block d-md-block">
                            <div class="col-lg-12"><img src="assets/reading.jpg" width="650" height="300" />
                            </div>

                        </div>
                        <br>
                    </div>
                </div>

            </section>
            <!-- Banner 2 -->
            <section class="section-margin-y">
                <div class="container p-3 d-block banner">
                    <div class="row align-items-center">
                        <div class="col-12 p-3">
                            <ul class="list-group list-group-horizontal justify-content-center">
                                <li class="list-item"><img src="./assets/star1.png" width="100px" /></li>
                                <li class="list-item"><img src="./assets/star1.png" width="100px" /></li>
                                <li class="list-item"><img src="./assets/star1.png" width="100px" /></li>
                            </ul>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <h1>It’s Time to Get ReadyAnd Take Your <br>Aspirations To a Whole Different Level</h1><br>
                                <div>
                                    <a class="btn-theme-primary" type="submit" href="contact.php">Get a free quote</a>
                                </div>
                            </div>
                        </div>


                    </div><br><br>
                </div>
            </section>
            <!--Offerings-->
            <section class="section-services section-margin-y">
                <div class="container ">
                    <div class="row py-4">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <h6 class="pt-5">MEGA OFFERS</h6>
                            <h1>We Capturing Your Story, Exactly As You Want it Captured</h1>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Action Adventure</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> health/Fitness</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Art/Architecture</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Fantasy</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Autobiography</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> History</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Biography</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Novel</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Business/Economics</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Historical Fiction</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Children</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Romance</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Cook Book</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Memoir</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Comic Book</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Picture Book</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Encyclopedia</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Poetry</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Drama</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Political Thiller</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Self Help</a>
                            <a class="btn services-btn text-white"><img src="assets/Group 22.png" /> Science Fiction</a>

                            <p class="pt-5">Do you think we’re missing something? <a href="contact.php">Contact Us</a></p>
                        </div>

                        <div class="col-lg-5 col-md-5 pt-5  d-none d-lg-block d-md-block d-sm-none">
                            <img src="assets/offers.jpg" width="600" height="500" />

                        </div>
                    </div>
                </div>
            </section>

            <!--Process-->
            <?php include('common/process.php'); ?>

            <!--Section Content 2-->
            <section class="section-margin-y">
                <div class="container-fluid">
                    <div class="container ">
                        <div class="row p-3">
                            <div class="col-lg-6 d-none d-sm-none d-lg-block d-md-block">
                                <img src="assets/section1.jpg" width="500" height="600" />
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-5">
                                <h1>We Give Your Book the New Heights it Deserves</h1>
                                <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>
                                <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers.</p>
                                <div>
                                    <a class="btn-theme-outlined text-black" href="contact.php">Get a free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Banner 2 -->
            <section class="section-margin-y">
                <div class="container  d-block banner">
                    <div class="row px-3">
                        <div class="col-12">
                            <h6 class=" my-4 text-lg-center text-start">Get started for free</h6>
                            <h1 class=" my-4 text-lg-center text-start">Did You Dream of Becoming the Next Bestseller? We Will Make Your Dreams Come True</h1>
                            <p class=" my-4 justify-text text-lg-center text-start">We are a full-service book publishing agency that has helped authors from all over the world achieve their publishing goals. If you have a story that you’d like to transform into e-book, you’ve just landed the right place.</p>
                            <div class="text-lg-center text-start my-4">
                                <a class="btn-theme-primary " href="contact.php">Get a free quote</a>
                            </div>
                            <h6 class=" my-4 text-lg-center text-start">Join over 200+ people already using megabookwriting</h6>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12 p-3">
                            <ul class="list-group list-group-horizontal justify-content-center">
                                <li class="list-item"><img src="./assets/star1.png" width="100px" /></li>
                                <li class="list-item"><img src="./assets/star1.png" width="100px" /></li>
                                <li class="list-item"><img src="./assets/star1.png" width="100px" /></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </section>

            <!--Testimonials-->
            <?php include('common/testimonials.php'); ?>

            <!--FAQS-->
            <section class="section-margin-y">
                <div class="container">
                    <div class="row">

                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <img src="assets/faq-girl.jpg" width="100%" />
                            </div>
                            <div class="col-lg-8">
                                <div class="text-start">2,157 people have said how good is megawriting</div>
                                <h1 class="text-start">Frequently Asked Questions</h1>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Question #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Question #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                Question #3
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!--Contact -->
            <section class="hero-section section-margin-y">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <h1 class="hero-text">We would love to hear from you,<br>Get in touch👋</h1>
                                <p class="hero-para mt-4">We’ve established a huge portfolio over the years and have delivered flawless projects to our valued customers. Every ghost writer in our agency stands out for being creative, intellectual, skilled, and experienced, Check out our previous work!</p>
                                <div class="card border-0"></div>
                                <div class="card-body" style="background-color:#efefef;">
                                    <p class="section-text"><span style="font-size:18px; font-weight:700">"</span>Some quick example text to build on the card title and make up the bulk of the card's content.“We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. With our finest services you are guaranteed to have a book of the highest quality.<span style="font-size:18px; font-weight:700">"</span></p>
                                    <p class="section-text"><span style="font-weight:600">John Doe</span> <br><span class="fs-6">CEO at ABC</span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 form-col">
                                <form method="POST" action="mails.php">
                                    <p class="form-text">One step closer to become the best!</p>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" name="email" required>
                                    </div>

                                    <div class="mb-3">
                                        <input type="numbers" class="form-control" id="exampleInputnumber" placeholder="Phone Number" name="phoneNumbar" required>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="form4Example3" rows="4" placeholder="Brief description of  your book" name="description" required></textarea>

                                    </div>

                                    <button type="submit" class="btn btn-dark w-100" name="contact">Send Message</button>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </main>
    <?php include('footor.php'); ?>
    <script src="../book/js/beeta-owl.carousel.js"></script>
    <script src="../book/js/main.js"></script>
    <script>
        $(document).ready(function() {

            $('.items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var owl = $('#feedback');
            owl.owlCarousel({
                margin: 30,
                autoplay: !0,
                dots: !0,
                nav: !1,
                loop: !0,
                smartSpeed: 1000,
                autoplayHoverPause: !0,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })
    </script>

    <script>
        AOS.init();
    </script>
</body>