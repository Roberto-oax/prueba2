<?php
    class ControladorFormularios{
        static public function ctrRegistro(){
            if(isset($_POST["registroNombreD"])){
                $tabla = "registro_venta";
                $datos = array("nombreD" => $_POST["registroNombreD"], 
                                "nombreC" => $_POST["registroNombreC"], 
                                "fecha" => $_POST["registroFecha"], 
                                "portal" => $_POST["registroPortal"], 
                                "cuenta" => $_POST["registroCuenta"], 
                                "fabricante" => $_POST["registroFabricante"], 
                                "producto" => $_POST["registroProducto"], 
                                "color" => $_POST["registroColor"], 
                                "cantidad" => $_POST["registroCantidad"], 
                                "paqueteria" => $_POST["registroPaqueteria"], 
                                "fechaEntrega" => $_POST["registroFechaEntrega"], 
                                "estado" => $_POST["registroEstado"], 
                                "municipio" => $_POST["registroMunicipio"], 
                                "direccion" => $_POST["registroDireccion"], 
                                "contacto" => $_POST["registroContacto"],
                                "no_guia" => $_POST["registroGuia"]);
                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                #echo '<pre>'; print_r($respuesta); echo'</pre>';
                return $respuesta;
                //return "ok";//$_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPwd"]."<br>";
            }
        }

        static public function ctrSeleccionarRegistros($item, $valor){
            $tabla = "registro_venta";
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            return $respuesta;
        }

        public function ctrIngreso(){
            if(isset($_POST["ingresoNombre"])){
                $tabla = "users";
                $item = "nombre";
                $valor = $_POST["ingresoNombre"];
                $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
                if($respuesta["nombre"] == $_POST["ingresoNombre"] && $respuesta["password"] == $_POST["ingresoPwd"]){
                    $_SESSION["validarIngreso"] = "ok";
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState( null, null, window.location.href);
                        }
                        window.location = "index.php?pagina=inicio";
                    </script>';
                }else{
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState( null, null, window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger">Error al ingresar al sistema: El usuario o la contraseña es incorrecto.</div>';
                }
                //echo '<pre>'; print_r($respuesta); echo'</pre>';
            }
        }
        static public function ctrActualizarRegistro(){
            if(isset($_POST["actualizarNombreD"])){
                $tabla = "registro_venta";
                $datos = array("nombreD" => $_POST["actualizarNombreD"], 
                                "nombreC" => $_POST["actualizarNombreC"], 
                                "fecha" => $_POST["actualizarFecha"], 
                                "portal" => $_POST["actualizarPortal"], 
                                "cuenta" => $_POST["actualizarCuenta"], 
                                "fabricante" => $_POST["actualizarFabricante"], 
                                "producto" => $_POST["actualizarProducto"], 
                                "color" => $_POST["actualizarColor"], 
                                "cantidad" => $_POST["actualizarCantidad"], 
                                "paqueteria" => $_POST["actualizarPaqueteria"], 
                                "fechaEntrega" => $_POST["actualizarFechaEntrega"], 
                                "estado" => $_POST["actualizarEstado"], 
                                "municipio" => $_POST["actualizarMunicipio"], 
                                "direccion" => $_POST["actualizarDireccion"], 
                                "contacto" => $_POST["actualizarContacto"],
                                "estatus" => $_POST["actualizarEstatus"],
                                "no_guia" => $_POST["actualizarGuia"]);
                $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
                return $respuesta;
                
                //return "ok";//$_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPwd"]."<br>";
            }
        }
        public function ctrEliminarRegistro(){
            if(isset($_POST["eliminarRegistro"])){
                $tabla = "registro_venta";
                $valor = $_POST["eliminarRegistro"];
                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
                
                if($respuesta == "ok"){
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState( null, null, window.location.href);
                        }
                        window.location = "index.php?pagina=inicio";
                    </script>';
                }
            }
        }
    }