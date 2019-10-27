<?php

namespace Student\Engine;

class Router{
  public static function run(){

    $Controller = new \Student\Controller\StudentController;

    // if((new \ReflectionClass($Ctrl))->hasMethod($params['act']))
    // // && (new \ReflectionClass($Ctrl,$params['act']))->isPublic())
    //   call_user_func(array($Ctrl, $params['act']));


    // if($_SERVER['REQUEST_URI']=='/register')
    //     $Controller->register();

    // else if($_SERVER['REQUEST_URI']=='/edit')
    //     $Controller->edit();
    
    // else if($_SERVER['REQUEST_URI'] == '/'){
    //   $Controller->index();
    // }
    
    // else if($_SERVER['REQUEST_URI'] =='/logout')
    //   $Controller->logout();
    
    // else{
    //   $Controller->notFound();
    // }

    // preg_match('/^\/([^\/]+)\??/',$_SERVER['REQUEST_URI'],$matches);

    

    switch($_SERVER['REQUEST_URI']){
      case '/':
        $Controller->index();break;
      //sortBy
      case preg_match('/\/\?sortBy=(.+)/',$_SERVER['REQUEST_URI'],$matches)?true: false:
        $Controller->index(null,$matches[1]);break;
      case '/register':
        $Controller->register();break;
        
      case '/edit':
        $Controller->edit();break;
      case '/login':
        $Controller->login();break;
      case '/logout':
        $Controller->logout();break;
      //search
      case preg_match('/\/search\?query=.+/u',$_SERVER['REQUEST_URI'])?true:false:
        $Controller->search();break;
      default:
        $Controller->notFound();break;
    }
   
  }
}