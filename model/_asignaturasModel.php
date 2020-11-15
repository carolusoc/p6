<?php
function conectar() {
	$out =  mysqli_connect(HOST_DB, USER_DB, PASS_DB, NAME_DB);
        
        if ($out->connect_error){
            die("Conexion fallida:".$out->connect_error);
        }
return $out;
}

function desconectar($conexion) {
	mysqli_close($conexion);
}


function cargamosAsignaturas(){
    $conn = conectar();
    $sql = 'SELECT * FROM  class';
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
return mysqli_fetch_all($result);    
    
}


function generaAsignatura($nombre,$color){
    $conn = conectar();
    $sql = "INSERT INTO class (name, color) VALUES ('$nombre','$color')";
    $result = mysqli_query($conn, $sql);
    desconectar($conn);

}
