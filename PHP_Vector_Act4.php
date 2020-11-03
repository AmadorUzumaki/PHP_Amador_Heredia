<?php
$month['January']=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
$dishes['Menu']=array("Beef with mushroom sauce", "Spaghetti carbonara", "Spanish omelette");
$alarm['Alarm']=array(8, 12, 14, 16, 20);
$components['Products']=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

foreach($month as $vector1 => $days) {
  foreach ($days as $day) {
    echo "$day<br>";
  }
}
echo "<br>";
foreach ($dishes as $vector2 => $plats) {
  foreach ($plats as $plat) {
    echo "$plat<br>";
  }
}
echo "<br>";
foreach ($alarm as $vector3 => $times) {
  foreach ($times as $time) {
    echo "$time<br>";
  }
}
echo "<br>";
foreach ($components as $vector4 => $parts) {
  foreach ($parts as $part) {
    echo "$part<br>";
  }
}
?>
