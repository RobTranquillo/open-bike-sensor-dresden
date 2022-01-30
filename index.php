<?php
if(strstr($_SERVER['SERVER_NAME'], 'localhost') !== false)
{
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

require('php/template.php');
require('php/content.php');

switch ($_SERVER["REQUEST_URI"])
{
  case '/impress':
    $content = get_impress();
    break;

  default:
    $content = get_main();
    break;
}

echo get_template($content);

