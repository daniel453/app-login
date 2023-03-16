<?php

namespace src\utils\models;

use src\database\connection;

class usersModel
{
  private \PDO $connection;
  function __construct()
  {
    $connection = connection::getInstance();
    $this->connection = $connection->getConection();
  }

  public function createUser($email, $password)
  {
    if ($email == "" && $password == "") {
      return false;
    }
    $query = "INSERT INTO users (email,password) values(:email,:password)";
    $queryPDO = $this->connection->prepare($query);
    $queryPDO->bindParam(":email", $email);
    $queryPDO->bindParam(":password", $password);
    try {
      $queryPDO->execute();
      return true;
    } catch (\Throwable $th) {
      return false;
    }
  }
  public function getUser($email, $password)
  {
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $queryPDO = $this->connection->prepare($query);
    $queryPDO->bindParam(":email", $email);
    $queryPDO->bindParam(":password", $password);
    try {
      $queryPDO->execute();
      return $queryPDO->fetchAll();
    } catch (\Throwable $th) {
      return false;
    }
  }
}
