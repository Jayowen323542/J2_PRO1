<div class="row">

<?php
$iduser = $_SESSION["id"];
$result = mysqli_query($conn,"SELECT * FROM `opdrachten` WHERE `iduser` = '$iduser'");
while($row = mysqli_fetch_assoc($result)){
echo "<div class='col-sm-3'>
<div class='card' style='width: 18rem;'>
  <img src='./img/Huis-schoonmaken.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'> ". $row['titel'] ."</h5>
    <p class='card-text'>". $row['beschrijving'] ."</p>
  </div>
  <ul class='list-group list-group-flus'>
    <li class='list-group-item'>Loon: ". $row['loon'] ."</li>
    <li class='list-group-item'>Datum: ". $row['datum'] ."</li>
    <li class='list-group-item'>
    <p class='card-text'>Aangemaakt: ". $row['createDate'] ."</p>
    <p class='card-text'>Geupdate: ". $row['updateDate'] ."</p>
    </li>
  </ul>
  <div class='card-body'>
  <a href='./index.php?content=opdrachten_reacties&id=". $row["idopdracht"] ."' class='card-link'>Zie Reacties</a>
    <a href='./index.php?content=opdracht_change&id=". $row["idopdracht"] ."' class='card-link'>Verander</a>
  </div>
</div>
</div>";



}

  ?>
  </div>
  <br>
<a href="./index.php?content=bedrijfmaakopdracht"> 
<button type="button" class="btn btn-dark btn-lg">Nieuwe Opdracht aanmaken</button>
</a>
