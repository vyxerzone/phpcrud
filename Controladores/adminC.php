<?php

class AdminC{

    public function Ingreso(){

        if(isset($_POST["usuarioI"])){

            $datosC = array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"])

            $tablaDB = "administradores";

            $respuesta = AdminM::IngresoM($datosC, $tablaDB);

        }

    }

}