<?php
 

  

    $id = sanitize($_POST["id"]);

    $email = sanitize($_POST["email"]) ;
    $userrole = sanitize($_POST["userrole"]) ;
    $oldrole = sanitize($_POST["oldrole"]) ;

    $sql = "UPDATE `login` SET 
                    `email` = '$email',`updateDate` = CURRENT_TIMESTAMP 
            WHERE `login` . `iduser` = $id;";
  mysqli_query($conn, $sql);
    $sql2 = "UPDATE `rollen_link` SET `idrollen` = '$userrole',`updateDate` = CURRENT_TIMESTAMP WHERE `rollen_link`.`iduser` = $id AND `rollen_link`.`idrollen` = $oldrole";

    mysqli_query($conn, $sql2);
    

    header("Refresh: 1; ./index.php?content=gebruikersrollen");
?>