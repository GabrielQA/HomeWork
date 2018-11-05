<!DOCTYPE html>
<html lang="es">
<head>
    <title>CRUD - CI3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>

</head>
<body>
    <div id="container">
    <div class="col-md-8">
    <?php 
    $this->load->view($contenido);
    ?>
    </div>
</div>

</body>
</html>