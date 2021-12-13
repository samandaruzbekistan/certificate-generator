<?php 
session_start();
$name = $_SESSION['name'];
$kurs = $_SESSION['kurs'];
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg("format.jpg");
$color=imagecolorallocate($image, 51, 51, 102);
$color2=imagecolorallocate($image, 31, 10, 62);
$date=date('d F, Y');
imagettftext($image, 18, 0, 320, 640, $color,$font, $date);
imagettftext($image, 55, 0, 230, 380, $color,$font, $name);
imagettftext($image, 28, 0, 375, 290, $color2,$font, $kurs);
imagejpeg($image,"certificate/$name.jpg");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yuklab olish</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">
		.orta {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<br>
		<div class="orta"><h1>Sertifikatingiz tayyor.<br>Marhamat yuklab oling!</h1></div>
	<img src="certificate/<?=$name?>.jpg" class="img-fluid">
	<br><br>
	<div class="orta">
	<form>
		<input type="submit" name=s1 class="btn btn-warning" value="Yuklab olish">
	</form> <br>
	<form class="orta">
		<input type="submit" class="btn btn-primary" name="exit" value="Exit">
	</form>
</div>
	</div> <br>
</body>
</html>


<?php
if($_GET['s1']){
	require('./fpdf/fpdf.php');
	$pdf = new FPDF('L','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->SetCreator('Samandar');
	// Add background image for PDF
	$pdf->Image("certificate/$name.jpg",0,0,0);	
	$pdf->Output();
}
if (isset($_GET['exit'])) {
	header("Location: exit.php");
}
?>
