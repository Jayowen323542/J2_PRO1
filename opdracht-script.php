<?php 



$titel = sanitize($_POST["titel"]);
$loon = sanitize($_POST["loon"]);
$tot_uur = sanitize($_POST["tot_uur"]);
$datum = sanitize($_POST["datum"]);
$beschrijving = sanitize($_POST["beschrijving"]);
$iduser = sanitize($_POST["iduser"]);


$sql = "INSERT INTO `opdrachten` 
(`idopdracht`, 
`iduser`, 
`titel`, 
`loon`, 
`tot_uur`, 
`datum`, 
`beschrijving`, 
`createDate`, 
`updateDate`) 
VALUES 
(NULL, 
'$iduser', 
'$titel', 
'$loon', 
'$tot_uur', 
'$datum', 
'$beschrijving', 
CURRENT_TIMESTAMP, 
CURRENT_TIMESTAMP)";

$result = mysqli_query($conn,$sql);

echo '<div class="alert alert-danger" role="alert">
            Uw opdracht is aangemaakt
          </div>';
    header("Refresh: 1; url=./index.php?content=company_home");

?>