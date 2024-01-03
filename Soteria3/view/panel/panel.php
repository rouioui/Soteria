<?php $title = "Panel - Soteria";
ob_start();
?>

<?php include 'partials/_panelNavbar.php' ?>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Dashboard</h2>

  <div class="row">

    <div class="col-md-4 mb-3">
      <div class="d-flex align-items-center bg-light border p-3 " style="gap: 20px">
        <div class="d-flex align-items-center justify-content-center bg-danger text-white p-4"">
          <i class="fa-solid fa-eye"></i>
        </div>
        <div class="content">
          <h6 class="text-danger m-0 p-0">Nombre de vue</h6>
          <p class="font-weight-bold p-0 m-0" style="font-size: 18px"><?= $views['view'] ?> vues</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="d-flex align-items-center bg-light border p-3 " style="gap: 20px">
        <div class="d-flex align-items-center justify-content-center bg-primary text-white p-4"">
          <i class="fa-solid fa-users"></i>
        </div>
        <div class="content">
          <h6 class="text-primary m-0 p-0">Membres inscripts</h6>
          <p class="font-weight-bold p-0 m-0" style="font-size: 18px"><?= $users['total'] ?> membres</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="d-flex align-items-center bg-light border p-3 " style="gap: 20px">
        <div class="d-flex align-items-center justify-content-center bg-success text-white p-4"">
          <i class="fa-solid fa-circle-dollar-to-slot"></i>
        </div>
        <div class="content">
          <h6 class="text-success m-0 p-0">Promesses de donation</h6>
          <p class="font-weight-bold p-0 m-0" style="font-size: 18px"><?= $don['total'] ?> donations</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="d-flex align-items-center bg-light border p-3 " style="gap: 20px">
        <div class="d-flex align-items-center justify-content-center bg-warning text-white p-4"">
          <i class="fa-solid fa-euro-sign"></i>
        </div>
        <div class="content">
          <h6 class="text-warning m-0 p-0">Total d'argent</h6>
          <p class="font-weight-bold p-0 m-0" style="font-size: 18px"><?= $money['total'] ?> <i class="fa-solid fa-euro-sign"></i></p>
        </div>
      </div>
    </div>

  </div>

</div>


<?php $content=ob_get_clean();?>
<?php require('templatePanel.php');?>