<?php
if (isset($_POST['borra-id-profs'])){
borraProfesor($_POST['borra-id-profs']);

//echo '<script>location.reload();</script>';
}

if ((isset($_POST['name'])) && (isset($_POST['surname'])) && (isset($_POST['telephone'])) && (isset($_POST['nif'])) && (isset($_POST['email']))) {
     generaProfesor($_POST['name'],$_POST['surname'],$_POST['telephone'],$_POST['nif'],$_POST['email']);
   //  echo '<script>location.reload();</script>';

     
}


?>
