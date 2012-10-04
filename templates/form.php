<!doctype html>
<html class="nojs">
<head lang="en">
  <meta charset="utf-8" />

  <link rel="stylesheet" media="screen" href="<?= $path; ?>ui/global.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?= $lang['meta-title']; ?></title>
  <meta name="description" content="<?= $lang['meta-desc']; ?>" />
</head>

<body>
<div id="wrapper">
  <h1><?= $lang['title']; ?></h1>

  <p class="center" id="abstract"><?= $lang['abstract']; ?></p>

<?php

// if this very form was submited (and not the form on the main page)
if (isset($_POST['form']))
{
  echo '<div style="font-style: monospace; color: green">
    <p><strong>Debug:</strong></p><pre>';

  var_dump($_POST);

  echo '</pre></div>';
}

?>

  <form method="post" action="form" enctype="multipart/form-data" id="step-3">
  <h2>Complétion du formulaire</h2>

  <p>Les champs marqués d'un <span class="required">(astérisque)</span> sont requis.</p>

  <p class="row">
    <label for="firstname" class="required">Prénom</label>
    <input type="text" name="firstname" id="firstname" required="required" />
  </p>

  <p class="row">
    <label for="name" class="required">Nom</label>
    <input type="text" name="name" id="name" required="required" />
  </p>

  <p class="row">
    <label for="sex" class="required">Civilité</label>
    <select id="sex" name="sex" required="required">
      <option value=""></option>
      <option value="woman">Madame</option>
      <option value="man">Monsieur</option>
    </select>
  </p>

  <p class="row">
    <label for="picture" class="picture">Photo</label>
    <input type="file" name="picture" id="picture" />
  </p>

  <p class="row">
    <label for="street">Rue</label> <input type="text" name="street" id="street" />
    <label for="number">N°</label> <input type="text" name="number" id="number" class="tiny" />
  </p>

  <p class="row">
    <label for="city">Ville</label> <input type="text" id="city" />
    <label for="postcode">Code postal</label> <input type="text" name="postcode" id="postcode" class="tiny" />
  </p>

  <p class="row">
    <label for="phone">Télphone (fixe)</label>
    <input type="text" name="phone" id="phone" />
  </p>

  <p class="row">
    <label for="gsm" class="required">GSM</label>
    <input type="text" name="gsm" id="gsm" required="required" />
  </p>

  <p class="row">
    <label for="mail" class="required">E-mail</label>
    <input type="text" name="mail" id="mail" required="required" />
  </p>

  <p class="row">
    <label for="website">Site web</label>
    <input type="text" name="website" id="website" />
  </p>

  <fieldset>
    <legend class="required">Communales 2012</legend>
    <p class="row">
      <label for="town">Commune</label>
      <input type="text" name="town" id="town" required="required" />
    </p>

    <p class="row">
      <label for="party">Parti</label>
      <input type="text" name="party" id="party" required="required" />
    </p>

    <p class="row">
      <label for="list">Liste</label> <input type="text" name="list" id="list" required="required" />
      <label for="position">Place sur la liste</label> <input type="text" name="position" id="position" required="required" class="tiny" />
    </p>
  </fieldset>

  <fieldset>
    <legend class="required">Pactes des libertés numériques</legend>
    <p class="signature">
      <input type="checkbox" name="pact[]" value="software" id="chk-software" class="checkbox" <?= is_checked('software', 'pact') ? 'checked="checked" ' : '' ?>/>
      <label for="chk-software">Pacte du logiciel libre</label>
    </p>

    <p class="signature">
      <input type="checkbox" name="pact[]" value="data" id="chk-data" class="checkbox" <?= is_checked('data', 'pact') ? 'checked="checked" ' : '' ?>/>
      <label for="chk-data">Pacte des données libres</label>
    </p>

    <p class="signature">
      <input type="checkbox" name="pact[]" value="internet" id="chk-internet" class="checkbox" <?= is_checked('internet', 'pact') ? 'checked="checked" ' : '' ?>/>
      <label for="chk-internet">Pacte de l'Internet libre</label>
    </p>
  </fieldset>

  <p class="button">
    <input type="hidden" name="form" value="" />
    <input type="submit" class="green" value="Envoyer" />
  </p>
  </form>
</div>

<script src="js/jquery-1-8-2.min.js"></script>
<script>
$('html').removeClass('nojs').addClass('js');
</script>
</body>
</html>