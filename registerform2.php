
    <form action="./index.php?content=register2" method="post">
    <div class="form-row">
    <div class="form-group">
      <label for="inputPassword4">Voornaam</label>
      <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="Pieter" required>
    </div>
    <div class="form-group">
      <label for="inputPassword4">Tussenvoegsel</label>
      <input type="text" class="form-control" id="infix" name="infix" placeholder="van de" >
    </div>
    <div class="form-group">
      <label for="inputPassword4">Achternaam</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Koning" required>
    </div>
  </div>

  <div class="form-row">
  <div class="form-group">
    <label for="inputAddress">Huisnummer</label>
    <input type="text" class="form-control" id="phone" name="huisnummer" placeholder="12" required>
  </div>
</div>
<div class="form-row">
<div class="form-group">
    <label for="inputAddress2">Aderres</label>
    <input type="text" class="form-control" id="address" name="straat" placeholder="straat 123" required>
  </div>
  <div class="form-group">
      <label for="inputCity">Stad</label>
      <input type="text" class="form-control" id="city" name="woonplaats" placeholder="Amsterdam" required>
    </div>
    <div class="form-group">
      <label for="inputZip">Postcode</label>
      <input type="text" class="form-control" id="postalcode" name="postcode" placeholder="1111AA" required>
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