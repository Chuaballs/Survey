<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/survey/resource/db/db.php';


class insert extends db{
    public $name;
    public $rate;
    public $RB1;
    public $RB2;
    public $RB3;
    public $RB4;
    public $RB5;
    public $date;

public function __construct($name=null,$rate=null,$RB1=null,$RB2=null,$RB3=null,$RB4=null,$RB5=null,$date=null){
  $this->name = $name;
  $this->rate = $rate;
  $this->RB1 = $RB1;
  $this->RB2 = $RB2;
  $this->RB3 = $RB3;
  $this->RB4 = $RB4;
  $this->RB5 = $RB5;
  $this->date = $date;
}

public function insert(){
    $config = new db;
    $pdo = $config->Connect();
    $name = $this->name;
    $rate = $this->rate;
    $RB1 = $this->RB1;
    $RB2 = $this->RB2;
    $RB3 = $this->RB3;
    $RB4 = $this->RB4;
    $RB5 = $this->RB5;
    $date = $this->date;
    $sql = "INSERT INTO `survey`( `name`, `rate`, `A1`, `A2`, `A3`, `A4`, `A5`, `date`) VALUES (?,?,?,?,?,?,?,?)";
    $data = $pdo->prepare($sql);
    $data->execute(["$name","$rate","$RB1","$RB2","$RB3","$RB4","$RB5","$date"]);
    // $results = $data->fetchAll(PDO::FETCH_ASSOC);

  //   echo '<table class="table ">';
  //
  // // echo '<thead class="bg-warning">';
  // // echo '<th>customerName</th> <th>contactLastName</th> <th>contactFirstName</th> <th>phone</th> <th>country</th><th >ACTION</th>';
  // // echo '<thead>';
  //
  // foreach ($results as $result) {
  //   echo '<tr>';
  //
  //   echo '<td>'.$result->name.'</td>';
  //   echo '<td>'.$result->rate.'</td>';
  //   echo '<td>'.$result->date.'</td>';
  //
  //     echo '</tr>';
  // }
  //
  // echo'</table>';



  }
}
?>
