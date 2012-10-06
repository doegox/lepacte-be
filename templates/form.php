<!doctype html>
<html class="nojs">
<head lang="<?= $language; ?>">
  <meta charset="utf-8" />

  <link rel="stylesheet" media="screen" href="<?= $path; ?>ui/global.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?= $lang['meta-title']; ?> - Formulaire</title>
  <meta name="description" content="<?= $lang['meta-desc']; ?>" />
</head>

<body>
<div id="wrapper">
  <h1><?= $lang['title']; ?></h1>

  <p class="center" id="abstract"><?= $lang['abstract']; ?></p>

<?php

// if the current page is served over HTTPS and eID info are available
if ($_SERVER['HTTPS']
 && isset($_SERVER['SSL_CLIENT_S_DN_G'])
 && isset($_SERVER['SSL_CLIENT_S_DN_S'])
 && isset($_SERVER['SSL_CLIENT_S_DN']))
{
  $firstnames = explode(" ", $_SERVER['SSL_CLIENT_S_DN_G']);
  $firstname = $firstnames[0];
  $name      = $_SERVER['SSL_CLIENT_S_DN_S'];
  $sex       = substr($_SERVER['SSL_CLIENT_S_DN'], -3, 1) % 2; // 1 man; 0 woman

  // if this very form was submitted
  if (isset($_POST['form'])
   && !empty($_POST['firstname'])
   && !empty($_POST['name'])
   && !empty($_POST['gsm'])
   && !empty($_POST['mail'])
   && !empty($_POST['circonscription-id'])
   && !empty($_POST['party-id'])
   && !empty($_POST['list'])
   && !empty($_POST['position'])
   && !empty($_POST['pact']))
  {
    echo '<div style="font-style: monospace; color: green">
      <p><strong>Debug:</strong></p><pre>';

    var_dump($_POST);
    // Must be directly fetched from $_SERVER to avoid forgery, will serve as digital signature:
    var_dump($_SERVER['SSL_CLIENT_S_DN']);

    echo '</pre></div>';
  }
  else {

?>
  <form method="post" action="form" enctype="multipart/form-data" id="step-3">
  <h2>Complétion du formulaire</h2>

  <p>Les champs marqués d'un <span class="required">(astérisque)</span> sont requis.</p>

  <p class="row">
    <label for="firstname" class="required">Prénom</label>
    <input type="text" name="firstname" value="<?= $firstname; ?>" id="firstname" required="required" />
  </p>

  <p class="row">
    <label for="name" class="required">Nom</label>
    <input type="text" name="name" value="<?= $name; ?>" id="name" required="required" />
  </p>

  <p class="row">
    <label for="sex" class="required">Civilité</label>
    <select name="sex" id="sex" required="required">
      <option value=""></option>
      <option value="woman"<?= $sex ? '' : ' selected="selected"'; ?>>Madame</option>
      <option value="man"<?= $sex ? ' selected="selected"' : ''; ?>>Monsieur</option>
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
      <label for="circonscription-id">Commune</label>
      <select id="circonscription-id" name="circonscription-id" required="required">
        <option value=""></option>
        <option value="100">Aiseau-Presles</option>
        <option value="101">Amay</option>
        <option value="102">Amel/Amblève</option>
        <option value="103">Andenne</option>
        <option value="104">Anderlecht</option>
        <option value="105">Anderlues</option>
        <option value="106">Anhée</option>
        <option value="107">Ans</option>
        <option value="108">Anthisnes</option>
        <option value="109">Antoing</option>
        <option value="110">Arlon</option>
        <option value="111">Assesse</option>
        <option value="112">Ath</option>
        <option value="113">Attert</option>
        <option value="114">Aubange</option>
        <option value="115">Aubel</option>
        <option value="116">Auderghem</option>
        <option value="117">Awans</option>
        <option value="118">Aywaille</option>
        <option value="119">Baelen</option>
        <option value="120">Bassenge</option>
        <option value="121">Bastogne</option>
        <option value="122">Beaumont</option>
        <option value="123">Beauraing</option>
        <option value="124">Beauvechain</option>
        <option value="125">Beloeil</option>
        <option value="126">Berchem-Sainte-Agathe</option>
        <option value="127">Berloz</option>
        <option value="128">Bernissart</option>
        <option value="129">Bertogne</option>
        <option value="130">Bertrix</option>
        <option value="131">Beyne-Heusay</option>
        <option value="132">Bièvre</option>
        <option value="133">Binche</option>
        <option value="134">Blegny</option>
        <option value="135">Bouillon</option>
        <option value="136">Boussu</option>
        <option value="137">Braine-l'Alleud</option>
        <option value="138">Braine-le-Château</option>
        <option value="139">Braine-le-Comte</option>
        <option value="140">Braives</option>
        <option value="141">Brugelette</option>
        <option value="142">Brunehaut</option>
        <option value="143">Bruxelles</option>
        <option value="144">Buellingen</option>
        <option value="145">Burdinne</option>
        <option value="146">Burg-Reuland</option>
        <option value="147">Bütgenbach</option>
        <option value="148">Celles</option>
        <option value="149">Cerfontaine</option>
        <option value="150">Chapelle-lez-Herlaimont</option>
        <option value="151">Charleroi</option>
        <option value="152">Chastre</option>
        <option value="153">Châtelet</option>
        <option value="154">Chaudfontaine</option>
        <option value="155">Chaumont-Gistoux</option>
        <option value="156">Chièvres</option>
        <option value="157">Chimay</option>
        <option value="158">Chiny</option>
        <option value="159">Ciney</option>
        <option value="160">Clavier</option>
        <option value="161">Colfontaine</option>
        <option value="162">Comblain-au-Pont</option>
        <option value="163">Comines-Warneton</option>
        <option value="164">Courcelles</option>
        <option value="165">Court-Saint-Etienne</option>
        <option value="166">Couvin</option>
        <option value="167">Crisnée</option>
        <option value="168">Dalhem</option>
        <option value="169">Daverdisse</option>
        <option value="170">Dinant</option>
        <option value="171">Dison</option>
        <option value="172">Doische</option>
        <option value="173">Donceel</option>
        <option value="174">Dour</option>
        <option value="175">Drogenbos</option>
        <option value="176">Durbuy</option>
        <option value="177">Ecaussinnes</option>
        <option value="178">Eghezée</option>
        <option value="179">Ellezelles</option>
        <option value="180">Enghien</option>
        <option value="181">Engis</option>
        <option value="182">Erezée</option>
        <option value="183">Erquelinnes</option>
        <option value="184">Esneux</option>
        <option value="185">Estaimpuis</option>
        <option value="186">Estinnes</option>
        <option value="187">Etalle</option>
        <option value="188">Etterbeek</option>
        <option value="189">Eupen</option>
        <option value="190">Evere</option>
        <option value="191">Faimes</option>
        <option value="192">Farciennes</option>
        <option value="193">Fauvillers</option>
        <option value="194">Fernelmont</option>
        <option value="195">Ferrières</option>
        <option value="196">Fexhe-le-Haut-Clocher</option>
        <option value="197">Flémalle</option>
        <option value="198">Fléron</option>
        <option value="199">Fleurus</option>
        <option value="200">Flobecq</option>
        <option value="201">Floreffe</option>
        <option value="202">Florennes</option>
        <option value="203">Florenville</option>
        <option value="204">Fontaine-l'Evêque</option>
        <option value="205">Forest</option>
        <option value="206">Fosses-la-Ville</option>
        <option value="207">Frameries</option>
        <option value="208">Frasnes-Lez-Anvaing</option>
        <option value="209">Froidchapelle</option>
        <option value="210">Ganshoren</option>
        <option value="211">Gedinne</option>
        <option value="212">Geer</option>
        <option value="213">Gembloux</option>
        <option value="214">Genappe</option>
        <option value="215">Gerpinnes</option>
        <option value="216">Gesves</option>
        <option value="217">Gouvy</option>
        <option value="218">Grâce-Hollogne</option>
        <option value="219">Grez-Doiceau</option>
        <option value="220">Habay</option>
        <option value="221">Ham-sur-Heure-Nalinnes</option>
        <option value="222">Hamoir</option>
        <option value="223">Hamois</option>
        <option value="224">Hannut</option>
        <option value="225">Hastière</option>
        <option value="226">Havelange</option>
        <option value="227">Hélécine</option>
        <option value="228">Hensies</option>
        <option value="229">Herbeumont</option>
        <option value="230">Héron</option>
        <option value="231">Herstal</option>
        <option value="232">Herve</option>
        <option value="233">Honnelles</option>
        <option value="234">Hotton</option>
        <option value="235">Houffalize</option>
        <option value="236">Houyet</option>
        <option value="237">Huy</option>
        <option value="238">Incourt</option>
        <option value="239">Ittre</option>
        <option value="240">Ixelles</option>
        <option value="241">Jalhay</option>
        <option value="242">Jemeppe-sur-Sambre</option>
        <option value="243">Jette</option>
        <option value="244">Jodoigne</option>
        <option value="245">Juprelle</option>
        <option value="246">Jurbise</option>
        <option value="247">Koekelberg</option>
        <option value="248">Kraainem</option>
        <option value="249">La Bruyère</option>
        <option value="250">La Calamine</option>
        <option value="251">La Hulpe</option>
        <option value="252">La Louvière</option>
        <option value="253">La Roche-en-Ardenne</option>
        <option value="254">Lasne</option>
        <option value="255">Le Roeulx</option>
        <option value="256">Léglise</option>
        <option value="257">Lens</option>
        <option value="258">Les Bons Villers</option>
        <option value="259">Lessines</option>
        <option value="260">Leuze-en-Hainaut</option>
        <option value="261">Libin</option>
        <option value="262">Libramont-Chevigny</option>
        <option value="263">Liège</option>
        <option value="264">Lierneux</option>
        <option value="265">Limbourg</option>
        <option value="266">Lincent</option>
        <option value="267">Linkebeek</option>
        <option value="268">Lobbes</option>
        <option value="269">Lontzen</option>
        <option value="270">Malmedy</option>
        <option value="271">Manage</option>
        <option value="272">Manhay</option>
        <option value="273">Marche-en-Famenne</option>
        <option value="274">Marchin</option>
        <option value="275">Martelange</option>
        <option value="276">Meix-devant-Virton</option>
        <option value="277">Merbes-le-Château</option>
        <option value="278">Messancy</option>
        <option value="279">Mettet</option>
        <option value="280">Modave</option>
        <option value="281">Molenbeek-Saint-Jean</option>
        <option value="282">Momignies</option>
        <option value="283">Mons</option>
        <option value="284">Mont-de-l'Enclus</option>
        <option value="285">Mont-Saint-Guibert</option>
        <option value="286">Montigny-le-Tilleul</option>
        <option value="287">Morlanwelz</option>
        <option value="288">Mouscron</option>
        <option value="289">Musson</option>
        <option value="290">Namur</option>
        <option value="291">Nandrin</option>
        <option value="292">Nassogne</option>
        <option value="293">Neufchâteau</option>
        <option value="294">Neupré</option>
        <option value="295">Nivelles</option>
        <option value="296">Ohey</option>
        <option value="297">Olne</option>
        <option value="298">Onhaye</option>
        <option value="299">Oreye</option>
        <option value="300">Orp-Jauche</option>
        <option value="301">Ottignies-Louvain-la-Neuve</option>
        <option value="302">Ouffet</option>
        <option value="303">Oupeye</option>
        <option value="304">Paliseul</option>
        <option value="305">Pecq</option>
        <option value="306">Pepinster</option>
        <option value="307">Péruwelz</option>
        <option value="308">Perwez</option>
        <option value="309">Philippeville</option>
        <option value="310">Plombières</option>
        <option value="311">Pont-à-Celles</option>
        <option value="312">Profondeville</option>
        <option value="313">Quaregnon</option>
        <option value="314">Quévy</option>
        <option value="315">Quiévrain</option>
        <option value="316">Raeren</option>
        <option value="317">Ramillies</option>
        <option value="318">Rebecq</option>
        <option value="319">Remicourt</option>
        <option value="320">Rendeux</option>
        <option value="321">Rhode-Saint-Genèse</option>
        <option value="322">Rixensart</option>
        <option value="323">Rochefort</option>
        <option value="324">Rouvroy</option>
        <option value="325">Rumes</option>
        <option value="326">Saint-Georges-sur-Meuse</option>
        <option value="327">Saint-Ghislain</option>
        <option value="328">Saint-Gilles</option>
        <option value="329">Saint-Josse-ten-Noode</option>
        <option value="330">Saint-Nicolas</option>
        <option value="331">Saint-Vith</option>
        <option value="332">Sainte-Ode</option>
        <option value="333">Sambreville</option>
        <option value="334">Schaerbeek</option>
        <option value="335">Seneffe</option>
        <option value="336">Seraing</option>
        <option value="337">Silly</option>
        <option value="338">Sivry-Rance</option>
        <option value="339">Soignies</option>
        <option value="340">Sombreffe</option>
        <option value="341">Somme-Leuze</option>
        <option value="342">Soumagne</option>
        <option value="343">Spa</option>
        <option value="344">Sprimont</option>
        <option value="345">Stavelot</option>
        <option value="346">Stoumont</option>
        <option value="347">Tellin</option>
        <option value="348">Tenneville</option>
        <option value="349">Theux</option>
        <option value="350">Thimister-Clermont</option>
        <option value="351">Thuin</option>
        <option value="352">Tinlot</option>
        <option value="353">Tintigny</option>
        <option value="354">Tournai</option>
        <option value="355">Trois-Ponts</option>
        <option value="356">Trooz</option>
        <option value="357">Tubize</option>
        <option value="358">Uccle</option>
        <option value="359">Vaux-sur-Sûre</option>
        <option value="360">Verlaine</option>
        <option value="361">Verviers</option>
        <option value="362">Vielsalm</option>
        <option value="363">Villers-la-Ville</option>
        <option value="364">Villers-le-Bouillet</option>
        <option value="365">Viroinval</option>
        <option value="366">Virton</option>
        <option value="367">Visé</option>
        <option value="368">Vresse-sur-Semois</option>
        <option value="369">Waimes</option>
        <option value="370">Walcourt</option>
        <option value="371">Walhain</option>
        <option value="372">Wanze</option>
        <option value="373">Waremme</option>
        <option value="374">Wasseiges</option>
        <option value="375">Waterloo</option>
        <option value="376">Watermael-Boitsfort</option>
        <option value="377">Wavre</option>
        <option value="378">Welkenraedt</option>
        <option value="379">Wellin</option>
        <option value="380">Wemmel</option>
        <option value="381">Wezembeek-Oppem</option>
        <option value="382">Woluwe-Saint-Lambert</option>
        <option value="383">Woluwe-Saint-Pierre</option>
        <option value="384">Yvoir</option>
      </select>
    </p>

    <p class="row">
      <label for="party-id">Parti</label>
      <select name="party-id" id="party-id" required="required">
        <option value=""></option>
        <option value="19">CD&V - Christen-Democratisch Vlaams</option>
        <option value="13">cdH - Centre démocrate humaniste</option>
        <option value="20">Ecolo</option>
        <option value="29">FDF - Fédéralistes Démocrates Francophones</option>
        <option value="24">FdG - Front des gauches</option>
        <option value="16">Groen !</option>
        <option value="23">LCR - Ligue communiste révolutionnaire</option>
        <option value="22">Lijst Dedecker</option>
        <option value="30">MG - Mouvement de Gauche</option>
        <option value="18">MR - Mouvement réformateur</option>
        <option value="15">NVA - Nieuw-vlaamse alliantie</option>
        <option value="21">Open VLD</option>
        <option value="26">Pirate Party</option>
        <option value="28">PP - Parti Populaire</option>
        <option value="25">Pro Bruxsel</option>
        <option value="12">PS - Parti socialiste</option>
        <option value="14">SLP - Sociaal-liberale</option>
        <option value="10">sp.a - Socialistische partij - anders</option>
        <option value="17">Vlaams belang</option>
        <option value="other" id="other-party">(autre)</option>
      </select>
      <label for="party">Autre parti</label><input type="text" name="party" id="party" class="tiny" />
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

  <fieldset>
    <legend>Le certificat de votre eID fera preuve de signature</legend>
    <p class="center">
      <?= $_SERVER['SSL_CLIENT_S_DN'] ?>
    </p>
  </fieldset>

  <p class="button">
    <input type="hidden" name="form" value="" />
    <input type="submit" class="green" value="Envoyer" />
  </p>
  </form>
<?php

  }
}

?>


</div>

<script src="js/jquery-1-8-2.min.js"></script>
<script>
$('html').removeClass('nojs').addClass('js');

$('#party').prev('label').hide();
$('#party').hide();

$('#party-id').bind('change', function() {
  if ($('option[value="other"]:selected', this))
  {
    $('#party').prev('label').show();
    $('#party').show().focus();
  }
});

$('.signature label').each(function() {
  $(this).bind('click', function() {
    $(this).prev('input').toggleClass('checked');
  });
});
</script>
</body>
</html>
