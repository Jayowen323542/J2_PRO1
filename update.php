<?php





$id = sanitize($_GET["id"]);

 $sql = "SELECT * FROM `login` WHERE `iduser` = $id";

 $result = mysqli_query($conn, $sql);

 $record = mysqli_fetch_assoc($result);

 $sql2 = "select r.* from rollen_link rL left join rollen r on rL.idrollen = r.idrollen where rL.iduser = $id";
 
 $result2 = mysqli_query($conn, $sql2);

 $record2 = mysqli_fetch_assoc($result2);


?>
<form action="./index.php?content=update_record" method="post">
<input type="hidden" name="id" value="<?=$record['iduser']?>">
<input type="hidden" name="oldrole" value="<?=$record2['idrollen']?>">
<div class="form-group col-md-3">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?php echo $record["email"]; ?>">
  </div>
  
  <div class="form-group col-md-3">
    <label for="exampleFormControlSelect1">Userrole</label>
    <select class="form-control" id="userrole" name="userrole">
    <option selected  ><?php echo $record2["titel"]; ?></option>
    <option value="1">student</option>
    <option value="2">bedrijf</option>
    <option value="3">administrator</option>
    </select>
    <br>

    <button type="submit" class="btn btn-dark btn-lg">Verander</button>
    
</form>
