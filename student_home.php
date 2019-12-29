<div class="row">

<?php
$result = mysqli_query($conn,"SELECT * FROM `opdrachten` WHERE `idopdracht`"); 
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
  <a href='./index.php?content=opdrachten_reacties&id=". $row["idopdracht"] ."' class='card-link'>accepteer</a>
  </div>
</div>
</div>";



}

  ?>
  </div>


<br>
<a href="./index.php?content=profiel"> 
<button type="button" class="btn btn-dark btn-lg">Student zie eigen profiel </button>
</a>
<br>
<br>
<a href="./index.php?content=student_jobs"> 
<button type="button" class="btn btn-dark btn-lg">Student zie geacepteerde jobs </button>
</a>