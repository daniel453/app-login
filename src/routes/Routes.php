<?php

use src\routes\classes\Route;
use src\utils\controllers\usersController;
use src\utils\controllers\authController;

Route::get("", function ($data = []) {
  usersController::index($data);
});

Route::get("login", function () {
  authController::login();
});

Route::post("login.auth", function ($data = []) {
  authController::auth($data);
});

Route::get("login.logOut", function () {
  authController::logOut();
});

Route::get("register", function () {
  usersController::create();
});

Route::post("register.store", function ($data = []) {
  usersController::store($data);
});
