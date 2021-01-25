<?php
 
    require_once ("claseconexion.php");
        
      class FormularioPlanta {
 
        public function mostrar(){
     $html = <<<EOT
  <form>
        <div class="container-fluid well">
         <div class="row clearfix">
          <form role="form" class="form-horizontal"action="liquidar_empleado_planta.php">
           <div class="form-group">
            <label class="col-sm-3control-label">Identificacion</label>
             <div class="col-sm-6">
              <input type="hidden" name="tipo_empleado"value="1">
               <input type="text" class="form-control"name="identificacion"id="identificacion"placeholder="Identificacion...">
          </div>
            </div>
              <div class="form-group">
               <label class="col-sm-3control-label">Nombre</label>
                <div class="col-sm-6">
                 <input type="text" class="form-control"name="nombre" id="nombre"placeholder="Nombre...">
            </div>
         </div>
            <div class="form-group">
             <label class="col-sm-3control-label">Cargo</label>
              <div class="col-sm-6">
               <input type="text" class="form-control"name="cargo" id="cargo"placeholder="Cargo...">
         </div>
           </div>
            <div class="form-group">
             <label class="col-sm-3 control-label">Sueldo  básico</label>
              <div class="col-sm-6">
               <input type="text" class="form-control"name="sueldo_basico" id="sueldo_basico"placeholder="Sueldo básico...">
        </div>
          </div>
            <div class="form-group">
             <label class="col-sm-3 control-label">Horas Extras</label>
              <div class="col-sm-6">
               <input type="text" class="form-control"name="horas_extras" id="horas_extras"placeholder="Horas extras...">
           </div>
        </div>
            <div class="form-group">
             <label class="col-sm-3control-label">Deducciones</label>
              <div class="col-sm-6">
               <input type="text" class="form-control"name="deducciones" id="horas_extras"placeholder="Deducciones...">
           </div>
        </div>
            <div class="form-group">
             <div class="col-sm-4 col-sm-offset-3">
              <input type="submit" class="btn btn-info"value="Procesar">
        </div>
            </div>
    </form>
  </div>
 </div>
EOT;
 echo $html ;
 }
 }
?>
 