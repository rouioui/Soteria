<?php $title = "Soteria - Connection";
ob_start();
?>


<div style="height: 100vh; overflow-x: hidden;">
    <div class="row h-100">
        <div class="d-none d-md-flex flex-column justify-content-center col-md-5 col-12">
            <div class="row align-items-center">
                <div class="heading-section p-5">
                    <span class="subheading">Welcome to Soteria</span>
                    <h2 class="mb-4">Create Your Account</h2>
                    <p>You dont have account? <a class="text-secondary" href="signup"><u>Create Now !!</u></a></p>
                </div>
            </div>
        </div>
        <div class="donation-wrap col-md-7 d-md-flex flex-column justify-content-center">
            <div class="d-sm-none text-center text-white heading-section pt-5">
                <span class="subheading text-white">Welcome to Soteria</span>
                <h2 class="mb-4">Create Your account</h2>
                <p>vous n'avez pas de compte? <a class="text-secondary" href="signup"><u>Log in</u></a></p>
            </div>


            <form action="" method="POST" class="appointment">
                
                <?php
                    if(isset($_GET['error'])){
                ?>
                    <div class="alert alert-danger">
                        <i class="fa-solid fa-triangle-exclamation"></i> <?= $_GET['error'] ?>
                    </div>
                <?php
                    }
                ?>
                <div class="row align-items-center">
                    <div class="col-md-12 flex-column justify-content-center">
                        <div class="form-group ">
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
                            <div class="d-lg-flex">
                                 <div class="form-checkbox mr-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" class="d-none">
                                            <span class="checkmark"></span>
                                            <span class="fill-control-description">Remember Password</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $content=ob_get_clean();?>
<?php require('template.php');?>