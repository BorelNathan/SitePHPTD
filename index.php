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
  h1 {
      color:#FF0000;
      font-family: monospace;
      text-align: center;
      font-size: 45;

      }
  p {
      color:white;
      font-family: monospace;
      font-size: 17;

    }

  .titre {
      padding-left: 10%;
      padding-top: 30px;


  }
  .hyperliens {

      font-family: monospace;
      font-size: 18;
      font-weight: bolder;
      color: white;
  }

    .button {
      display: inline-block;
      background-color: #004296;
      border-radius: 10px;
      color: #eeeeee;
      text-align: center;
      font-size: 15px;
      padding: 10px;
      width: 100px;
      cursor: pointer;
      margin: 5px;
      font-weight: bold;
  }
    .inputtext{
      display: grid;
      background-color: #0070FF;
      border-radius: 10px;
      color: #eeeeee;
      font-size: 15px;
      padding: 10px;
      font-weight: bold;
      margin-right: 220px;
      margin-bottom: 10px;


  }
    .sexe{

      font-size: 20px;
      font-weight: bold;
      padding: 90px;
  }
    .connection{
      padding-left: 65%;
      font-weight: bolder;
      color: white;
  }
    .formulaire{
      background: rgb(63,94,251);
      background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(70,223,252,1) 100%);
      padding: 10px;
      font-family: monospace;
      font-size: 18;
      border-radius: 10px;
      margin-left: 500px;
      margin-right: 500px;
      padding-left: 200px;
      color: white;
  }
    .div1{
      background: rgb(131,58,180);
      background: linear-gradient(149deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
      margin-left: 500px;
      margin-right: 500px;
      border-radius: 10px;

    }



</style>

<?php
  start_page('Page principale');
?>


    <h1><u>Bienvenue sur mon site</u></h1><br/>

<div class="div1">

    <?php


      echo '<p class="titre">Nyaaaa</p><br/>';
      echo '<p class="titre">D\'ailleurs ton ip c\'est ' . "$iplocal" . ' gros bakaaaa >///< ' . '</br>';
      echo 'D\'ailleurs l\'ip du serveur c\'est ' . "$ipserv" . '</br>';
      echo 'D\'ailleurs le software du serveur c\'est ' . "$servsoft";
      echo '<p class="titre" >' . "\n";
      echo $dateEN . ' <- la date en anglais ' . '<br/>' . "\n";
      echo $dateFR . ' <- la date en français cette fois ' . '<br/>' . "\n";
      echo '<a class="hyperliens class="titre"" target="_blank" href="https://www.youtube.com/watch?v=AWOyEIuVzzQ">Bing Chilling </a>' . '<br/>';
      echo 'Une surpise si tu clique (calculator)<a class="hyperliens" target="_blank" href="calculator.php"> là :3 </a>' . '<br/>';


     ?>
     <br/>
</div>


<div class="formulaire">
  <p>



     <form action="data_processing.php" method="POST" name="formulaire">
      <a class="inputtext"> <input required="required" type="text" name="Identifiant" /> Identifiant <br/>
      <a class="sexe"> <input type="radio" name="sexe" value="M"/>M
      <a class="sexe"> <input type="radio" name="sexe" value="F"/>F <br/>
      <a class="inputtext"> <input required="required" type="text" name="E-mail" /> E-mail  <br/>
      <a class="inputtext"> <input required="required" type="password" name="mot de passe1" /> Mot de passe <br/>
      <a class="inputtext"> <input required="required" type="password" name="mot de passe2" /> Vérifier le mot de passe <br/>
      <a class="inputtext"> <input required="required" type="text" name="telephone" /> Numéro de téléphone <br/>
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

     <a class="connection" target="_blank" href="login.php">Se connecter </a>
   </p>
</div>

<?php
  end_page();
?>
