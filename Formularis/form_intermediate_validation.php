<?php
function emailValidation($email)
{
return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function equalStrings($string1, $string2)
{
  if (strcmp($string1, $string2) !==0)
  return false;
  return true;
}
if (!emailValidation("amadorheredia@gmail.com")){
  echo "El correu no és correcte";
}
  echo "<br><br>";
if (equalStrings("Hola", "H"))
  echo "Són diferents";
?>
