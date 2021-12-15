<?php
require 'utils.inc.php';
//include 'data_processing.php';
$iplocal = $_SERVER['REMOTE_ADDR'];
$ipserv = $_SERVER['HTTP_HOST'];
$servsoft = $_SERVER['SERVER_SOFTWARE'];
$dateEN = date('m-d-Y');
$dateFR = date('d-m-Y');
$connection = 'Se connecter';
$pageconnection = 'login.php';
$calculator = 'La calculatrice si tu clique là :3 ';
$pagecalculator = 'calculator.php' ;
$BingChilling = 'Bing Chilling ';
$BingChillingLien = 'https://www.youtube.com/watch?v=AWOyEIuVzzQ';
?>


<?php
  start_page('Page principale');
  ficheCSS('index.css')
?>

    <h1 class="titredelapage"><u>Bienvenue sur mon site</u></h1><br/>

<div class="div1">

    <?php

      echo '<p class="titre">Nyaaaa</p><br/>';
      echo '<p class="titre">D\'ailleurs ton ip c\'est ' . "$iplocal" . ' gros bakaaaa >///< ' . '</br>';
      echo 'D\'ailleurs l\'ip du serveur c\'est ' . "$ipserv" . '</br>';
      echo 'D\'ailleurs le software du serveur c\'est ' . "$servsoft";
      echo '<p class="titre" >' . "\n";
      echo $dateEN . ' <- la date en anglais ' . '<br/>' . "\n";
      echo $dateFR . ' <- la date en français cette fois ' . '<br/>' . "\n";

    ?>

      <a class="hyperliens" class="titre" target="_blank" href="<?php echo $BingChillingLien; ?>"> <?php echo $BingChilling; ?> </a> <br/>
      <a class="hyperliens" target="_blank" href="<?php echo $pagecalculator; ?>"> <?php echo $calculator; ?> </a> <br/>



     <br/>
</div>


<div class="formulaire">
  <p>



     <form action="data_processing.php" method="POST" name="formulaire">
      <p class="inputtext"> <input required="required" type="text" name="Identifiant" /> Identifiant <br/>
      <p class="sexe"> <input type="radio" name="sexe" value="M"/>Homme
      <p class="sexe"> <input type="radio" name="sexe" value="F"/>Femme <br/>
      <p class="inputtext"> <input required="required" type="text" name="E-mail" /> E-mail  <br/>
      <p class="inputtext"> <input required="required" type="password" name="mot de passe1" /> Mot de passe <br/>
      <p class="inputtext"> <input required="required" type="password" name="mot de passe2" /> Vérifier le mot de passe <br/>
      <p class="inputtext"> <input required="required" type="text" name="telephone" /> Numéro de téléphone <br/>
      <br/>
      <label for="pays">Choisir un pays : </label> <br/>
      <select name="pays" id="choix-pays">
        <option value="">France</option>
        <option value="france">Belgique</option>
        <option value="allemagne">Allemagne</option>
        <option value="italie">Italie</option>
        <option value="espagne">Espagne</option>
        <option value="corse">Corse</option>
        <option value="algérie">Algérie</option>
      </select> <br/>
     <label>Cochez pour accepter les conditions générales</label>
     <input type="checkbox" name="CG" required="required"/>  <br/>
     <input class="button" type="submit" name="action" value="S'inscrire" /> <br/>
   </form><br/>
     <a class="connection" href="<?php echo $pageconnection; ?>"> <?php echo $connection; ?> </a>
   </p>
</div>

<?php
  end_page();
?>
