<?php

$titel = sanitize($_POST["titel"]);
$loon = sanitize($_POST["loon"]);
$tot_uur = sanitize($_POST["tot_uur"]);
$datum = sanitize($_POST["datum"]);
$beschrijving = sanitize($_POST["beschrijving"]);
$id = sanitize($_POST["id"]);


$sql = "UPDATE `opdrachten` SET `titel` = '$titel',
 `loon` = '$loon',
  `tot_uur` = '$tot_uur',
   `datum` = '$datum',
    `beschrijving` = '$beschrijving' 
    ,`updateDate` = 
CURRENT_TIMESTAMP
WHERE `opdrachten`.`idopdracht` = '$id'";

$result = mysqli_query($conn,$sql);

echo '<div class="alert" role="alert">
            Uw opdracht is aangemaakt
          </div>';
    header("Refresh: 1; url=./index.php?content=company_home");

?>