<?php

header('HTTP/1.0 404 Not Found');

?>

<!doctype html>
<html class="nojs">
<head lang="en">
  <meta charset="utf-8" />

  <link rel="stylesheet" media="screen" href="<?= $path; ?>ui/global.css" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>404 not found</title>
  <meta name="description" content="" />
</head>

<body>
<div id="wrapper">
  <h1>Not found</h1>
  <p>The requested URL was not found on this server.</p>
  <p>Retourner sur <a href="<?= $path; ?>">LePacte.be</a>.</p>
</div>
</body>
</html>