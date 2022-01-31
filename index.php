<?php
if(strstr($_SERVER['SERVER_NAME'], 'localhost') !== false)
{
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

require('php/template.php');
require('php/content.php');

if (isset($_GET['p']))
{
  if ($_GET['p'] == 'impress') $content = get_impress();
}
else $content = get_main();

echo get_template($content);
