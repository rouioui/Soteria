<?php $title = "Soteria";
ob_start();
?>

<?php include 'partials/_navbar.php' ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary navSearch" style="position:relative; ">

        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate" style="height:100px;background-color:white">

            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">News Articles</span>
                <h2>These are articles about everything.  But if you really care about helping people, you can research that</h2>
            </div>
        </div>

                <div class="container mr-5">
                    <div class="collapse navbar-collapse" id="ftco-nav" >
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display:none">
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
    <div style="justify-content: center; gap:15px ;" class="row me-2 ms-2  " id="newsdetails"></div>
</div>
<script src="public/js/news.js"></script>
<?php include 'partials/_footer.php' ?>

<?php $content=ob_get_clean();?>
<?php require('template.php');?>
