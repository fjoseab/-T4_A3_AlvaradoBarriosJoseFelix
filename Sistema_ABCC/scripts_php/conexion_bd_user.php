<?php 
class ConexionBD {
	private $con;
	private $host="localhost";
	private $usuario = "root";
	private $contraseña = "";
	private $bd = "usuarios_escuela_web";

	public function __construct(){
		$this->con = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);

		if ($this->con) {
			echo "Conexion Establecida<br>";
		}else{
			die("Fallo Conexion".mysqli_error($this->con));
		}
	}

	public function getConexion(){
		return $this->con;
	}

}
 ?>
