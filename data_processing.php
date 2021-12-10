<?php
  require 'utils.inc.php';
  start_page('data_processing');
  //echo "la page fonctionne";
  //var_dump($_POST);
  $action = $_POST['action'];
  $login = $_POST['Identifiant'];
  $email = $_POST['E-mail'];
  $password = $_POST['mot_de_passe1'];
  $sexe = $_POST['sexe'];
  $tel = $_POST['telephone'];
  $pays = $_POST['pays'];
  session_start();
?>


<?php
  if($action == "S'inscrire"){
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL . '<br/>' ;
    $message .= 'Identifiant : ' . $id . PHP_EOL . '<br/>' ;
    $message .= 'Email : ' . $email . '<br/>' ;
    $message .= 'Mot de passe : ' . PHP_EOL . $password. '<br/>' ;
    $message .= 'Sexe : ' .PHP_EOL . $sexe. '<br/>' ;
    $message .= 'Téléphone : ' .PHP_EOL .$tel . '<br/>' ;
    $message .= 'Pays : ' .PHP_EOL .$pays . '<br/>' ;
    mail($email, $id, $message);
    $today = date('Y-m-d');
    echo 'Mail envoyé et inscription enregistrer' . '<br/>';
    $query = 'INSERT INTO user (date, email, motdepasse, sexe, telephone, pays, login) VALUES (\'' . $today . '\', \''
      . $email . '\', \'' . $password . '\' , \'' . $sexe . '\' , \'' . $tel . '\' , \'' . $pays . '\' , \'' . $login . '\')';
    echo '<a href="index.php"> Revenir a la page principale </a>';
    $dbLink = mysqli_connect('mysql-testbd.alwaysdata.net', 'testbd', 'Hermione2012$') or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'testbd_user') or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    #echo $query;
    if(!($dbResult = mysqli_query($dbLink, $query)))
       {
         echo 'Erreur de requête<br/>';
         // Affiche le type derreur.
         echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
         // Affiche la requête envoyée.
         echo 'Requête : ' . $query . '<br/>';
        exit();
      }



    }
  else{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
  }

?>


<?php
  end_page();
?>
