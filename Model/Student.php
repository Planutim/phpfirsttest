<?php

namespace Student\Model;

class Student{
  protected $db, $util;

  public function __construct(){
    $this->db = new \Student\Engine\Db;
    $this->util = new \Student\Engine\Util;
  }
  //add
  public function add($data){
    //format 2000 to 2000-01-01
    $data=$this->util->formatData($data);


    $stmt = $this->db->prepare('INSERT INTO students (firstName, lastName, sex, groupNumber, email, examPoints,birthYear, registration) VALUES (:firstName,:lastName, :sex, :groupNumber, :email, :examPoints, :birthYear, :registration);');
    $stmt->bindValue(':firstName',$data['firstName']);
    $stmt->bindValue(':lastName', $data['lastName']);
    $stmt->bindValue(':sex', $data['sex']);
    $stmt->bindValue(':groupNumber',$data['groupNumber']);
    $stmt->bindValue(':email',$data['email']);
    $stmt->bindValue(':examPoints',$data['examPoints']);
    $stmt->bindValue(':birthYear', $data['birthYear']);
    $stmt->bindValue(':registration', $data['registration']);


    try{
      $stmt->execute();
    }catch(\PDOException $E){
      echo $E->getMessage();
      return false;
    }
    return true;
  }
  
  public function update($data){

    $data = $this->util->formatData($data);

    $stmt = $this->db->prepare('UPDATE students SET
      firstName = :firstName,
      lastName = :lastName,
      sex = :sex,
      groupNumber = :groupNumber,
      email = :email,
      examPoints = :examPoints, 
      birthYear = :birthYear,
      registration = :registration 
      WHERE id='.$_SESSION['id']);

      $stmt->bindValue(':firstName',$data['firstName']);
      $stmt->bindValue(':lastName', $data['lastName']);
      $stmt->bindValue(':sex', $data['sex']);
      $stmt->bindValue(':groupNumber',$data['groupNumber']);
      $stmt->bindValue(':email',$data['email']);
      $stmt->bindValue(':examPoints',$data['examPoints']);
      $stmt->bindValue(':birthYear', $data['birthYear']);
      $stmt->bindValue(':registration', $data['registration']);

      try{
        $stmt->execute();
      }
      catch(\PDOException $E){
        echo $E->getMessage();
        return false;
      }
      return true;
  }

  public function getAll(){

    $stmt=$this->db->prepare('SELECT * FROM students');
    $stmt->execute();

    $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $data;
  }
  public function getById($id){

    $stmt = $this->db->prepare('SELECT * FROM students WHERE id=:id');
    $stmt->bindValue(':id',$id);
    $stmt->execute();

    $data = $stmt->fetch(\PDO::FETCH_ASSOC);
    $data = $this->util->formatData($data);
    return $data;
  }

  public function getOrderBy($column){
    $desc = '';
    if($column=='examPoints'){
      $desc = 'desc';
    }

    $query='SELECT * FROM students ORDER BY ';
    switch($column){
      case 'firstName':
        $query = $query . 'firstName';break;
      case 'lastName':
        $query=$query . 'lastName';break;
      case 'groupNumber':
        $query=$query . 'groupNumber';break;
      case 'examPoints':
        $query = $query . 'examPoints DESC';break;
    }
    
    $stmt = $this->db->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    var_dump( $data[0][$column]);
    return $data;

  }
  public function getLastAdded(){
    

    $stmt = $this->db->prepare('SELECT * from students where id=(select max(id) from students)');
    $stmt->execute();

    $data = $stmt->fetch(\PDO::FETCH_ASSOC);
    $data = $this->util->formatData($data);
    return $data;
  }

}