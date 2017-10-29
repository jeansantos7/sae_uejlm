
<!-- aqui estara el crud de de usuario-->

<script language="JavaScript">
var h=false;
</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('../css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}



#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>


<h1 class="page-title">  Vista de Estudiante                      
                    </h1>
 
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Estudiante</span>
                            </li>
                        </ul>


                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>





  <!-- Nav tabs -->

                  
     

        <div role="tabpanel" class="tab-pane active" id="home">                  
        <input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">

        <!-- Tab panes -->
        

        
          
            
        <div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase">Datos Personales </span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="#" class="form-horizontal" id="form_sample_1">
                                        <div class="form-body">
                                           

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Numero de Matricula
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" id="matrciula_Estudiante" name="matrciula_Estudiante"  class="form-control" placeholder="# # #" >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese el Numero de Matricula</span>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Numero de Cedula
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" id="cedula_Estudiante" name="cedula_Estudiante" class="form-control" placeholder="# # # # # # # # #" >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese numero Cedula</span>
                                                </div>
                                            </div>


                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Apellidos
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" id="ape_Estudiante" name="ape_Estudiante"  class="form-control" placeholder=" " >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese Apellidos del Estudiante</span>
                                                </div>
                                            </div>

                                             <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Nombres
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" id="nom_Estudiante" name="nom_Estudiante"  class="form-control" placeholder=" " >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese Nombres del Estudiante</span>
                                                </div>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Fecha de Nacimiento
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="date" id="nom_Estudiante" name="nom_Estudiante"  class="form-control" placeholder=" " >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese Fecha de Nacimiento</span>
                                                </div>
                                            </div>


                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Domicilio
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" id="nom_Estudiante" name="nom_Estudiante"  class="form-control" placeholder=" " >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese la Direccion </span>
                                                </div>
                                            </div>


                                   
                                            
                                            <div class="col-md-14">
                                            <label class="col-md-3 control-label" for="form_control_1">Discapacitado</label>
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" onClick="javascript:h=!h;" id="checkbox1_3" name="checkboxes2[]" value="1" class="md-check">
                                                            <label for="checkbox1_3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>  </label>
                                                        </div>
                                                     </div>
                                             </div>        

                                             <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Carnet del Conadis
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" id="carnet_Estudiante" name="carnet_Estudiante" onFocus="javascript:if(!h) {this.blur();}"   class="form-control" placeholder="# # #" >
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Ingrese el Numero del Carnet
                                                    </span>
                                                </div>
                                            </div>
   
    
                
                                          

                                            

                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">URL
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="" name="url">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Number
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="" name="number">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Digits
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Enter digits" name="digits">
                                                        <div class="form-control-focus"> </div>
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Credit Card
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <input type="text" class="form-control" name="creditcard" placeholder="Enter your card">
                                                        <div class="form-control-focus"> </div>
                                                        <i class="fa fa-cc-visa font-green"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="email2" placeholder="Enter your email">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">URL</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="url2" placeholder="Enter URL">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-i-cursor"></i>
                                                        </span>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Number</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control" name="number2" placeholder="Placeholder"> </div>
                                                        <span class="input-group-btn btn-right">
                                                            <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a href="javascript:;">Action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">Another action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">Something else here</a>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <a href="javascript:;">Separated link</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Delivery</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="delivery">
                                                        <option value="">Select</option>
                                                        <option value="2">Option 1</option>
                                                        <option value="3">Option 2</option>
                                                        <option value="4">Option 3</option>
                                                    </select>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Payment</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="payment" multiple="">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 3</option>
                                                        <option value="5">Option 3</option>
                                                    </select>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-3 control-label" for="form_control_1">Memo</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="memo" rows="3"></textarea>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <label class="col-md-3 control-label" for="form_control_1">Checkboxes</label>
                                                <div class="col-md-9">
                                                    <div class="md-checkbox-list">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" name="checkboxes1[]" value="1" id="checkbox1_1" class="md-check">
                                                            <label for="checkbox1_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" name="checkboxes1[]" value="2" id="checkbox1_2" class="md-check">
                                                            <label for="checkbox1_2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" name="checkboxes1[]" value="3" id="checkbox1_211" class="md-check">
                                                            <label for="checkbox1_211">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <label class="col-md-3 control-label" for="form_control_1">Checkboxes</label>
                                                <div class="col-md-9">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="checkbox1_3" name="checkboxes2[]" value="1" class="md-check">
                                                            <label for="checkbox1_3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="checkbox1_4" name="checkboxes2[]" value="2" class="md-check">
                                                            <label for="checkbox1_4">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="checkbox1_5" name="checkboxes2[]" value="3" class="md-check">
                                                            <label for="checkbox1_5">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-radios">
                                                <label class="col-md-3 control-label" for="form_control_1">Radios</label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-list">
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_6" name="radio1" value="1" class="md-radiobtn">
                                                            <label for="checkbox1_6">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_7" name="radio1" value="2" class="md-radiobtn">
                                                            <label for="checkbox1_7">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_611" name="radio1" value="3" class="md-radiobtn">
                                                            <label for="checkbox1_611">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-radios">
                                                <label class="col-md-3 control-label" for="form_control_1">Radios</label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_8" name="radio2" value="1" class="md-radiobtn">
                                                            <label for="checkbox1_8">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_9" name="radio2" value="2" class="md-radiobtn">
                                                            <label for="checkbox1_9">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="checkbox1_10" name="radio2" value="2" class="md-radiobtn">
                                                            <label for="checkbox1_10">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Validate</button>
                                                    <button type="reset" class="btn default">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
  
  


                                </div>
                            </div>

      



        <div class="form-group">
          <input type="hidden" class="form-control" id="fech_matricula_Estudiante" name="fech_matricula_Estudiante" >
        </div>   
    </div>

 <div class="col-md-6">
      <div role="tabpanel" class="tab-pane active" id="profile">

      <table class="tab-pane active" id="myTable2">
  


  <form method="POST" class="form-horizontal" id="form_sample_1" action="<?php echo base_url('Estudiante/insert'); ?>">


    

      

       



        
        
        



<form method="post" action="<?php echo base_url('Estudiante/insert'); ?>">


<script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>

   
