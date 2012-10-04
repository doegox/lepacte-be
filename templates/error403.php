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
  <p>Si vous avez des difficultés à utiliser votre eID pour vous authentifier, voici quelques informations issues de Tax-On-Web:</p>

  <SPAN style="color:#088A08">
Authentification avec carte d&rsquo;identit&eacute; &eacute;lectronique belge (eID) ou carte &eacute;lectronique pour &eacute;tranger</SPAN>
<br>
Vous avez besoin :
<ul><li><strong>de votre carte eID <u>ET</u> de son CODE PIN.</strong></li>
<li><strong>d&rsquo;un lecteur de carte eID.</strong></li>
<li>d&rsquo;installer le <strong>programme pour lire la carte eID</strong>, &agrave; t&eacute;l&eacute;charger sur : <a href="http://eid.belgium.be"> http://eid.belgium.be. </a>(Ic&ocirc;ne eID Quick Install). <br>De plus amples informations sur la carte eID et le lecteur de carte sont &eacute;galement reprises sur le site.</li>
</ul>


<SPAN style="color:#FF0000">Le programme est install&eacute; mais je n&rsquo;arrive pas &agrave; lire l&rsquo;eID:</SPAN>
<br>Des mises &agrave; jour de configuration de navigateur (par ex. Internet Explorer, Firefox) sont disponibles sur le site de Fedict pour pouvoir utiliser l&rsquo;eID : <a href="http://eid.belgium.be/fr/utiliser_votre_eid/besoin_d_aide/problemes_avec_l_installation/"> http://eid.belgium.be/fr/utiliser_votre_eid/besoin_d_aide/problemes_avec_l_installation/ </a> 
<br><SPAN style="color:#FF0000">Probl&egrave;me de connexion possible lors d&rsquo;authentifications successives avec 2 eID:</SPAN>
<br>Avec certains navigateurs (comme Internet Explorer), la personne authentifi&eacute;e en premier doit <u>fermer le navigateur</u> pour que l&rsquo;autre personne puisse se connecter avec sa propre eID.


  <p>Retourner sur <a href="<?= $path; ?>">Je Signe LePacte.be</a>.</p>
</div>
</body>
</html>
