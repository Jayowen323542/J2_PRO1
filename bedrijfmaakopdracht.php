
<form action="./index.php?content=opdracht-script" method="post">
<div class="row">
<input type="hidden" name="iduser" value="<?= $_SESSION["id"]?>">
<div class="form-group col-3">
    <label for="exampleInputEmail1">Titel</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Titel" name="titel">
  </div>
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Bedrag</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bedrag" name="loon">
  </div>
  </div>
  <div class="row">
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Tijd</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Time" name="tot_uur">
  </div>
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Datum</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Datum" name="datum">
  </div>
  </div>
    <div class="row">
    <div class="form-group col-6">
    <label for="exampleFormControlTextarea1">Beschrijving</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="beschrijving"></textarea>
  </div>
  </div>

 
<button type="submit" class="btn btn-dark btn-lg">Sla op</button>

</form>