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
	<form method="POST" action="../scripts_php/procesar_edicion.php">
	<?php 
        include_once("../scripts_php/Alumno_Dao.php");
		$aDAO = new AlumnoDAO();
		$listaAlumnos=$aDAO->mostrar($_GET['nc']);
		while ($fila=mysqli_fetch_object($listaAlumnos)){
			$nc = $fila->Num_Control;
			$n = $fila->Nombre_Alumno;
			$pa = $fila->Primer_Ape;
			$sa = $fila->Segundo_Ape;
			$e = $fila->Edad;
			$s = $fila->Semestre;
			$c = $fila->Carrera;
		?>
			<label>Num Control</label>
			<input type="text" name="num_control" value="<?php echo $nc;?>">
			<br>
			<label>Nombre</label>
			<input type="text" name="nombre"value="<?php echo $n;?>">
			<br>
			<label>Primer Apellido</label>
			<input type="text" name="primer_ape"value="<?php echo $pa;?>">
			<br>
			<label>Segundo Apellido</label>
			<input type="text" name="segundo_ape"value="<?php echo $sa;?>">
			<br>
			<label>Edad</label>
			<input type="text" name="edad"value="<?php echo $e;?>">
			<br>
			<label>Semestre</label>
			<input type="text" name="semestre"value="<?php echo $s;?>">
			<br>
			<label>Carrera</label>
			<input type="text" name="carrera"value="<?php echo $c;?>">
			<br>
			<input type="submit" name="">	
			<?php
		}
	?>  
	</form>
	</div>
</body>
</html>