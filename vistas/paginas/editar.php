<!-- Codigo php para extraer los datos (de fromar individual) para despues colocarlos de manera individual dentro del input correspondendiente -->
<?php
    if (isset($_GET["No_guia"])) {
        $item="No_guia";
        $valor=$_GET["No_guia"];
        $usuario=ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        #echo '<pre>'; print_r($usuario); echo'</pre>';
    }
?>
<center>
<!-- Seccion para el fromulario que se rellenara automaticamente con los datos del registro que deseamos editar -->
    <!-- Metodo para sobreesxribir los daos que se actualizaran -->
<form method="post">
    <!-- Todo se dividira por rows (filas de con tre clumnas cada una) y detro estesa estaran los inputs con la infromacion -->
    <div class="row">
    <div class="form-group">
        <label for="nombre">Nombre Destinatario:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-user-shield"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Nombre_destinatario"]?>" id="nombreC" name="actualizarNombreD" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre Comprador:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-user-tag"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Nombre_comprador"]?>" id="nombreC" name="actualizarNombreC" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Fecha:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-calendar-minus"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Fecha"]?>" id="fecha" name="actualizarFecha" required>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label for="nombre">Portal:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-warehouse"></i></span>
            </div>
            <select id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Portal"]?>" id="portal" name="actualizarPortal" required>
                <option><?php echo $usuario["Portal"]?></option>
                <option>Amazon</option>
                <option>Mercado libre</option>
                <option>Whatsapp</option>
                <option>Web</option>
                <option>Otro</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Cuenta:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-address-book"></i></span>
            </div>
            <select id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Cuenta"]?>" id="cuenta" name="actualizarCuenta" required>
                <option><?php echo $usuario["Cuenta"]?></option>
                <option>AmuebleZOnline</option>
                <option>MueblesAltabaOnline</option>
                <option>AmuebleZ</option>
                <option>FabricaAmuebleZ</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Fabricante:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-hammer"></i></span>
            </div>
            <select id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Fabricante"]?>" id="fabricante" name="actualizarFabricante" required>
                <option><?php echo $usuario["Fabricante"]?></option>
                <option>Altba</option>
                <option>Yunuen</option>
                <option>Mobi</option>
                <option>Otro</option>
            </select>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label for="nombre">Producto:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-couch"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Producto"]?>" id="producto" name="actualizarProducto" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Color:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-palette"></i></span>
            </div>
            <select id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Color"]?>" id="color" name="actualizarColor" required>
            <option><?php echo $usuario["Color"]?></option>
            <option>Chocolate</option>
            <option>Natural</option>
            <option>Nogal</option>
            <option>Clasico</option>   
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Cantidad:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-list-ol"></i></span>
            </div>
            <input id="input-text" type="number" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Cantidad"]?>" id="cantidad" name="actualizarCantidad" required>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label for="nombre">Paqueteria:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-box-open"></i></span>
            </div>
            <select id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Paqueteria"]?>" id="paqueteria" name="actualizarPaqueteria" required>
                <option><?php echo $usuario["Paqueteria"]?></option>
                <option>Envia</option>
                <option>Fedex</option>
                <option>DHL</option>
                <option>Redpack</option>
                <option>Estafeta</option>
                <option>Paquete express</option>
                <option>Otro</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Fecha de entrega:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Fecha_entrega"]?>" id="fechaEntrega" name="actualizarFechaEntrega" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Estado:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-university"></i></span>
            </div>
            <select id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Estado"]?>" id="estado" name="actualizarEstado" required>
                <option><?php echo $usuario["Estado"]?></option>
                <option>Michoacan</option>
                <option>Estado de Mexico</option>
                <option>CDMX</option>
                <option>Puebla</option>
                <option>Guanajuato</option>
                <option>Jalisco</option>
                <option>Queretaro</option>
                <option>Guerrero</option>
            </select>
        </div>
    </div>    
    </div>
    <div class="row">
        <div class="form-group">
            <label for="nombre">Municipio:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-archway"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Municipio"]?>" id="municipio" name="actualizarMunicipio" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Direccion:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-sign"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Direccion"]?>" id="direccion" name="actualizarDireccion" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nombre">Contacto:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-id-card"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Contacto"]?>" id="contacto" name="actualizarContacto" required>
        </div>
    </div>
    </div>
    <div class="row">
        
    </div>
    <div class="row">
         <div class="form-group">
            <label for="nombre">Status:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icons"><i class="fas fa-check-circle"></i></span>
            </div>
            <input id="input-text" type="text" class="form-control" placeholder="Enter name" value="<?php echo $usuario["Estatus"]?>" id="status" name="actualizarEstatus" required>
            <input id="input-text" type="hidden" class="form-control" placeholder="Enter name" value="<?php echo $usuario["No_guia"]?>" id="guia" name="actualizarGuia" required>
        </div>
     </div> 
    </div>

    
    <?php
        $actualizar = ControladorFormularios::ctrActualizarRegistro();
        if ($actualizar == "ok") {
            echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState( null, null, window.location.href);
                }
            </script>';
            echo '<div class="alert alert-success">El usuario ha sido actualizado exitosamente.</div>
            <script>
                setTimeout(function(){
                   window.location = "index.php?pagina=inicio"; 
                },1000);
            </script>';
        }
    ?>
</script>

    <button id="btn-registro" type="submit" class="btn btn-primary">Actualizar</button>
</form>
</center>