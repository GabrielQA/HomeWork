
<form method="POST" action="<?php echo base_url('usuario/update')?>">
<?php foreach ($datosUsuario as $value){?>
<input type="hidden" name="txtUsuid" value="<?php echo $value->usu_id; ?>">
<div class="form-group" >
    <label for="exampleInputEmail1">Perfil</label>

    <?php 
     $lista = array();   
        foreach ($selPerfil as $registro){   
        $lista[$registro->per_id]=$registro->per_nombre;
        }

        echo form_dropdown('txtPerid',$lista,$value->per_id, 'class="form-control"');
     ?>
  
</div>





<div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nombres">
    <small id="emailHelp" class="form-text text-muted">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Apellidos">
    <small id="emailHelp" class="form-text text-muted">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico</label>
    <input type="text" name="txtCorreo" class="form-control" id="exampleInputPassword1" placeholder="Correo Electronico">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="text" name="txtTelefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Telefono">
    <small id="emailHelp" class="form-text text-muted">
</div>
<?php } ?>
<button type="submit" class="btn btn-primary">Registrar Usuario</button>
</form>

<?php 

print_r($datosUsuario);

?>
