<?php 

$error_usuario = "";
$error_contraseña = "";

include("conexion_bd_user.php");

if (isset($_POST['caj_usuario']) && isset($_POST['caj_contrasena'])) {
	if (!empty($_POST['caj_usuario']) && !empty($_POST['caj_contrasena'])) {
		if (strlen($_POST['caj_usuario'])==8) {
			$u = $_POST['caj_usuario'];
			$c = $_POST['caj_contrasena'];

			$u = limpiar_cadena($u);
			$c = limpiar_cadena($c);
			
			//Proceso de Alta de usuarios
			nuevoUsuario($u, $c);
			
		}else{
			$error_usuario = "Usuario debe ser de 8 caracteres";
		}
	}else{
		$error_usuario = "Usuario vacio";
		$error_contrasena = "Contraseña vacia";
	}
}else{
	$error_usuario = "Tamaño incorrecto";
}
//echo "Error Usuario: ".$error_usuario;
//echo "Error Contraseña: ".$error_contrasena;


function nuevoUsuario($User, $Password){
			$conexion = new ConexionBD();
            $User = SHA1($User);
            $Password = SHA1($Password);

            $stmt = mysqli_prepare($conexion->getConexion(), "INSERT INTO usuarios VALUES (?,?)");
            mysqli_stmt_bind_param($stmt, 'ss', $User, $Password);
            mysqli_stmt_execute($stmt);
            printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));

            if ( mysqli_stmt_affected_rows($stmt) > 0 ) {
                mysqli_stmt_close($stmt);
				header("location:../vista/menu_principal.php");
				return true;
            } else {
				mysqli_stmt_close($stmt);
				header("location:../vista/formulario_registrar usuario.php");
				return false;
				
            }
    

        }

function limpiar_cadena($cad){
	$cad = trim($cad);
	$cad = stripslashes($cad);
	$cad = htmlspecialchars($cad);
	return $cad;
}

 ?>