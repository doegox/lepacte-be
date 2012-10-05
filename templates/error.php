<?php

$httpStatus = array(
  '403' => array(
    'header'   => 'HTTP/1.1 403 Forbidden',
    'title'    => '403 Forbidden',
    'abstract' => 'Forbidden',
    'details'  => '<p>You don\'t have permission to access this URL on this server.</p><p>Retourner sur <a href="' . $path . '">LePacte.be</a>.</p>'
  ),
  '404' => array(
    'header'   => 'HTTP/1.0 404 Not Found',
    'title'    => '404 Not found',
    'abstract' => 'Not found',
    'details'  => '<p>The requested URL was not found on this server.</p><p>Retourner sur <a href="' . $path . '">LePacte.be</a>.</p>'
  )
);

$httpStatus = array_key_exists($q, $httpStatus) ? $httpStatus[$q] : $httpStatus['404'];

header($httpStatus['header']);

?>

<!doctype html>
<html class="nojs">
<head lang="<?= $language; ?>">
  <meta charset="utf-8" />

  <link rel="stylesheet" media="screen" href="<?= $path; ?>ui/global.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?= $httpStatus['title']; ?></title>
  <meta name="description" content="" />
</head>

<body>
<div id="wrapper">
  <h1><?= $httpStatus['abstract']; ?></h1>

  <?= $httpStatus['details']; ?>
</div>
</body>
</html>