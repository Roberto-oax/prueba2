<center>
      <form method="post">
    <!-- Main content -->
    <section class="content">    
              <div class="row">
                <div class="form-group">
                <label for="nombre">Nombre destinatario:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span id="icons" class="input-group-text"><i class="fas fa-user-shield"></i></span>
                        </div>
                            <input id="input-text" type="text" class="form-control" placeholder="Enter name" id="nombreD" name="registroNombreD" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre Comprador:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                          <span id="icons" class="input-group-text"><i class="fas fa-user-tag"></i></span>
                      </div>
                      <input id="input-text" type="text" class="form-control" placeholder="Enter name" id="nombreC" name="registroNombreC" required>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="nombre">Fecha:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span id="icons" class="input-group-text"><i class="fas fa-calendar-minus"></i></span>
                        </div>
                        <input id="input-text" type="text" class="form-control" placeholder="Enter date" id="Fecha" name="registroFecha" required>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label for="nombre">Portal:</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span id="icons" class="input-group-text"><i class="fas fa-warehouse"></i></span>
                      </div>
                      <select id="input-text" type="text" class="form-control" placeholder="Enter portal" id="portal" name="registroPortal" required>
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
                            <span id="icons" class="input-group-text"><i class="fas fa-address-book"></i></span>
                          </div>
                          <select id="input-text" type="text" class="form-control" placeholder="Enter account" id="cuenta" name="registroCuenta" required>
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
                            <span id="icons" class="input-group-text"><i class="fas fa-hammer"></i></span>
                        </div>
                        <select id="input-text" type="text" class="form-control" placeholder="Enter fabricant" id="fabricante" name="registroFabricante" required>
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
                            <span id="icons" class="input-group-text"><i class="fas fa-couch"></i></span>
                            </div>
                            <input id="input-text" type="text" class="form-control" placeholder="Enter product" id="producto" name="registroProducto" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nombre">Color:</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                                <span id="icons" class="input-group-text"><i class="fas fa-palette"></i></span>
                            </div>
                            <select id="input-text" type="text" class="form-control" placeholder="Enter color" id="color" name="registroColor" required>
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
                                      <span id="icons" class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                  </div>
                                  <input id="input-text" type="number" min="1" class="form-control" placeholder="Enter quantity" id="cantidad" name="registroCantidad" required>
                              </div>
                          </div>
                  </div>
                  <div class="row">
                      <div class="form-group">
                        <label for="nombre">Paqueteria:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span id="icons" class="input-group-text"><i class="fas fa-box-open"></i></span>
                            </div>
                            <select id="input-text" type="text" class="form-control" placeholder="Enter delivery" id="paqueteria" name="registroPaqueteria" required>
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
                                    <span id="icons" class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                                <input id="input-text" type="text" class="form-control" placeholder="Enter delivery date" id="fechaentrega" name="registroFechaEntrega" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="nombre">Estado:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span id="icons" class="input-group-text"><i class="fas fa-university"></i></span>
                                    </div>
                                    <select id="input-text" type="text" class="form-control" placeholder="Enter state" id="estado" name="registroEstado" required>
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
                                                <span id="icons" class="input-group-text"><i class="fas fa-archway"></i></span>
                                            </div>
                                            <input id="input-text" type="text" class="form-control" placeholder="Enter municipio" id="municipio" name="registroMunicipio" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Direccion:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span id="icons" class="input-group-text"><i class="fas fa-sign"></i></span>
                                            </div>
                                            <input id="input-text" type="text" class="form-control" placeholder="Enter address" id="direccion" name="registroDireccion" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Contacto:</label>
                                        <div class="input-group">
                                         <div class="input-group-prepend">
                                                <span id="icons" class="input-group-text"><i class="fas fa-id-card"></i></span>
                                            </div>
                                            <input id="input-text" type="text" class="form-control" placeholder="Enter contact" id="contacto" name="registroContacto" required>
                                            <?php
                                                $guia1 = "00";
                                                $guia2 = rand(1000, 9999);settype($guia2, "string");
                                                $guia3 = rand(1000, 9999);settype($guia3, "string");
                                                $guia = $guia1.$guia2.$guia3;
                                            ?>
                                            <input type="hidden" class="form-control"  value=<?php echo $guia?> placeholder="" id="pwd" name="registroGuia">
                                        </div>
                                    </div>
                                 </div>
                                   <?php
                        $registro = ControladorFormularios::ctrRegistro();
                        echo '<script>
                            if(window.history.replaceState){
                                window.history.replaceState( null, null, window.location.href);
                            }
                        </script>';
                        if($registro == "ok"){
                            echo '<div class="alert alert-success">El usuario ha sido registrado</div>
                            <script>
                              setTimeout(function(){
                                window.location = "index.php?pagina=inicio"; 
                                },1000);
                            </script>';
                        }
                    ?>
                    <button id="btn-registro" type="submit" class="btn btn-primary">Enviar</button>
    </section>
    <!-- /.content -->
  </form>
</center>