<?php

namespace Student\Engine;

class Util
{
  public function getView($viewName,$data=null)
  {
    $fullPath = ROOT_PATH . "View/" . $viewName . ".php";
    if(is_file($fullPath))
      require $fullPath;
  }

  public function formatData($user){
    if(isset($user['birthYear'])){
      if(mb_strlen($user['birthYear'])==4){
        $user['birthYear']=$user['birthYear'] . '-01-01';
      }
      else{
        $user['birthYear']=mb_substr($user['birthYear'],0,4);
      }
    }
    return $user;
  }

  public static function sort($rows, $column){

    if($column=='firstName' || $column=='lastName'||$column=='groupNumber'){
      uasort($rows, function($a,$b){
        if(strcmp($a[$column],$b[$column])>0){
          return 1;
        }else{
          return -1;
        }
      });
    }else if($column == 'examPoints'){
      uasort($rows, function($a,$b){
        if($a[$column]>$b[$column])
          return 1;
        else
          return -1;
      });
    }

    return $rows;
  }

}