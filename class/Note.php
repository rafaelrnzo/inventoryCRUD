<?php
include_once('DB.php');

class Note extends DB
{
  //show data's
  public function index()
  {
    $sql = "SELECT * FROM note";
    $exe = $this->db->query($sql);
    $data = $exe->fetch_all(MYSQLI_ASSOC);

    return $data;
  }

  //for create new note's
  public function storeNote()
  {
    $title = $_POST['title'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO note (title,msg) VALUES ('$title','$msg')";
    $exe = $this->db->query($sql);

    if ($exe) {
      $message = "Berhasil Menambahkan Data";
      $status = "success";
    } else {
      $message = "Gagal Menambahkan Data";
      $status = "danger";
    }

    header("Location: ./../../screen/noteIndex.php?message=$message&status=success");
  }

  //delete/destroy data's
  public function destroyNote()
  {
    $id = $_POST['id'];

    $sql = "DELETE FROM note WHERE id = '$id'";
    $eksekusi = $this->db->query($sql);

    if ($eksekusi) {
      $message = "Berhasil menghapus data";
      $status = "Success";
    } else {
      $message = "Gagal menghapus data";
      $status = "danger";
    }

    header("Location: ./../../screen/noteIndex.php?message=$message&status=success");
  }
}
