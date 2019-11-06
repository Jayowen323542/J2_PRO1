
<div class="row">
  <div class="col-6">
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
      <button type="submit" class="btn btn-dark btn-lg btn-block">Inloggen</button>
    </form>
  </div>
</div>
<div>
<button type="button" class="btn btn-primary btn-lg">Login als Student</button>
<button type="button" class="btn btn-primary btn-lg">Login als Bedrijf</button>
<button type="button" class="btn btn-primary btn-lg">Login als Admin</button>
</div>
