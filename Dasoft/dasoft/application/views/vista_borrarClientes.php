<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES">
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/proyectos/estilo.css">
<title>Editar clientes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div id="Contenedor">
<div id="Encabezado">
<h3>Sistema Dasoft</h3>
</div>
<div id="Menu">
<ul class="nav">
	<li><a href="<?php echo base_url() ?>index.php">Salir</a></li>
	<li><a href="">Casos</a>
		<ul>
			<li><a href="<?php echo base_url() ?>index.php/c_usuarios/agregarCaso2">Agregar Casos</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_usuarios/borrarCasos">Borrar Casos</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_usuarios/modificarCasos">Modificar Casos</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_usuarios/verCasos">Ver mis casos</a></li>
		</ul>
	</li>
	<li><a href="">Clientes</a>
		<ul>
			<li><a href="<?php echo base_url() ?>index.php/c_clientes/agregarCliente">Agregar clientes</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_clientes/borrarClientes">Borrar clientes</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_clientes/modificarClientes">Modificar clientes</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_clientes/verClientes">Ver clientes</a></li>
		</ul>
	</li>
	<li><a href="">Abogados</a>
		<ul>
			<li><a href="<?php echo base_url() ?>index.php/c_abogados/agregarAbogado">Agregar abogado</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_abogados/borrarAbogados">Borrar abogado</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_abogados/modificarAbogados">Modificar abogado</a></li>
			<li><a href="<?php echo base_url() ?>index.php/c_abogados/verAbogados">Ver abogados</a></li>
		</ul>
	</li>
</ul>
</div>
<div id="Contenido">
<h1><b>Clientes</b></h1>

<br/>

<?php if (empty($resultado)){ ?>
		<b>No tienes Clientes</b>
<?php 	}else{ ?>
		Usted Tiene <?php echo count($resultado) ?> clientes(s)<br/><br/>
		
		<table class="table table-bordered ">
			<tr>
				<td>#</td>
				<td>RFC</td>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Colonia</td>
				<td>Calle</td>
				<td>Numero</td>
			</tr>
		<?php $numeroCaso=1;?>	
		<?php foreach ($resultado as $contacto){ ?>
			<tr>
				<td><?php echo $numeroCaso?></td>
				<td><?php echo $contacto->rfc?> </td>
				<td><?php echo $contacto->nombre?> </td>
				<td><?php echo $contacto->apellidoPaterno?> </td>
				<td><?php echo $contacto->apellidoMaterno?> </td>
				<td><?php echo $contacto->colonia?> </td>
				<td><?php echo $contacto->calle?> </td>
				<td><?php echo $contacto->numero?> </td>
				<td><a href="<?php echo base_url() ?>index.php/c_clientes/eliminar/<?php echo  $contacto->id ?>" class="btn btn-danger">Eliminar</a>
				</td>
			</tr>
		<?php $numeroCaso++;?>		
		<?php } ?>
		</table>

<?php 	} ?>
<br/>
</div>
<div id="Pie">
<h3 ><a href="mailto:carlos920228@gmail.com">Contactar</a></h3>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
</body>
</html>