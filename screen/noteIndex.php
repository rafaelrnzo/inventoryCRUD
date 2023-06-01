<?php
include_once("../class/Note.php");

$note = new Note;
$data_note = $note->index();

if (isset($_POST['storeNote'])) {
  $note->storeNote();
}

if (isset($_POST['destroyNote'])) {
  $note->destroyNote();
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
            <h2 class="text-light my-4 mr-auto ">Note</h2>

          </div>

          <?php include '../widget/notePage/noteTable.php' ?>

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