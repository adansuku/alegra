<!-- Nom Servicio Field -->
<div class="form-group">
    <?php echo Form::label('es_primario', '¿Es el servicio primario?'); ?>

    <?php echo Form::select('es_primario', [
    null => '',
    'es_primario' => 'Si',
    'no_es_primario' => 'No',
    ], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('service_worker_id', 'Trabajadora social responsable del caso:'); ?>

    <select class="form-control" id="worker_id" name="service_worker_id" required>
        <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(in_array($worker->id,$patientService->patient->worker_id)): ?>
        <option value="<?php echo e($worker->id); ?>" <?php echo e($worker->id == $patientService->service_worker_id ? 'selected':''); ?>>
            <?php echo e($worker->nombre); ?> <?php echo e($worker->apellido); ?></option>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <?php echo Form::label('nom_servicio', 'Nombre del servicio:'); ?>

    <?php echo Form::select('nom_servicio', [
    null => '',
    'CALO' => 'CALO',
    'CEA' => 'CEA',
    'SPAP' => 'SPAP',
    'UEC' => 'UEC',
    'CD' => 'CD',
    'SPAPD' => 'SPAPD'
    ], null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>





<div class="form-group">
    <!-- Municipio Serv Field -->
    <?php echo Form::label('municipio_serv', 'Municipio :'); ?>

    <select class="form-control select2" id="municipio_serv" name="municipio_serv" required>
        <option value="">Selecciona un municipio</option>
        <option value="" disabled>Tenerife</option>
        <option <?php echo e($patientService->municipio_serv == 'Adeje' ? 'selected':''); ?>>Adeje</option>
        <option <?php echo e($patientService->municipio_serv == 'Arafo' ? 'selected':''); ?>>Arafo</option>
        <option <?php echo e($patientService->municipio_serv == 'Arico' ? 'selected':''); ?>>Arico</option>
        <option <?php echo e($patientService->municipio_serv == 'Arona' ? 'selected':''); ?>>Arona</option>
        <option <?php echo e($patientService->municipio_serv == 'Buenavista del Norte' ? 'selected':''); ?>>Buenavista del Norte
        </option>
        <option <?php echo e($patientService->municipio_serv == 'Candelaria' ? 'selected':''); ?>>Candelaria</option>
        <option <?php echo e($patientService->municipio_serv == 'El Rosario' ? 'selected':''); ?>>El Rosario</option>
        <option <?php echo e($patientService->municipio_serv == 'El Sauzal' ? 'selected':''); ?>>El Sauzal</option>
        <option <?php echo e($patientService->municipio_serv == 'El Tanque' ? 'selected':''); ?>>El Tanque</option>
        <option <?php echo e($patientService->municipio_serv == 'Fasnia' ? 'selected':''); ?>>Fasnia</option>
        <option <?php echo e($patientService->municipio_serv == 'Garachico' ? 'selected':''); ?>>Garachico</option>
        <option <?php echo e($patientService->municipio_serv == 'Granadilla de Abona' ? 'selected':''); ?>>Granadilla de Abona
        </option>
        <option <?php echo e($patientService->municipio_serv == 'Güímar' ? 'selected':''); ?>>Güímar</option>
        <option <?php echo e($patientService->municipio_serv == 'Guía de Isora' ? 'selected':''); ?>>Guía de Isora</option>
        <option <?php echo e($patientService->municipio_serv == 'Icod de los Vinos' ? 'selected':''); ?>>Icod de los Vinos
        </option>
        <option <?php echo e($patientService->municipio_serv == 'La Guancha' ? 'selected':''); ?>>La Guancha</option>
        <option <?php echo e($patientService->municipio_serv == 'La Matanza de Acentejo' ? 'selected':''); ?>>La Matanza de
            Acentejo</option>
        <option <?php echo e($patientService->municipio_serv == 'La Orotava' ? 'selected':''); ?>>La Orotava</option>
        <option <?php echo e($patientService->municipio_serv == 'La Victoria de Acentejo' ? 'selected':''); ?>>La Victoria de
            Acentejo</option>
        <option <?php echo e($patientService->municipio_serv == 'Los Realejos' ? 'selected':''); ?>>Los Realejos</option>
        <option <?php echo e($patientService->municipio_serv == 'Los Silos' ? 'selected':''); ?>>Los Silos</option>
        <option <?php echo e($patientService->municipio_serv == 'Puerto de la Cruz' ? 'selected':''); ?>>Puerto de la Cruz
        </option>
        <option <?php echo e($patientService->municipio_serv == 'San Cristóbal de la Laguna' ? 'selected':''); ?>>San Cristóbal
            de la Laguna</option>
        <option <?php echo e($patientService->municipio_serv == 'San Juan de la Rambla' ? 'selected':''); ?>>San Juan de la
            Rambla</option>
        <option <?php echo e($patientService->municipio_serv == 'San Miguel de Abona' ? 'selected':''); ?>>San Miguel de Abona
        </option>
        <option <?php echo e($patientService->municipio_serv == 'Santa Cruz de Tenerife' ? 'selected':''); ?>>Santa Cruz de
            Tenerife</option>
        <option <?php echo e($patientService->municipio_serv == 'Santa Úrsula' ? 'selected':''); ?>>Santa Úrsula</option>
        <option <?php echo e($patientService->municipio_serv == 'Santiago del Teide' ? 'selected':''); ?>>Santiago del Teide
        </option>
        <option <?php echo e($patientService->municipio_serv == 'Tacoronte' ? 'selected':''); ?>>Tacoronte</option>
        <option <?php echo e($patientService->municipio_serv == 'Tegueste' ? 'selected':''); ?>>Tegueste</option>
        <option <?php echo e($patientService->municipio_serv == 'Vilaflor' ? 'selected':''); ?>>Vilaflor</option>

        <option value="" disabled></option>
        <option value="" disabled>La Gomera</option>
        <option <?php echo e($patientService->municipio_serv == 'Agulo' ? 'selected':''); ?>>Agulo</option>
        <option <?php echo e($patientService->municipio_serv == 'Alajeró' ? 'selected':''); ?>>Alajeró</option>
        <option <?php echo e($patientService->municipio_serv == 'Hermigua' ? 'selected':''); ?>>Hermigua</option>
        <option <?php echo e($patientService->municipio_serv == 'San Sebastián de la Gomera' ? 'selected':''); ?>>San Sebastián
            de la Gomera</option>
        <option <?php echo e($patientService->municipio_serv == 'Valle Gran Rey' ? 'selected':''); ?>>Valle Gran Rey</option>
        <option <?php echo e($patientService->municipio_serv == 'Vallehermoso' ? 'selected':''); ?>>Vallehermoso</option>

        <option value="" disabled></option>
        <option value="" disabled>El Hierro</option>
        <option <?php echo e($patientService->municipio_serv == 'Frontera' ? 'selected':''); ?>>Frontera</option>
        <option <?php echo e($patientService->municipio_serv == 'El Pinar de El Hierro' ? 'selected':''); ?>>El Pinar de El
            Hierro</option>
        <option <?php echo e($patientService->municipio_serv == 'Valverde' ? 'selected':''); ?>>Valverde</option>

        <option value="" disabled></option>
        <option value="" disabled>La Palma</option>
        <option <?php echo e($patientService->municipio_serv == 'Barlovento' ? 'selected':''); ?>>Barlovento</option>
        <option <?php echo e($patientService->municipio_serv == 'Breña Alta' ? 'selected':''); ?>>Breña Alta</option>
        <option <?php echo e($patientService->municipio_serv == 'Breña Baja' ? 'selected':''); ?>>Breña Baja</option>
        <option <?php echo e($patientService->municipio_serv == 'Fuencaliente de la Palma' ? 'selected':''); ?>>Fuencaliente de
            la Palma</option>
        <option <?php echo e($patientService->municipio_serv == 'Garafía' ? 'selected':''); ?>>Garafía</option>
        <option <?php echo e($patientService->municipio_serv == 'Los Llanos de Aridane' ? 'selected':''); ?>>Los Llanos de
            Aridane</option>
        <option <?php echo e($patientService->municipio_serv == 'El Paso' ? 'selected':''); ?>>El Paso</option>
        <option <?php echo e($patientService->municipio_serv == 'Puntagorda' ? 'selected':''); ?>>Puntagorda</option>
        <option <?php echo e($patientService->municipio_serv == 'Puntallana' ? 'selected':''); ?>>Puntallana</option>
        <option <?php echo e($patientService->municipio_serv == 'San Andrés y Sauces' ? 'selected':''); ?>>San Andrés y Sauces
        </option>
        <option <?php echo e($patientService->municipio_serv == 'Santa Cruz de la Palma' ? 'selected':''); ?>>Santa Cruz de la
            Palma</option>
        <option <?php echo e($patientService->municipio_serv == 'Tazacorte' ? 'selected':''); ?>>Tazacorte</option>
        <option <?php echo e($patientService->municipio_serv == 'Tijarafe y Villa de Mazo' ? 'selected':''); ?>>Tijarafe y Villa
            de Mazo</option>

        <option value="" disabled></option>
        <option value="" disabled>Lanzarote</option>
        <option <?php echo e($patientService->municipio_serv == 'Arrecife' ? 'selected':''); ?>>Arrecife</option>
        <option <?php echo e($patientService->municipio_serv == 'Haría' ? 'selected':''); ?>>Haría</option>
        <option <?php echo e($patientService->municipio_serv == 'San Bartolomé' ? 'selected':''); ?>>San Bartolomé</option>
        <option <?php echo e($patientService->municipio_serv == 'Teguise' ? 'selected':''); ?>>Teguise</option>
        <option <?php echo e($patientService->municipio_serv == 'Tías' ? 'selected':''); ?>>Tías</option>
        <option <?php echo e($patientService->municipio_serv == 'Tinajo y Yaiza' ? 'selected':''); ?>>Tinajo y Yaiza</option>

        <option value="" disabled>Fuerteventura</option>
        <option <?php echo e($patientService->municipio_serv == 'Antigua' ? 'selected':''); ?>>Antigua</option>
        <option <?php echo e($patientService->municipio_serv == 'Betancuria' ? 'selected':''); ?>>Betancuria</option>
        <option <?php echo e($patientService->municipio_serv == 'La Oliva' ? 'selected':''); ?>>La Oliva</option>
        <option <?php echo e($patientService->municipio_serv == 'Pájara' ? 'selected':''); ?>>Pájara</option>
        <option <?php echo e($patientService->municipio_serv == 'Puerto del Rosario' ? 'selected':''); ?>>Puerto del Rosario
        </option>
        <option <?php echo e($patientService->municipio_serv == 'Tuineje' ? 'selected':''); ?>>Tuineje</option>

        <option value="" disabled></option>
        <option value="" disabled>Gran Canaria</option>
        <option <?php echo e($patientService->municipio_serv == 'Agaete' ? 'selected':''); ?>>Agaete</option>
        <option <?php echo e($patientService->municipio_serv == 'Agüimes' ? 'selected':''); ?>>Agüimes</option>
        <option <?php echo e($patientService->municipio_serv == 'La Aldea de San Nicolás' ? 'selected':''); ?>>La Aldea de San
            Nicolás</option>
        <option <?php echo e($patientService->municipio_serv == 'Artenara' ? 'selected':''); ?>>Artenara</option>
        <option <?php echo e($patientService->municipio_serv == 'Arucas' ? 'selected':''); ?>>Arucas</option>
        <option <?php echo e($patientService->municipio_serv == 'Firgas' ? 'selected':''); ?>>Firgas</option>
        <option <?php echo e($patientService->municipio_serv == 'Gáldar' ? 'selected':''); ?>>Gáldar</option>
        <option <?php echo e($patientService->municipio_serv == 'Ingenio' ? 'selected':''); ?>>Ingenio</option>
        <option <?php echo e($patientService->municipio_serv == 'Mogán' ? 'selected':''); ?>>Mogán</option>
        <option <?php echo e($patientService->municipio_serv == 'Moya' ? 'selected':''); ?>>Moya</option>
        <option <?php echo e($patientService->municipio_serv == 'Las Palmas de Gran Canaria' ? 'selected':''); ?>>Las Palmas de
            Gran Canaria</option>
        <option <?php echo e($patientService->municipio_serv == 'San Bartolomé de Tirajana' ? 'selected':''); ?>>San Bartolomé de
            Tirajana</option>
        <option <?php echo e($patientService->municipio_serv == 'Santa Brígida' ? 'selected':''); ?>>Santa Brígida</option>
        <option <?php echo e($patientService->municipio_serv == 'Santa Lucía de Tirajana' ? 'selected':''); ?>>Santa Lucía de
            Tirajana</option>
        <option <?php echo e($patientService->municipio_serv == 'Santa María de Guía de Gran Canaria' ? 'selected':''); ?>>Santa
            María de Guía de Gran Canaria</option>
        <option <?php echo e($patientService->municipio_serv == 'Tejeda Telde' ? 'selected':''); ?>>Tejeda Telde</option>
        <option <?php echo e($patientService->municipio_serv == 'Teror' ? 'selected':''); ?>>Teror</option>
        <option <?php echo e($patientService->municipio_serv == 'Valleseco' ? 'selected':''); ?>>Valleseco</option>
        <option <?php echo e($patientService->municipio_serv == 'Valsequillo de Gran Canaria' ? 'selected':''); ?>>Valsequillo de
            Gran Canaria</option>
        <option <?php echo e($patientService->municipio_serv == 'Vega de San Mateo.' ? 'selected':''); ?>>Vega de San Mateo.
        </option>
    </select>
</div>

<!-- Tipo Plaza Serv Field -->
<div class="form-group">
    <?php echo Form::label('tipo_plaza_serv', 'Tipo de Plaza (Señalar varias):'); ?>

    <?php echo Form::select('tipo_plaza_serv[]', [
    'Privada' => 'Privada',
    'Publica' => 'Pública',
    'Subvencionada' => 'Subvencionada'], null, [
    'class' => 'select2 form-control',
    'id' => 'tipo_plaza',
    'required' => 'required',
    'multiple' => 'multiple']); ?>

</div>

<!-- Plaza Privada Serv Field -->
<div class="form-group bg-secondary p-3" id="plaza_privada" style="display: none;">
    <?php echo Form::label('plaza_privada_serv', 'Plaza Privada:'); ?>

    <?php echo Form::select('plaza_privada_serv[]', [
    'Socixs' => 'Socixs',
    'No Socixs' => 'No Socixs',
    'PEVS' => 'PEVS'],
    null, [
    'class' => 'select2 form-control',
    'multiple' => 'multiple'
    ]); ?>

</div>

<!-- Plaza Sub Serv Field -->
<div class="form-group bg-secondary p-3" id="Subvencionada" style="display: none;">
    <?php echo Form::label('plaza_sub_serv', 'Plaza Subvencionada:'); ?>

    <?php echo Form::text('plaza_sub_serv', null, ['class' => 'form-control',]); ?>

</div>




<script>
    $('#tipo_plaza').change(function() {
var vals = $(this).val()    
$("#plaza_privada").toggle(vals.indexOf("Privada")>-1);
$("#Subvencionada").toggle(vals.indexOf("Subvencionada")>-1);
})
</script>

<div class="form-group">
    <!-- Fecha Form Serv Field -->
    <?php echo Form::label('fecha_form_serv', 'Fecha Formalizacion de Servicio:'); ?>

    <?php echo Form::date('fecha_form_serv', $patientService->fecha_form_serv, ['class' =>
    'form-control','id'=>'fecha_form_serv','required' =>
    'required']); ?>

</div>
<!-- Submit Field -->
<div class="form-group">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary float-right']); ?>

</div><?php /**PATH /var/www/resources/views/patient_services/fields.blade.php ENDPATH**/ ?>