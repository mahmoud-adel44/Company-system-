<?php
require_once 'MySql.php';

class Admin extends MySql
{

  public function attempt($email, $password)
  {
    $query = "   SELECT * FROM admins 
    WHERE email = '$email' And `password` = '$password'    ";

    $user = null;
    $result = $this->connect()->query($query);
    if ($result->num_rows == 1) {
      $user = $result->fetch_assoc();
    }
    return $user;
  }


  

}
