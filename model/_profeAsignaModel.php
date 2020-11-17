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

function cargamosProfesores(){
    $conn = conectar();
    $sql = 'SELECT * FROM  teachers';
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
return mysqli_fetch_all($result);    
}


function nombreProfID($id){
    $conn = conectar();
    $sql = "SELECT * FROM  teachers WHERE id_teacher = '$id'  ";
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
return mysqli_fetch_all($result);    
}

function cargamosAsignaturas(){
    $conn = conectar();
    $sql = 'SELECT * FROM  class';
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
return mysqli_fetch_all($result);    
}


function muestraAsignaciones(){
     $conn = conectar();
     $sql = "SELECT * FROM  class WHERE id_teacher <> 'NULL'";
     $result = mysqli_query($conn, $sql);
      desconectar($conn);
return mysqli_fetch_all($result);    
}


function desasignaProfe($idteacher,$idclass){
    
      $conn = conectar();
      $sql = "UPDATE class SET id_teacher=NULL WHERE id_teacher='$idteacher' AND id_class='$idclass'";
     $result = mysqli_query($conn, $sql);
      desconectar($conn);
//return mysqli_fetch_all($result);   
}

function empareja($profesor, $clase){
      $conn = conectar();
     $sql = "UPDATE class SET id_teacher='$profesor' WHERE id_class='$clase'";
      $result = mysqli_query($conn, $sql);
      desconectar($conn);
     
}



$totalAsignaciones = sizeof(muestraAsignaciones());
$arrayAsignaciones = muestraAsignaciones();


$arrayProfes = cargamosProfesores();
$totalProfesores = sizeof(cargamosProfesores());

$arrayAsignaturas = cargamosAsignaturas();
$totalAsignaturas = sizeof(cargamosAsignaturas());