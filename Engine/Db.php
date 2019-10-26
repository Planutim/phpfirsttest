<?php

namespace Student\Engine;

class Db extends \PDO{
  // CONST DB_HOST='localhost',
  // DB_NAME='students',
  // DB_USER = 'root',
  // DB_PWD = 'password';
  public function __construct(){
    try{
      parent::__construct('mysql:host='. Config::DB_HOST.';dbname='.Config::DB_NAME,Config::DB_USER,Config::DB_PWD);

      $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
      echo "Connection failed: ".$e->getMessage();
    }
  }
  
}