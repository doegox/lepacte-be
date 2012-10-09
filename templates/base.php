<!doctype html>
<html class="nojs">
<head lang="<?= $language; ?>">
  <meta charset="utf-8" />

  <link rel="stylesheet" media="screen" href="/ui/global.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?= $lang['title']; ?></title>
  <meta name="description" content="<?= $lang['meta-desc']; ?>" />
</head>

<body>
<div id="wrapper">
  <h1><?= $lang['title']; ?></h1>

  <p class="center" id="abstract"><?= $lang['abstract']; ?></p>

  <form method="post" action="https://<?=$_SERVER['SERVER_NAME']?>/form">
  <div class="step" id="step-1">
    <h2>Sélection des pactes</h2>

    <div class="pact" id="software">
      <h3>Pacte du logiciel libre</h3>

      <div class="awareness">
        <p>J’ai conscience que…</p>
        <p>Le travail des acteurs du Logiciel Libre participe à la préservation des libertés fondamentales à l’ère du numérique, au partage du savoir et à la lutte contre la « fracture numérique ». Il constitue également une opportunité pour le public mais aussi pour l’indépendance technologique et la compétitivité de nos régions, de nos communautés, de la Belgique et de l’Europe.</p>
        <p>Le Logiciel Libre est un bien commun à protéger et à développer. Son existence repose sur le droit pour un auteur de divulguer son logiciel avec son code source et d’accorder à tous le droit de les utiliser, les copier, les adapter et les redistribuer, en version originale ou modifiée.</p>
        <p>L’usage généralisé de standards ouverts permet à tous le l’accès, l’échange et la pérennité de l’information.</p>
      </div>

      <div class="commitment">
        <p>Je m’engage donc à…</p>
        <p>Encourager par des moyens institutionnels les administrations publiques, établissements publics et collectivités à développer et utiliser prioritairement des logiciels libres et des standards ouverts.</p>
        <p>Soutenir des politiques actives en faveur du Logiciel Libre et m’opposer à toute discrimination à son encontre.</p>
        <p>Défendre les droits des auteurs et des utilisateurs de logiciels libres, notamment en demandant la modification de toute disposition légale fragilisant ces droits et en m’opposant à tout projet ou proposition qui irait dans ce sens.</p>
      </div>

      <p class="signature">
        <input type="checkbox" name="pact[]" value="software" id="chk-software" class="checkbox" />
        <label for="chk-software">Je signe le <strong>pacte du logiciel libre</strong></label>
      </p>
    </div>

    <div class="pact" id="data">
      <h3>Pacte des données libres</h3>

      <div class="awareness">
        <p>J’ai conscience que…</p>
        <p>Les données libres sont fondées, comme les logiciels libres, sur des licences qui soutiennent les droits des utilisateurs et , souvent, sur les bienfaits du travail collaboratif et de l’intelligence collective.</p>
        <p>Nos sociétés démocratiques dépendent de la capacité du gouvernement et de l’administration publique à offrir une transparence et un accès libre aux informations non nominatives qu’ils détiennent, et permettre ainsi à l’ensemble de la société civile de participer activement. La création de ces données publiques est financée par le citoyen et l’utilité économique et sociale de ces informations est importante. La libéralisation des données non nominatives est déjà une pratique courante dans plusieurs pays. (voir par exemple http://www.data.gov/community)</p>
        <p>L’État dispose d’un riche patrimoine historique et principalement d’œuvres dans le domaine public. Ce patrimoine, en plus d’être une richesse culturelle, est un vecteur potentiel pour dynamiser l’économie du savoir et de la connaissance.</p>
        <p>De nombreux citoyens souhaitent participer au développement de contenus librement partageables avec le soutien des autorités, par exemple pour des données géographiques ou des contenus d’éducation.</p>
      </div>

      <div class="commitment">
        <p>Je m’engage donc à…</p>
        <p>Soutenir les actions gouvernementales pour rendre les données non nominatives détenues par l’État libres et accessibles à la collectivité et produire à l’avenir davantage de données libres, réutilisables, dans des formats standards et ouverts, notamment par des moyens institutionnels.</p>
        <p>Assurer que l’ensemble des citoyens puisse bénéficier de ces données notamment en mettant à disposition gratuitement les accès et services adéquats et ce à long terme.</p>
        <p>Dynamiser les échanges sur les analyses de ces données, permettre au citoyen de jouer un rôle actif.</p>
        <p>Soutenir la numérisation et la diffusion publique des œuvres du domaine public.</p>
        <p>Encourager les initiatives citoyennes de création de contenus librement partagés.</p>
      </div>

      <p class="signature">
        <input type="checkbox" name="pact[]" value="data" id="chk-data" class="checkbox" />
        <label for="chk-data">Je signe le <strong>pacte des données libres</strong></label>
      </p>
    </div>

    <div class="pact" id="internet">
      <h3>Pacte de l'Internet libre</h3>

      <div class="awareness">
        <p>J’ai conscience que…</p>
        <p>L’accès à Internet est devenu nécessaire pour l’exercice de droits fondamentaux tels que la liberté d’expression.</p>
      </div>

      <div class="commitment">
        <p>Je m’engage donc à…</p>
        <p>Défendre Internet comme outil de libre expression dans lequel chacun peut accéder à, et mettre à disposition, les contenus, services et applications de son choix dans le respect du droit d’auteur.</p>
        <p>Lutter contre toute forme de discrimination à cet égard notamment en veillant à ce que nul ne puisse ni contrôler, ni surveiller, ni limiter l’accès Internet d’un individu sans que cela ne fasse l’objet d’une procédure judiciaire équitable.</p>
      </div>

      <p class="signature">
        <input type="checkbox" name="pact[]" value="internet" id="chk-internet" class="checkbox" />
        <label for="chk-internet">Je signe le <strong>pacte de l'Internet libre</strong></label>
      </p>
    </div>
  </div>

  <div class="step" id="step-2">
    <h2>Authentification</h2>

    <p><strong>Attention: </strong> Vous allez être redirigé vers une connection sécurisée, il est probable que votre browser émette une alerte car le certificat de ce site est signé par <a href="http://www.cacert.org">CACert.org</a>, une autorité de certification collaborative qui n'est pas encore prise en charge par la totalité des browsers. Vous pouvez donc ignorer cette alerte.</p>
    <p>Afin de limiter les risques de falsification, il est indispensable que vous confirmiez votre identité grâce à l'une des méthodes proposées.</p>

    <div id="auth">
      <div id="auth-eid">
        <p>En quelques secondes, à l'aide de votre carte d'identité électronique (nécessite un lecteur eID)&nbsp;:</p>
        <ul>
          <li>Connecter votre lecteur eID à votre ordinateur&nbsp;;
          <li>Insérer votre carte d'identité électronique dans le lecteur&nbsp;;</li>
          <li>Cliquer sur le bouton ci-dessous, votre PIN vous sera demandé pour vous authentifier.</li>
        </ul>
        <p class="button">
          <input type="submit" name="with_eid" value="Accéder au formulaire avec votre eID" class="green" />
        </p>
        <p>Types valides de cartes d'identité électronique pour cette procédure:</p>
        <p><img src="ui/imgs/eidvalid.png" width="143" height="42" /></p>
        <p><a href="http://eid.belgium.be/fr/utiliser_votre_eid/" target="_blank">Besoin d'info sur l'usage de l'eID?</a></p>
      </div>
      <p id="auth-or"><span>ou</span></p>
      <div id="auth-mail">
        <p>En envoyant un scan du formulaire completé par e-mail&nbsp;:</p>
        <p class="button">
          <input type="submit" name="without_eid" value="Accéder au formulaire sans eID" class="green" />
        </p>
        <ul>
          <li>Télécharger, imprimer, signer et renvoyer par email le formulaire&nbsp;;</li>
          <li>Patienter le temps qu'un bénévole encode manuellement vos données&nbsp;;</li>
          <li>Vous recevrez alors une confirmation par email.</li>
        </ul>
      </div>
    </div>
  </div>
  </form>
</div>
<p class="center" id="footer"><?= $lang['footer']; ?></p>

<script src="js/jquery-1-8-2.min.js"></script>
<script>
$('html').removeClass('nojs').addClass('js');

$('.step + .step').hide();

$('form').prepend('<ul id="progress"><li id="progress-step-1" class="current">Étape 1 : sélection des pactes</li><li id="progress-step-2">Étape 2 : authentification et complétion du formulaire</li></ul>');

$('.signature label').each(function() {
  $(this).bind('click', function() {
    $(this).prev('input').toggleClass('checked');
  });
});

$('.step').each(function() {
  var currentStep = $(this),
      currentId   = $(this).attr('id'),
      prevStep    = $(this).prev('.step'),
      nextStep    = $(this).next('.step');

  $(currentStep).append('<p class="button" id="nav-' + currentId + '" />');

  if ($(prevStep).length === 1)
  {
    var prevId = $(prevStep).attr('id');

    $('#nav-' + currentId).append('<input type="button" value="Étape précédente" class="blue prev" id="prev-' + prevId + '" /> ');
    $('#prev-' + prevId).live('click', function() {
      $(currentStep).hide();
      $('#' + prevId).show();

      $('#progress-' + currentId).toggleClass('current');
      $('#progress-' + prevId).toggleClass('current');
    });
  }
  if ($(nextStep).length === 1)
  {
    var nextId = $(nextStep).attr('id');

    $('#nav-' + currentId).append('<input type="button" value="Étape suivante" class="blue next" id="next-' + nextId + '" />');
    $('#next-' + nextId).live('click', function() {
      $(currentStep).hide();
      $('#' + nextId).show();

      $('#progress-' + currentId).toggleClass('current');
      $('#progress-' + nextId).toggleClass('current');
    });
  }
});
</script>
</body>
</html>
