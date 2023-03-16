<?php

namespace src\utils\controllers;

use src\utils\models\usersModel;
use src\utils\pages\class\view;

class usersController
{
  public static function index($data)
  {
    session_start();
    unset($_SESSION["createUser"]);
    if (isset($_SESSION["user"])) {
      $data["user"] = $_SESSION["user"][0];
    }
    view::render('home', $data);
  }
  public static function create()
  {
    session_start();
    $data = [];
    if (isset($_SESSION["createUser"])) {
      $data["createUser"] = $_SESSION["createUser"];
    }
    view::render('register', $data);
  }
  public static function store($data)
  {
    session_start();
    $userModel = new usersModel();

    $result = $userModel->createUser($data["email"], $data["password"]);
    if ($result) {
      $_SESSION["createUser"] = true;
    } else {
      $_SESSION["createUser"] = false;
    }
    header("location: http://localhost/register");
  }
}
