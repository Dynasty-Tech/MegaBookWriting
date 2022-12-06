<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ghost Book Writing</title>
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
                                <h1 class="hero-text ">All-In-One Ghostwriting Services</h1>
                                <p class="hero-para mt-4">Become the next bestselling author with our professional yet artistic ghostwriting services! Our writers have the knowledge and expertise to produce well-written, error-free, and plagiarism-free content.</p>
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
                            <div class="col-lg-6 col-sm-12 col-md-12">
                                <h6 class="section-subtitle">Mega bookwriting</h6>
                                <h2 class="section-title">Our Versatility & DiversitySet Us Apart From Other Ghostwriters</h2>
                                <p class="section-text pt-3">
                                    When you hire our service for your upcoming project, you'll have an award-winning team at your disposal. We’ve developed top skills and expertise to efficiently complete your project. We are fully capable of working in any genre, be it nonfiction, science fiction, historical fiction, romance, and more. Our business ensures that only the best ghostwriters work on your project. We work with you extensively to make sure the highest quality possible is delivered and that we deliver exactly what you're asking for.
                                </p>
                                <div>
                                    <div class="card-body">
                                        <h5 class="section-title">Heres what makes us different from others</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Action Adventure</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> health/Fitness</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                        </ul>
                                        <!-- <ul>
                                            <li class="btn services-btn text-black">
                                            <li class="btn services-btn text-black">
                                            <li class="btn services-btn text-black">
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Fantasy</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Autobiography</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> History</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Biography</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Novel</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Business/Economics</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Historical Fiction</li>
                                        </ul> -->


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-md-12">
                                <h6 class="section-subtitle">Mega bookwriting</h6>
                                <h2 class="section-title">Our Versatility & DiversitySet Us Apart From Other Ghostwriters</h2>
                                <p class="section-text pt-3">
                                    When you hire our service for your upcoming project, you'll have an award-winning team at your disposal. We’ve developed top skills and expertise to efficiently complete your project. We are fully capable of working in any genre, be it nonfiction, science fiction, historical fiction, romance, and more. Our business ensures that only the best ghostwriters work on your project. We work with you extensively to make sure the highest quality possible is delivered and that we deliver exactly what you're asking for.
                                </p>
                                <div>
                                    <div class="card-body">
                                        <h5 class="section-title">Heres what makes us different from others</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Action Adventure</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> health/Fitness</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="list-group-item"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                        </ul>
                                        <!-- <ul>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Action Adventure</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> health/Fitness</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Art/Architecture</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Fantasy</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Autobiography</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> History</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Biography</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Novel</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Business/Economics</li>
                                            <li class="btn services-btn text-black"><img src="assets/Group 22.png" /> Historical Fiction</li>
                                        </ul> -->


                                    </div>
                                </div>
                            </div>
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
                            <img src="assets/ghostread.jpg" width="650" height="600" />
                        </div>

                    </div>
                </div>
            </section>

            <!--Process-->

            <?php include('common/process.php'); ?>



            <!--Section Content Centered-->
            <section class="section-margin-y">
                <div class="container bg-light text-center">
                    <div class="row p-4">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-start text-lg-center">
                            <h1>We Give Your Book the New Heights it Deserves</h1>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>

                        </div>
                    </div>

                    <br>
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
                                <a class="btn btn-dark " href="#">Get a free quote</a>
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