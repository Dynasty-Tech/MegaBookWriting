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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../megabookwriting/css/beeta-owl.carousel.min.css">
    <link rel="stylesheet" href="../megabookwriting/css/beeta-owl.theme.css">
    <link rel="stylesheet" href="../megabookwriting/css/beeta-owl.theme.default.min.css">
    <script src="../megabookwriting/js/beeta-owl.carousel.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
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
                                <h1 class="hero-text ">Other Services</h1>
                                <p class="hero-para mt-4">With years of experience in the industry, our team knows how to market your book the right way and get it in front of the right people. Our book publishing agency is intended to help you get your book in front of as many people as possible.</p>
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
            <!--Section-1-->
            <section>
                <div class="container-fluid ">
                    <div class="container">
                        <div class="row pt-5">

                            <div class="col-lg-6 d-md-12 d-sm-12 px-3">
                                <h6 class="section-subtitle">Mega book writing</h6>
                                <h1 class="section-title">
                                    We Give Your Book the New Heights it Deserves
                                </h1>
                                <p class="section-text pt-3">
                                    Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.
                                </p>

                            </div>
                            <div class="col-lg-6 col-sm-12 col-md-12 px-3 py-5 col-sm-start">


                                <p class="section-text ">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.se our services to get their unpublished writings published and popularized. </p>



                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section Content Reversed-->
            <section class="section-margin-y">
                <div class="container bg-light">
                    <div class="row">
                        <h1 class="hero-text py-5">Personal Marketing Assistants</h1>
                        <div class="col-lg-4 col-sm-12">

                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                                <a class="list-group-item list-group-item-action" id="list-online-list" data-bs-toggle="list" href="#list-online" role="tab" aria-controls="list-settings">Online</a>
                                <a class="list-group-item list-group-item-action" id="list-offline-list" data-bs-toggle="list" href="#list-offline" role="tab" aria-controls="list-settings">Offline</a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 pt-5">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                    <h3 class="section-title">
                                        We Give Your Book the New Heights it Deserves
                                    </h3>
                                    <img src="./assets/book-video-side-img.jpg" />
                                    <p class="section-text pt-3">
                                        Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed!
                                    </p>

                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <h3 class="section-title">
                                        We Give Your Book the New Heights it Deserves
                                    </h3>
                                    <img src="./assets/book-video-side-img.jpg" />
                                    <p class="section-text pt-3">
                                        Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                    <h3 class="section-title">
                                        We Give Your Book the New Heights it Deserves
                                    </h3>
                                    <img src="./assets/book-video-side-img.jpg" />
                                    <p class="section-text pt-3">
                                        Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                    <h3 class="section-title">
                                        We Give Your Book the New Heights it Deserves
                                    </h3>
                                    <img src="./assets/book-video-side-img.jpg" />
                                    <p class="section-text pt-3">
                                        Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="list-online" role="tabpanel" aria-labelledby="list-settings-list">
                                    <h3 class="section-title">
                                        We Give Your Book the New Heights it Deserves
                                    </h3>
                                    <img src="./assets/book-video-side-img.jpg" />
                                    <p class="section-text pt-3">
                                        Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="list-offline" role="tabpanel" aria-labelledby="list-settings-list">
                                    <h3 class="section-title">
                                        We Give Your Book the New Heights it Deserves
                                    </h3>
                                    <img src="./assets/book-video-side-img.jpg" />
                                    <p class="section-text pt-3">
                                        Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed!
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
        </div>
        </section>
        <!--Process-->
        <?php include('common/process.php'); ?>
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
                        <img src="assets/why-choose-us-animated-img1.png " width="400">
                    </div>
                </div>
            </div>
        </section>
        <!--Section 1-->
        <section>
            <div class="container-fluid">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-12">
                            <h6>Mega bookwriting</h6>
                            <h1 class="hero-text">From Fiction to Non-Fiction & Sci-Fi -We’ve the Skills & Creativity to Get Your Job Done the Right Way!</h1>
                            <p class="hero-para mt-4">We’ve been in E-book writing industry since years now and have gained a lot of experience in designing and developing eBooks that are truly amazing! With our vast and innovative ideas and imaginations, we strive to create something that will give you the right value for money and also help you in attracting more and more potential customers!</p>
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
        <!--Section Content Centered-->
        <section class="section-margin-y d-none">
            <div class="container bg-light text-center">
                <div class="row p-4">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-start text-lg-center">
                        <h1>We Give Your Book the New Heights it Deserves</h1>
                        <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>

                    </div>
                </div>
                <div class="row d-none d-lg-block d-md-block">
                    <div class="col-lg-12"><img src="assets/otherbook2.jpg" width="600" height="500" />
                    </div>

                </div>
                <br>
            </div>
        </section>
        <!--Testimonials-->
        <?php include('common/testimonials.php'); ?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
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