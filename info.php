<?php
$camp1 = $_POST["campo1"];
$camp2 = $_POST["campo2"];
$camp3 = $_POST["campo3"]; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Informacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" /></head>
<body>
<center>    
        <form action="container">
        
<?php   
echo " Su nombre es: ".$camp1;
echo " Su apellido es: ".$camp2;
echo " Su correo es: ".$camp3;
?>
        </form>
</center>

</body>
</html>
