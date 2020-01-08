<?php

class User extends Database{

  // Fetch users from the database
  protected function fetchUsers(){
    $sql = "SELECT * FROM users WHERE deleted IS NULL";

    $stmt = $this->connect()->prepare($sql);

    $stmt->execute();

    $users = $stmt->fetchAll();

    while($users){
      return $users;
    }
  }

  protected function fetchUser($userid){
    $sql = "SELECT * FROM users WHERE deleted IS NULL and id = ?";

    $stmt = $this->connect()->prepare($sql);

    $stmt->execute([$userid]);

    $results = $stmt->fetchAll();

    while($results){
      return $results;
    }

  }

  // Create user and save user data to database
  public function setUser($first_name,$last_name,$username,$password,$created){
    $sql = "INSERT INTO
     users(first_name,last_name,username,password,created)
     VALUES(?,?,?,?,?)";

     $stmt = $this->connect()->prepare($sql);

     $stmt->execute([$first_name,$last_name,$username,$password,$created]);

  }
}

?>
