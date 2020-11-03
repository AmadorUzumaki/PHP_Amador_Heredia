<?php
$timeofday[]="Morning";
$timeofday[]="Noon";
$timeofday[]="Afternoon";
$timeofday[]="Evening";
$timeofday[]="Night";
$dishes[]="Beef with mushroom sauce";
$dishes[]="Spaghetti carbonara";
$dishes[]="Spanish omelette";
$alarm=array(8, 12, 14, 16, 20);
$components=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

foreach($timeofday as $vector1 => $time1) {
  echo "This content is inside number: $vector1<br>count($vector1)<br>$time1<br>";
}
echo "<br>";
foreach ($dishes as $vector2 => $name1) {
  echo "$name1<br>";
}
echo "<br>";
foreach ($alarm as $vector3 => $time2) {
  echo "$time2<br>";
}
echo "<br>";
foreach ($components as $vector4 => $name2) {
  echo "$name2<br>";
}
?>
