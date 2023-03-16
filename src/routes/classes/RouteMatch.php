<?php

namespace src\routes\classes;

use src\routes\classes\Route;

class RouteMatch
{

  public static function routeMatch($url)
  {
    $route = Route::$routes["$url"] ?? null;
    if ($route != null) {
      switch ($route["method"]) {
        case 'GET':
          if (isset($_GET)) {
            $route["controller"]($_GET);
            break;
          }
          die("Metodo incorrecto, esta ruta es tipo GET");
        case 'POST':
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $route["controller"]($_POST);
            break;
          } else {
            die("Metodo incorrecto, esta ruta es tipo POST");
          }
        case 'PATCH':
          if (isset($_POST["method"])) {
            if ($_POST["method"] == "PATCH") {
              $route["controller"]($_POST);
              break;
            }
            die("Metodo incorrecto, esta ruta es tipo PATCH");
          } else {
            die("Elige un metodo");
          }
        case 'DELETE':
          if (isset($_POST["method"])) {
            if ($_POST["method"] == "DELETE") {
              $route["controller"]($_POST);
              break;
            }
            die("Metodo incorrecto, esta ruta es tipo DELETE");
          } else {
            die("Elige un metodo");
          }
        default:
          header('location: http://localhost/');
          break;
      }
    } else {
      header('location: http://localhost/');
    }
  }
}
