<?php?>

<section id="content">
    <section class="container_12 clearfix">
        <section id="main" class="grid_9 push_3">
            <article id="dashboard">
                <h1>Carga Academica a Docentes</h1>
                 
                <form id="myForm" class="uniform" method="POST">
                    <fieldset>
                        <legend>Datos Principales</legend>
                        <dl class="inline">

                            <dt><label for="grade">Docente</label></dt>
                            <dd>
                               
                                <select size="1" id="grade" name="docente" class="medium required">
                                        <option value="">Seleccione</option>
                                    
                                </select>
                            </dd>
                            <dt><label for="grade">Materia</label></dt>
                            <dd>
                                
                                <select size="1" id="grade" name="mate"class="medium required">
                                        <option value="">Seleccione</option>
                                    
                                </select>
                            </dd>
                            <dt><label for="grade">Grado</label></dt>
                            <dd>
                               
                                <select size="1" id="grade" name="grade"class="medium required">
                                        <option value="">Seleccione</option>
                                  
                                </select>
                            </dd>
                        </dl>                    
                        <div class="buttons">
                            <button type="submit" name="save" value="" class="button">Agregar</button>
                            <button type="button" class="button white">Cancelar</button>
                        </div>
                    </fieldset>
                </form>

            </article>
        </section>

        
    </section>
</section>
