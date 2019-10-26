<?php

namespace Student\Engine;


class Validator{


  public function validate($data){
    //firstName,lastName
    if(mb_strlen($data['firstName'])>50)
      $data['firstName']=null;
    if(mb_strlen($data['lastName'])>50)
      $data['lastName']=null;
    //sex
    if(!in_array($data['sex'],array('male','female')))
      $data['sex']=null;
    //groupnumber
    if(!preg_match('/^[a-z0-9]{2,5}$/',$data['groupNumber']))
      $data['groupNumber']=null;
    //email
    if(!preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$/',$data['email'])||mb_strlen($data['email']>50))
      $data['email']=null;
    //exampoints
    if(!(is_int((int)$data['examPoints'])
      && (int)$data['examPoints']>0 
      && (int)$data['examPoints']<300))
      $data['examPoints']=null;
    //birthYear
    if(!(is_int((int)$data['birthYear'])
      && (int)$data['birthYear']>1950
      && (int)$data['birthYear']<2010))
      $data['birthYear']=null;
    //registration
    if(!in_array($data['registration'],array('resident','nonresident')))
      $data['registration']=null;
      
    return $data;
  }
}