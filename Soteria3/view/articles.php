<?php $title = "Soteria";
ob_start();
?>

<?php include 'partials/_navbar.php' ?>
<section class="hero-wrap">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(public/img/home/bg_1.jpg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row slider-text align-items-center ">
                    <div class="mx-auto col-md-6 ftco-animate">
                        <div class="text text-center w-100">
                            <h2>Help People in Need</h2>
                            <h1 class="mb-3">Provide Your Support.</h1>
                            <div class="mx-auto">
                                <div>
                                    <p class="mb-0">
                                        <a href="create" class="btn btn-secondary py-3 px-2 px-md-4">Start</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg bg-body-tertiary navSearch" style="position:relative; background-image: url('../public/img/home/moroccan-flower-dark.png');">
                <div class="container mr-5">
                    <div class="collapse navbar-collapse" id="ftco-nav" >
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#genral" id="genral">Genral</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#business" id="business" >Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sports" id="sport">Sports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#tehnology" id="technology">Technology</a>
                            </li>
                            <li class="nav-item me-20">
                                <a class="nav-link" href="#entertainment" id="entertainment">Entertainment</a>
                            </li>
                        </ul>
                        <form class="d-flex justify-content-center align-items-center flex-fill">
                            <input class="form-control mr-5" type="text" id="newsQuery" placeholder="Search news">
                            <button class="btn btn-secondary fw-bolder" type="button" id="searchBtn">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
<div  style=" align-items:center">
    <div style="display:none"  class="row m-3 text-center" id="newsType"></div>
    <div style="justify-content: center; gap:15px ;background-image: url('../public/img/home/moroccan-flower-dark.png');" class="row me-2 ms-2  " id="newsdetails"></div>
</div>
<script src="../public/js/news.js"></script>
<?php include 'partials/_footer.php' ?>

<?php $content=ob_get_clean();?>
<?php require('template.php');?>
