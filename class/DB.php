<?php 

class DB{
  private $hostname = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'db_inventory';

  public $db;

  public function __construct(){
    $this->db = mysqli_connect($this->hostname, $this->username, $this->password,$this->database);

  }
}
