<?php

use src\routes\classes\RouteMatch;

function createApp($url)
{
  RouteMatch::routeMatch($url);
}
