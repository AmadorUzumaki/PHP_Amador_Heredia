<?php
$curs=array(
  //1er curs
  array("codi" => 1,
        "nom" => "Base de dades"),
  array("codi" => 2,
        "nom" => "Llenguatge de marques"),
  array("codi" => 3,
        "nom" => "Xarxes"),
  array("codi" => 4,
        "nom" => "Sistemes operatius"),
  array("codi" => 5,
        "nom" => "FOL")
);


foreach($curs as $x) {
  foreach ($x as $assignatura =>  $y) {
  echo "<b>$assignatura:</b> $y ";
  }
  echo "<br>";
}
?>
