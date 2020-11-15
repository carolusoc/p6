<?php
include MOD.'_asignaturasModel.php';
include CONT.'_asignaturasController.php';
?>
<br>
<div class="container-fluid">
    <form class="asignatio" action="?pag=_asignaturasView.php" method="post">
        <div class="row">
            <div class="col-md-12">
             
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Crear Asignatura</label>
                            <div class="input-group mb-3">
                                <input required type="text" class="form-control fullwidth" name="name" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                                <br>
                                <label for="favcolor">Elegir color:</label>
                                <input class="form-control asign" type="color" id="favcolor" name="color" value="#ff0000">
                            </div>
                          
                        <button type="submit" class="btn btn-primary mb-2">Crear Asignatura</button>
                    </div>
            </div>
        </div>
    </form>
    <br>
    <hr>
 </div>