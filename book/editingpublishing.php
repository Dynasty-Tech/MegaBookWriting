<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit & Publishing</title>
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
    <script src="../megabookwriting/js/beeta-owl.carousel.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <?php if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    } ?>
</head>


<body>
    <main>
        <div class="wrapper">

            <!-- MAIN HEADER -->
            <?php include('header2.php'); ?>
            <!--Header-->
            <section>
                <div class="container-fluid p-0 m-0 pt-5" style="background-color: #0A0A25">
                    <div class="container text-white">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 ">
                                <h1 class="hero-text ">Timeless Book Publication & Printing Services</h1>
                                <p class="hero-para mt-4">We are a full-service book publisher and printer, providing everything you need to get your book into print and distributed to the masses. Whether you're looking to self-publish or seeking a traditional publisher, our book publishing agency can help you achieve your publishing goals.</p>
                                <div>
                                    <a class="btn btn-theme-outlined-light text-white" href="#">Get a free quote</a>
                                    <a class="btn btn-theme-outlined-light text-white" href="#">Live chat</a>
                                </div>
                            </div>
                            <div class="col-lg-4 form-col d-none d-md-none d-sm-none d-lg-block card-body-border-gradient">
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
                                    <p class="form-text-dropdown">Do you have a manuscript that is ready to publish? </p>
                                    <div class="mb-3">

                                        <select class="btn btn-transparent border w-100 text-start" name="services" required>
                                            <option class="dropdown-item" value="">Select</option>
                                            <option class="dropdown-item" value="Action">Action</option>
                                            <option class="dropdown-item" value="Another action">Another action</option>
                                            <option class="dropdown-item" value="Something else here">Something else here</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-dark w-100" name="services_btn">Send Message</button>

                                </form>
                                <p class="form-end text-center">50% off on all services</p>
                                
                            </div>

                        </div>
                    </div><br>
                </div>

            </section>

            <!--Section 1-->
            <section>
                <div class="container-fluid">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-12 ">
                                <h6>We Proofread Your file & Forward it To Our Publishing House</h6>
                                <h1 class="hero-text">We Will Publish Your Book &Help You Build Your Legacy</h1>
                                <p class="hero-para mt-4">We’re a full-service book writing and book publishing company that specializes in helping first-time authors get their books published. We offer everything from writing and editing services to book formatting, book design, and book marketing services. Hire a book publisher now, and we’ll take it from there.</p>
                            </div>

                            <div class="row">

                                <div class="col-lg-3 col-sm-12 mt-2 border-0 ">
                                    <!--CARDS-->
                                    <div class="card-color">

                                        <div class="card-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                                                <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
                                            </svg>
                                            <h6>Book Assessment</h6>
                                            <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-2 border-0 ">
                                    <!--CARDS-->
                                    <div class="card-color">

                                        <div class="card-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                            </svg>
                                            <h6>Book Outline</h6>
                                            <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-2 border-0 ">
                                    <!--CARDS-->
                                    <div class="card-color">

                                        <div class="card-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                                <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z" />
                                            </svg>
                                            <h6>Writing and Editing</h6>
                                            <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 mt-2 border-0 ">
                                    <!--CARDS-->
                                    <div class="card-color">

                                        <div class="card-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                                <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                            </svg>
                                            <h6>Proofreading</h6>
                                            <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--Section Content Reversed-->
            <section class="section-margin-y" style="background-color: #0A0A25">
                <div class="container text-white">
                    <div class="row p-5">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <h6>Mega offers</h6>
                            <h1>We Publish Your Book Over Renowned Platforms</h1>
                            <p class="section-text">Aspiring writers send in the initial drafts of their manuscripts hoping to be published, but many times their work gets rejected for reasons that don't make sense and sometimes for no reason at all! Monster Book writing helps authors achieve their dreams by getting past book publishing rejections. We help aspiring writers get the recognition they deserve by assisting them with the publication of their books - keeping in mind that readers cherish their time and money, so the book has to be the best before it can hit store shelves!</p>
                            <div class="card " style="width: 30rem; background: #1D1D3E;">
                                <div class="card-body">
                                    <h6><u>Premium Cover</u></h6>
                                    <p class="section-text">We design exciting covers</p>

                                    <h6><u>Right Place To Market</u></h6>
                                    <p class="section-text">Promote your book at the right platforms</p>

                                    <h6><u>E-Book Conversion</u></h6>
                                    <p class="section-text">Our experts can cover any format</p>

                                </div>
                            </div>
                            <p class="pt-5">Do you think we’re missing something? <a href="contact.php">Contact Us</a></p>
                        </div>

                        <div class="col-lg-6 d-none d-sm-none d-lg-block d-md-block text-end">
                            <img src="assets/boy.png" />
                        </div>

                    </div>
                </div>
                <div class="container text-white">
                    <div class="row">
                        <div class="col-6">


                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </section>

            <!--Process-->
            <section class="section-margin-y">
                <div class="container">
                    <div class="row">
                        <h6 class="text-lg-start text-sm-start px-5">How we do it</h6>
                        <h1 class="text-lg-start text-sm-start px-5 ">Inclusive Writing Process</h1>
                        <p class="text-justify px-5">All kidding aside, regardless of its function or purpose, your eBook truly needs to capture the<br> interest of the reader in order for it to make them actually want the product you’re trying<br> to sell. With our staff's experience in custom e-book writing services, we'll work closely with<br> you to get your message across loud and clear! Weakened content could result in a poor user<br> experience - one that could drive away potential customers. That's why we ensure our E<br> book writer follows premium content creation standards every time they work on any<br> project!</p>
                        <br>
                        <div class="col-lg-3 col-sm-12 mt-2 border-0 px-5 ">
                            <!--CARDS-->
                            <div class="card-color">

                                <div class="card-body ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                                        <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
                                    </svg>
                                    <h6>Book Assessment</h6>
                                    <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 mt-2 border-0 px-5  ">
                            <!--CARDS-->
                            <div class="card-color">

                                <div class="card-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                    <h6>Book Outline</h6>
                                    <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 mt-2 border-0 px-5  ">
                            <!--CARDS-->
                            <div class="card-color">

                                <div class="card-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                        <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                    <h6>Writing and Editing</h6>
                                    <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 mt-2 border-0 px-5 ">
                            <!--CARDS-->
                            <div class="card-color">

                                <div class="card-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                    </svg>
                                    <h6>Proofreading</h6>
                                    <p class="card-text">We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!--Section Content Centered-->
            <section class="section-margin-y d-none" style="background-color: #0A0A25">
                <div class="container text-white text-center">
                    <div class="row p-4">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-start text-lg-center ">
                            <h1>We Give Your Book the New Heights it Deserves</h1>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>

                        </div>
                    </div>
                    
                    
                </div>
            </section>

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
                        <div class="col-lg-6 col-md-6 d-none d-lg-block d-md-block ps-3 text-end">
                            <img src="assets/why-choose-us-animated-img1.png " width="400" />
                        </div>
                    </div>
                </div>
            </section>

            <!--Section Content Reversed-->
            <section class="section-margin-y">
                <div class="container bg-light">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <h1>We Give Your Book the New Heights it Deserves</h1>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers.</p>
                            <div>
                                <a class="btn-theme-outlined" href="#">Get a free quote</a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-sm-none d-lg-block d-md-block text-end">
                            <img src="assets/editbook.jpg" width="550" height="600" />
                        </div>

                    </div>
                </div>
            </section>

            <!--Process-->
            <?php include('common/process.php'); ?>

            <!--Testimonials-->
            <?php include('common/testimonials.php'); ?>

            <!--FAQS-->
            <?php include('common/faqs.php'); ?>

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
                                <?php include('contact-form.php') ?>

                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </main>
    <?php include('footor.php'); ?>
    <script src="../book/js/beeta-owl.carousel.js"></script>
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
</body>

</html>