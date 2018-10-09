

<?php
    //Variables en orden de la consola
    try{
        //Conexion a la base de datos con base a la posicion que iremos ingresando en la consola
        $conexion = new PDO("mysql:host=$host;nombreBD=$nombreBD","$nombreUsu","");
    }catch(PDOExceptio $e){
        echo "Error: " . $e->getMessage();
        die();  
    }
    $nombreUsu = $argv[1];
    $nombreBD = $argv[2];
    $host = $argv[3];
    $tabla = $argv[4];
   
    //se lee lo que hay en la base de datos
    $archivo = fopen($argv[5],"w");
    //Se imprime en el archivo  csv(Excel)
    $Contenido = $conexion->prepare("SELECT * FROM $tabla");
    $Contenido->execute();
    $Contenido = $Contenido->fetchAll();
    
    foreach ($Contenido as $Contenidos) {
        fwrite($archivo, $Contenidos["nombre"] . "," . $Contenidos["apellido"] . "," . $Contenidos["edad"] . "," . $Contenidos["id"] . "," . "\r\n");
    }
    echo "Guardado exitosamente";

    fclose($archivo);
?>