<?php
include_once('DB.php');

class User extends DB
{
  //show data's
  public function index()
  {
    $sql = "SELECT * FROM user";
    $exe = $this->db->query($sql);
    $data = $exe->fetch_all(MYSQLI_ASSOC);

    return $data;
  }

  public function create()
  {
    // buat re direct
    header("location: create.php");
  }

  //for create new User's
  public function store()
  {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $no = $_POST['no'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO user (name, role, no, telp) VALUES ('$name','$role','$no','$telp')";
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
  public function destroy()
  {
    $id = $_POST['id'];

    $sql = "DELETE FROM user WHERE id = '$id'";
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
