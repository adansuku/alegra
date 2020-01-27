<?php $__env->startSection('title', "Edit"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Person</h1>
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edition</h6>
        </div>
        <div class="card-body">
            
        </div>

        <div class="card-body">
        <?php echo Form::model($person, ['route' => ['people.update', $person->id], 'method' => 'patch']); ?>


                <ul class="nav nav-pills flex-column flex-sm-row " role="tablist" id="datosGenerales" style="text-transform: lowercase ">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personales" role="tab">Datos personales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#referencia" role="tab">Persona de referencia / Urgencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#demanda" role="tab">Demanda en vigor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#otros" role="tab">Otros datos relevantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#datos_cuidadora" role="tab">Datos personales "cuidadora"</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#valoracion" role="tab">Valoración y social</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">Información ley dependencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">OTRAS AYUDAS SOCIOSANITARIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">INFORMACIÓN LEGAL</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab"> SITUACIÓN ACTUAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">OTRAS PATOLOGÍAS IMPORTANTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">ALERGIAS E INTOLERANCIAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">ANTECEDENTES SALUD IMPORTANTES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">COBERTURA SANITARIA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">ESPECIALISTAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">MEDICACIÓN</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">INDICADORES SALUD</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">CONTROL FECHAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ley_dependencia" role="tab">DOCUMENTACIÓN</a>
                        </li>

                
                </ul><!-- Tab panes -->

                <div class="tab-content">
                    <div class="tab-pane active" id="personales" role="tabpanel">
                    <?php echo $__env->make('people.edit.personal_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                 
                    </div>

                    <div class="tab-pane" id="referencia" role="tabpanel">
                       
                    </div>

                    <div class="tab-pane" id="otros" role="tabpanel">
                      
                    </div>
                    
                    <div class="tab-pane" id="datos_cuidadora" role="tabpanel">
                        
                    </div>

                    <div class="tab-pane" id="laboral" role="tabpanel">
                       
                    </div>

                    <div class="tab-pane" id="valoracion" role="tabpanel">
                       
                       
                    </div><!--tabpanel-->


                    <div class="tab-pane" id="#ley_dependencia" role="tabpanel">
                       
                    </div><!--tabpanel-->
                </div><!--end tab-content-->

             













            <div class="row mt-2">
                <div class="col-sm-6"></div>  
                <div class="col-sm-6">
                        <div class="row no-gutters">
                                <div class="col-sm-6">

                            </div>
                                <div class="col-sm-6">
                                    <button class="btn-block btn btn-danger" onclick="window.location.href='/workers'">Cancelar</button>
                                </div>   
                        </div>                                             
                </div>
                <?php echo Form::close(); ?>

            </div>
            
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/people/edit.blade.php ENDPATH**/ ?>