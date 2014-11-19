<h1>Eliminar Contacto</h1>
<br/>
Esta Seguro de Eliminar el caso: <b><?php echo $datos_contacto[0]->nombreCaso ?></b>

<?php

$input_con_id = array(
              'idcasos'        => $datos_contacto[0]->idcasos,
            );

?>


<?php echo form_open(); ?><br/>
<?php echo form_hidden($input_con_id); ?><br/>
<?php echo form_submit('btn_borrar','Si Estoy Seguro!'); ?>
<?php echo form_close(); ?><br/>