<?php

namespace Student;

session_start();
echo $_SESSION['id'];
require __DIR__.'/Engine/Loader.php';

define('ROOT_PATH', __DIR__.'/');
$autoloader = new Engine\Loader();
$autoloader->namespaceToDir('Student',ROOT_PATH);
$autoloader->register();


try{
  Engine\Router::run();
}
catch(\Exception $e){
  echo $e->getMessage();
}
