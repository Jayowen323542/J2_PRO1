<?php
//var_dump($_SESSION);
$iduser = $_SESSION["id"];
//var_dump($iduser);
$result = mysqli_query($conn,"SELECT * FROM `student_gegvens` WHERE `iduser`= $iduser "); 
while($row = mysqli_fetch_assoc($result)){
echo '<div class="row">Persoonlijke informatie</div>
<div class="row">
<div class="col-3">
Naam: '. $row['naam'] .' '. $row['achternaam'] .'
</div>
<div class="col-3">

Email: '. $row['email'] .'
</div>
</div>

<div class="row">
<div class="col-3">
Woonplaats: '. $row['woonplaats'] .'
</div>
<div class="col-3">
Adres: '. $row['straat'] .' '. $row['huisnummer'] .'
</div>
</div>
<div class="row">
<div class="col-3">
School: MBOU
</div>
</div>
<br>

<a href="./index.php?content=profile_change">
<button type="button" id="edit-profile" class="btn btn-dark btn-lg">Verander Gegevens</button>
</a>
<br>
<br>
<div class="col-6">
<div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="inputGroupFileAddon02">Upload CV</span>
  </div>
</div>
</div>';
}
?>