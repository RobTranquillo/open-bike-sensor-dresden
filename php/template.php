<?php

function get_template($content = "")
{
    return '
<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <title>Open Bike Sensor - Dresden - datei upload</title>
  <meta name="description" content="Seite der Menschen des Open Bike Sensor Projektes in Dresden, zum Zwecke des Hochladens der gesammelten Daten">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/milligram.min.css">
  <link rel="stylesheet" href="css/default.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <h1>Open Bike Sensor - Dresden</h1>
  ' .$content. '
  <footer>
    <a href="?p=impress">Impressum</a>
  </footer>
</body>

</html>
';
}
