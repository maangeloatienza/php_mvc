<?php

class Database {
  private $host = "localhost";
  private $user = "root";
  private $password = "12345";
  private $dbName = "dr_social_db";


  protected function connect(){
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;

    try {
      $pdo = new PDO($dsn,$this->user,$this->password);

      // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      return $pdo;

    } catch(PDOException $e){
      echo 'Connection failed !' . $e->getMessage();
    }


  }
}

?>
