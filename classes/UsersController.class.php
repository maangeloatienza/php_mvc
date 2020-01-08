<?php


class UsersController extends User{

  public function createUser($first_name,$last_name,$username,$password,$created){
    $this->setUser($first_name,$last_name,$username,$password,$created);
  }
}


 ?>
