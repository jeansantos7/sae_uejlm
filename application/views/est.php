
        <table class="tab-pane active" id="myTable">
            <thead>
              
              <th> ID</th>
              <th> Cedula</th>
              <th> Apellido</th>
              <th> Nombre</th>
              <th> Opciones</th>
            </thead>

            <tbody>
              <?php foreach ($listarEstudiante as $key => $value) { ?>
               <tr>
                <td> <?php echo $value->id_Estudiante; ?>   </td>
                <td> <?php echo $value->cedula_Estudiante; ?>   </td>
                <td> <?php echo $value->ape_Estudiante; ?>   </td>
                <td> <?php echo $value->nom_Estudiante; ?>   </td>
                <td>
                  
                  <a href=" <?php echo base_url('Estudiante/delete/')."/".$value->id_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

                  <a href="<?php echo base_url('Estudiante/edit/')."/".$value->id_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
                </td>
            <?php  } ?>
            </tr>
            </tbody>

        </table>







<div class="form-group">
          <label for="exampleInputEmail1">Nombres </label>
          <input type="text" class="form-control" id="nom_Estudiante" name="nom_Estudiante" aria-describedby="emailHelp" placeholder="Nombres">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Direccion </label>
          <input type="text" class="form-control" id="dir_Estudiante" name="dir_Estudiante" aria-describedby="emailHelp" placeholder="Domicilio">
        </div>
        
        
        <div class="form-group">
          <label for="exampleInputPassword1">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="fech_nac_Estudiante" name="fech_nac_Estudiante" placeholder="contraseña">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Discapacitado </label>
          <input type="Checkbox" onClick="javascript:h=!h;" class="form-control" id="disc_Estudiante" name="disc_Estudiante" >
        

          <label for="exampleInputPassword1">Carnet de Discapacidad </label>
          <input type="text" class="form-control" onFocus="javascript:if(!h) {this.blur();}" id="carnet_Estudiante" name="carnet_Estudiante" placeholder="carnet de Discapacidad">
        </div>
        
         <div class="form-group form-md-line-input">
          <label class="col-md-3 control-label" for="form_control_1">Email
              <span class="required">*</span>
          </label>
          <div class="col-md-9">
              <input type="text" class="form-control" placeholder="" name="email">
              <div class="form-control-focus"> </div>
          </div>
        </div>


        <div class="form-group">
        
          <label for="exampleInputPassword1"> Parentesco familiar del Representante </label>
           
           <select id="parentesco_Estudiante" name="parentesco_Estudiante" >
             <option> Padre o Madre</option>
              <option>Tio (a)</option>
               <option> Abuelo (a)</option>
           </select>
        </div>

      <div class="form-group">

      <label for="exampleInputEmail1">Seleccione el representante</label>
      <select id="id_Representantes" name="id_Representantes">
        <?php foreach ($selRepresentante as  $value) { ?>
          <option value="<?php echo $value->id_Representante ?>"> <?php echo $value->ape_Representante.' '.$value->nom_Representante; ?>  </option>
       <?php } ?>

       </select>
      </div>


      <div class="form-group">
          <label for="exampleInputPassword1">Usuario </label>
          <input type="text" class="form-control" id="user_Estudiante" name="user_Estudiante" placeholder="contraseña">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="pass_Estudiante" name="pass_Estudiante" placeholder="contraseña">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1"> Valor de la Pension</label>
          <input type="text" class="form-control" id="pension_Estudiante" name="pension_Estudiante" placeholder="valor de la pension">
        </div>
</div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <?php 
      //print_r($selEstudiante);

       ?>

      </table>
      </div>

          </div>
         
        </div>

      </div>
</div>







<div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Datos del Estudiante</span>
                    </div>
                
        <div class="form-body">
          <div class="form-group form-md-line-input">
              <label class="control-label col-md-3" for="form_control_1">Numero de Matricula
                  <span class="required">*</span>
              </label>
              <div class="col-md-4">
              <input type="text" class="form-control" placeholder="# # #" name="matricula_Estudiante" id="matricula_Estudiante">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Ingrese el Numero de Matricula</span>
            
            
              </div>


              </div>






       


        <div class="form-body">
          <div class="form-group form-md-line-input">
              <label class="col-md-4 control-label" for="form_control_1">Apellidos1
                  <span class="required">*</span>
              </label>
              <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Ingrese los Apellidos" name="ape_Estudiante" id="ape_Estudiante">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Ingrese Apellidos del Estudiante</span>
              </div>
        </div>


          <div class="form-group form-md-line-input">
          </br>
              <label class="col-md-10 control-label" for="form_control_1">Apellidos2
                  <span class="required">*</span>
              </label>
              <div class="col-md-8">
              <input type="text" class="form-control" placeholder="Ingrese los Apellidos" name="ape_Estudiante" id="ape_Estudiante">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Ingrese Apellidos del Estudiante</span>
              </div>
        