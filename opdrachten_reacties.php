
<div>Reacties</div>
<div class="row">

<?php
 $id = sanitize($_GET["id"]);
 $sql2 = "SELECT * FROM `opdrachten_reacties` WHERE `idopdracht` = '$id'";
$result = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result);
echo $sql2;

$iduser = $row2["iduser"];
$sql = "SELECT * FROM `student_gegvens` WHERE `iduser` = '$iduser'";
$result2 =  mysqli_query($conn,$sql);
echo $sql;

while($row = mysqli_fetch_assoc($result2)){
echo "<div class='col-sm-3'><div class='card' style='width: 18rem;'>
 
<div class='card-body'>
  <h5 class='card-title'>".$row["naam"]." " .$row["tussenvoegsel"]." ". $row["achternaam"] ."</h5>
  <p class='card-text'>".$row["email"]."</p>
  <a href='./index.php?content=company_home&id=".$row["iduser"]."' class='btn btn-dark'>Zie CV</a>
  <a href='./index.php?content=opdracht_acepteer-script&iduser=".$row["iduser"]."&idop=".$id."' class='btn btn-success'>Acepteer</a>
</div>
</div>

</div>";



}

  ?>
  </div>