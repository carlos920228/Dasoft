<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES">
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/proyectos/estilo.css">
<title>Borrar casos</title>
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
<h1><b>Mis Casos</b></h1>

<br/>

<?php if (empty($resultado)){ ?>
		<b>No tienes Contactos</b>
<?php 	}else{ ?>
		Usted Tiene <?php echo count($resultado) ?> casos(s)<br/><br/>
		
		<table class="table table-bordered ">
			<tr>
				<td>Nombre del Caso</td>
				<td>Fecha apertura</td>
				<td>Estado</td>
				<td>Archivo fisico</td>
				<td>Juzgado</td>
				<td>Borrar</td>
			</tr>
		<?php foreach ($resultado as $contacto){ ?>
		
			<tr>
				<td><?php echo $contacto->nombreCaso ?> </td>
				<td><?php echo $contacto->fechaApertura ?> </td>
				<td><?php echo $contacto->estado ?> </td>
				<td><?php echo $contacto->archivoFisico ?> </td>
				<td><?php echo $contacto->juzgado ?> </td>
				<td>
				<a href="<?php echo base_url() ?>index.php/c_usuarios/eliminar/<?php echo  $contacto->idcasos ?>" class="btn btn-danger">Borrar</a>
				</td>
			</tr>
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