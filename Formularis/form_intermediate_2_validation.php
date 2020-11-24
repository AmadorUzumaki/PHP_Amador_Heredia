<?php
$nom="Amador Heredia Roldan";
function fullNameSplit($nom){
  return explode(" ", $nom);

}
$multiple=fullNameSplit($nom);
foreach ($multiple as $value) {
  echo "$value<br>";
}
echo "<br>";
$password="Paco";
function encryptPasswd($password){
 return password_hash($password, PASSWORD_DEFAULT);
}
echo encryptPasswd($password);
?>
