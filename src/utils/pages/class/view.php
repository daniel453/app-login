<?php

namespace src\utils\pages\class;

class view
{

  public static function render($view, $data = [])
  {
    require "../src/utils/pages/$view.php";
  }
}
