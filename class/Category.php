<?php
include_once('DB.php');

class Category extends DB
{
  //show data's
  public function index()
  {
    $sql = "SELECT * FROM category";
    $exe = $this->db->query($sql);
    $data = $exe->fetch_all(MYSQLI_ASSOC);

    return $data;
  }
  //for create new User's
  public function storeCategory()
  {
    $category = $_POST['category'];

    $sql = "INSERT INTO category (category) VALUES ('$category')";
    $exe = $this->db->query($sql);

    if ($exe) {
      $message = "Berhasil Menambahkan Data";
      $status = "success";
    } else {
      $message = "Gagal Menambahkan Data";
      $status = "danger";
    }

    header("Location: ./../../screen/itemIndex.php?message=$message&status=success");
  }

  public function destroyCategory()
  {
    $id = $_POST['id'];

    $sql = "DELETE FROM category WHERE id = '$id'";
    $eksekusi = $this->db->query($sql);

    if ($eksekusi) {
      $message = "Berhasil menghapus data";
      $status = "Success";
    } else {
      $message = "Gagal menghapus data";
      $status = "danger";
    }

    header("Location: ./../../screen/itemIndex.php?message=$message&status=success");
  }
}
