<?php 
include_once("conexion_bd.php");
class AlumnoDAO{
	private $con;
	function __construct(){
		$this->con = new ConexionBD();
	}

	//--------------------------METEDOS ABCC-----------------
	//--------------------------Altas-----------------

	public function agregar($nc,$no, $pa, $sa, $ed, $sem, $car){
		$sql = "INSERT INTO Alumnos VALUES ('$nc', '$no', '$pa', '$sa', $ed, $sem, '$car')";

		$res = mysqli_query($this->con->getConexion(), $sql);

		if ($res) {
			echo "<br>Los datos se almacenaron correctamente";
			header("location:../vista/formulario.php");
		}else{
			echo "<br>Los datos no se pudieron almacenar";
		}
	}


	//--------------------------Bajas-----------------
	public function eliminar($nc){
		$sql = "DELETE FROM Alumnos WHERE Num_Control='$nc'";
		$res = mysqli_query($this->con->getConexion(), $sql);
		if ($res) {
			echo "<br>Los datos de eliminaron correctamente";
			header("location:../vista/bajas_cambios.php");
		}else{
			echo "<br>Los datos no se pudieron eliminar";
		}
	}

	public function cambios($nc,$no, $pa, $sa, $ed, $sem, $car){
		$sql = "UPDATE Alumnos SET Nombre_Alumno='$no', Primer_Ape='$pa', Segundo_Ape='$sa', Edad=$ed, Semestre=$sem, Carrera='$car' WHERE Num_Control='$nc'";
		
		$res = mysqli_query($this->con->getConexion(), $sql);

		if ($res) {
			echo "<br>Los datos se modificaron correctamente";
			header("location:../vista/formulario.php");
		}else{
			echo "<br>Los datos no se pudieron almacenar";
		}
	}

	public function mostrarTodos(){
		$sql = "SELECT * FROM Alumnos";
		$res = mysqli_query($this->con->getConexion(), $sql);
		if ($res) {
			return $res;
		}else{
			echo "No se encontro nada";
		}
	}

	
	public function mostrar($nc){
		$sql = "SELECT * FROM Alumnos WHERE Num_Control = '$nc'";
		$res = mysqli_query($this->con->getConexion(), $sql);
		if ($res) {
			return $res;
		}else{
			echo "No se encontro nada";
		}
	}

} 
?>