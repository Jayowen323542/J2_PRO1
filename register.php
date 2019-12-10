<?php


  // Het email is nu schoongemaakt en fraudebestendig
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);
  $naam = sanitize($_POST["naam"]);
  $postcode = sanitize($_POST["postcode"]);
  $plaats = sanitize($_POST["plaats"]);
  // Maak een selectie query voor het ingevulde emailadres
  $sql = "SELECT * FROM `login` WHERE `email` = '$email'";

  // Vuur de query af op de database
  $result = mysqli_query($conn, $sql);

  // Tel het aantal resultaten uit de database voor dat emailadres
  if ( mysqli_num_rows($result) == 1 ) {
    echo '<div class="alert alert-info" role="alert">
            Uw emailadres bestaat al. Kies een ander emailadres...
          </div>';
          header("Refresh: 4; url=./index.php?content=registerform");
  } else {

  // Ik ga een ingewikkeld tijdelijk password verzinnen
  date_default_timezone_set("Europe/Amsterdam");
  $date = date('d-m-Y H:i:s');
  

  
  $password_hash = password_hash($password, PASSWORD_BCRYPT);

  // We maken onze insert-query
  $sql = "INSERT INTO `login` (`iduser`,
                               `email`,
                               `password`,
                               `createDate`,
                               `updateDate`
                               )
                    VALUES    (NULL,
                               '$email',
                               '$password_hash',
                               '$date',
                               '$date')";

  $result = mysqli_query($conn,$sql);


  // Met mysqli_insert_id($conn) kun je het laatst gemaakte id opvragen uit de database
  $id = mysqli_insert_id($conn);
  
    $sql2= "INSERT INTO `bedrijf_gegevens` 
    (`iduser`,
     `email`,
      `naam`,
       `plaats`,
        `Bedrijf`,
         `postcode`,
          `createDate`
          , `updateDate`) 
    VALUES ('$id', 
    '$email', 
    '$naam',
     '$plaats', 
     NULL, 
     '$postcode',
      CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    $result2 = mysqli_query($conn,$sql2);

    $sql3 = "INSERT INTO `rollen_link` (`iduser`, `idrollen`, `createDate`, `updateDate`) VALUES ('$id', '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    $result3 = mysqli_query($conn,$sql3);


  if ($result) {
    echo '<div class="alert alert-success" role="alert">
            U heeft uw acount aangemaakt.
          </div>';
    header("Refresh: 4; url=./index.php?content=loginform");
  } else {
    echo '<div class="alert alert-danger" role="alert">
            Er is iets mis gegaan met de registratie, probeer het opnieuw.
          </div>';
    header("Refresh: 4; url=./index.php?content=registerform");
    
  }

}
?>
