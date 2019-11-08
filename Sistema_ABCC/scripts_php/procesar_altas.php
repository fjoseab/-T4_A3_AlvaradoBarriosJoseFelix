<?php 
include("Alumno_Dao.php");

$conexion_bd = new ConexionBD();

if (isset($_POST) && !empty($_POST)) {
	$nc = $_POST["num_control"];
	$no = $_POST["nombre"];
	$pa = $_POST["primer_ape"];
	$sa = $_POST["segundo_ape"];
	$ed = $_POST["edad"];
	$sem = $_POST["semestre"];
	$car = $_POST["carrera"];
	
	$aDAO = new AlumnoDAO();
	$aDAO->agregar($nc, $no, $pa, $sa, $ed, $sem, $car);

}else{
	echo "Faltan Datos";
}
?>