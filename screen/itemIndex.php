<?php
include_once("../class/Item.php");
include_once("../class/Category.php");

$item = new Item;
$data_item = $item->index();

if (isset($_POST['storeItem'])) {
  $item->storeItem();
}

if (isset($_POST['destroyItem'])) {
  $item->destroyItem();
}

$category = new Category;
$data_category = $category->index();

if (isset($_POST['storeCategory'])) {
  $category->storeCategory();
}

if (isset($_POST['destroyCategory'])) {
  $category->destroyCategory();
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

          <div class="row mx-2">
            <h2 class="text-light my-4 mr-auto ">Item</h2>
            <div class="d-flex align-items-center">

              <button type="button" class="btn btn-light active" data-toggle="modal" data-target="#categoryTab">Category</button>
            </div>
            <div class="modal fade bd-example-modal-lg" id="categoryTab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php include '../widget/categoryPage/categoryTab.php' ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php include '../widget/categoryPage/itemTable.php' ?>

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