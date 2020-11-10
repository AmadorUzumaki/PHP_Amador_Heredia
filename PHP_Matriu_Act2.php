<?php

$days_31=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
$days_30=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
$days_28=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28);

$calendar=array(
  "January" => $days_31,
  "February" => $days_28,
  "March" => $days_31,
  "April" => $days_30,
  "May" => $days_31,
  "June" => $days_30,
  "July" => $days_31,
  "August" => $days_31,
  "September" => $days_30,
  "October" => $days_31,
  "November" => $days_30,
  "December" => $days_31
);
foreach($calendar as $month => $days) {
  echo "$month ";
  foreach ($days as $day) {
    echo "$day ";
  }
  echo "<br>";
}

?>
