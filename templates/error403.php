<?php

//header('HTTP/1.0 403 Forbidden access');

?>

<!doctype html>
<html class="nojs">
<head lang="en">
  <meta charset="utf-8" />

  <link rel="stylesheet" media="screen" href="<?= $path; ?>ui/global.css" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Access denied</title>
  <meta name="description" content="" />
</head>

<body>
<div id="wrapper">
  <h1>Acc&egrave;s refus&eacute;</h1>
  <p>Pour acc&eacute;der &agrave; cette partie du site, vous avez besoin de votre eID</p>
  <p>Retourner sur <a href="<?= $path; ?>">Je Signe LePacte.be</a>.</p>
</div>
</body>
</html>