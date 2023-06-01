<?php
include_once('DB.php');

class Item extends DB
{
  //show data's
  public function index()
  {
    $sql = "SELECT * FROM item INNER JOIN category ON category.id = item.category";
    $exe = $this->db->query($sql);
    $data = $exe->fetch_all(MYSQLI_ASSOC);

    return $data;
  }
  //for create new User's
  public function storeItem()
  {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $code = $_POST['code'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO item (name,category,code,stock) VALUES ('$name','$category','$code','$stock')";
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

  public function sumItem(){
    $sql = "SELECT SUM(stock) AS total_item FROM item";
    $result = $this->db->query($sql);

    $row = $result->fetch_assoc();
    $totalSum = $row['total_item'];

    return $totalSum;

  }

  public function destroyItem()
  {
    $id = $_POST['id'];

    $sql = "DELETE FROM item WHERE id = '$id'";
    $eksekusi = $this->db->query($sql);

    if ($eksekusi) {
      $message = "Berhasil menghapus data";
      $status = "success";
    } else {
      $message = "Gagal menghapus data";
      $status = "danger";
    }

    header("Location: ./../../screen/itemIndex.php?message=$message&status=success");
  }
}
