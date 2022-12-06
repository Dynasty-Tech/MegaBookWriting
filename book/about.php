<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" type="text/css" href="../megabookwriting/css/beeta-owl.carousel.min.css">
    <link rel="stylesheet" href="../megabookwriting/css/beeta-owl.theme.css">
    <link rel="stylesheet" href="../megabookwriting/css/beeta-owl.theme.default.min.css">
    <script src="../megabookwriting/js/beeta-owl.carousel.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    

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
                                <h1 class="hero-text ">Discover who we are</h1>
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
            <!--Section-1-->
            <section>
                <div class="container-fluid">
                    <div class="container">
                        <div class="row pt-5">

                            <div class="col-lg-6 d-md-12 d-sm-12 px-3">
                                <h6 class="section-subtitle">Mega book writing</h6>
                                <h1 class="section-title">
                                    Getting You One Step Closer to Publishing
                                </h1>
                                <p class="section-text pt-3">
                                    Our team includes experienced and talented authors, who can craft a host of different styles meant for both fiction and non-fiction works. Our authors are industry experts and have worked with clients spanning the globe on a variety of topics in every genre imaginable. So, not only do they possess an expansive range of knowledge, but they also understand exactly how to put that knowledge together so as to create something great!
                                </p>
                                <p class="section-text pt-3">
                                    If you're looking to pick up some fresh new skills or need help getting your dream project off the ground, we can definitely assist you in achieving just that by putting our vast knowledge and talent to use making those forms of literature a reality. Our clients include both large and small businesses, and we are enthused to write original material for their websites and brands to help them achieve long-term success and growth.
                                </p>

                            </div>
                            <div class="col-lg-6 col-sm-12 col-md-12 p-3">

                                <div class="card">
                                    <div class="card-body card-body-border-gradient">
                                        <h5 class="section-title">OUR GOAL</h5>
                                        <p class="section-text">Our goal is to provide emerging writers with a platform they may rely on to complete their work. However, we are not only here to help emerging writers. Established writers can also use our services to get their unpublished writings published and popularized. </p>
                                    </div>
                                </div>
                                <br>
                                <div class="card">
                                    <div class="card-body card-body-border-gradient">
                                        <h5 class="section-title">OUR MISSION</h5>
                                        <p class="section-text">Our goal defines our vision. At Monster Book Writing, we work hard to ensure that our clients are completely satisfied with the quality of our work and the speed with which we offer content, providing 100 % authentic original content and a quick turnaround for maximum production.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Process-->
            <?php include('common/process.php'); ?>
            <!--Section Content-->
            <section class="section-margin-y">
                <div class="container bg-light">
                    <div class="row p-5">
                        <div class="col-lg-6 d-none d-sm-none d-lg-block d-md-block">
                            <img src="assets/girl.png" width="400" height="500" />
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 justify-space-between">
                            <h1>We Give Your Book the New Heights it Deserves</h1>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers.</p>
                            <div>
                                <a class="btn-theme-outlined text-black" href="#">Get a free quote</a>
                            </div>
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
            <!--Section Numbers-->
            <section class="percentage-section section-margin-y ">
                <div class="container container-percentage">
                    <div class="row ">
                        <div class="col-lg-12 col-sm-12 col-md">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-12 col-md ">
                                    <h6 class="section-text text-sm-start text-lg-start">What we’ve achieved so far</h6>
                                    <h1 class=" hero-text text-sm-start">The Work We Have Done</h1>
                                    <p class="section-text">Monster Book Writing’s been around in the industry for over ten years. Our team of more than three hundred native writers have written over a thousand books for hundreds of clients! Of the thousands of books written, nearly two hundred of them have been internationally acclaimed bestselling books! When working with us, you know you’re signing up for the best in the industry.</p>
                                    <ul class="list-group list-group-horizontal justify-content-center">
                                        <li class="list-item">
                                            <h1 class="text-lg-center text-sm-end">99%</h1>
                                            <h6>Customer Retention</h6>
                                            <img src="./assets/Ellipse 24.png" />
                                        </li>
                                        <li class="list-item">
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
                                <div class="col-lg-6 col-sm-12 col-md  ">
                                    <div class="card" style="background-color: #1D1D3E; color:#fff;">
                                        <div class="card-body text-lg-start text-center">
                                            <div><span><img src="assets/CEO.png" /></span></div>
                                            <div class="ps-3">
                                                <p class="section-text"><span>John Doe</span> <br><span class="fs-6">CEO at ABC</span>
                                                <p class="section-text">
                                            </div>
                                            <p class="section-text">Some quick example text to build on the card title and make up the bulk of the card's content.“We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. With our finest services you are guaranteed to have a book of the highest quality.”</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!--Section Content Centered-->
            <section class="section-margin-y d-none">
                <div class="container bg-light text-center">
                    <div class="row p-5">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-start text-lg-center">
                            <h1>We Give Your Book the New Heights it Deserves</h1>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>

                        </div>
                    </div>
                    <div class="row d-none d-lg-block d-md-block center-image">
                        <div class="col-lg-12 "><img src="assets/book.jpg" width="938px" height="305px" />
                        </div>

                    </div>
                    <br>
                </div>
            </section>
            <!--Section Banner 2-->
            <section class="section-margin-y">
                <div class="container  d-block banner">
                    <div class="row px-5">
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
            <!--Contact-->
            <section class="hero-section section-margin-y">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12 px-5">
                                <h1 class="hero-text">We would love to hear from you,<br>Get in touch👋</h1>
                                <p class="hero-para mt-4">We’ve established a huge portfolio over the years and have delivered flawless projects to our valued customers. Every ghost writer in our agency stands out for being creative, intellectual, skilled, and experienced, Check out our previous work!</p>
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card" style="width: 24rem; background-color:#0A0A25; color:#fff;">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div><span><img src="assets/CEO.png" /></span></div>
                                                <div class="ps-3">
                                                    <p class="section-text"><span>John Doe</span> <br><span class="fs-6">CEO at ABC</span>
                                                    <p class="section-text">
                                                </div>

                                            </div>
                                            <p class="section-text">Some quick example text to build on the card title and make up the bulk of the card's content.“We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. With our finest services you are guaranteed to have a book of the highest quality.”</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 form-col">
                                <form>
                                    <p class="form-text">One step closer to become the best!</p>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                                    </div>

                                    <div class="mb-3">
                                        <input type="numbers" class="form-control" id="exampleInputnumber" placeholder="Phone Number">
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="form4Example3" rows="4" placeholder="Brief description of  your book"></textarea>

                                    </div>

                                    <button type="submit" class="btn btn-dark w-100">Send Message</button>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </main>
    <?php include('footor.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            rewind: true,
        });

        splide.mount();
    </script>
</body>

</html>