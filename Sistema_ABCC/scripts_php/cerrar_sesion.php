<?php 
session_start();

session_unset();
session_destroy();

header("location: ../vista/login_usuario.php")
 ?>