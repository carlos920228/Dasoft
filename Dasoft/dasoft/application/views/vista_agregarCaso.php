<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES">

<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/proyectos/estilo.css">
<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
<title>Bienvenido</title>
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
<h1>Caso</h1>
<?php 
$input_nombreCaso = array(
  'name'=>'nombreCaso',
  'id'=>'nombreCaso',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('nombreCaso',@$datos_contacto[0]->nombreCaso)
  );
?>
<?php
$input_fechaApertura = array(
  'name'=>'fechaApertura',
  'id'=>'fechaApertura',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('fechaApertura',@$datos_contacto[0]->fechaApertura)
  );
?>
<?php
$input_estado = array(
  'name'=>'estado',
  'id'=>'estado',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('estado',@$datos_contacto[0]->estado),
  );
?>
<?php
$input_archivoFisico = array(
  'name'=>'archivoFisico',
  'id'=>'archivoFisico',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('estado',@$datos_contacto[0]->archivoFisico),
  );
?>
<?php
$input_juzgado = array(
  'name'=>'juzgado',
  'id'=>'juzgado',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('estado',@$datos_contacto[0]->juzgado),
  );
?>
<?php
	$input_checkBox = array(
		'1'=> @$datos_contacto[0]->juzgado,
		'2'=> @$datos_contacto[0]->juzgado,
		'3'=> @$datos_contacto[0]->juzgado,
		);
?>
<br/>
<?php echo form_open()?>

<?php echo form_label('Nombre del caso')?>
<?php echo form_input($input_nombreCaso)?><?php echo form_error('nombreCaso')?><br/>

<?php echo form_label('Fecha apertura')?>
<?php echo form_input($input_fechaApertura)?><?php echo form_error('fechaApertura')?><br/>

<?php echo form_label('Estado')?>
<?php echo form_input($input_estado)?><?php echo form_error('estado')?><br/>

<?php echo form_label('Ubicacion archivo fisico')?>
<?php echo form_input($input_archivoFisico)?><?php echo form_error('archivoFisico')?><br/>

<?php echo form_label('Juzgado')?>
<?php echo form_input($input_juzgado)?><?php echo form_error('juzgado')?><br/>

<?php echo form_label('Cliente'),form_dropdown('clientes_id',$clientes)?><br/>
<?php echo form_label('Abogado: '),form_dropdown('abogado_idabogado', $abogados);?>
<?php echo form_submit('enviar','Guardar!'); ?>
<h2>Si no encuntras el cliente debes agregarlo para poder crear su caso</h2>
<?php echo form_close()?><br/>
</div>
<div id="Pie">
<h3 ><a href="mailto:carlos920228@gmail.com">Contactar</a></h3>
</div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
</body>
</html>