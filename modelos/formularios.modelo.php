<?php
    require_once "conexion.php";
    class ModeloFormularios{
        static public function mdlRegistro($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombre_destinatario, Nombre_comprador, Fecha, Portal, Cuenta, Fabricante, Producto, Color, Cantidad, Paqueteria, Fecha_entrega, Estado, Municipio, Direccion, Contacto, No_guia) VALUES (:nombreD, :nombreC, :fecha, :portal, :cuenta, :fabricante, :producto, :color, :cantidad, :paqueteria, :fechaEntrega, :estado, :municipio, :direccion, :contacto, :no_guia)");
            $stmt ->bindParam(":nombreD", $datos["nombreD"], PDO::PARAM_STR);
            $stmt ->bindParam(":nombreC", $datos["nombreC"], PDO::PARAM_STR);
            $stmt ->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
            $stmt ->bindParam(":portal", $datos["portal"], PDO::PARAM_STR);
            $stmt ->bindParam(":cuenta", $datos["cuenta"], PDO::PARAM_STR);
            $stmt ->bindParam(":fabricante", $datos["fabricante"], PDO::PARAM_STR);
            $stmt ->bindParam(":producto", $datos["producto"], PDO::PARAM_STR);
            $stmt ->bindParam(":color", $datos["color"], PDO::PARAM_STR);
            $stmt ->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
            $stmt ->bindParam(":paqueteria", $datos["paqueteria"], PDO::PARAM_STR);
            $stmt ->bindParam(":fechaEntrega", $datos["fechaEntrega"], PDO::PARAM_STR);
            $stmt ->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
            $stmt ->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
            $stmt ->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $stmt ->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
            $stmt ->bindParam(":no_guia", $datos["no_guia"], PDO::PARAM_STR);
            if($stmt->execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->close();
            $stmt = null;
        }
        static public function mdlSeleccionarRegistros($tabla, $item, $valor){
            if($item == null && $valor == null){
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
                $stmt->execute();
                return $stmt -> fetchAll();
            }else{
                $stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla WHERE $item = :$item");
                $stmt ->bindParam(":".$item, $valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt -> fetch();
            }
            $stmt->close();
            $stmt = null;
        }
        static public function mdlActualizarRegistro($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
            Nombre_destinatario= :nombreD, 
            Nombre_comprador= :nombreC, 
            Fecha= :fecha, 
            Portal= :portal, 
            Cuenta= :cuenta, 
            Fabricante= :fabricante, 
            Producto= :producto, 
            Color= :color, 
            Cantidad= :cantidad, 
            Paqueteria= :paqueteria, 
            Fecha_entrega= :fechaEntrega, 
            Estado= :estado, 
            Municipio= :municipio, 
            Direccion= :direccion, 
            Contacto= :contacto,
            Estatus = :estatus WHERE No_guia= :no_guia");
            $stmt ->bindParam(":no_guia", $datos["no_guia"], PDO::PARAM_STR);
            $stmt ->bindParam(":nombreD", $datos["nombreD"], PDO::PARAM_STR);
            $stmt ->bindParam(":nombreC", $datos["nombreC"], PDO::PARAM_STR);
            $stmt ->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
            $stmt ->bindParam(":portal", $datos["portal"], PDO::PARAM_STR);
            $stmt ->bindParam(":cuenta", $datos["cuenta"], PDO::PARAM_STR);
            $stmt ->bindParam(":fabricante", $datos["fabricante"], PDO::PARAM_STR);
            $stmt ->bindParam(":producto", $datos["producto"], PDO::PARAM_STR);
            $stmt ->bindParam(":color", $datos["color"], PDO::PARAM_STR);
            $stmt ->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
            $stmt ->bindParam(":paqueteria", $datos["paqueteria"], PDO::PARAM_STR);
            $stmt ->bindParam(":fechaEntrega", $datos["fechaEntrega"], PDO::PARAM_STR);
            $stmt ->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
            $stmt ->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
            $stmt ->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $stmt ->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
            $stmt ->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);
            if($stmt->execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->close();
            $stmt = null;
        }
        static public function mdlEliminarRegistro($tabla, $valor){
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE No_guia = :no_guia");
            $stmt ->bindParam(":no_guia", $valor, PDO::PARAM_INT);
            if($stmt->execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->close();
            $stmt = null;
        }
    }