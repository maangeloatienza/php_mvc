<?php

class Test extends Database {

  public function getUsers(){
    $sql = " SELECT * FROM users WHERE deleted IS NULL";
    $stmt = $this->connect()->query($sql);

    while($row = $stmt->fetchAll()){
      return $row;
    }

  }


  public function getUsersStmt($username){

    $sql = " SELECT * FROM users WHERE deleted IS NULL and username = ?";
    $stmt = $this->connect()->prepare($sql);

    $stmt->execute([$username]);

    $usernames = $stmt->fetchAll();

    while($usernames){
      return $usernames;
    }

  }

  public function createUser($first_name,$last_name,$username,$password,$created){
    
    $sql = "INSERT INTO
            users(first_name,last_name,username,password,created)
            VALUES(?,?,?,?,?)";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$first_name,$last_name,$username,$password,$created]);





  }

}



 ?>
