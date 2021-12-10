<?php
require 'functions.php';
$cringe = $_SERVER['REMOTE_ADDR'];
$int1 = 3;
$int2 = 2;
$d = date('l F d, Y');
?>

<?php
start_page('TD1');
?>
<?php
echo '<strong>Bienvenue sur mon premier site utilisant le PHP!</strong><br/>' . "\n";
echo '<p>C\'est sympa non?</p><br/>' . "\n";
echo 'd\'ailleurs ton ip c\'est ' . "$cringe";
?>
<?php
echo '<p>' . "\n";
echo '$int1 + $int<br/>' . "\n";
echo 'Ah... Je crois que je me suis trompé...<br/>' . "\n";
?>
<?php
echo "$int1 + $int2" . '<br/>' . "\n";
echo 'Ah, c\'est mieux!' . '<br/>' . "\n";
echo $int1 + $int2 . '<br/>' . "\n";
echo 'Maintenant on a le résulat >///< <br/>'."\n";
echo $d . ' C\'est la date de maintenant ◔‿◔' . '<br/>' . "\n";
echo '<a target="_blank" href="https://www.youtube.com/watch?v=AWOyEIuVzzQ">Bing Chilling </a>' . '<br/>' . "\n";
echo 'Une surpise si tu clique (calculator)<a target="_blank" href="calculator.php">là :3 </a>';

?>
<?php
end_page();
?>
