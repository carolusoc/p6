<?php
include MOD.'_profesoresModel.php';
include CONT.'_profesoresController.php';
?>
<br>
<div class="container-fluid">
    
    <form class="asignatio" action="?pag=_profesoresView.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                   
                        <label for="exampleFormControlSelect1"><?php if($editamos){ ?>Editar Profesor<?php } else { ?>Crear Profesor<?php } ?></label>

                            <?php if ($editamos){ ?>
                        <input type="hidden" name="id" value="<?php echo $editoProfesor[0][0]; ?>">
                            <?php  } ?>
                            <div class="input-group mb-3">
                                <input required type="text" class="form-control" name="name" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php if ($editamos){echo $editoProfesor[0][1]; }?>">
                        </div>
                            <div class="input-group mb-3">
                            <input required type="text" class="form-control" name ="surname" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon1" value="<?php if ($editamos){echo $editoProfesor[0][2]; }?>">
                            </div>
                            <div class="input-group mb-3">
                                <input required type="text" class="form-control" name="telephone" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" value="<?php if ($editamos){echo $editoProfesor[0][3]; }?>">
                           </div>
                            <div class="input-group mb-3">
                            <input required type="text" class="form-control" name="nif" placeholder="NIF" aria-label="NIF" aria-describedby="basic-addon1" value="<?php if ($editamos){echo $editoProfesor[0][4]; }?>">
                            </div>
                            <div class="input-group mb-3">
                                <input required type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="<?php if ($editamos){echo $editoProfesor[0][5]; }?>">
                            </div>
                            <?php if($editamos){ ?>
                            <input type="submit" name="accion" value="Edita" class="btn btn-primary mb-2">
                            <?php }else{ ?>  
                            <button type="submit" class="btn btn-primary mb-2">Crear Profesor</button>
                            <?php } ?>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
    <br>

    <hr>
        <br>

        <form class="asignatio" action="?pag=_profesoresView.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Profesores</label>
                            <select name="borra-id-profs" multiple class="form-control" id="exampleFormControlSelect1">
                            <?php
                            for ( $a = 0; $a<$totalProfesores; $a++){?>
                                <option value="<?php echo $arrayProfes[$a][0]?>"><?php echo $arrayProfes[$a][1].' '.$arrayProfes[$a][2]?></option>    
                            <?php
                            }
                            ?>
                                
                           
                        </select>
                        <br>
                        <input type="submit" name="edita" value="Edita">          
                        <input type="submit" name="borra" value="Borra">                     
                        
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
    </form>
    <br>

    <hr>

<br>


   


</div>

</div>

<script>
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}


</script>