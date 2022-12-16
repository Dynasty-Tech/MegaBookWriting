<?php 
$current_url = substr($_SERVER['REQUEST_URI'], 19);
?>
<style type="text/css">
  .active{
    font-weight: 800 !important;
  }
</style>
<!-- MAIN HEADER -->
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
    padding: 20px 15px !important;
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
  .navbar-brand img{
    width: 190px !important;
  }
}
#navbarSupportedContent{
  display:none;
}
</style>
<section>
    <div class="container-fluid" >
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="assets/logo.png" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="buttonNavBar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link <?php if($current_url=='index.php' || $current_url==''){ echo 'active'; } ?>" aria-current="page" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="ebook.php">E-Book</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ghost Writing </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Story Writing</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Memoir Writing</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Fiction Writing</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Non-Fiction Writing</a></li>

                                    <li><a class="dropdown-item" href="ghoostwriting.php">Biography Writing</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Autobiography</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Script Writing</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Novel Writing</a></li>
                                    <li><a class="dropdown-item" href="ghoostwriting.php">Comic Book writing</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Editing Publishing
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="editingpublishing.php">Book Editing </a></li>
                                    <li><a class="dropdown-item" href="editingpublishing.php">Book Formatting </a></li>
                                    <li><a class="dropdown-item" href="editingpublishing.php">Book Publishing </a></li>
                                    <li><a class="dropdown-item" href="editingpublishing.php">Amazon Publishing</a></li>
                                    <li><a class="dropdown-item" href="editingpublishing.php">Book Marketing </a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="contentwriting.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content Writing
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contentwriting.php">Article writing</a></li>
                                    <li><a class="dropdown-item" href="contentwriting.php">Blog writing</a></li>
                                    <li><a class="dropdown-item" href="contentwriting.php">Web writing</a></li>
                                    <li><a class="dropdown-item" href="contentwriting.php">SEO Content writing</a></li>
                                    <li><a class="dropdown-item" href="contentwriting.php">Resume writing</a></li>
                                    <li><a class="dropdown-item" href="contentwriting.php">Press Release writing</a></li>

                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Other Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="otherservices.php">Book Cover Design</a></li>
                                    <li><a class="dropdown-item" href="otherservices.php">Audio Book</a></li>
                                    <li><a class="dropdown-item" href="otherservices.php">Video Book Trailer</a></li>
                                    <li><a class="dropdown-item" href="otherservices.php">Author Website Design</a></li>
                                    <li><a class="dropdown-item" href="otherservices.php">Book Marketing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item mx-1 d-none">
                                <a class="btn btn-outline-dark w-100 " href="contact.php">Contact</a>
                                
                            </li>
                            <li class="nav-item ">
                            <a class="btn btn-dark w-100" href="contact.php">Get started</a>
                        </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>