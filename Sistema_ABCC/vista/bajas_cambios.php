<?php
	include_once("../scripts_php/conexion_bd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR/MODIFICAR ALUMNOS</title>
	<style type="text/css">
		table, th, td{
			 border: 1px solid navy;
		}
	</style>


	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<?php require_once('menu_principal.php'); ?>
	


	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>ALUMNOS</b></h2></div>
                    <div class="col-sm-4">
                        <a href="formulario.php" class="btn btn-info add-new">
                        	<i class="fa fa-plus"></i> 
                        	Agregar ALUMNO
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero de Control</th>
                        <th>Nombre(s)</th>
                        <th>Primer Ap.</th>
						<th>Segundo Ap.</th>
                        <th>Edad</th>
                        <th>Semestre</th>
                        <th>Carrera</th>
                        <th>REALIZAR</th>
                    </tr>
                </thead>
                 
                <tbody>    
                        <?php 
                        	include_once("../scripts_php/Alumno_Dao.php");
							$aDAO = new AlumnoDAO();
							$listaAlumnos=$aDAO->mostrarTodos();;

							while ($fila=mysqli_fetch_object($listaAlumnos)){
									$nc = $fila->Num_Control;
									$n = $fila->Nombre_Alumno;
									$pa = $fila->Primer_Ape;
									$sa = $fila->Segundo_Ape;
									$e = $fila->Edad;
									$s = $fila->Semestre;
									$c = $fila->Carrera;
								?>
								<tr>
									<td><?php echo $nc;?></td>
									<td><?php echo $n;?></td>
									<td><?php echo $pa;?></td>
									<td><?php echo $sa;?></td>
									<td><?php echo $e;?></td>
									<td><?php echo $s;?></td>
									<td><?php echo $c;?></td>
									
									<td style="text-align: center;">

										<a href="formulario_edicion.php?nc=<?php echo $nc;?>" class="edit" title="Edición" data-toggle="tooltip">
											<!-- <i class="material-icons">&#xE254;</i> -->


<i class="fa fa-pencil" style="font-size:30px;color:orange;"></i>

										</a>
										<a href="../scripts_php/procesar_baja.php?nc=<?php echo $nc;?>" class="delete" title="Eliminación" data-toggle="tooltip">
											<!-- <i class="material-icons">&#xE872;</i> -->

<i class="fa fa-trash" style="font-size:30px;color:red; padding-left: 30px;"></i>											
										</a>
									</td>
								</tr>	
								<?php
							}
								?>  
                </tbody>
            </table>
        </div>
    </div> 



</body>
</html>