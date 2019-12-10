<nav class="sidenav">
  <a class="lettertype" href="./index.php?content=home">Rent a student</a>
  <?php
        if ( isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'administrator':
              echo  '<a class="nav-link" href="./index.php?content=gebruikersrollen">Gebruikers</a>'; 
            break;
            case 'student':
              echo '<a class="nav-link" href="./index.php?content=student_home"></a>';               
          break;
          case 'bedrijf':
            echo '<a class="nav-link" href="./index.php?content=company_home">Home</a>';          
        break;
          }
          echo '<a class="nav-link" href="./index.php?content=logout">Uitloggen</a>';
        } else {
          echo '
          <a class="nav-link" href="./index.php?content=loginform">Aanmelden<span class="sr-only">(current)</span></a>';
          echo '
          <a class="nav-link" href="./index.php?content=info">Informatie<span class="sr-only">(current)</span></a>';
        
        }
      ?>


  



  
</nav>
