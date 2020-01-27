<div class="row">
    <div class="col-lg-12">
        <h4>Situación actual de salud</h4>
        <hr>
    </div>

    <div class="col-md-6">
        <h5>Diagnósticos Principales</h5>
        <button type="button" class="btn btn-secondary  float-right mb-3" data-toggle="modal" data-target="#diagnostic_modal">
            Añadir Diagnóstico <i class="fas fa-file-upload"></i>
        </button>
        <?php echo $__env->make('patients.show.show_diagnostic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>



    <div class="col-md-6">
        <h5>Alergia e intolerancia</h5>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal" data-target="#allergy_modal">
            Añadir Alergia <i class="fas fa-file-upload"></i>
        </button>
        <?php echo $__env->make('patients.show.show_allergy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <div class="col-md-6">
    <hr class="pb_4">
        <h5>Otras patología/s Importantes</h5>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal" data-target="#patology_modal">
            Añadir Patología <i class="fas fa-file-upload"></i>
        </button>
        <?php echo $__env->make('patients.show.show_patology', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>



    <div class="col-md-6">
    <hr class="pb_4">
        <h5>Observaciones Importantes</h5>
    </div>
</div>

<hr class="pb_4">

<div class="row">
    <div class="col-sm-9">
        <h4>Antecedentes Salud Importantes</h4>
    </div>
    <div class="col-md-3 mb-3">
        <button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#past_modal">
            Añadir Antecedente <i class="fas fa-file-upload"></i>
        </button>
    </div>
    <div class="col-sm-12 ">
        <?php echo $__env->make('patients.show.show_past', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<hr class="pb_4">

<div class="row">
    <div class="col-sm-12">
        <h4>Cobertura sanitaria</h4>
    </div>
    <!-- Reg Sanitario Field -->
    <div class="form-group col-md-4">

        <?php echo Form::label('reg_sanitario', 'Régimen Asistencia Sanitaria:'); ?>

        <select class="form-control" id="reg_sanitario" name="reg_sanitario">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->reg_sanitario == 'Pública' ? 'selected':''); ?>>Pública</option>
            <option <?php echo e($patient->patientHealth->reg_sanitario == 'Privada' ? 'selected':''); ?>>Privada</option>
        </select>

        <!-- Regimen Priv Field -->
        <div class="form-group bg-secondary p-3" id="centro_privado" style="display: none">
            <?php echo Form::label('regimen_priv', 'Centro Privado:'); ?>

            <?php echo Form::text('regimen_priv', $patient->patientHealth->regimen_priv, ['class' => 'form-control']); ?>

        </div>

    </div>


    <?php $__env->startPush('scripts'); ?>
    <script>
        $('#reg_sanitario').on('change', function() {
            $('#centro_privado').css('display', 'none');
            if ($(this).val() === 'Privada') {
                $('#centro_privado').css('display', 'block');
            }
        });

        $(document).ready(function() {
            if ($('#reg_sanitario').val() == 'Si')
                $('#centro_privado').show(); // Don't forget to surround the div id with quotes
        });
    </script>
    <?php $__env->stopPush(); ?>


    <div class="form-group col-md-4">
        <?php echo Form::label('num_afiliado', 'Nº Afiliación:'); ?>

        <?php echo Form::text('num_afiliado', $patient->patientHealth->num_afiliado, ['class' => 'form-control']); ?>


        <?php echo Form::label('med_cabecera', 'Nombre y Apellido Médico/a Cabecera:', ['class' => 'mt-3']); ?>

        <?php echo Form::text('med_cabecera', $patient->patientHealth->med_cabecera, ['class' => 'form-control']); ?>

    </div>


    <div class="form-group col-md-4">
        <?php echo Form::label('centro_salud', 'Centro Referencia:'); ?>

        <?php echo Form::text('centro_salud', $patient->patientHealth->centro_salud, ['class' => 'form-control']); ?>


        <?php echo Form::label('tel_centro_salud', 'Teléfono Centro Referencia:', ['class' => 'mt-3']); ?>

        <?php echo Form::text('tel_centro_salud', $patient->patientHealth->tel_centro_salud, ['class' => 'form-control ']); ?>


    </div>
</div>

<hr class="pb_4">

<div class="row">
    <div class="col-md-12">
        <h4>Doctores Especialistas</h4>
        <button type="button" class="btn btn-secondary float-right mb-3" data-toggle="modal" data-target="#doctor_modal">
            Añadir nuevo especiali <i class="fas fa-file-upload"></i>
        </button>
        <?php echo $__env->make('patients.show.show_doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<hr class="pb_4">

<div class="row">
    <div class="col-sm-12">
        <h4>Medicación</h4>
    </div>

    <!-- Med Centro Field -->
    <div class="form-group col-sm-12">
        <p>
            <?php echo Form::label('med_centro', 'Medicación en Centro:'); ?>

            <?php echo Form::select('med_centro', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

        </p>
    </div>

    <div class="col-sm-12 text-right">
        <button type="button" class=" btn btn-secondary my-3 float-right " data-toggle="modal" data-target="#medication_modal"> Añadir medicación <i class="fas fa-file-upload"></i></button>
    </div>
    <div class="col-sm-12">
        <?php echo $__env->make('patients.show.show_medication', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<hr>


<div class="row">
    <div class="col-sm-12">
        <h4>Indicadores de salud</h4>
    </div>
    <!-- Incontinencia Field -->

    <div class="form-group col-md-4">
        <?php echo Form::label('incontinencia', 'Atención a la incontinencia:'); ?>

        <select class="form-control" id="incontinencia" name="incontinencia"
            onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->incontinencia == 'Ninguna' ? 'selected':''); ?>>Ninguna</option>
            <option <?php echo e($patient->patientHealth->incontinencia == 'Riesgo Incontinencia Leve' ? 'selected':''); ?>>Riesgo
                Incontinencia Leve</option>
            <option <?php echo e($patient->patientHealth->incontinencia == 'Riesgo Incontinencia Moderado' ? 'selected':''); ?>>
                Riesgo Incontinencia Moderado</option>
            <option <?php echo e($patient->patientHealth->incontinencia == 'Riesgo Incontinencia Grave' ? 'selected':''); ?>>Riesgo
                Incontinencia Grave</option>
        </select>

        <?php if(!$patient->patientHealth->incontinencia == ""): ?>
            <script>
                 $(document).ready(function(){
                    $('#incontinencia_multi_content').removeAttr('hidden');
                        });
            </script>
        <?php endif; ?>

        <!-- Opciones multiples de incontinencia -->
        <div class="form-group pt-3" id="incontinencia_multi_content" hidden="hidden">
            <?php echo Form::label('incontinencia_opc', 'Opciones:'); ?>

            <?php echo Form::select('incontinencia_opc', [
            'Autónomo/a' => 'Autónomo/a',
            'Supervision' => 'Supervision',
            'Recordatorio con instrucción verbal' => 'Recordatorio con instrucción verbal',
            'Ayuda fí­sica parcial' => 'Ayuda fí­sica parcial',
            'Ayuda fí­sica total' => 'Ayuda fí­sica total',
            'Usuario/a de sonda' => 'Usuario/a de sonda'],
            null, ['class' => 'form-control']); ?>

        </div>
    </div>

    <!-- Caida Field -->
    <div class="form-group col-md-4">
        <?php echo Form::label('caida', 'Riesgo caida:'); ?>

        <select class="form-control" id="caida" name="caida" onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->caida == 'Ninguna' ? 'selected':''); ?>>Ninguna</option>
            <option <?php echo e($patient->patientHealth->caida == 'Riesgo Caída Leve' ? 'selected':''); ?>>Riesgo Caí­da Leve
            </option>
            <option <?php echo e($patient->patientHealth->caida == 'Riesgo Caí­da Moderado' ? 'selected':''); ?>>Riesgo Caí­da
                Moderado</option>
            <option <?php echo e($patient->patientHealth->caida == 'Riesgo Caí­da Grave' ? 'selected':''); ?>>Riesgo Caí­da Grave
            </option>
        </select>

        <?php if(!$patient->patientHealth->caida == ""): ?>
            <script>
                 $(document).ready(function(){
                    $('#riesgo_caida_multi_content').removeAttr('hidden');
                        });
            </script>
        <?php endif; ?>

        <!-- Opciones multiples de Riesgo caí­da -->
        <div class="form-group pt-3" id="riesgo_caida_multi_content" hidden="hidden">
            <?php echo Form::label('riesgo_caida_opc', 'Opciones:'); ?>

            <?php echo Form::select('riesgo_caida_opc', [
            'Autónomo/a' => 'Autónomo/a',
            'Supervisión en la Deambulación' => 'Supervisión en la Deambulación',
            'Ayuda fí­sica parcial' => 'Ayuda fí­sica parcial',
            'Ayuda fí­sica total' => 'Ayuda fí­sica total',
            'Usuario/a de silla de ruedas' => 'Usuario/a de silla de ruedas'],
            null, ['class' => 'form-control']); ?>

        </div>
    </div>


    <!-- Dieta Field -->
    <div class="form-group col-md-4">
        <?php echo Form::label('dieta', 'Dieta:'); ?>

       
        <select class="form-control" id="dieta" name="dieta" onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->dieta == 'Basal' ? 'selected':''); ?>>Basal</option>
            <option <?php echo e($patient->patientHealth->dieta == 'Diabética' ? 'selected':''); ?>>Diabética</option>
            <option <?php echo e($patient->patientHealth->dieta == 'Hiposódica' ? 'selected':''); ?>>Hiposódica</option>
            <option <?php echo e($patient->patientHealth->dieta == 'Baja en Grasas' ? 'selected':''); ?>>Baja en Grasas</option>
        </select>

        <?php if(!$patient->patientHealth->dieta == ""): ?>
            <script>
                 $(document).ready(function(){
                    $('#dieta_textura_content').removeAttr('hidden');
                    $('#dieta_observ_cont').removeAttr('hidden');
                        });
            </script>
        <?php endif; ?>

        <!-- Opciones multiples de dieta -->
        <div class="form-group pt-3" id="dieta_textura_content" hidden="hidden">
            <?php echo Form::label('dieta_textura', 'Textura:'); ?>

            <?php echo Form::select('dieta_textura', [
            'Sólida' => 'Sólida',
            'Molida' => 'Molida',
            'Molida con espesante' => 'Molida con espesante',
            'Líquida' => 'Líquida',
            'Líquida con sonda' => 'Lí­quida con sonda',
            'Triturada' => 'Triturada'],
            null, ['class' => 'form-control']); ?>

        </div>

        <!-- Observaciones -->
        <div class="form-group pt-3" id="dieta_observ_cont" hidden="hidden">
            <?php echo Form::label('dieta_observ', 'Observaciones:'); ?>

            <?php echo Form::text('dieta_observ', $patient->patientHealth->dieta_observ, ['class' => 'form-control']); ?>

        </div>
    </div>

    <!-- Higiene Field -->
    <div class="form-group col-md-4">
        <?php echo Form::label('higiene', 'Higiene personal:'); ?>

        <select class="form-control" id="higiene" name="higiene" onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->higiene == 'Autónoma' ? 'selected':''); ?>>Autónoma</option>
            <option <?php echo e($patient->patientHealth->higiene == 'Dependencia Leve' ? 'selected':''); ?>>Dependencia Leve
            </option>
            <option <?php echo e($patient->patientHealth->higiene == 'Dependencia Moderada' ? 'selected':''); ?>>Dependencia
                Moderada</option>
            <option <?php echo e($patient->patientHealth->higiene == 'Dependencia Grave' ? 'selected':''); ?>>Dependencia Grave
            </option>
        </select>


        <?php if(!$patient->patientHealth->higiene == ""): ?>
            <script>
                 $(document).ready(function(){
                    $('#higiene_multi_content').removeAttr('hidden');
                        });
            </script>
        <?php endif; ?>

        <!-- Opciones multiples de higiene -->
        <div class="form-group pt-3" id="higiene_multi_content" hidden="hidden">
            <?php echo Form::label('higiene_opc', 'Opciones:'); ?>

            <?php echo Form::select('higiene_opc', [
            'Ninguna' => 'Ninguna',
            'Apoyo con Instrucción Verbal' => 'Apoyo con Instrucción Verbal',
            'Ayuda fí­sica parcial' => 'Ayuda fí­sica parcial',
            'Ayuda fí­sica total' => 'Ayuda física total'],
            $patient->patientHealth->higiene_opc, ['class' => 'form-control']); ?>

        </div>
    </div>


    <!-- Ulcera Field -->
    <div class="form-group col-md-4">
        <?php echo Form::label('ulcera', 'Ulcera por presión:'); ?>

        <select class="form-control" id="type" name="ulcera">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->ulcera == 'Sin Riesgo ' ? 'selected':''); ?>>Sin Riesgo </option>
            <option <?php echo e($patient->patientHealth->ulcera == 'Medidas Preventivas' ? 'selected':''); ?>>Medidas Preventivas
            </option>
            <option <?php echo e($patient->patientHealth->ulcera == 'Medidas de Cuidado - tratamiento' ? 'selected':''); ?>>Medidas
                de Cuidado - tratamiento</option>
        </select>
    </div>

    <!-- Deambulacion Field -->
    <div class="form-group col-md-4">
        <?php echo Form::label('deambulacion', 'Deambulación Errante:'); ?>

        <select class="form-control" id="type" name="deambulacion">
            <option value="">Selecciona una opcion</option>
            <option <?php echo e($patient->patientHealth->deambulacion == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientHealth->deambulacion == 'No' ? 'selected':''); ?>>No</option>
        </select>
    </div>

    <!-- Hidratación Field -->
    <div class="form-group col-md-4">
        <?php echo Form::label('hidratacion', 'Hidratación:'); ?>

        <select class="form-control" id="hidratacion" name="hidratacion"
            onchange="indicadores_multi(this.value, this.id);">
            <option value="">Selecciona una opcion</option>
            <option
                <?php echo e($patient->patientHealth->hidratacion == 'Hidratación Según Pauta General Servicio' ? 'selected':''); ?>>
                Hidratación Según Pauta General Servicio</option>
            <option <?php echo e($patient->patientHealth->hidratacion == 'Hidratación Extra' ? 'selected':''); ?>>Hidratación
                Extra</option>
        </select>

        <?php if(!$patient->patientHealth->hidratacion == ""): ?>
            <script>
                 $(document).ready(function(){
                    $('#hidratacion_observ_cont').removeAttr('hidden');
                        });
            </script>
        <?php endif; ?>

        
        <!-- Observaciones Hidratación -->
        <div class="form-group pt-3" id="hidratacion_observ_cont" hidden="hidden">
            <?php echo Form::label('hidratacion_observ', 'Observaciones:'); ?>

            <?php echo Form::text('hidratacion_observ', null, ['class' => 'form-control']); ?>

        </div>
    </div>

</div>
<?php /**PATH /var/www/resources/views/patients/edit/health_info.blade.php ENDPATH**/ ?>