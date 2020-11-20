<?php
include MOD.'_calendarioModel.php';
include CONT.'_calendarioController.php';
?>
<br><br>
<div class="container">
    <h3>Horario</h3>
    <hr>
    <br>
    <form class="asignatio" action="?pag=_calendarioView.php" method="post">
    <div class="row asignatio">
        <div class="col-md-7">
          
                <div class="form-group  editasign">
                    <label for="">Asignatura</label>
                    <input type='hidden' name='idclass' value='asignamos'>
                    <input type='hidden' name='idclass' value='asignamos'>
                    <select  name='clase' class="form-control mb-4" id="select" >
                        <?php 
                        if ($totalAsignaturas>0){
                                for ($a=1;$a<$totalAsignaturas;$a++){  
                                    if ($a==1){$elprimero=$arrayAsignaturas[$a]->id_class;}?>
                                    <option <?php  
                                    if (($mantiene==$arrayAsignaturas[$a]->id_class)){ 
                                        echo 'selected';
                                       
                                            $elprimero=$arrayAsignaturas[$a]->id_class;
                                                    
                                           
                                        
                                        }  ?> value="<?php  $arrayAsignaturas[$a]->id_class ?>"><?php echo $arrayAsignaturas[$a]->name ?></option>
                   
                        <?php   }
                         }  else { ?>
                                     <option>nada</option>
                        <?php
                        }
                        ?>

                    </select>
                   
                </div>
          
        </div>
        <div class="col-md-5 ">
            <div class="editasign">
                <div class=" mb-4 ">
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <label for="entrada">Dia</label>
                            <input required name="dia" id="entrada" class="form-control" type="date" step="600" >   
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="entrada">Hora Inicio</label>
                            <input required name="horaini" id="entrada" class="form-control" type="time" step="600" >   
                        </div>
                        <div class="col-md-6">
                            <label for="entrada">Hora Fin</label>
                             <input required name="horafin" class="form-control" type="time" >
                         </div>
                    </div>
                   
                    
               
                </div>
                 <div class="row">
                     <div class="col-md-12">
                            <div class="form-group">
                           <button type="submit" class="btn btn-primary mb-2 botonasignar">Asignar</button>
                        </div>
                     </div>
                     
                </div>
            </div>
        </div>
    </div><!/--row-->
     </form>
    <br>
    <hr>
   <br>
   
       <?php 
    echo $elprimero;
       $dias = sizeof(horarioAsign($elprimero));
      
   
   ?>
   
   
   
   
   
   
   
   <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
       <th scope="col">Días</th>
      <th scope="col">Inicio</th>
      <th scope="col">Finalizacion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
    for ($a=1;$a<$dias; $a++){
    ?>  
    <tr>
      <th scope="row"><?php echo $a; ?></th>
      <td><?php echo horarioAsign($elprimero)[$a]->day ?></td>
      <td><?php echo horarioAsign($elprimero)[$a]->time_start ?></td>
      <td><?php echo horarioAsign($elprimero)[$a]->time_end ?></td>
      <td><form name="borra" action="?pag=_calendarioView.php" method="post"><button type="submit" name="erasethis" value="<?php echo horarioAsign($elprimero)[$a]->id_schedule?>"> <?php echo $trash; ?> </button></form></td>
    </tr>
    
    <?php } ?>  
      
    
  </tbody>
</table>

   <script>
   document.getElementById('select').onchange = function() {
  //  window.location = "?pag=_calendarioView.php&ider=<?php echo $elprimero; ?>"
};
   
   </script>
   
   
</div>
<script>
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}
</script>



<?php
if($reload){
echo '<script>location.reload();</script>';
}
