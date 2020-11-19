<?php
if($_GET){
$nom="$_GET[nom]";
$email="$_GET[email]";
$genere="$_GET[gender]";
$termes="$_GET[terms]";
$contrasenya="$_GET[pwd]";
$datanaix="$_GET[dateOfBirth]";
$text="$_GET[comment]";
$curs="$_GET[cursos]";
};
?>
<HTML>
<meta charset="utf-8">
<head>
    <title>Un exemple amb un formulari</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
    <!--<form action="Contesta_Prova2.php" method="POST">-->
        Nom:
        <input type="text" name="nom" value="<?php if(isset($nom)){echo $nom;} ?>">
        <br>Correu electrònic:
        <input type="text" name="email">
        <br>Gènere:
        <br>
        <input type="radio" name="gender" value="male">Mascle</input>
        <input type="radio" name="gender" value="female">Femella</input>
        <input type="radio" name="gender" value="other">Altre</input>
        <br>Acceptes els termes i condicions?
        <br>
        <input type="checkbox" name="terms" value="agreed">
        <br>Contrasenya:
        <br>
         <input type="password" name="pwd">
        <br>Data de naixement:
        <br>
        <input type="date" name="dateOfBirth">
        <br>Àrea de text:
        <br>
        <textarea name="comment" rows="5" cols="40"></textarea>
        <br>CFGS:
        <br>
        <select name="cursos">
            <option style="display:none">
            <option value="DAW">DAW</option>
            <option value="ASIX">ASIX</option>
        </select>
        <br>
        <input type="submit" value="Envia">
    </form>
</body>
</HTML>
<?php
if(isset($nom)){
  echo "$nom<br>";
}
if(isset($email)){
  echo "$email<br>";
}
if(isset($genere)){
  echo "$genere<br>";
}
if(isset($termes)){
  echo "$termes<br>";
}
if(isset($contrasenya)){
  echo "$contrasenya<br>";
}
if(isset($datanaix)){
  echo "$datanaix<br>";
}
if(isset($text)){
  echo "$text<br>";
}
if(isset($curs)){
  echo "$curs<br>";
}
?>
