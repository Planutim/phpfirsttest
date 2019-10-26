<?php


namespace Student\Engine;

class Auth{


  public static function login($id)
  {

    $_SESSION['logged']=time();
    $_SESSION['id']=$id;
  }

  public static function logout()
  {
    session_unset();
    session_destroy();
  }
}