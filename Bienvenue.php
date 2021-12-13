<?php
  require 'utils.inc.php';
  start_page('Bienvenue');
  session_start();
  if(!isset($_SESSION['suid']))
  {
    die('Erreur d\'authentification');
  }
  else
  {
  ficheCSS('Bienvenue.css');

?>


<div>
    <h1>Bienvenue</h1>

    <p> Vous etes connecté au site avec succes
</div>
<div class="superidol">
  <video autoplay loop id="vidfond">
    <source src="https://cdn.discordapp.com/attachments/779046355674202182/919614774269067274/yt1s.com_-_Super_Idol_ORIGINAL_1080pFHR.mp4" type="video/mp4">
  </video>



</div>

<?php } ?>


<?php
  end_page();
?>
