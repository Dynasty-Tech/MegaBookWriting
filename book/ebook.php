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
<style>
    @media only screen and (max-width: 600px) {
  .p-1,
  .p-2,
  .p-3,
  .p-4,
  .p-5,
  .px-1,
  .px-2,
  .px-3,
  .px-4,
  .px-5 {
    padding: 20px 0 !important;
  }
  h1{
    font-size:24px !important;
    text-decoration: underline !important;
    font-weight: 700 !important;
  }
  h2{
    font-size:18px !important;
  }
  h3{
    font-size:15px !important;
  }
  h4{
    font-size:14px !important;
  }
  h5{
    font-size:13px !important;
  }
  h6{
    font-size:16px !important;
  }
  p{
    font-size:14px !important;
  }
}
</style>

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
                                <h1 class="hero-text ">Unparalleled E-Book Writing Services</h1>
                                <p class="hero-para mt-4">Whether you intend to use your e-book as a standalone product or opt to offer it as a free ‘goodie’ with other products and services, the quality of your content is invaluable. Monster Book Writing is here give your eBook the significance it deserves.</p>
                                <div>
                                    <a class="btn btn-theme-outlined-light  text-white" href="#">Get a free quote</a>
                                    <a class="btn btn-theme-outlined-light  text-white" href="#">Live chat</a>
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
                            <div class="col-12">
                                <h6>How we do it</h6>
                                <h1 class="hero-text">Inclusive Writing Process</h1>
                                <p class="hero-para mt-4">All kidding aside, regardless of its function or purpose, your eBook truly needs to capture the<br> interest of the reader in order for it to make them actually want the product you’re trying to<br> sell. With our staff's experience in custom e-book writing services, we'll work closely with<br> you to get your message across loud and clear! Weakened content could result in a poor user<br> experience - one that could drive away potential customers. That's why we ensure our E<br> book writer follows premium content creation standards every time they work on any<br> project!</p>
                            </div>

                            <div class="row">

                                <div class="col-lg-3 col-sm-12 mt-2 border-0 ">
                                    <!--CARDS-->
                                    <div class="card card-color">

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
                                    <div class="card card-color">

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
                                    <div class="card card-color">

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
                                    <div class="card card-color">

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
                            <h1>We Deliver Excellence in Each E-Book Project We Take in</h1>
                            <p class="section-text">For a past few years, the admiration of eBooks has increased exponentially. And perhaps that’s the reasons you’re here - to get yourself an E-book. Our highly skilled e-book writers will work with you to create an eBook that meets your specific needs. Whether you need a non-fiction eBook or a work of fiction, our ghost writing experts will work alongside with our designers to get you a custom eBook that will engage your audience. Over the years, we’ve kept our standards high and we take great pride in being one of the best e-book writing agencies. We have a strict confidentiality agreement that safeguards the interest of our clients. So what are you waiting for? Hit us up now, and let’s get started with your project right away!</p>
                            <div class="card " style="width: 28rem; background: #1D1D3E;">
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
                            <img src="assets/write.png" />
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
            <!--Section Content Centered-->
            <section class="section-margin-y">
                <div class="container bg-light text-center">
                    <div class="row p-5">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-start text-lg-center">
                            <h1>We Give Your Book the New Heights it Deserves</h1>
                            <p class="section-text">Have you already published your book but are still having a difficult time beating the competition? Don't give up! Our expert book writer and marketing experts can help make sure that your book gets noticed! Using successful marketing strategies, we can help you increase sales and get the attention of more potential readers. We customize our marketing plans to promote each individual product because no two things are ever alike, and we want to help our customers succeed from the start. From ghost writing to book editing and its promotion, we provide all-in-one comprehensive book marketing solution.</p>

                        </div>
                    </div>
                    
                    <br>
                </div>
            </section>
            <!-- Section Process-->
            
            <?php include('common/process.php'); ?>
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
            <!--Section 1-->
            <section>
                <div class="container-fluid">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-12">
                                <h6>Mega Book Writing</h6>
                                <h1 class="hero-text">From Fiction to Non-Fiction & Sci-Fi -We’ve the Skills & Creativity to Get Your Job Done the Right Way!</h1>
                                <p class="hero-para mt-4">We’ve been in E-book writing industry since years now and have gained a lot of experience in designing and developing eBooks that are truly amazing! With our vast and innovative ideas and imaginations, we strive to create something that will give you the right value for money and also help you in attracting more and more potential customers!</p>
                            </div>

                            <div class="row">

                                <div class="col-lg-3 col-sm-12 mt-2 border-0 ">
                                    <!--CARDS-->
                                    <div class="card card-color">

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
                                    <div class="card card-color">

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
                                    <div class="card card-color">

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
                                    <div class="card card-color">

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