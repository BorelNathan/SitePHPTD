<?php require("utils.inc.php");
 start_page('calculator');

 ?>
<html lang="fr">



<form action="calcul.php" method="GET" id="form" name="op">
<input type="text" name="number1"><br/></input>
<input type="text" name="number2"><br/></input>
<!-- <input checked="checked" type="radio" name="op" value="*"/>*<br/> -->
<!-- <input type="radio" name="op" value="+"/>+<br/> -->
<!-- <input type="radio" name="op" value="-"/>-<br/> -->
<!-- <input type="radio" name="op" value="/"/>/<br/> -->

<?php
$operators = '+-*/';
for($cpt = 0; $cpt <= 3; ++$cpt){
  echo '<input ';
  if($cpt == 0){
    echo 'checked="checked" ';
  }
  echo 'type="submit" name="op" value="' . $operators[$cpt] . '"/>' . "\n";
}
?>
</form>


<button type="reset">
  Reset
</button>

<?php
  end_page();
?>
