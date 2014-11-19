<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES">
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/proyectos/estilo.css">
<title>Iniciar sesion</title>
</head>
<body>
<div id="Contenedor">
<div id="Encabezado">
<h3>Sistema Dasoft</h3>
</div>
<div id="Menu">
</div>
<div id="Contenido">
<h1>Iniciar Sesion</h1>
<?php 
$input_usuario = array(
  'name'=>'usuario',
  'id'=>'usuario',
  'maxlength'=>'45',
  'size'=>'40',
  'value'=>set_value('usuario')
  );
?>
<?php
$input_password = array(
  'type'=>'password',
  'name'=>'password',
  'id'=>'password',
  'maxlength'=>'45',
  'size'=>'40',
  'value'=>set_value('password')//repobla el formulario
  );
?>
<br/><br/>
<?php //echo //validation_errors()?><br/>
<?php echo form_open()?><br/>
<?php echo form_label('Usuario    ')?>
<?php echo form_input($input_usuario)?><?php echo form_error('usuario')//muestra el error del campo elegido?><br/>
</br>
<?php echo form_label('Contresenia')?>
<?php echo form_input($input_password)?><?php echo form_error('password')?><br/>
</br>
<?php echo form_submit('enviar','Entrar')?><br/>
<?php echo form_close()?><br/>
</div>
<div id="Pie">
<h3 ><a href="mailto:carlos920228@gmail.com">Contactar</a></h3>
</div>
</div>
</body>
</html>
