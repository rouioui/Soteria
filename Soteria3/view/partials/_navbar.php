<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="home">
            <img src="public/img/home/logo.png" width="120" height="35" alt=""> 
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"> </span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="articles" class="nav-link">Articles</a></li>
                <li class="nav-item m-0"><a href="campaigns" class="nav-link">Browse</a></li>

                <?php if(!isset($_SESSION['user_id'])){ ?>
                <li class="nav-item"><a href="signup" class="nav-link">Create an Account</a></li>
                <li class="nav-item cta"><a href="login" class="nav-link">Sign In</a></li>
                <?php } else { ?>
                <div class="dropdown">
                    <button class="btn btn-secondary fw-bolder dropdown-toggle" type="button" id="profileDrop" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=  $_SESSION['firstName'] . " " .  $_SESSION['lastName'] ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="profileDrop">
                        <?php if($_SESSION['rank'] == 2 || $_SESSION['rank'] == 1){ ?>
                        <li><a class="dropdown-item" href="panel"><i class="fa-solid fa-bars-staggered"></i> Panel</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <?php } ?>
                        <li><a class="dropdown-item" href="profile"><i class="fa-solid fa-id-badge"></i> My Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="bg-danger text-white dropdown-item" href="signout"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></li>
                    </ul>
                </div>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
