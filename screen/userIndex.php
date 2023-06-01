<?php
include_once("../class/User.php");
include_once("../class/Suplier.php");

$user = new User;
$data_user = $user->index();

if (isset($_POST['store'])) {
  $user->store();
}

if (isset($_POST['destroy'])) {
  $user->destroy();
}

$supply = new Supply;
$data_supply = $supply->index();

if (isset($_POST['storeSupply'])) {
  $supply->storeSupply();
}

if (isset($_POST['destroySupply'])) {
  $supply->destroySupply();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('../global/headerLink.php') ?>
  <link rel="stylesheet" href="../global/style.css" />
</head>

<body class="black">
  <div class="container-fluid vh-100">
    <div class="row">
      <!-- sidebars -->
      <div class="col-lg-1 col-md-2 col-sm-0 d-md-block d-none vh-100">
        <?php include('../widget/sidebarHome.php') ?>
      </div>
      <div class="col-lg-11 col-md-10 col-sm-12 vh-100">
        <!-- navbar -->
        <?php include('../widget/navbarHome.php') ?>

        <!-- card main content -->
        <!-- main content -->
        <div class="mt-4 col">
          <?php if (isset($_GET['message'])) : ?>
          <div class="alert alert-<?= $_GET['status'] ?> alert-dismissible fade show" role="alert">
            <strong><?= $_GET['message'] ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>

          <h2 class="text-light mt-2">User & Suplier</h2>
          <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">User</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Supplier</button>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php include '../widget/userSupplyPage/userForm.php' ?></div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include '../widget/userSupplyPage/supplyForm.php' ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>