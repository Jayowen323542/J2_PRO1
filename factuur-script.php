<?php
include "./fpdf182/fpdf.php";
include("./connect_db.php");
// gegevens
$idopdracht = $_GET["id"];




$sql2 = "SELECT * FROM `opdrachten` WHERE `idopdracht` = $idopdracht";
$result2 = mysqli_query($conn, $sql2);
$record2 = mysqli_fetch_assoc($result2);
$iduser = $record2["iduser"];



$sql1 = "SELECT * FROM `bedrijf_gegevens` WHERE `iduser` = $iduser";
$result1 = mysqli_query($conn, $sql1);
$record1 = mysqli_fetch_assoc($result1);


$sqlU = "UPDATE `opdrachten` SET `status` = '2' WHERE `opdrachten`.`idopdracht` = $idopdracht;";
$update = mysqli_query($conn, $sqlU);


$naam = $record1["naam"];
$plaats = $record1["plaats"];
$email = $record1["email"];
$postcode = $record1["postcode"];

$titel = $record2["titel"];
$tot_uur = $record2["tot_uur"];
$loon = $record2["loon"];
$prijs_ex = $loon * $tot_uur;
$prijs_inc = $prijs_ex * 1.21;
$btw = 21;
$datum;
$factuurdatum = date("Y/m/d");
$vervaldatum = $factuurdatum;
$bank = "ING";
$iban = "NL01830663";
$bic = "897364";
$btwnr = "1234556";




$sqlI = "INSERT INTO `factuur` (`idfactuur`, `idopdracht`, `prijs_ex`,
 `prijs_inc`, `btw`, `tot_uur`,
 `loon`, `datum`, `factuurdatum`, `vervaldatum`,
 `bank`, `iban`, `bic`, `btwnr`) VALUES
 (NULL, '$idopdracht', '$prijs_ex', '$prijs_inc', '$btw', '$tot_uur', '$loon', 
 CURRENT_TIMESTAMP, '$factuurdatum',
  '$vervaldatum', '$bank', '$iban', '$bic', '$btwnr')";


$insert = mysqli_query($conn, $sqlI);
$idfactuur = mysqli_insert_id($conn);; 





















// pdf
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'Rent A Student',0,0);
$pdf->Cell(59 ,5,'Factuur',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Daltonlaan 300',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Utrecht Nederland, 3777AA',0,0);
$pdf->Cell(25 ,5,'Datum',0,0);
$pdf->Cell(34 ,5,$factuurdatum,0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$pdf->Cell(25 ,5,'Factuur #',0,0);
$pdf->Cell(34 ,5,$idfactuur,0,1);//end of line

$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Klant id',0,0);
$pdf->Cell(34 ,5,$iduser,0,1);//end of line

$pdf->Cell(130 ,5,'bank: '. $bank,0,0);
$pdf->Cell(25 ,5,' ',0,0);
$pdf->Cell(34 ,5,' ',0,1);//end of line

$pdf->Cell(130 ,5,'iban: ' . $iban,0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line
$pdf->Cell(130 ,5,'Btwnr: ' . $btwnr,0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Aan',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$naam,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$email,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$postcode,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$plaats,0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(100 ,5,'Titel',1,0);
$pdf->Cell(35 ,5,'Loon',1,0);
$pdf->Cell(45 ,5,'Uren',1,1);


$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(100 ,5,$titel,1,0);
$pdf->Cell(35 ,5,$loon,1,0);
$pdf->Cell(45 ,5,$tot_uur,1,1,'R');//end of line


//summary
$pdf->Cell(110 ,5,'',0,0);
$pdf->Cell(35 ,5,'Prijs zonder btw',0,0);
$pdf->Cell(5 ,5,'$',1,0);
$pdf->Cell(30 ,5,$prijs_ex,1,1,'R');//end of line

// $pdf->Cell(130 ,5,'',0,0);
// $pdf->Cell(25 ,5,'Taxable',0,0);
// $pdf->Cell(4 ,5,'$',1,0);
// $pdf->Cell(30 ,5,'0',1,1,'R');//end of line

$pdf->Cell(110 ,5,'',0,0);
$pdf->Cell(35 ,5,'BTW',0,0);
$pdf->Cell(5 ,5,'$',1,0);
$pdf->Cell(30 ,5,$btw.'%',1,1,'R');//end of line

$pdf->Cell(110 ,5,'',0,0);
$pdf->Cell(35 ,5,'Totaal',0,0);
$pdf->Cell(5 ,5,'$',1,0);
$pdf->Cell(30 ,5,$prijs_inc,1,1,'R');//end of line
$doc = $pdf->Output('factuur.pdf', 'S');


// email
$to = $email; 
      $from = "me@example.com"; 
      $subject = "Factuur"; 
      $message = "<p>Zie de bijlage.</p>";
      
      // a random hash will be necessary to send mixed content
      $separator = md5(time());
      
      // carriage return type (we use a PHP end of line constant)
      $eol = PHP_EOL;
      
      // attachment name
      $filename = "factuur.pdf";
      
      // encode data (puts attachment in proper format)
      $pdfdoc = $pdf->Output("", "S");
      $attachment = chunk_split(base64_encode($pdfdoc));
      
      // main header
      $headers  = "Van: ".$from.$eol;
      $headers .= "MIME-Version: 1.0".$eol; 
      $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";
      
      // no more headers after this, we start the body! //
      
      $body = "--".$separator.$eol;
      $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
      $body .= "Beste $naam hierbij uw factuur.".$eol;
      
      // message
      $body .= "--".$separator.$eol;
      $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
      $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
      //$body .= $message.$eol;
      
      // attachment
      $body .= "--".$separator.$eol;
      $body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
      $body .= "Content-Transfer-Encoding: base64".$eol;
      $body .= "Content-Disposition: attachment".$eol.$eol;
      $body .= $attachment.$eol;
      $body .= "--".$separator."--";
      
      // send message
      mail($to, $subject, $body, $headers);


     // header("Refresh: 1; url=./index.php?content=company_home");


?>