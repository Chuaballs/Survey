<?php
class DB1{
  public $host = 'localhost';
  public $dbname = 'test';
  public $user = 'root';
  public $pass = '';
  public $pdo = null;

public function Connect(){
  try {
    $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
  return $this->pdo;
  }
}




?>
