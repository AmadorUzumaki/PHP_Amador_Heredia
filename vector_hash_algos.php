<?php
//visusi corrections - OK
/*
Donada la funcio de php hash_algos()
1-Mostra amb un bucle for each tots els seus elements
2- de manera ordenada alfabeticament
3- I mostra amb accés directe per posició als elements amb els valors:
    sha256
    md5
mes informació al link:
https://www.php.net/manual/en/function.hash-algos.php
......
*/
$vector=hash_algos();
foreach ($vector as $value){
  echo "$value<br>";
}
echo "<br><br><br>";
$vector2=hash_algos();
sort($vector2);
foreach ($vector2 as $value){
  echo "$value<br>";
}
$vector3=hash_algos();
echo "<br><br><br>";
echo "$vector3[5]<br>";
echo $vector3[2];
 ?>
