<?php
$id = sanitize($_GET["id"]);
$sql = "SELECT * FROM `opdrachten` WHERE `idopdracht` = $id";

 $result = mysqli_query($conn, $sql);

 $record = mysqli_fetch_assoc($result);



?>
<form action="./index.php?content=opdracht_change-script" method="post">
<div class="row">
<div class="form-group col-3">
<input type="hidden" name="id" value="<?=$record['idopdracht']?>">
    <label for="exampleInputEmail1">Titel</label>
    <input type="" class="form-control" id="" aria-describedby="" name="titel" placeholder="Schoonmaken" value="<?php echo $record["titel"]; ?>"> 
  </div>
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Bedrag</label>
    <input type="" class="form-control" id="" aria-describedby=""  name="loon" placeholder="7" value="<?php echo $record["loon"]; ?>">
  </div>
  </div>
  <div class="row">
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Tijd</label>
    <input type="" class="form-control" id="" aria-describedby=""  name="tot_uur" placeholder="3 uur per week" value="<?php echo $record["tot_uur"]; ?>">
  </div>
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Datum</label>
    <input type="" class="form-control" id="" aria-describedby=""  name="datum" placeholder="Van 12-1-2022 en dan elke dinsdag voor 3 weken" value="<?php echo $record["datum"]; ?>">
  </div>
  </div>
    <div class="row">
    <div class="form-group col-6">
    <label for="exampleFormControlTextarea1">Beschrijving</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="beschrijving" ><?php echo $record["beschrijving"]; ?></textarea>
  </div>
  </div>

  
<button type="submit" class="btn btn-dark btn-lg">Sla op</button>

</form>