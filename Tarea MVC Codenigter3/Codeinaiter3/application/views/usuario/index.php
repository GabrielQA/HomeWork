
    <h1>Formulario De Registro</h1>

    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Consulta</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Registro</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  </div>    
  <table>
  <thead>
  <th>ID</th>
  <th>Perfil</th>
  <th>Nombres</th>
  <th>Apellidos</th>
  <th>Correo</th>
  <th>Acciones</th>
  </thead>
  <tbody>
  <?php foreach ($listaUsuario as $value){ ?>
  <tr>
  <td><?php echo $value->usu_id; ?></td>
  <td><?php echo $value->per_nombre; ?></td>
  <td><?php echo $value->usu_nombres; ?></td>
  <td><?php echo $value->usu_apellidos; ?></td>
  <td><?php echo $value->usu_correo; ?></td>
   <td>
    <a href="<?php echo base_url('usuario/delete')."/".$value->usu_id; ?>">Eliminar</a>
    <a href="<?php echo base_url('usuario/edit')."/".$value->usu_id; ?>">Editar</a>
    </td>

  </tr>
  <?php }?>
  </tbody>
  </table>



  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <form method="POST" action="<?php echo base_url('usuario/insert')?>">
        <div class="form-group" >
            <label for="exampleInputEmail1">Perfil</label>
        <select name="txtIdper" class="form-control" >
        <?php foreach ($selPerfil as $value){   ?>
        <option value="<?php echo $value->per_id ?>"> <?php echo $value->per_nombre; ?></option>
        <?php }?>
        </select>  
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
        <button type="submit" class="btn btn-primary">Registrar Usuario</button>
        </form>
 
</div>
<?php
        print_r($selPerfil);
        ?>    
    



        

        
        