<?php
$reload=false;


/* detecta si queremos borrar */
if ( (isset($_POST['id-alumns'])) && (!isset($_POST['edita'])) ){
    borraAlumno($_POST['id-alumns']);
   // header("Location: ?pag=_profesoresView.php");
    $reload=true;
}



/* dettecta si queremos editar */
if ( (isset($_POST['id-alumns'])) &&  (isset($_POST['edita']))){

    $editoAlumno = editoAlumno($_POST['id-alumns']);
    $editamos = true;
    
}else{
    $editamos=false;
}




/* Creamos Alumno */

if ((isset($_POST['name'])) && (isset($_POST['surname'])) && (isset($_POST['telephone'])) && (isset($_POST['nif'])) && (isset($_POST['email'])) && (!isset($_POST['accion'])) && (isset($_POST['alfaday']))  ) {
    generaAlumno($_POST['name'],$_POST['surname'],$_POST['telephone'],$_POST['nif'],$_POST['email'],$_POST['alfaday'],$_POST['user'], $_POST['pass']);
    //header("Location: ?pag=_profesoresView.php");
    print_r($_POST);
    $reload=true;
 
}

/* recibe el formulario de alumno actualizado */
if ( (isset($_POST['accion'])) && ($_POST['accion']=='Edita') ){
    actualizaAlumno($_POST['id'],$_POST['user'],$_POST['pass'],$_POST['email'],$_POST['name'],$_POST['surname'],$_POST['telephone'],$_POST['nif'],$_POST['alfaday']);
    //  header("Location: ?pag=_profesoresView.php");
    $reload=true;

}





?>
