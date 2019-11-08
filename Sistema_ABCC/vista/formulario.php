<?php session_start();
if($_SESSION['autenticado']==false){
	var_dump($_SESSION['autenticado']);
	header("location:login_usuario.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Altas</title>
</head>
<body>
<?php 
	require_once('menu_principal.php');
	 ?>
	<div>
	<h1>ALTAS</h1>
	<form method="POST" action="../scripts_php/procesar_altas.php">
		<label>Num Control</label>
		<input type="text" name="num_control">
		<br>
		<label>Nombre</label>
		<input type="text" name="nombre">
		<br>
		<label>Primer Apellido</label>
		<input type="text" name="primer_ape">
		<br>
		<label>Segundo Apellido</label>
		<input type="text" name="segundo_ape">
		<br>
		<label>Edad</label>
		<input type="text" name="edad">
		<br>
		<label>Semestre</label>
		<input type="text" name="semestre">
		<br>
		<label>Carrera</label>
		<input type="text" name="carrera">
		<br>
		<input type="submit" name="">
	</form>
	</div>
</body>
</html>