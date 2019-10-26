<?php

namespace Student\Engine;



class Loader{

  protected $namespaceMap = array();

  public function namespaceToDir($namespace, $root){
    if(is_dir($root)){
      $this->namespaceMap[$namespace] = $root;
      return true;
    }
    return false;
  }

  public function register(){
    spl_autoload_register(array($this, 'autoload'));
  }

  protected function autoload($class){
    $pathParts = explode('\\',$class);
    // var_dump($pathParts);
    if(is_array($pathParts)){
      $namespace = array_shift($pathParts);

      if(!empty($this->namespaceMap[$namespace])){
        $filePath = $this->namespaceMap[$namespace].'/'.implode('/',$pathParts) . '.php';

        // echo '<p class="included">'.$filePath . '</p><br>';
        require_once $filePath;   
        return true;
      }
    }
    echo "wtf";
    return false;
  }
}