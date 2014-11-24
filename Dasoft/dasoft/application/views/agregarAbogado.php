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
<h1>Abogado</h1>
<?php 
$input_nombre = array(
  'name'=>'nombre',
  'id'=>'nombre',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('nombre',@$datos_contacto[0]->nombre)
  );
?>
<?php
$input_apellidoPaterno = array(
  'name'=>'apellidoPaterno',
  'id'=>'apellidoPaterno',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('apellidoPaterno',@$datos_contacto[0]->apellidoPaterno)
  );
?>
<?php
$input_apellidoMaterno = array(
  'name'=>'apellidoMaterno',
  'id'=>'apellidoMaterno',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('apellidoMaterno',@$datos_contacto[0]->apellidoMaterno),
  );
?>
<?php
$input_telefono = array(
  'name'=>'telefono',
  'id'=>'telefono',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('telefono',@$datos_contacto[0]->telefono),
  );
?>
<?php
$input_email = array(
  'name'=>'email',
  'id'=>'email',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('email',@$datos_contacto[0]->email),
  );
?>
<br/>
<?php echo form_open()?>

<?php echo form_label('Nombre abogado')?>
<?php echo form_input($input_nombre)?><?php echo form_error('nombre')//muestra el error del campo elegido?><br/>

<?php echo form_label('apellido paterno')?>
<?php echo form_input($input_apellidoPaterno)?><?php echo form_error('apellidoPaterno')?><br/>

<?php echo form_label('apellido materno')?>
<?php echo form_input($input_apellidoMaterno)?><?php echo form_error('apellidoMaterno')?><br/>

<?php echo form_label('Telefono')?>
<?php echo form_input($input_telefono)?><?php echo form_error('telefono')?><br/>

<?php echo form_label('Correo')?>
<?php echo form_input($input_email)?><?php echo form_error('email')?><br/>

<?php echo form_submit('enviar','Guardar!'); ?>
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