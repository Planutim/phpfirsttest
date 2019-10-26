<?php

namespace Student;

session_start();

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

// if(isset($_SESSION)&&isset($_SESSION['logged'])){
//   if(time()-$_SESSION['logged']>200){
//     session_unset();
//     session_destroy();
//   }
// }


// spl_autoload_register(function ($class){
//   echo $class;
//    $class = str_replace(array(__NAMESPACE__, 'Student', '\\'),'',$class);


//   $path = array(
//     '\dir\\',
//     '\dir2\\',
//   );
//   var_dump($path);
//   foreach($path as $test){

//     if(file_exists(__DIR__.$test.$class.'.php'))
//       require_once __DIR__.$test.$class.'.php';
//   }
// });

// function my_autoloader($class){
//   if(is_file(__DIR__.'\dir\\'.$class.'.php')){
//     require_once __DIR__ ."\dir\\".$class.'.php';
//     echo __DIR__ ."\dir\\".$class.'.php';
//   }
// }



// Test3::getName();

// echo dir\Test::getName();
// $test = new dir2\Most('haha');
// echo $test->getName();

