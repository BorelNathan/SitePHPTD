<?php
require 'utils.inc.php';
//include 'data_processing.php';
$iplocal = $_SERVER['REMOTE_ADDR'];
$ipserv = $_SERVER['HTTP_HOST'];
$servsoft = $_SERVER['SERVER_SOFTWARE'];
$dateEN = date('m-d-Y');
$dateFR = date('d-m-Y');
?>

<style>
  h1 {color:#FF0000;
      font-family: monospace;
      padding-left: 40%;
      font-size: 45;

      }
  p {color:blue;
      font-family: monospace;
      font-size: 17;

    }
  .titre{
    padding-left: 10%;
    padding-top: 30px;


  }
  .hyperliens {color:#FF0000;
      font-family: monospace;
      font-size: 17;
    }


    form {
      font-family: monospace;
      font-size: 18;
      padding-left: 65%;
      padding-top: 150px;

    }
    .button {
      display: inline-block;
      background-color: #FF0000;
      border-radius: 10px;
      color: #eeeeee;
      text-align: center;
      font-size: 15px;
      padding: 20px;
      width: 100px;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
      }
    .inputtext{
      color: purple;
      font-size: 20px;
    }
    .sexe{
      color: purple;
      font-size: 20px;
      font-weight: bold;
      padding: 20px;
    }
    .connection{
      padding-left: 65%;
    }

</style>

<?php
  start_page('Page principale');
?>
    <?php
      echo '<h1>Bienvenue sur mon site</h1><br/>' . "\n";
      echo '<p class="titre">nyaaaa</p><br/>';
      echo '<p class="titre">d\'ailleurs ton ip c\'est ' . "$iplocal" . ' gros bakaaaa >///< ' . '</br>';
      echo 'd\'ailleurs l\'ip du serveur c\'est ' . "$ipserv" . '</br>';
      echo 'd\'ailleurs le software du serveur c\'est ' . "$servsoft";
      echo '<p class="titre" >' . "\n";
      echo $dateEN . ' <- la date en anglais ' . '<br/>' . "\n";
      echo $dateFR . ' <- la date en français cette fois ' . '<br/>' . "\n";
      echo '<a class="hyperliens class="titre"" target="_blank" href="https://www.youtube.com/watch?v=AWOyEIuVzzQ">Bing Chilling </a>' . '<br/>' . "\n";
      echo 'Une surpise si tu clique (calculator)<a class="hyperliens" target="_blank" href="calculator.php"> là :3 </a>';

     ?>
<p>
     <br>


     <form action="data_processing.php" method="POST" name="formulaire">
      <a class="inputtext"> <input type="text" name="Identifiant" /> Identifiant <br/>
      <a class="sexe"> <input type="radio" name="sexe" value="M"/>M
      <a class="sexe"> <input type="radio" name="sexe" value="F"/>F <br/>
      <a class="inputtext"> <input type="text" name="E-mail" /> E-mail  <br/>
      <a class="inputtext"> <input type="password" name="mot de passe1" /> Mot de passe <br/>
      <a class="inputtext"> <input type="password" name="mot de passe2" /> Vérifier le mot de passe <br/>
      <a class="inputtext"> <input type="text" name="telephone" /> Numéro de téléphone <br/>
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
     <input class="button" type="submit" name="action" value="S'inscrire" /> Soumettre le formulaire <br/>
   </form><br/>

     <a class="hyperliens connection" target="_blank" href="login.php">Se connecter </a>
</p>
<?php
  end_page();
?>
