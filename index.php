<?php
require 'utils.inc.php';
//include 'data_processing.php';
$iplocal = $_SERVER['REMOTE_ADDR'] . '<br/>' ;
$ipserv = $_SERVER['HTTP_HOST'] . '<br/>';
$servsoft = $_SERVER['SERVER_SOFTWARE'];
$int1 = 3;
$int2 = 2;
$d = date('l F d, Y');
?>

<?php
  start_page('Page principale');
?>
    <?php
      echo '<strong>Bienvenue sur mon premier site utilisant le PHP!</strong><br/>' . "\n";
      echo '<p>C\'est sympa non?</p><br/>' . "\n";
      echo 'd\'ailleurs ton ip c\'est ' . "$iplocal" . 'gros bakaaaa >///< '. '<br/>';
      echo 'd\'ailleurs l\'ip du serveur c\'est ' . "$ipserv" ;
      echo 'd\'ailleurs le software du serveur c\'est ' . "$servsoft";
      echo '<p>' . "\n";
      echo $d . ' <- la date  ' . '<br/>' . "\n";
      echo '<a target="_blank" href="https://www.youtube.com/watch?v=AWOyEIuVzzQ">Bing Chilling </a>' . '<br/>' . "\n";
      echo 'Une surpise si tu clique (calculator)<a target="_blank" href="calculator.php"> là :3 </a>';

     ?>

     <form action="data_processing.php" method="POST" name="formulaire">
      <input type="text" name="Identifiant" /> Identifiant <br/>
      <input type="radio" name="sexe" value="M"/>M
      <input type="radio" name="sexe" value="F"/>F <br/>
      <input type="text" name="E-mail" /> E-mail  <br/>
      <input type="password" name="mot de passe1" /> Mot de passe <br/>
      <input type="password" name="mot de passe2" /> Vérifier le mot de passe <br/>
      <input type="text" name="telephone" /> Numéro de téléphone <br/>
      <label for="pays">Choisir un pays : </label> <br/>
      <select name="pays" id="choix-pays">
        <option value="">Choisir un pays valide</option>
        <option value="france">France</option>
        <option value="allemagne">Allemagne</option>
        <option value="italie">Italie</option>
        <option value="espagne">Espagne</option>
        <option value="corse">Corse</option>
        <option value="algérie">Algérie</option>
      </select> <br/>
     <input type="checkbox" name="CG" required="required"/> Cochez pour accepter les conditions générales <br/>
     <input type="submit" name="action" value="S'inscrire" /> Soumettre le formulaire <br/>
   </form><br/>

     <a target="_blank" href="login.php">Se connecter </a>

<?php
  end_page();
?>
