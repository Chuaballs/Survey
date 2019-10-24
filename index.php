<?php
session_start();
require 'resource\php\class\insert.php';

if(!empty($_POST)){
$insert = new insert($_POST['name'],$_POST['rate'],$_POST['date']);
$insert->insert();
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
</head>

<body>
<form method="POST">
<div class="container">
  <table class="table ">
    <div class="row" >
      <div class="form-group col-4">
        <input type="text" class="form-control" id="Lastname" name="name" aria-describedby="emailHelp" placeholder="Name" required>
      </div>
      <div class="form-group col-4">
          <input type="text" class="form-control" id="Lastname" name="date" aria-describedby="emailHelp" placeholder="YY-MM-DD" required>
        </div>
    </div>
    <thead class="thead-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Question</th>
      <th scope="col">Agree</th>
      <th scope="col">Neutral</th>
      <th scope="col">Disagree</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>The food is served hot and fresh</td>
      <td><input type="radio" name="A1" value="A"></td>
      <td><input type="radio" name="A1" value="N"></td>
      <td><input type="radio" name="A1" value="D"></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>The menu has a good variety of items</td>
      <td><input type="radio" name="A2" value="A"></td>
      <td><input type="radio" name="A2" value="N"></td>
      <td><input type="radio" name="A2" value="D"></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>The quality of food is excellent</td>
      <td><input type="radio" name="A3" value="A"></td>
      <td><input type="radio" name="A3" value="N"></td>
      <td><input type="radio" name="A3" value="D"></td>

    </tr>
    <tr>
      <th scope="row">4</th>
      <td>The food is tasty and flavorful</td>
      <td><input type="radio" name="A4" value="A"></td>
      <td><input type="radio" name="A4" value="N"></td>
      <td><input type="radio" name="A4" value="D"></td>

    </tr>
    <tr>
      <th scope="row">5</th>
      <td>The food is a good value for the dollar</td>
      <td><input type="radio" name="A5" value="A"></td>
      <td><input type="radio" name="A5" value="N"></td>
      <td><input type="radio" name="A5" value="D"></td>

    </tr>
  </tbody>

  </table>
  <p>RATE US!</p>
  <input type="radio" name="rate" value="5">5 Star<br>
  <input type="radio" name="rate" value="4">4 Star<br>
  <input type="radio" name="rate" value="3">3 Star<br>
  <input type="radio" name="rate" value="2">2 Star<br>
  <input type="radio" name="rate" value="1">1 Star<br>

  <div class="form-group col-1">
  <!-- <button type="submit" class="btn btn-info">SUBMIT</button> -->
  	<input class="btn login_btn btn-info" type="submit" value="SUBMIT">
    </div>
  <div class="form-group col-1">
  <!-- <button type="submit" class="btn btn-info">SUBMIT</button> -->
  	<a class="btn login_btn btn-info" href="survey.php">VIEW</a>
    </div>
</div>


</form>
</body>
</html>
