
<div class="row">
  <div class="col-4">
    <form action="./index.php?content=login-script" method="post">
      <div class="form-group">
        <label for="InputEmail">E-mailadres</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
          value="" placeholder="Uw emailadres" name="email" required >
      </div>
      <div class="form-group">
        <label for="InputPassword">Wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Uw wachtwoord" name="password" required >
      </div>
      <button type="submit" class="btn btn-dark btn-lg btn-block">Inloggen</button> <br>
     
    </form>
    <div>Nog geen acount ? meld je aan.</div><br> 
    <a href="./index.php?content=registerform"> 
      <button type="submit" class="btn btn-dark btn-lg btn-block">Regristreer</button>
      </a>
  </div>
</div>
<div>

