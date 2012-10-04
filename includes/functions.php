<?php

// Checkboxes validation
// returns true if the given item (the given item in the given group) is checked

function is_checked($item, $group) {
  if ($group !== false && isset($_POST[$group]) && !empty($_POST[$group]))
  {
    return in_array($item, $_POST[$group]) ? true : false;
  }
  elseif (isset($_POST[$item]) && !empty($_POST[$item]))
  {
    return ($item === true) ? true : false;
  }
  else {
    return false;
  }
}

// Get the user defined language (/includes/config.php)
// if related translation file does not exist, fallbacks to French

function app_get_lang() {
  return ($GLOBALS['language'] != 'fr' && !file_exists('lang/' . $GLOBALS['language'] . '.php')) ? $GLOBALS['language'] : 'fr';
}

?>