<h1>Eliminar Abogado</h1>
<br/>
Esta Seguro de Eliminar el cliente: <b><?php echo $datos_contacto[0]->nombre ?></b>

<?php

$input_con_id = array(
              'id'        => $datos_contacto[0]->id,
            );

?>


<?php echo form_open(); ?><br/>
<?php echo form_hidden($input_con_id); ?><br/>
<?php echo form_submit('btn_borrar','Si Estoy Seguro!'); ?>
<?php echo form_close(); ?><br/>