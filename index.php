<?php

session_start();

include('includes/config.php');
include('includes/vars.php');
include('includes/functions.php');
include('lang/' . app_get_lang() . '.php');

if (isset($_GET['q']))
{
  $q = htmlentities($_GET['q']);

  if (array_key_exists($q, $pages))
  {
    if (file_exists($pages[$q]))
    {
      include($pages[$q]);
    }
    else {
      include('templates/error404.php');
    }
  }
  else {
    include('templates/error404.php');
  }
}
else {
  include('templates/base.php');
}

?>