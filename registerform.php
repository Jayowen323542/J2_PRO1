
<div class="row">
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1">Bedrijf</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Student</label>
</div>
</div>

  <div class="col-6">
    <form action="./index.php?content=register" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">E-mailadres</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-mailadres" name="email" required>
        <small id="emailHelp" class="form-text text-muted">Uw email is nodig om te registeren.</small>
      </div>
      
      <button type="submit" class="btn btn-outline-dark btn-block">GA!</button>
    </form>
  </div>
</div>
