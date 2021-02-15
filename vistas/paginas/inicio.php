<?php
    /*#echo '<p>Simon, aqui si entra</p>';
    if(!isset($_SESSION["validarIngreso"])) {
        #echo '<p>Tambien aqui jala, entonces que pedo?</p>';
        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;
    }else{
        if($_SESSION["validarIngreso"] != "ok"){
            echo '<script>window.location = "index.php?pagina=ingreso";</script>';
            return;
        }
    }*/
    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
    //echo '<pre>'; print_r($usuarios); echo '</pre>';
    
?>
<!-- Script para el mensaje de confrimacion al moemto de querer eliminar algun registro -->
<script>
    function ConfirmDelete(){
        var respuesta = confirm("Estas seguro de eliminar??");
        if(respuesta==true){
            return true;
        }else{
            return false;
        }
    }
</script>
<!-- Tabla responsiva par mostrar los datos de la BD -->
<div class="table-responsive">
<table class="table table-striped">
    <thead class="thead-dark" style="text-align: center;">
        <tr>
            <th>#</th>
            <th>Nombre del destinatario</th>
            <th>Nombre del comprador</th>
            <th>Fecha</th>
            <th>Portal</th>
            <th>Cuenta</th>
            <th>Fabricante</th>
            <th>Producto</th>
            <th>Color</th>
            <th>Cantidad</th>
            <th>Paqueteria</th>
            <th>Fecha de entrega</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Direccion</th>
            <th>Contacto</th>
            <th>Numero de guia</th>
            <th>Status</th>
            <th>Editar / Eliminar</th>
        </tr>
    </thead>
    <!-- Cuarpo de la tabla, el cual se llena automaticamente -->
    <tbody>
        <?php foreach ($usuarios as $key => $value):?>
        <tr>
            <td><?php echo ($key+1);?></td>
            <td><?php echo $value["Nombre_destinatario"];?></td>
            <td><?php echo $value["Nombre_comprador"];?></td>
            <td><?php echo $value["Fecha"];?></td>
            <td><?php echo $value["Portal"];?></td>
            <td><?php echo $value["Cuenta"];?></td>
            <td><?php echo $value["Fabricante"];?></td>
            <td><?php echo $value["Producto"];?></td>
            <td><?php echo $value["Color"];?></td>
            <td><?php echo $value["Cantidad"];?></td>
            <td><?php echo $value["Paqueteria"];?></td>
            <td><?php echo $value["Fecha_entrega"];?></td>
            <td><?php echo $value["Estado"];?></td>
            <td><?php echo $value["Municipio"];?></td>
            <td><?php echo $value["Direccion"];?></td>
            <td><?php echo $value["Contacto"];?></td>
            <td><?php echo $value["No_guia"];?></td>
            <td><?php echo $value["Estatus"];?></td>
            <td>
                <div class="btn-group">
                    <a href="index.php?pagina=editar&No_guia=<?php echo $value["No_guia"];?>" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
                    <form method="post">
                        <input type="hidden" value="<?php echo $value["No_guia"];?>" name="eliminarRegistro">
                        <button type="submit" class="btn btn-danger" style="margin-left: 10px" onclick="return ConfirmDelete()"><i class="fas fa-user-times" ></i></button>
                        <?php
                            $eliminar =  new ControladorFormularios();
                            $eliminar -> ctrEliminarRegistro();
                        ?>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>