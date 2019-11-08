<?php 
include('Alumno_Dao.php');

if(isset($_GET) && !empty($_GET)){
	$aDao = new AlumnoDAO();
	
	$aDao->eliminar($_GET['nc']);

}echo "No tiene info";
?>