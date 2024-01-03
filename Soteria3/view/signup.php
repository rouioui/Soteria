<?php $title = "Registration - Soteria";
ob_start();
?>

<div style="height: 100vh; overflow-x: hidden;">
    <div class="row h-100">
        <div class="d-none d-md-flex flex-column justify-content-center col-md-5 col-12">
            <div class="row align-items-center">
                <div class="heading-section p-5">
                    <span class="subheading">Welcome to Soteria</span>
                    <h2 class="mb-4">Create Your Account</h2>
                    <p>Already have an account? <a class="text-secondary" href="login"><u>Log in</u></a></p>
                </div>
            </div>
        </div>
        <div class="donation-wrap d-md-flex flex-column justify-content-center col-md-7">
            <div class="d-sm-none text-center text-white heading-section pt-5">
                <span class="subheading text-white">Welcome to Soteria</span>
                <h2 class="mb-4">Create Your Account</h2>
                <p>Already have an account? <a class="text-secondary" href="login"><u>Log in</u></a></p>
            </div>
            <form action="#" method="POST" class="appointment">
                <?php
                    if(isset($_GET['error'])){
                ?>
                    <div class="alert alert-danger">
                        <i class="fa-solid fa-triangle-exclamation"></i> <?= $_GET['error'] ?>
                    </div>
                <?php
                    }
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <div class="input-wrap">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                                <input type="text" name="firstName" class="form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                               <label for="name">Your First Name</label>
                            <div class="input-wrap">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                                <input type="text" name="lastName" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <div class="input-wrap">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                <input type="email" name="email" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Password</label>
                            <div class="input-wrap">
                                <div class="icon"><i class="fa-solid fa-key"></i></div>
                                <input type="password" name="password" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Confirm Your Password</label>
                            <div class="input-wrap">
                                <div class="icon"><i class="fa-solid fa-key"></i></div>
                                <input type="password" name="confirmedPassword" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="d-lg-flex">
                                <div class="form-checkbox mr-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="confirm" class="d-none">
                                            <span class="checkmark"></span>
                                            <span class="fill-control-description">agree to the <a href=""><u>terms and conditions</u></a> of use.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" name="signup" value="Sign Up Now" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $content=ob_get_clean();?>
<?php require('template.php');?>
