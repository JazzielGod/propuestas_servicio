<?php
    if(isset($_SESSION['email'])){
        function obtenerDatos(){
            try {
                
                require 'conexion_db.php';
        
                $sql = "SELECT * FROM PLANTILLAWORD;";
        
                $consulta = mysqli_query($conn, $sql);
        
                return $consulta;
        
            } catch (\Throwable $th) {
                var_dump($th);
            }
        }
        obtenerDatos();
    }else{
        header('Location: logout.php');
        exit();
    }