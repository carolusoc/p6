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
    //desconectar($conn);
return mysqli_fetch_all($result);    
    
}


function borraAsignatura($id){
    $conn = conectar();
    $sql = 'DELETE FROM  class WHERE id_class="'.$id.'"';
    $result = mysqli_query($conn, $sql);
   // desconectar($conn);

    
}



function generaAsignatura($nombre,$color){
    $conn = conectar();
    $sql = "INSERT INTO class (name, color) VALUES ('$nombre','$color')";
    $result = mysqli_query($conn, $sql);
    //desconectar($conn);

}

function actualizAsignatura($nombre,$color,$id){
    $conn = conectar();
    $sql = "UPDATE class SET name='$nombre', color='$color' WHERE id_class='$id'";
    $result = mysqli_query($conn, $sql);
    //desconectar($conn);

}


function editamosAsignatura($id){
     $conn = conectar();
     $sql = 'SELECT * FROM  class WHERE id_class="'.$id.'"';
     $result = mysqli_query($conn, $sql);
     return mysqli_fetch_all($result);    

}

//$editoAsignatura = editamosAsignatura()

$totalAsignaturas = sizeof(cargamosAsignaturas());

$arrayAsignaturas = cargamosAsignaturas();

$randomID = rand(10,100);