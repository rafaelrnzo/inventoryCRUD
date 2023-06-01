<?php
include_once('DB.php');

class Supply extends DB
{
  //show data's
  public function index()
  {
    $sql = "SELECT * FROM supply";
    $exe = $this->db->query($sql);
    $data = $exe->fetch_all(MYSQLI_ASSOC);

    return $data;
  }

  //for create new supply's
  public function storeSupply()
  {
    $name = $_POST['name'];
    $supply = $_POST['supply'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO supply (name,supply,telp) VALUES ('$name','$supply','$telp')";
    $exe = $this->db->query($sql);

    if ($exe) {
      $message = "Berhasil Menambahkan Data";
      $status = "success";
    } else {
      $message = "Gagal Menambahkan Data";
      $status = "danger";
    }

    header("Location: ./../../screen/userIndex.php?message=$message&status=success");
  }

  //delete/destroy data's
  public function destroySupply()
  {
    $id_sup = $_POST['id_sup'];

    $sql = "DELETE FROM supply WHERE id_sup = '$id_sup'";
    $eksekusi = $this->db->query($sql);

    if ($eksekusi) {
      $message = "Berhasil menghapus data";
      $status = "Success";
    } else {
      $message = "Gagal menghapus data";
      $status = "danger";
    }

    header("Location: ./../../screen/userIndex.php?message=$message&status=success");
  }
}
