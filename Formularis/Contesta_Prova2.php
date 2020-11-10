<?php
    echo "$_GET[nom]<br>";
    echo "$_GET[email]<br>";
    foreach ($_GET['navegadors'] as $opcio){
                echo $opcio . "\n";
    }
    /*echo "$_POST[nom]<br>";
    echo "$_POST[email]<br>";
    foreach ($_POST['navegadors'] as $opcio){
                echo $opcio . "\n";
    }  */
?>
