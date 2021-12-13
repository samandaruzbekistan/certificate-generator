<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Serifikat</title>
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
		<div>
			<br>
			<div class="orta">
				<h1>Guliston Davlat Universitetida Online dasturlash kursi sertifikati</h1>
			</div>
			<form>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Ism Familya</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ism">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Kurs nomi</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="kurs">
			    <div id="emailHelp" class="form-text">Talaba tugatgan kurs va o'rgangan texnologiyalar.</div>
			  </div>
			  <div class="orta">
			  	<button type="submit" class="btn btn-primary" name="s1">Sertifikat</button>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>

<?php
session_start();
	if (isset($_GET['s1'])) {
		$_SESSION['name'] = $_GET['ism'];
		$_SESSION['kurs'] = $_GET['kurs'];
		header("Location: serifikat.php");
	}
?>