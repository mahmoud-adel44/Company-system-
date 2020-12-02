

<?php
require_once 'MySql.php';

class Employee extends MySql
{

  public function attempt($email, $password)
  {
    $query = "   SELECT * FROM employees 
    WHERE email = '$email' And `password` = '$password'    ";

    $user = null;
    $result = $this->connect()->query($query);
    if ($result->num_rows == 1) {
      $user = $result->fetch_assoc();
    }
    return $user;
  }


  public function getId($empName)
  {

    $query = "SELECT id FROM employees WHERE `name` = '$empName'  ";

    // var_dump($result); 
    // die();

    $result = $this->connect()->query($query);
    $id = null;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id = $row;
      }
    }
    return $id;
  }
}
