<?php

namespace Student\Engine;

class Router{
  public static function run(){

    $Controller = new \Student\Controller\StudentController;

    // if((new \ReflectionClass($Ctrl))->hasMethod($params['act']))
    // // && (new \ReflectionClass($Ctrl,$params['act']))->isPublic())
    //   call_user_func(array($Ctrl, $params['act']));


    if($_SERVER['REQUEST_URI']=='/register')
        $Controller->register();

    else if($_SERVER['REQUEST_URI']=='/edit')
        $Controller->edit();
    
    else if($_SERVER['REQUEST_URI'] == '/'){
      $Controller->index();
    }
    
    else if($_SERVER['REQUEST_URI'] =='/logout')
      $Controller->logout();
      
    else{
      $Controller->notFound();
    }
  }
}