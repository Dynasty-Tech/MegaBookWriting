<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Contact Us</title>
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<style>
</style>
<body>
   <main>
      <div class="wrapper">
         <!-- MAIN HEADER -->
         <?php include('nav.php'); ?>
         <!--Header-->
         <section>
                <div class="container-fluid p-0 m-0 pt-5" style="background-color: #0A0A25">
                    <div class="container text-white">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 ">
                                <h1 class="hero-text ">What Holds You Back?</h1>
                                <p class="hero-para mt-4">At Monster Book Writing, we have multiple industry experts under our umbrella who specialize in different areas of the book writing industry. Give us a call now and get your book delivered in no time!</p>
                                <div>
                                    <a class="btn btn-theme-outlined-light text-white" href="#">Get a free quote</a>
                                    <a class="btn btn-theme-outlined-light text-white" href="#">Live chat</a>
                                </div>
                            </div>
                            <div class="col-lg-5 form-col d-none d-md-none d-sm-none d-lg-block">
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
                                    <p class="form-second-text">Do you have a manuscript that is ready to publish? </p>
                                    <div class="mb-3 col-lg-start">
                                        <select class="btn btn-transparent border w-100 text-start" name="services" required>
                                            <option class="dropdown-item " value="">Select</option>
                                            <option class="dropdown-item" value="Action">Action</option>
                                            <option class="dropdown-item" value="Another action">Another action</option>
                                            <option class="dropdown-item" value="Something else here">Something else here</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-dark w-100 form-sub-btn" name="services_btn">Send Message</button>

                                </form>
                                <!-- <br>
                                    <p class="section-text text-center">50% off on all services</p> -->
                            </div>

                        </div>

                    </div><br>
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
                                <?php include('contact-form.php') ?>

                            </div>
                        </div>

                    </div>

                </div>
            </section>
      </div>
   </main>
   <?php include('footor.php'); ?>
</body>

</html>