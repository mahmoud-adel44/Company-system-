<?php

require_once 'MySql.php';

class Task extends MySql
{
  //get All

  public function getAll($task_id)
  {
    $query = "SELECT * FROM tasks WHERE task_id = '$task_id' ";


    $result = $this->connect()->query($query);
    $task = [];
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        array_push($task, $row);
      }
    }
    return $task;
  }

  // get data foe mployee to edit his profile
  public function getInfo($empId)
  {
    $query = "SELECT * FROM employees WHERE id = '$empId' ";


    $result = $this->connect()->query($query);
    $task = [];
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        array_push($task, $row);
      }
    }
    return $task;
  }
  public function updateInfo($id, array $data)
  {

    $query = "UPDATE employees SET 
    `name`= '{$data['name']}',
    `email`= '{$data['email']}',
    `city`= '{$data['city']}',
    `phone`= '{$data['phone']}',
    `gender`= '{$data['gender']}'
    WHERE id = '$id'
    ";

    $result = $this->connect()->query($query);

    if ($result == true) {
      return true;
    }
    return false;
  }


  // get all employees for admin
  public function getAllEmployees()
  {
    $query = "SELECT * FROM employees  ";


    $result = $this->connect()->query($query);
    $task = [];
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        array_push($task, $row);
      }
    }
    return $task;
  }



  //get all tasks for admin

  public function getAllTasksForAdmin()
  {
    $query = "SELECT tasks.task_id , tasks.emp_id ,tasks.task_name ,tasks.desc ,tasks.status ,tasks.deadline ,employees.name FROM tasks JOIN employees ON tasks.emp_id = employees.id

    
    ";
    $task = [];
    $result = $this->connect()->query($query);



    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        array_push($task, $row);
      }
    }
    return $task;
  }








  public function update($id, array $data)
  {


    $query = "UPDATE tasks SET `emp_id`=  '{$data['empId']}',   `task_name`= '{$data['task_name']}',
    `deadline`= '{$data['deadline']}' , `desc` ='{$data['desc']}' , `status` = '{$data['status']}'
    WHERE task_id= '$id'
    ";






    $result = $this->connect()->query($query);



    if ($result == true) {
      return true;
    }
    return false;
  }



    public function employeesNames(){
      $query = " SELECT `name` ,  `id` FROM employees  " ; 
      $result = $this->connect()->query($query) ;
      $names= [] ;

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            array_push($names, $row);
          }
        }
      return $names;


  }


  public function getTaskData($task__id)
  {
    $query = "SELECT tasks.task_id , tasks.emp_id ,tasks.task_name ,tasks.desc ,tasks.status ,tasks.deadline ,employees.name
            FROM tasks JOIN employees
            ON tasks.task_id = '$task__id' ";


    // var_dump($result); 
    // die();

    $result = $this->connect()->query($query);
    $data = null;

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data = $row;
      }
    }

    return $data;
  }



  //Add new employee
  public function AddEmployee(array $data)
  {
    $query = "INSERT INTO employees ( `name` , email , `password` , city , gender , birthday)
    VALUES ('{$data['name']}' ,'{$data['email']}' , '{$data['password']}' ,'{$data['city']}' ,'{$data['gender']}' ,'{$data['birthday']}' )
    ";

    $result = $this->connect()->query($query);

    if ($result == true) {
      return true;
    }
    return false;
  }
}

 



  //delete



  //edit 

  // public function edit ($id  ,array $data)
  // {
  //   $query = "UPDATE tasks SET 
  //   `status`= '{$data[`status`]}'
  //   WHERE emp_id= '$id'
  //   ";
  //   $result =  $this->connect()->query($query);

  //   return $result;
  // } 
