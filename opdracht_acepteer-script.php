<?php

$iduser = sanitize($_GET["iduser"]);
$idop = sanitize($_GET["idop"]);
$sql ="UPDATE `opdrachten` SET `idstudent` = '$iduser',`status` = '1',`updateDate` = CURRENT_TIMESTAMP WHERE `opdrachten`.`idopdracht` = '$idop'";

mysqli_query($conn ,$sql);




 header("Refresh: 1; ./index.php?content=company_home");
?>