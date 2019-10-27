<?php


namespace Student\Controller;

class StudentController{

  private $util, $Student, $validator;

  public function __construct(){
    $this->util = new \Student\Engine\Util;
    $this->Student = new \Student\Model\Student;
    $this->validator = new \Student\Engine\Validator;
  }
  public function index($message=null){
    $data = $this->Student->getAll();

    return $this->util->getView('index', array($data, $message));
  }

  public function register(){
    if(isset($_POST['firstName'])){
        $result=$this->validator->validate($_POST);

        foreach($result as $key=>$val){
          if($val==null){

            return $this->util->getView('form',$result); //bad, retype data
          }
          
        }
        
        if($this->Student->add($result)){
          $user = $this->Student->getLastAdded();
          
          $this->login($user['id']);

          return $this->index('success');
        }
        else{
          return $this->index('error');
        }
      
    }
    return $this->util->getView('form');
    
  }

  public function edit(){
    if(isset($_POST['firstName'])){
      $result=$this->validator->validate($_POST);

      foreach($result as $key=>$val){
        if($val==null){
          return $this->util->getView('form',$result); //bad, retype edited data
        }
      }

      if($this->Student->update($result)){
        echo 'success';
        return $this->index('success');
      }
      else{
        echo 'error';
        return $this->index('error');
      }
      return $this->notFound();
    }
    else if(isset($_SESSION['id'])){
      $result=$this->Student->getById($_SESSION['id']);

      return $this->util->getView('form', $result);
    }
    header('Location: /');
  }

  public function login($id){
    \Student\Engine\Auth::login($id);
    header('Location: /');
  }

  public function logout(){
    \Student\Engine\Auth::logout();
    header('Location: /');
    $this->index();
  }
  public function notFound(){
    return $this->util->getView('notfound');
  }
}     