<?php
include MOD.'_asignaturasModel.php';
include CONT.'_asignaturasController.php';
?>
<br>
<div class="container-fluid">
    <form e class="asignatio" action="?pag=_asignaturasView.php" method="post">
        <div class="row">
            <div class="col-md-12">
             
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"><?php if ($editamos) { ?>Editar Asignatura<?php }else { ?> Crear Asignatura<?php } ?></label>
                            
                            <div class="input-group mb-3">
                                <?php if ($editamos){ ?>
                                <input type="hidden" name="id" value="<?php echo $editoAsignatura[0][0]; ?>">
                                <?php  }?>
                                <input autofocus="true" required type="text" class="form-control fullwidth" name="name" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php if ($editamos){echo $editoAsignatura[0][4]; }?>">
                                <br>
                                <label for="favcolor">Elegir color :  </label>
                                <input  class="form-control asign" type="color" id="favcolor" name="color" value="<?php if ($editamos){echo $editoAsignatura[0][5]; }?>">
                            </div>
                            <?php
                            if ($editamos){
                            ?>
                            <input type="submit" name="accion" value="Edita">        
                            
                            <?php }else{ ?>
                            <button type="submit" class="btn btn-primary mb-2">Crear Asignatura</button>
                            <?php } ?>
                            
                            
                    </div>
            </div>
        </div><span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
    </form>
    <br>
    <hr>
    
    <form class="asignatio" action="?pag=_asignaturasView.php" method="post">
        <div class="row">
            <div class="col-md-12">
          
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Lista de Asignturas</label>
                            <select name="borra-id-asigns" multiple class="form-control" id="exampleFormControlSelect1">
                            <?php
                            for ( $a = 0; $a<$totalAsignaturas; $a++){?>
                                <option value="<?php echo $arrayAsignaturas[$a][0]?>"><?php echo $arrayAsignaturas[$a][4].' '.$arrayAsignaturas[$a][5]?><span class="glyphicon glyphicon-stop" aria-hidden="true"></span></option>    
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
    </form>
    
    
    
 </div>
<script>
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}


</script>