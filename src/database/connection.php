<?php

namespace src\database;

class connection extends config
{
  private static $instance;
  private $connection;

  private function __construct()
  {
    $this->connect();
  }

  public static function getInstance()
  {
    if (!self::$instance instanceof self)
      self::$instance = new self();
    return self::$instance;
  }

  private function connect()
  {
    try {
      $connection = new \PDO("mysql:host=$this->server;dbname=$this->database;port=$this->port", $this->username, $this->password);
      $this->connection = $connection;
    } catch (\Throwable $th) {
      die($th->getMessage());
    }
  }
  public function getConection()
  {
    return $this->connection;
  }
}
