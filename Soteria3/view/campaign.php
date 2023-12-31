<?php $title = "Soteria - campaign";

ob_start();
?>

<?php include 'partials/_navbar.php' ?>

<?php if($poste->rowCount() == 0) header('Location: campaigns'); else $poste = $poste->fetchAll(); ?>
<?php $percentage = floor(($poste[0]['current_amount'] / $poste[0]['goal_amount']) * 100); ?>
<section class="ftco-section ftco-no-pb">
        <div class="container pb-5 pt-5">
        <?php
                                if(isset($_GET['error']) || isset($_GET['success'])){
                            ?>
                                <div class="alert alert-<?= (isset($_GET['success'])) ? "success" : "danger" ?>">
                                     <?= (isset($_GET['success'])) ? "<i class=\"fa-solid fa-square-check\"></i> " . $_GET['success'] : "<i class=\"fa-solid fa-triangle-exclamation\"></i>" . $_GET['error'] ?>
                                </div>
                            <?php
                                }
                            ?>
            <div class="row">
                <div class="col-md-12 heading-section ftco-animate">
                    <h2 class="text-dark"><?= $poste[0]['title'] ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="causes">
                        <div class="img w-100" style="background-image: url(<?= $poste[0]['image'] ?>); height: 400px;"></div>

                        <p class="text-dark mt-2" style="font-size: 14px;">Created on <?= $poste[0]['date_created'] ?> <span
                                class="mx-2">∎</span> by <span class="text-secondary"><?= $poste[0]['first_name'] . " " . $poste[0]['last_name'] ?></span></p>

                        <hr>
                        <p style="font-size: 14px;">●
                            <?php foreach($poste as $p){ ?>
                                <u><a class="text-secondary" href="campaigns&category_id=<?= $p['category_id'] ?>"><?= $p['category_name'] ?></a></u> ●
                            <?php } ?>
                        </p>

                        <hr>

                        <div class="d-md-none position-relative">
                            <div class="card position-sticky sticky-top">
                                <div class="card-body">
                                    <div class="goal">
                                        <p class="m-0"><span class="text-secondary font-weight-bold"
                                                style="font-size: 20px;"><?= $poste[0]['current_amount'] ?></span> on
                                            <span><?= $poste[0]['goal_amount'] ?></span>
                                        </p>
                                        <div class="progress" style="height:4px">
                                            <div class="progress-bar bg-secondary" style="width:<?= $percentage ?>%; height:4px"></div>
                                        </div>
                                    </div>
                                    <p class="mt-1" style="font-size: 12px;">250 <span
                                            class="font-weight-bold">donations</span></p>
                                    <?= (!isset($_SESSION['user_id'])) ? "<p class='text-danger text-center'>Vous devez être connecter !</p>" : "" ?>
                                    <p class="mb-2"><a href="donate&campaign_id=<?= $_GET['campaign_id'] ?>" class="btn btn-primary text-dark w-100 <?= (!isset($_SESSION['user_id'])) ? "disabled" : "" ?>">make a donation</a>
                                    </p>
                                    <p class="mt-1"><a href="#"
                                            class="btn btn-primary btn-outline-primary text-dark w-100">Share</a></p>
                                    <p style="font-size: 14px;" class="m-0 text-secondary font-weight-bold"><?= (count($donators) != 0) ? $donators[0]['nbDonateur'] . " people have just made a donation": "No one has yet had an operation" ?> </p>
                                    <hr>
                                    <p class="font-weight-bold m-0" style="font-size: 14px;">Top Donor</p>
                                    <?php if(count($donators) != 0 ){
                                    ?>
                                    <?php foreach($donators as $donator){ ?>
                                            <div class="d-flex" style="gap: 5px;">
                                                <div class="profile-pic">
                                                    <img src="<?= $donator['avatar'] ?>" class="img-responsive" width="40" height="40"
                                                        alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="m-0 text-dark" style="font-size: 14px;">
                                                        <?= ($donator['anonymous_donation'] == 1 ) ? "Anonyme" : $donator['first_name']  . " " . $donator['last_name']?>
                                                    </p>
                                                    <p class="m-0 font-weight-bold"><?= $donator['don'] ?> <i class="fa-solid fa-euro-sign"></i></p>
                                                </div>
                                            </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="description">
                            <p style="font-size: 14px;" class="text-justify mt-4">
                            <?= $poste[0]['description'] ?>
                            </p>
                            <p class="mb-2 d-inline-block"><a href="donate&campaign_id=<?= $_GET['campaign_id'] ?>" class="btn btn-primary text-dark w-100 <?= (!isset($_SESSION['user_id'])) ? "disabled" : "" ?>">make a donation</a></p>
                            <p class="mt-1 d-inline-block"><a href="#"
                                    class="btn btn-primary btn-outline-primary text-dark w-100">Share</a></p>
                        </div>

                        <hr>

                        <div class="organisateur">
                            <h5 class="font-weight-bold">Organizer and beneficiary</h5>
                            <div class="row">
                                <div class="col-6 col-md-6 border-right">
                                    <div class="d-flex align-items-center" style="gap: 5px;">
                                        <div class="profile-pic">
                                            <img src="<?= $poste[0]['avatar'] ?>" class="img-responsive" width="40" height="40"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <p class="m-0" style="font-size: 14px;"><?= $poste[0]['first_name'] . " " . $poste[0]['last_name'] ?></p>
                                            <p class="m-0 font-weight-bold">Organizer</p>
                                        </div>
                                    </div>
                                
                                    <p style="font-size: 14px;" class="mt-5 text-secondary font-weight-bold"> you can send message here : </p>
                                    <p class="mt-3"><div class="form-group ">
                                    <form action="" method="POST" >
                                    
                            <div class="input-wrap">
                                <input type="text" name="message" class="form-control" placeholder="send a message">
                            </div> 
                            <?= (!isset($_SESSION['user_id'])) ? "<p class='text-danger '>Vous devez être connecter pour ajouter un message !</p>" : "" ?>
                            <p class="mt-3"> <input type="submit" name="sendMessage" value="Send"<?= (!isset($_SESSION['user_id'])) ? 'disabled="disabled"' : "" ?> class="btn btn-secondary btn-outline-secondary  "></p>
                            
                                    </form>
                        </div>
                    </p>

                                   
                                    
                                   
                                </div>
                                <div class="col-6 col-md-6 border-right">

                                
                                <p class="font-weight-bold m-0" style="font-size: 14px;">Top Comments : </p>
                                    <?php if(count($comments) != 0 ){
                                    ?>
                                    <?php foreach($comments as $Comment){ ?>
                                            <div class="d-flex mt-5" style="gap: 5px;">
                                                <div class="profile-pic">
                                                    <img src="<?= $Comment['avatar'] ?>" class="img-responsive" width="40" height="40"
                                                        alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="m-0 text-dark" style="font-size: 14px;">
                                                        <?= $Comment['first_name']  . " " . $Comment['last_name']?>
                                                    </p>
                                                    <p class="m-0 font-weight-bold"><?= $Comment['comment_text'] ?> </p>
                                                </div>
                                            </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <hr>
                                </div>
                        
                        
                                
                            </div>
                        </div>
                    
                        
                    </div>

                    <hr>

                    
                </div>
                <!-- sidebar -->
                <div class="col-md-4 d-none d-md-block position-relative">
                    <div class="card position-sticky" style="top: 1rem;">
                        <div class="card-body">
                            <div class="goal">
                                <p class="m-0"><span class="text-secondary font-weight-bold"
                                        style="font-size: 20px;"><?= $poste[0]['current_amount'] ?></span> sur
                                    <span><?= $poste[0]['goal_amount'] ?></span>
                                </p>
                                <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-secondary" style="width:<?= $percentage ?>%; height:20px"><?= $percentage ?>%
                                    </div>
                                </div>
                            </div>
                            <p class="mt-1" style="font-size: 12px;"><?= $nbDonation[0] ?> <span class="font-weight-bold">donations</span>
                            </p>
                            <?= (!isset($_SESSION['user_id'])) ? "<p class='text-danger text-center'>Vous devez être connecter !</p>" : "" ?>
                            <p class="mb-2"><a href="donate&campaign_id=<?= $_GET['campaign_id'] ?>" class="btn btn-primary text-dark w-100 <?= (!isset($_SESSION['user_id'])) ? "disabled" : "" ?>">make a donation</a>
                            </p>
                            <p class="mt-1"><a href="#"
                                    class="btn btn-primary btn-outline-primary text-dark w-100">Sahre</a></p>
                            <p style="font-size: 14px;" class="m-0 text-secondary font-weight-bold"><?= (count($donators) != 0) ? $donators[0]['nbDonateur'] . "people have just made a donation": "No one has yet had an operation" ?>
                            </p>
                            <hr>
                            <p class="font-weight-bold m-0" style="font-size: 14px;">

Top Donor</p>
                            <?php if(count($donators) != 0 ){
                            ?>
                            <?php foreach($donators as $donator){ ?>
                                    <div class="d-flex" style="gap: 5px;">
                                        <div class="profile-pic">
                                            <img src="<?= $donator['avatar'] ?>" class="img-responsive" width="40" height="40"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <p class="m-0 text-dark" style="font-size: 14px;">
                                            <?= ($donator['anonymous_donation'] == 1 ) ? "Anonyme" : $donator['first_name']  . " " . $donator['last_name']?>
                                            </p>
                                            <p class="m-0 font-weight-bold"><?= $donator['don'] ?> <i class="fa-solid fa-euro-sign"></i></p>
                                        </div>
                                    </div>
                            <?php } ?>
                            <?php } ?>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'partials/_footer.php' ?>

<?php $content=ob_get_clean();?>
<?php require('template.php');?>