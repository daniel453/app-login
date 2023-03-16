<?php

namespace src\utils\controllers;

use src\utils\models\usersModel;
use src\utils\pages\class\view;

class authController
{

  public static function login()
  {
    session_start();
    $data = [];
    if (isset($_SESSION["login"])) {
      if (!$_SESSION["login"]) {
        $data["loginError"] = true;
      }
    }
    view::render('login', $data);
  }

  public static function auth($data)
  {
    session_start();
    $userModel = new usersModel();
    $user = $userModel->getUser($data["email"], $data["password"]);
    if (count($user) > 0) {
      $_SESSION["user"] = $user;
      header("location: http://localhost/");
    } else {
      $_SESSION["login"] = false;
      header("location: http://localhost/login");
    }
  }

  public static function logOut()
  {
    session_start();
    session_destroy();
    header("location: http://localhost/");
  }
}
