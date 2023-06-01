<?php
include_once("./class/User.php");
include_once("./class/Suplier.php");
include_once("./class/Item.php");
include_once("./class/Note.php");

$user = new User;
$data_user = $user->index();

$supply = new Supply;
$data_supply = $supply->index();

$item = new Item;
$data_item = $item->index();
$total_stock = $item->sumItem();

$note = new Note;
$data_note = $note->index();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./global/headerLink.php') ?>
  <link rel="stylesheet" href="./global/style.css" />
</head>

<body class="black">
  <div class="container-fluid vh-100">
    <div class="row">
      <!-- sidebars -->
      <div class="col-lg-1 col-md-2 col-sm-0 d-md-block d-none vh-100">
        <?php include('./widget/sidebarHome.php') ?>
      </div>
      <div class="col-lg-11 col-md-10 col-sm-12 vh-100 ">
        <!-- navbar -->
        <?php include('./widget/navbarHome.php') ?>

        <!-- card main content -->
        <div class="mt-2 mx-3">
          <?php if (isset($_GET['message'])) : ?>
            <div class="alert alert-<?= $_GET['status'] ?> alert-dismissible fade show" role="alert">
              <strong><?= $_GET['message'] ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif ?>

          <h2 class="text-light">Dashboard</h2>
          <div class="row">
            <div class="col-md-3 mt-3">
              <div class="card">
                <div class="row card-body px-5">
                  <div class="mr-auto my-justify-center">
                    <h3 class=""><?= $total_stock ?></h3>
                    <p class="">Available Items</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <ion-icon name="pricetag" class="icons"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="card rounded">
                <div class="row card-body px-5">
                  <div class="mr-auto my-justify-center">
                    <h3 class=""><?= count($data_note) ?></h3>
                    <p class="">Message</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <ion-icon name="mail" class="icons"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="card">
                <div class="row card-body px-5">
                  <div class="mr-auto my-justify-center">
                    <h3 class=""><?= count($data_user) ?></h3>
                    <p class="">Employee</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <ion-icon name="person" class="icons"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="card">
                <div class="row card-body px-5">
                  <div class="mr-auto my-justify-center">
                    <h3 class=""><?= count($data_supply); ?></h3>
                    <p class="">Supliers</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <ion-icon name="basket" class="icons"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- main content -->
          <div class="row mt-5">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="row m-2">
                    <h3 class="card-title mr-auto">Item's</h3>
                  </div>

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Code</th>
                        <th scope="col">Stock</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data_item as $key => $item) { ?>
                        <tr>
                          <th scope="row"><?= $key + 1 ?></th>
                          <td><?= $item['name']; ?></td>
                          <td><?= $item['category']; ?></td>
                          <td><?= $item['code']; ?></td>
                          <td><?= $item['stock']; ?></td>

                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-5">
              <div class="card">
                <div class="card-body">
                  <div class="row m-2">
                    <h3 class="card-title mr-auto">Note's </h3>
                  </div>

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data_note as $key => $note) { ?>
                        <tr>
                          <th scope="row"><?= $key + 1 ?></th>
                          <td><?= $note['title']; ?></td>
                          <td><?= $note['msg']; ?></td>

                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>