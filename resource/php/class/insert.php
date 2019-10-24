<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/survey/resource/db/db.php';


class insert extends db{
    public $name;
    public $rate;
    public $date;

public function __construct($name=null,$rate=null,$date=null){
  $this->name = $name;
  $this->rate = $rate;
  $this->date = $date;
}

public function insert(){
    $config = new db;
    $pdo = $config->Connect();
    $name = $this->name;
    $rate = $this->rate;
    $date = $this->date;
    $sql = "INSERT INTO `survey`( `name`, `rate`, `date`) VALUES (?,?,?)";
    $data = $pdo->prepare($sql);
    $data->execute(["$name","$rate","$date"]);
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
