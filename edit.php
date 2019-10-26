<?php


if(isset($_POST['firstName'])){
  $db = new PDO("mysql:host=localhost;dbname=students","root","password");


  //get form data
  $aData = [
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'sex' => $_POST['sex'],
    'groupNumber' => $_POST['groupNumber'],
    'email' => $_POST['email'],
    'examPoints' => $_POST['examPoints'],
    'birthYear' => $_POST['birthYear'],
    'registration' => $_POST['registration']
  ];

  $aData['birthYear']=$aData['birthYear'].'-01-01';

  // foreach($aData as $word=>$cock){
  //   echo $word ." ".$cock."<br/>";
  // }

  $stmt = $db->prepare('INSERT INTO students (firstName, lastName, sex, groupNumber, email, examPoints,birthYear, registration) VALUES (:firstName,:lastName, :sex, :groupNumber, :email, :examPoints, :birthYear, :registration)');
  $stmt->bindValue(':firstName',$aData['firstName']);
  $stmt->bindValue(':lastName', $aData['lastName']);
  $stmt->bindValue(':sex', $aData['sex']);
  $stmt->bindValue(':groupNumber',$aData['groupNumber']);
  $stmt->bindValue(':email',$aData['email']);
  $stmt->bindValue(':examPoints',$aData['examPoints']);
  $stmt->bindValue(':birthYear', $aData['birthYear']);
  $stmt->bindValue(':registration', $aData['registration']);

  $stmt->execute($aData);
}



// foreach($_SERVER as $key=>$val){
//   echo $key . " = " .$val."<br />";
// }

var_dump($_COOKIE);


include __DIR__.'/view/edit.php';