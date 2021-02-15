<?php 
    require_once "controladores/plantilla.controlador.php";
    require_once "controladores/formularios.php";
    require_once "modelos/formularios.modelo.php";
    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();
/*require_once "modelos/conexion.php";
    $conexion = Conexion::conectar();
    echo '<pre>'; print_r($conexion); echo '</pre>';*/

?>
