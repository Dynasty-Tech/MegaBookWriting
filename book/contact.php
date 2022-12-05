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
</head>
<style>
</style>
<body>
   <main>
      <div class="wrapper">
         <!-- MAIN HEADER -->
         <?php include('header2.php'); ?>
         <!--Header-->
         <section>
            <div class="container-fluid p-0 m-0" style="background-color: #0A0A25">
               <div class="container text-white">
                  <div class="row p-4 text-center">
                     <div class="col-sm-12 col-md-12 col-lg-12 custom-margin-y">
                        <h1 class="hero-text">What Holds You Back?</h1>
                        <p class="hero-para mt-4">At Monster Book Writing, we have multiple industry experts under our umbrella who specialize in different areas of the book writing industry. Give us a call now and get your book delivered in no time!</p>
                        <a class="btn btn-theme-outlined text-white" href="">Get a free quote</a>
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
                     <div class="col-lg-7 col-md-12 col-sm-12 px-5">
                        <h1 class="hero-text">We would love to hear from you,<br>Get in touch👋</h1>
                        <p class="hero-para mt-4">We’ve established a huge portfolio over the years and have delivered flawless projects to our valued customers. Every ghost writer in our agency stands out for being creative, intellectual, skilled, and experienced, Check out our previous work!</p>
                        <div class="col-sm-4 splide__slide m-2">
                           <div class="card" style="width: 27rem; background-color:#0A0A25; color:#fff;">
                              <div class="card-body">
                                 <div class="d-flex">
                                    <div><span><img src="assets/CEO.png" /></span></div>
                                    <div class="ps-3">
                                       <p><span>John Doe</span> <br><span class="fs-6">CEO at ABC</span>
                                       <p>
                                    </div>

                                 </div>
                                 <p>Some quick example text to build on the card title and make up the bulk of the card's content.“We bring in the best ghost writing experts who work on your project and make sure it is finished to perfection. With our finest services you are guaranteed to have a book of the highest quality.”</p>
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
</body>

</html>