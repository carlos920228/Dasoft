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
<?php 
$input_rfc = array(
  'name'=>'rfc',
  'id'=>'rfc',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('rfc',@$datos_contacto[0]->rfc)
  );
?>
<?php 
$input_nombre = array(
  'name'=>'nombre',
  'id'=>'nombre',
  'maxlength'=>'45',
  'size'=>'40',
  'value'   => set_value('nombre',@$datos_contacto[0]->nombre)
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
$input_colonia = array(
  'name'=>'colonia',
  'id'=>'colonia',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('colonia',@$datos_contacto[0]->colonia),
  );
?>
<?php
$input_calle = array(
  'name'=>'calle',
  'id'=>'calle',
  'maxlength'=>'45',
  'size'=>'40',
  'value'   => set_value('calle',@$datos_contacto[0]->calle),
  );
?>
<?php
$input_numero = array(
  'name'=>'numero',
  'id'=>'numero',
  'maxlength'=>'45',
  'size'=>'40',
  'value'		=> set_value('numero',@$datos_contacto[0]->numero),
  );
?>
<div id="Contenido">
<h1>Clientes</h1>
<br/>
<?php echo form_open()?>

<?php echo form_label('RFC')?>
<?php echo form_input($input_rfc)?><?php echo form_error('rfc')?><br/>

<?php echo form_label('Nombre')?>
<?php echo form_input($input_nombre)?><?php echo form_error('nombre')?><br/>

<?php echo form_label('Apellido Paterno')?>
<?php echo form_input($input_apellidoPaterno)?><?php echo form_error('apellidoPaterno')?><br/>
<?php echo form_label('Apellido Materno')?>
<?php echo form_input($input_apellidoMaterno)?><?php echo form_error('apellidoMaterno')?><br/>
<?php echo form_label('Colonia')?>
<?php echo form_input($input_colonia)?><?php echo form_error('colonia')?><br/>
<?php echo form_label('Calle')?>
<?php echo form_input($input_calle)?><?php echo form_error('calle')?><br/>
<?php echo form_label('Numero')?>
<?php echo form_input($input_numero)?><?php echo form_error('numero')?><br/>
<?php echo form_submit('enviar','Guardar!'); ?>
<?php echo form_close()?>
</div>
<div id="Pie">
<h3 ><a href="mailto:carlos920228@gmail.com">Contactar</a></h3>
</div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
</body>
</html>

