



    <form action="./index.php?content=register" method="post">
    <div class="form-row">
    <div class="form-group">
      <label for="inputPassword4">Naam</label>
      <input type="text" class="form-control" id=""  name="naam" placeholder="mbou" required>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group">
      <label for="inputPassword4">Plaats</label>
      <input type="text" class="form-control" id="" name="plaats" placeholder="utrecht" >
    </div>
    <div class="form-group">
      <label for="inputPassword4">Postcode</label>
      <input type="text" class="form-control" id="" name="postcode" placeholder="1111AA" required>
    </div>
  </div>
    <div class="form-row">
      <div class="form-group">
        <label for="exampleInputEmail1">E-mailadres</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-mailadres" name="email" required>
        <small id="emailHelp" class="form-text text-muted">Uw email is nodig om te registeren.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Wachtwoord</label>
        <input type="password" class="form-control" id="exampleInputsPassword1" aria-describedby="emailHelp" placeholder="wachtwoord" name="password" required>
        <small id="passwordHelp" class="form-text text-muted">Uw wachtwoord is nodig om te registeren.</small>
      </div>
      
      <button type="submit" class="btn btn-outline-dark btn-block">GA!</button>
    </form>
  </div>

