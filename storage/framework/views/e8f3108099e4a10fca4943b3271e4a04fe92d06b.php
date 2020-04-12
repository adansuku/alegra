<div class="row pb-4">
    <div class="col-sm-12 col-md-4">
        <!-- Foto Paciente Field -->
        <div class="avatar" style="background-image:url(<?php echo e(asset("storage/$patient->foto_paciente")); ?>)"></div>
    </div>

    <div class="col-sm-12 col-md-8">

        <input class="file-upload-input bg-secondary" name="foto_paciente" type='file' />

        <!--file-upload-->

    </div>
</div>


<div class="row">
    <div class="col-sm-12 col-md-4">

        <!-- Numero expediente -->
        <p><?php echo Form::label('numero_expediente', 'Número Expediente:'); ?>

            <?php echo Form::text('numero_expediente', $patient->numero_expediente, ['class' => 'form-control', 'readonly' =>
            'readonly']); ?></p>

        <!-- Fecha Alta Paciente Field -->
        <p><?php echo Form::label('fecha_alta_paciente', 'Fecha Alta:'); ?>

            <?php echo Form::date('fecha_alta_paciente', $patient->fecha_alta_paciente, ['class' =>
            'form-control','id'=>'fecha_alta_paciente']); ?></p>

        <!-- Nombre Field -->
        <p><?php echo Form::label('nombre', 'Nombre:'); ?>

            <?php echo Form::text('nombre', $patient->nombre, ['class' => 'form-control']); ?></p>

        <!-- Apellido Field -->
        <p><?php echo Form::label('apellido', 'Apellidos:'); ?>

            <?php echo Form::text('apellido', $patient->apellido, ['class' => 'form-control']); ?></p>

        <!-- Alias Field -->
        <p><?php echo Form::label('alias', 'Alias:'); ?>

            <?php echo Form::text('alias', $patient->alias, ['class' => 'form-control']); ?></p>

        <!-- Genero Field -->
        <p><?php echo Form::label('genero', 'Género:'); ?>

            <select class="form-control" id="type" name="genero">
                <option value="">Selecciona una opción</option>
                <option <?php echo e($patient->genero == 'Hombre' ? 'selected':''); ?>>Hombre</option>
                <option <?php echo e($patient->genero == 'Mujer' ? 'selected':''); ?>>Mujer</option>
                <option <?php echo e($patient->genero == 'Intersexual' ? 'selected':''); ?>>Intersexual</option>
            </select>
        </p>

        <!-- Fecha Nacimiento Field -->
        <p>
            <?php echo Form::label('fecha_nacimiento', 'Fecha de Nacimiento:'); ?>

            <?php echo Form::date('fecha_nacimiento', $patient->fecha_nacimiento, ['class' =>
            'form-control','id'=>'fecha_nacimiento']); ?>

        </p>

        <!-- Dni Field -->
        <p>
            <?php echo Form::label('dni', 'Dni:'); ?>

            <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

        </p>

        <!-- Estado Civil Field -->
        <p><?php echo Form::label('estado_civil', 'Estado Civil:'); ?>

            <?php echo e($patient->estado_civil); ?>

            <select class="form-control" id="type" name="estado_civil">

                <option value="">Selecciona una opción</option>
                <option <?php echo e($patient->estado_civil == 'Soltera/o' ? 'selected':''); ?>>Soltera/o</option>
                <option <?php echo e($patient->estado_civil == 'Viuda/o' ? 'selected':''); ?>> Viuda/o</option>
                <option <?php echo e($patient->estado_civil == 'Casada/o' ? 'selected':''); ?>>Casada/o</option>
                <option <?php echo e($patient->estado_civil == 'Divorciada/o' ? 'selected':''); ?>>Divorciada/o</option>
            </select></p>

    </div>

    <div class="col-sm-12 col-md-4">

        <!-- Isla Field -->
        <p><?php echo Form::label('Isla', 'Isla:'); ?>

            <select class="form-control" id="isla" name="Isla">
                <option value="">Selecciona una opción</option>
                <option id="Tenerife" <?php echo e($patient->Isla == 'Tenerife' ? 'selected':''); ?>>Tenerife</option>
                <option <?php echo e($patient->Isla == 'Gran Canaria' ? 'selected':''); ?>>Gran Canaria</option>
                <option <?php echo e($patient->Isla == 'La Graciosa' ? 'selected':''); ?>>La Graciosa</option>
                <option <?php echo e($patient->Isla == 'La Gomera' ? 'selected':''); ?>>La Gomera</option>
                <option <?php echo e($patient->Isla == 'La Palma' ? 'selected':''); ?>>La Palma</option>
                <option <?php echo e($patient->Isla == 'El Hierro' ? 'selected':''); ?>>El Hierro</option>
                <option <?php echo e($patient->Isla == 'Fuerteventura' ? 'selected':''); ?>>Fuerteventura</option>
                <option <?php echo e($patient->Isla == 'Lanzarote' ? 'selected':''); ?>>Lanzarote</option>
            </select>
        </p>


        <!-- Direccion Field -->
        <p>
            <?php echo Form::label('direccion', 'Dirección (calle, avenida, plaza…)'); ?>

            <?php echo Form::text('direccion', $patient->direccion, ['class' => 'form-control']); ?>

        </p>

        <p>
            <?php echo Form::label('num_direcion', 'Número'); ?>

            <?php echo Form::text('num_direcion', $patient->num_direcion, ['class' => 'form-control']); ?>

        </p>

        <p>
            <?php echo Form::label('bloq_piso', 'Bloque, Piso y/o puerta'); ?>

            <?php echo Form::text('bloq_piso', $patient->bloq_piso, ['class' => 'form-control']); ?>

        </p>

        <!--codigfo postal-->
        <p>
            <?php echo Form::label('codigo_postal', 'Código postal:'); ?>

            <?php echo Form::number(' codigo_postal', $patient-> codigo_postal, ['class' => 'form-control']); ?>

        </p>

        <!-- Municipio Field -->
        <p><?php echo Form::label('Municipio', 'Municipio:'); ?>


            <select class="select2" id="municipio" name="Municipio">
                <option value="">Selecciona una opción</option>
                <option value="" disabled>Tenerife</option>
                <option <?php echo e($patient->Municipio == 'Adeje' ? 'selected':''); ?>>Adeje</option>
                <option <?php echo e($patient->Municipio == 'Arafo' ? 'selected':''); ?>>Arafo</option>
                <option <?php echo e($patient->Municipio == 'Arico' ? 'selected':''); ?>>Arico</option>
                <option <?php echo e($patient->Municipio == 'Arona' ? 'selected':''); ?>>Arona</option>
                <option <?php echo e($patient->Municipio == 'Buenavista del Norte' ? 'selected':''); ?>>Buenavista del Norte
                </option>
                <option <?php echo e($patient->Municipio == 'Candelaria' ? 'selected':''); ?>>Candelaria</option>
                <option <?php echo e($patient->Municipio == 'El Rosario' ? 'selected':''); ?>>El Rosario</option>
                <option <?php echo e($patient->Municipio == 'El Sauzal' ? 'selected':''); ?>>El Sauzal</option>
                <option <?php echo e($patient->Municipio == 'El Tanque' ? 'selected':''); ?>>El Tanque</option>
                <option <?php echo e($patient->Municipio == 'Fasnia' ? 'selected':''); ?>>Fasnia</option>
                <option <?php echo e($patient->Municipio == 'Garachico' ? 'selected':''); ?>>Garachico</option>
                <option <?php echo e($patient->Municipio == 'Granadilla de Abona' ? 'selected':''); ?>>Granadilla de Abona</option>
                <option <?php echo e($patient->Municipio == 'Güímar' ? 'selected':''); ?>>Güímar</option>
                <option <?php echo e($patient->Municipio == 'Guía de Isora' ? 'selected':''); ?>>Guía de Isora</option>
                <option <?php echo e($patient->Municipio == 'Icod de los Vinos' ? 'selected':''); ?>>Icod de los Vinos</option>
                <option <?php echo e($patient->Municipio == 'La Guancha' ? 'selected':''); ?>>La Guancha</option>
                <option <?php echo e($patient->Municipio == 'La Matanza de Acentejo' ? 'selected':''); ?>>La Matanza de Acentejo
                </option>
                <option <?php echo e($patient->Municipio == 'La Orotava' ? 'selected':''); ?>>La Orotava</option>
                <option <?php echo e($patient->Municipio == 'La Victoria de Acentejo' ? 'selected':''); ?>>La Victoria de Acentejo
                </option>
                <option <?php echo e($patient->Municipio == 'Los Realejos' ? 'selected':''); ?>>Los Realejos</option>
                <option <?php echo e($patient->Municipio == 'Los Silos' ? 'selected':''); ?>>Los Silos</option>
                <option <?php echo e($patient->Municipio == 'Puerto de la Cruz' ? 'selected':''); ?>>Puerto de la Cruz</option>
                <option <?php echo e($patient->Municipio == 'San Cristóbal de la Laguna' ? 'selected':''); ?>>San Cristóbal de la
                    Laguna</option>
                <option <?php echo e($patient->Municipio == 'San Juan de la Rambla' ? 'selected':''); ?>>San Juan de la Rambla
                </option>
                <option <?php echo e($patient->Municipio == 'San Miguel de Abona' ? 'selected':''); ?>>San Miguel de Abona</option>
                <option <?php echo e($patient->Municipio == 'Santa Cruz de Tenerife' ? 'selected':''); ?>>Santa Cruz de Tenerife
                </option>
                <option <?php echo e($patient->Municipio == 'Santa Úrsula' ? 'selected':''); ?>>Santa Úrsula</option>
                <option <?php echo e($patient->Municipio == 'Santiago del Teide' ? 'selected':''); ?>>Santiago del Teide</option>
                <option <?php echo e($patient->Municipio == 'Tacoronte' ? 'selected':''); ?>>Tacoronte</option>
                <option <?php echo e($patient->Municipio == 'Tegueste' ? 'selected':''); ?>>Tegueste</option>
                <option <?php echo e($patient->Municipio == 'Vilaflor' ? 'selected':''); ?>>Vilaflor</option>

                <option value="" disabled></option>
                <option value="" disabled>La Gomera</option>
                <option <?php echo e($patient->Municipio == 'Agulo' ? 'selected':''); ?>>Agulo</option>
                <option <?php echo e($patient->Municipio == 'Alajeró' ? 'selected':''); ?>>Alajeró</option>
                <option <?php echo e($patient->Municipio == 'Hermigua' ? 'selected':''); ?>>Hermigua</option>
                <option <?php echo e($patient->Municipio == 'San Sebastián de la Gomera' ? 'selected':''); ?>>San Sebastián de la
                    Gomera</option>
                <option <?php echo e($patient->Municipio == 'Valle Gran Rey' ? 'selected':''); ?>>Valle Gran Rey</option>
                <option <?php echo e($patient->Municipio == 'Vallehermoso' ? 'selected':''); ?>>Vallehermoso</option>

                <option value="" disabled></option>
                <option value="" disabled>El Hierro</option>
                <option <?php echo e($patient->Municipio == 'Frontera' ? 'selected':''); ?>>Frontera</option>
                <option <?php echo e($patient->Municipio == 'El Pinar de El Hierro' ? 'selected':''); ?>>El Pinar de El Hierro
                </option>
                <option <?php echo e($patient->Municipio == 'Valverde' ? 'selected':''); ?>>Valverde</option>

                <option value="" disabled></option>
                <option value="" disabled>La Palma</option>
                <option <?php echo e($patient->Municipio == 'Barlovento' ? 'selected':''); ?>>Barlovento</option>
                <option <?php echo e($patient->Municipio == 'Breña Alta' ? 'selected':''); ?>>Breña Alta</option>
                <option <?php echo e($patient->Municipio == 'Breña Baja' ? 'selected':''); ?>>Breña Baja</option>
                <option <?php echo e($patient->Municipio == 'Fuencaliente de la Palma' ? 'selected':''); ?>>Fuencaliente de la Palma
                </option>
                <option <?php echo e($patient->Municipio == 'Garafía' ? 'selected':''); ?>>Garafía</option>
                <option <?php echo e($patient->Municipio == 'Los Llanos de Aridane' ? 'selected':''); ?>>Los Llanos de Aridane
                </option>
                <option <?php echo e($patient->Municipio == 'El Paso' ? 'selected':''); ?>>El Paso</option>
                <option <?php echo e($patient->Municipio == 'Puntagorda' ? 'selected':''); ?>>Puntagorda</option>
                <option <?php echo e($patient->Municipio == 'Puntallana' ? 'selected':''); ?>>Puntallana</option>
                <option <?php echo e($patient->Municipio == 'San Andrés y Sauces' ? 'selected':''); ?>>San Andrés y Sauces</option>
                <option <?php echo e($patient->Municipio == 'Santa Cruz de la Palma' ? 'selected':''); ?>>Santa Cruz de la Palma
                </option>
                <option <?php echo e($patient->Municipio == 'Tazacorte' ? 'selected':''); ?>>Tazacorte</option>
                <option <?php echo e($patient->Municipio == 'Tijarafe y Villa de Mazo' ? 'selected':''); ?>>Tijarafe y Villa de Mazo
                </option>

                <option value="" disabled></option>
                <option value="" disabled>Lanzarote</option>
                <option <?php echo e($patient->Municipio == 'Arrecife' ? 'selected':''); ?>>Arrecife</option>
                <option <?php echo e($patient->Municipio == 'Haría' ? 'selected':''); ?>>Haría</option>
                <option <?php echo e($patient->Municipio == 'San Bartolomé' ? 'selected':''); ?>>San Bartolomé</option>
                <option <?php echo e($patient->Municipio == 'Teguise' ? 'selected':''); ?>>Teguise</option>
                <option <?php echo e($patient->Municipio == 'Tías' ? 'selected':''); ?>>Tías</option>
                <option <?php echo e($patient->Municipio == 'Tinajo y Yaiza' ? 'selected':''); ?>>Tinajo y Yaiza</option>

                <option value="" disabled>Fuerteventura</option>
                <option <?php echo e($patient->Municipio == 'Antigua' ? 'selected':''); ?>>Antigua</option>
                <option <?php echo e($patient->Municipio == 'Betancuria' ? 'selected':''); ?>>Betancuria</option>
                <option <?php echo e($patient->Municipio == 'La Oliva' ? 'selected':''); ?>>La Oliva</option>
                <option <?php echo e($patient->Municipio == 'Pájara' ? 'selected':''); ?>>Pájara</option>
                <option <?php echo e($patient->Municipio == 'Puerto del Rosario' ? 'selected':''); ?>>Puerto del Rosario</option>
                <option <?php echo e($patient->Municipio == 'Tuineje' ? 'selected':''); ?>>Tuineje</option>

                <option value="" disabled></option>
                <option value="" disabled>Gran Canaria</option>
                <option <?php echo e($patient->Municipio == 'Agaete' ? 'selected':''); ?>>Agaete</option>
                <option <?php echo e($patient->Municipio == 'Agüimes' ? 'selected':''); ?>>Agüimes</option>
                <option <?php echo e($patient->Municipio == 'La Aldea de San Nicolás' ? 'selected':''); ?>>La Aldea de San Nicolás
                </option>
                <option <?php echo e($patient->Municipio == 'Artenara' ? 'selected':''); ?>>Artenara</option>
                <option <?php echo e($patient->Municipio == 'Arucas' ? 'selected':''); ?>>Arucas</option>
                <option <?php echo e($patient->Municipio == 'Firgas' ? 'selected':''); ?>>Firgas</option>
                <option <?php echo e($patient->Municipio == 'Gáldar' ? 'selected':''); ?>>Gáldar</option>
                <option <?php echo e($patient->Municipio == 'Ingenio' ? 'selected':''); ?>>Ingenio</option>
                <option <?php echo e($patient->Municipio == 'Mogán' ? 'selected':''); ?>>Mogán</option>
                <option <?php echo e($patient->Municipio == 'Moya' ? 'selected':''); ?>>Moya</option>
                <option <?php echo e($patient->Municipio == 'Las Palmas de Gran Canaria' ? 'selected':''); ?>>Las Palmas de Gran
                    Canaria</option>
                <option <?php echo e($patient->Municipio == 'San Bartolomé de Tirajana' ? 'selected':''); ?>>San Bartolomé de
                    Tirajana</option>
                <option <?php echo e($patient->Municipio == 'Santa Brígida' ? 'selected':''); ?>>Santa Brígida</option>
                <option <?php echo e($patient->Municipio == 'Santa Lucía de Tirajana' ? 'selected':''); ?>>Santa Lucía de Tirajana
                </option>
                <option <?php echo e($patient->Municipio == 'Santa María de Guía de Gran Canaria' ? 'selected':''); ?>>Santa María
                    de Guía de Gran Canaria</option>
                <option <?php echo e($patient->Municipio == 'Tejeda Telde' ? 'selected':''); ?>>Tejeda Telde</option>
                <option <?php echo e($patient->Municipio == 'Teror' ? 'selected':''); ?>>Teror</option>
                <option <?php echo e($patient->Municipio == 'Valleseco' ? 'selected':''); ?>>Valleseco</option>
                <option <?php echo e($patient->Municipio == 'Valsequillo de Gran Canaria' ? 'selected':''); ?>>Valsequillo de Gran
                    Canaria</option>
                <option <?php echo e($patient->Municipio == 'Vega de San Mateo.' ? 'selected':''); ?>>Vega de San Mateo.</option>
            </select>
        </p>

        <p>
            <?php echo Form::label('obs_direcion', 'Observaciones dirección:'); ?>

            <?php echo Form::textArea('obs_direcion', $patient->obs_direcion, ['class' => 'form-control', 'rows' => '8']); ?>

        </p>
    </div>

    <div class="col-sm-12 col-md-4">





        <!-- Telefono Field -->
        <p><?php echo Form::label('telefono', 'Teléfono Fijo (de su residencia):'); ?>

            <?php echo Form::number('telefono', $patient->telefono, ['class' => 'form-control']); ?></p>


        <!-- Telefono Movil Field -->
        <p><?php echo Form::label('teléfono_movil', 'Teléfono móvil:'); ?>

            <?php echo Form::number('telefono_movil', $patient->telefono_movil, ['class' => 'form-control']); ?></p>


        <!-- Convive Con Field -->
        <p><?php echo Form::label('convive_con', 'Convive con (nombre/s/parentesco/s):'); ?>


            <select class="form-control select2" id="convive_con" name="convive_con[]" multiple="multiple">
                <option <?php echo e(in_array('Abuela/o', $patient->convive_con) ? 'selected':''); ?>>Abuela/o</option>
                <option <?php echo e(in_array('Padre', $patient->convive_con) ? 'selected':''); ?>>Padre</option>
                <option <?php echo e(in_array('Madre', $patient->convive_con) ? 'selected':''); ?>>Madre</option>
                <option <?php echo e(in_array('Hija/o', $patient->convive_con) ? 'selected':''); ?>>Hija/o</option>
                <option <?php echo e(in_array('Hermana/o', $patient->convive_con) ? 'selected':''); ?>>Hermana/o</option>
                <option <?php echo e(in_array('Nuera', $patient->convive_con) ? 'selected':''); ?>> Nuera</option>
                <option <?php echo e(in_array('Yerno', $patient->convive_con) ? 'selected':''); ?>>Yerno</option>
                <option <?php echo e(in_array('Cuidador/a profesional' , $patient->convive_con) ? 'selected':''); ?>>Cuidador/a
                    profesional</option>
                <option <?php echo e(in_array('Nieta/o', $patient->convive_con) ? 'selected':''); ?>>Nieta/o</option>
                <option <?php echo e(in_array('Sobrina/o', $patient->convive_con) ? 'selected':''); ?>>Sobrina/o</option>
                <option <?php echo e(in_array('Pareja', $patient->convive_con) ? 'selected':''); ?>>Pareja</option>
                <option <?php echo e(in_array('Sola', $patient->convive_con) ? 'selected':''); ?>>Sola</option>
                <option <?php echo e(in_array('Otros', $patient->convive_con) ? 'selected':''); ?>>Otros</option>
                <?php if($patient->convive_con == null): ?>
                $patient->convive_con[0] = "vacio"
                <?php endif; ?>
            </select>
        </p>

        <script>
            $("#convive_con").on('change', function(){
                if ($('#convive_con').val() == 'Otros') {
                    $('#otro_parent').css('display', 'block');
                    $('#otros_parentesco').attr('required', 'required');
                } else {
                    $('#otro_parent').css('display', 'none');
                }
            });
        </script>

        <!--otro parentesco-->
        <p class="bg-secondary p-3" id="otro_parent" style="display: none">
            <?php echo Form::label('otros_parentesco', 'Otros (especificar):'); ?>

            <?php echo Form::text('otros_parentesco', $patient->otros_parentesco, ['class' => 'form-control', 'id' =>
            'otros_parentesco']); ?>

        </p>

        

        <!--  Dependencia Field -->
        <p><?php echo Form::label('worker_id', 'Trabajadora social gestora del caso:'); ?>

            <select class="form-control select2" id="worker_id" name="worker_id[]" required multiple="multiple">
                <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($worker->cat_profesional == 'Trabajadora Social'): ?>

                <option <?php echo e(in_array($worker->id, $patient->worker_id) ? 'selected':''); ?> value="<?php echo e($worker->id); ?>">
                    <?php echo e($worker->nombre); ?>

                    <?php echo e($worker->apellido); ?>

                </option>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
    </div>

</div><?php /**PATH /var/www/resources/views/patients/edit/personal_data.blade.php ENDPATH**/ ?>