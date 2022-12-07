<!-- MAIN HEADER -->
<?php 
$current_url = substr($_SERVER['REQUEST_URI'], 19);
?>
<style type="text/css">
  .active{
    font-weight: 800 !important;
  }
</style>
<section>

    <div class="container-fluid" style="background-color: #0A0A25;">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="assets/logo.png" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white <?php if($current_url=='ebook.php'){ echo 'active'; } ?>" aria-current="page" href="ebook.php">E-Book</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white <?php if($current_url=='ghoostwriting.php'){ echo 'active'; } ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle text-white <?php if($current_url=='editingpublishing.php'){ echo 'active'; } ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle text-white <?php if($current_url=='contentwriting.php'){ echo 'active'; } ?>" href="contentwriting.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle text-white <?php if($current_url=='otherservices.php'){ echo 'active'; } ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <li class="nav-item text-white">
                                <a class="nav-link text-white <?php if($current_url=='about.php'){ echo 'active'; } ?>" href="about.php">About</a>
                            </li>

                        </ul>
                        <div>
                            <a class="btn btn-outline-dark text-white <?php if($current_url=='contact.php'){ echo 'active'; } ?>" href="contact.php">Contact</a>
                            <!-- <button class="btn btn-dark" type="submit">Get Started</button> -->
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
