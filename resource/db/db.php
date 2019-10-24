<?php
class db{
  public $host = 'localhost';
  public $dbname = 'survey';
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
