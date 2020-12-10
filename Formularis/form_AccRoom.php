<?php
//Definició de variable i assignació de valor null
$finalPrice=$partialPrice2=$partialPrice=$viewsPrice=$genderPrice=$typePrice=$foodServices=$views=$gender=$type=null;

//Afegeix la inclucció per a incloure el fitxer de calcul de preus
include('form_AccRoom_calculation.php');
//comprova que hi ha request del metode get o post emprat
if ($_GET){
  //emmagatzemar en una variable el tipus de l'habitació seleccionada
  $type=$_GET['type'];
  //el tipus seleccionat sera un array
    foreach ($type as $optionType){

    }
  //emmagatzemar en una variable el genere de l'habitació seleccionada
  $gender=$_GET['gender'];

  //emmagatzemar en una variable si s'ha seleccionat l'habitació amb vistes o no
    $views=$_GET['views'];
//emmagatzemar en una variable els serveis de restauració seleccionats
  $foodServices=$_GET['foodServices'];
  //Si la variable $type ha sigut inicialitzada i no es null
  //calcular del preu del tipus d'habitació
  if (isset($type) and $type!=null){
       $typePrice = typePriceCalculation($optionType);
  }
  //Si la variable $gender ha sigut inicialitzada i no es null
  //calcular del preu del genere de l'habitació
  if (isset($gender) and $gender!=null){
    $genderPrice=genderPriceCalculation($gender);
  }

  //Si la variable $views ha sigut inicialitzada i no es null
  //calcular del preu del segons les vistes de l'habitació
  if (isset($views) and $views!=null){
    $viewsPrice=viewsPriceCalculation($views);
  }

  //Si la variable $foodServices ha sigut inicialitzada i no es null
  //calcular del preu del segons els serveis seleccionats de l'habitació
    if (isset($foodServices) and $foodServices!=null){
      $foodServicesPrice=foodServicesPriceCalculation($foodServices);
    }

  //si els preus del tipus i el genere de l'habitacio son major de 0
  //sumar-los i assignar el resultat a la variable $partialPrice
  if($typePrice>0 and $genderPrice>0){
    $partialPrice=$typePrice+$genderPrice;
  }
  //sino asignar valor 0 a $partialPrice
  else {
    $partialPrice=0;
  }

  //si els preus de les vistes i els serveis de restauracio diferent de 0
  //sumar-los i assignar el resultat a la variable $partialPrice2
  if($viewsPrice!=0 and $foodServicesPrice!=0){
    $partialPrice2=$viewsPrice+$foodServicesPrice;
  }
  //sino asignar valor 0 a $partialPrice2
  else {
    $partialPrice2=0;
  }

  //calcul del preu final
  //suma dels preus parcials calculats
  $finalPrice=$partialPrice+$partialPrice2;

}//end GET
?>
<HTML>
<head>
    <title>Accommodation Form</title>
</head>
<body>
    <H2>Accommodation room details</H2>
    <h3>Fill the form with the details of the room you want to book, please.</h3>
<!--1. configura l'action per a recarregar la mateixa pagina-->
<!--1. configura el metode PHP que mostra els parametres a la url del navegador-->
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
       <!--room type-->
          <b>Room type:</b><br><br>
       <select name="type[]">
           <option value="single" selected>single</option>
           <option value="double">double</option>
       </select>
       <!--room gender-->
          <br><br><b>Room gender:</b><br><br>
          <input type="radio" name="gender" value="male" checked>Male<br>
          <input type="radio" name="gender" value="female">Female<br>
          <input type="radio" name="gender" value="mixed">Mixed<br>
      <!--room views-->
       <br><br>Room view:
      <input type="checkbox" name="views" value="yes" checked>

      <!--room type-->
       <br><br><b> Food service included:</b><br><br>
          <select name="foodServices[]" size="5" multiple>
            <option value="breakfast" selected>breakfast</option>
            <option value="lunch">lunch</option>
            <option value="snack">snack</option>
            <option value="dinner">dinner</option>
            <option value="drinks">drinks</option>
          </select>
      <br><br>
      <INPUT TYPE="submit" VALUE="Room price calculation">

    </FORM>

    <?php
    //Si s'ha calculat el preu, es a dir si $finalPrice no es null i té un valor
    if ($finalPrice!=null){
        //Mostrar el missatge amb el preu total
        echo $finalPrice;
    }
  ?>
</body>
</HTML>
