<?php


class UsersView extends User{

  public function showUser($userid){
    $results = $this->fetchUser($userid);

    echo "<h3>". $results[0]["first_name"] . " " . $results[0]["last_name"] ." </h3>";
  }

}


?>
