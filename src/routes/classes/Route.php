<?php

namespace src\routes\classes;

class Route
{
  public static $routes;

  #create routes methods
  #---------------------
  public static function get($url, $controller)
  {
    self::$routes["$url"] = array(
      "method" => "GET",
      "controller" => $controller
    );
  }
  public static function post($url, $controller)
  {
    self::$routes["$url"] = array(
      "method" => "POST",
      "controller" => $controller
    );
  }
  public static function patch($url, $controller)
  {
    self::$routes["$url"] = array(
      "method" => "PATCH",
      "controller" => $controller
    );
  }
  public static function delete($url, $controller)
  {
    self::$routes["$url"] = array(
      "method" => "DELETE",
      "controller" => $controller
    );
  }
}
