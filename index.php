<?php
if(strstr($_SERVER['SERVER_NAME'], 'localhost') === false)
  return;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('php/template.php');
require('php/content.php');

switch ($_SERVER["REQUEST_URI"])
{
  case 'impress':
    $content = get_impress();
    break;

  case 'upload':
    $content = get_upload();
    break;

  default:
    $content = get_main();
    break;
}

echo get_template($content);

