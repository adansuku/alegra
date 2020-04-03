<div class="row m-0 p-3">
    <!-- Nombre Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('nombre', 'Nombre:'); ?>

        <?php echo Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']); ?>

    </div>

    <!-- Apellido Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('apellido', 'Apellidos:'); ?>

        <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Genero Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('genero_carer', 'Género:'); ?>

        <?php echo Form::select('genero_carer', [
        "" => 'Elige una opción',
        'Hombre' => 'Hombre',
        'Mujer' => 'Mujer',
        'Intersexual' => 'Intersexual'
        ], null, ['class' => 'form-control']); ?>

    </div>

    <!-- Dni Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('dni', 'DNI:'); ?>

        <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Parentesco Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('parentesco', 'Parentesco:'); ?>

        <?php echo Form::select('parentesco', [
        '' => '',
        'Hija/o' => 'Hija/o',
        'Hermana/o' => 'Hermana/o',
        'Nuera' => 'Nuera', 'Yerno' => 'Yerno',
        'Cuidador/a profesional' => 'Cuidador/a profesional', 'Nieta/o' => 'Nieta/o', 'Sobrina/o' => 'Sobrina/o',
        'Pareja' => 'Pareja', 'Madre' => 'Madre', 'Padre' => 'Padre', 'Otros' => 'Otros'
        ], null, ['class' => 'form-control', 'id' => 'parentesco']); ?>

    </div>


    <!-- Otro parentesco -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otros_parentesco" style="display: none;">
        <?php echo Form::label('otro_paren', 'Otros (especificar) :'); ?>

        <?php echo Form::text('otro_paren', null, ['class' => 'form-control', 'id'=> 'otro_parentesco_field']); ?>

    </div>

    <script>
        $('#parentesco').on('change', function() {
            if ($(this).val() === 'Otros') {
                $('#otros_parentesco').css('display', 'block');
                $('#otro_parentesco_field').attr('required', 'required');
            } else {
                $('#otros_parentesco').css('display', 'none');
            }
        });
    </script>

    <!-- Fecha Nac Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('fecha_nac_care', 'Fecha Nacimiento:'); ?>

        <?php echo Form::date('fecha_nac_care', null, ['class' => 'form-control','id'=>'fecha_nac_care']); ?>

    </div>

    <?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_nac_care').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
    <?php $__env->stopSection(); ?>

    <!-- Direccion Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('direccion_care', 'Dirección:'); ?>

        <?php echo Form::text('direccion_care', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Municipio Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('municipio_carer', 'Municipio:'); ?>

        <select class="form-control select2" id="municipio" name="municipio_carer">
            <option value="">Selecciona una opción</option>
            <option value="" disabled>Tenerife</option>
            <option <?php echo e($patient->Municipio == 'Adeje' ? 'selected':''); ?>>Adeje</option>
            <option <?php echo e($patient->Municipio == 'Arafo' ? 'selected':''); ?>>Arafo</option>
            <option <?php echo e($patient->Municipio == 'Arico' ? 'selected':''); ?>>Arico</option>
            <option <?php echo e($patient->Municipio == 'Arona' ? 'selected':''); ?>>Arona</option>
            <option <?php echo e($patient->Municipio == 'Buenavista del Norte' ? 'selected':''); ?>>Buenavista del Norte</option>
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
            <option <?php echo e($patient->Municipio == 'San Cristóbal de la Laguna' ? 'selected':''); ?>>San Cristóbal de la Laguna
            </option>
            <option <?php echo e($patient->Municipio == 'San Juan de la Rambla' ? 'selected':''); ?>>San Juan de la Rambla</option>
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
            <option <?php echo e($patient->Municipio == 'San Sebastián de la Gomera' ? 'selected':''); ?>>San Sebastián de la Gomera
            </option>
            <option <?php echo e($patient->Municipio == 'Valle Gran Rey' ? 'selected':''); ?>>Valle Gran Rey</option>
            <option <?php echo e($patient->Municipio == 'Vallehermoso' ? 'selected':''); ?>>Vallehermoso</option>

            <option value="" disabled></option>
            <option value="" disabled>El Hierro</option>
            <option <?php echo e($patient->Municipio == 'Frontera' ? 'selected':''); ?>>Frontera</option>
            <option <?php echo e($patient->Municipio == 'El Pinar de El Hierro' ? 'selected':''); ?>>El Pinar de El Hierro</option>
            <option <?php echo e($patient->Municipio == 'Valverde' ? 'selected':''); ?>>Valverde</option>

            <option value="" disabled></option>
            <option value="" disabled>La Palma</option>
            <option <?php echo e($patient->Municipio == 'Barlovento' ? 'selected':''); ?>>Barlovento</option>
            <option <?php echo e($patient->Municipio == 'Breña Alta' ? 'selected':''); ?>>Breña Alta</option>
            <option <?php echo e($patient->Municipio == 'Breña Baja' ? 'selected':''); ?>>Breña Baja</option>
            <option <?php echo e($patient->Municipio == 'Fuencaliente de la Palma' ? 'selected':''); ?>>Fuencaliente de la Palma
            </option>
            <option <?php echo e($patient->Municipio == 'Garafía' ? 'selected':''); ?>>Garafía</option>
            <option <?php echo e($patient->Municipio == 'Los Llanos de Aridane' ? 'selected':''); ?>>Los Llanos de Aridane</option>
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
            <option <?php echo e($patient->Municipio == 'Las Palmas de Gran Canaria' ? 'selected':''); ?>>Las Palmas de Gran Canaria
            </option>
            <option <?php echo e($patient->Municipio == 'San Bartolomé de Tirajana' ? 'selected':''); ?>>San Bartolomé de Tirajana
            </option>
            <option <?php echo e($patient->Municipio == 'Santa Brígida' ? 'selected':''); ?>>Santa Brígida</option>
            <option <?php echo e($patient->Municipio == 'Santa Lucía de Tirajana' ? 'selected':''); ?>>Santa Lucía de Tirajana
            </option>
            <option <?php echo e($patient->Municipio == 'Santa María de Guía de Gran Canaria' ? 'selected':''); ?>>Santa María de
                Guía de Gran Canaria</option>
            <option <?php echo e($patient->Municipio == 'Tejeda Telde' ? 'selected':''); ?>>Tejeda Telde</option>
            <option <?php echo e($patient->Municipio == 'Teror' ? 'selected':''); ?>>Teror</option>
            <option <?php echo e($patient->Municipio == 'Valleseco' ? 'selected':''); ?>>Valleseco</option>
            <option <?php echo e($patient->Municipio == 'Valsequillo de Gran Canaria' ? 'selected':''); ?>>Valsequillo de Gran
                Canaria</option>
            <option <?php echo e($patient->Municipio == 'Vega de San Mateo.' ? 'selected':''); ?>>Vega de San Mateo.</option>
        </select>
    </div>

    <!-- Tel Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('tel_care', 'Teléfono Fijo:'); ?>

        <?php echo Form::number('tel_care', null, ['class' => 'form-control','required' => 'required']); ?>

    </div>

    <!-- Movil Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('movil_care', 'Teléfono Móvil:'); ?>

        <?php echo Form::number('movil_care', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Email Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('email_care', 'Email:'); ?>

        <?php echo Form::email('email_care', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Sit Laboral Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('sit_laboral', 'Ocupación:'); ?>

        <?php echo Form::select('sit_laboral', [
        '' => 'Selecciona una opción',
        'Jubilación' => 'Jubilación',
        'Ocupada Remunerada' => 'Ocupada Remunerada',
        'Ocupada No Remunerada' => 'Ocupada No Remunerada',
        'Desempleada' => 'Desempleada',
        'Estudiante' => 'Estudiante',
        'Otras' => 'Otras'], null, ['class' => 'form-control', 'id'=>'sit_laboral']); ?>

    </div>

    <!-- Otra ocupacion Field -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_ocupacion" style="display: none;">
        <?php echo Form::label('otro_ocupacion', 'Otras (especificar) :'); ?>

        <?php echo Form::text('otro_ocupacion', null, ['class' => 'form-control', 'id'=>'otro_ocupacion_field']); ?>

    </div>

    <script>
        $('#sit_laboral').on('change', function() {
            if ($(this).val() === 'Otras') {
                $('#otro_ocupacion').css('display', 'block');
                $('#otro_ocupacion_field').attr('required', 'required');
            } else {
                $('#otro_ocupacion').css('display', 'none');
            }
        });
    </script>


    <!-- Trabajo actual Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('trabajo_care', 'Trabajo Actual:'); ?>

        <select class="form-control select2" id="trabajo_care" name="trabajo_care[]" multiple="multiple"
            style="display: none;">
            <option value="Cuidadora familiar">Cuidadora familiar</option>
            <option value="Cuidadora profesional">Cuidadora profesional</option>
            <option value="Ama de casa">Ama de casa</option>
            <option value="Otro">Otro</option>
        </select>
    </div>

    <!-- Otra trabajo -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_trabajo" style="display: none;">
        <?php echo Form::label('otro_trabajo', 'Otro (especificar) :'); ?>

        <?php echo Form::text('otro_trabajo', null, ['class' => 'form-control', 'id'=>'otro_trabajo_field']); ?>

    </div>

    <script>
        $('#trabajo_care').on('change', function() {
            if ($("#trabajo_care option[value=Otro]:selected").length > 0){
                 $('#otro_trabajo').css('display', 'block');
                 $('#otro_trabajo_field').attr('required', 'required');
            }
            else {
                $('#otro_trabajo').css('display', 'none');
            }
        });
    </script>


    <!-- Nivel de estudios -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('', 'Estudios:'); ?>

        <?php echo Form::select('', [
        '' => 'Selecciona una opción',
        'Analfabetismo' => 'Analfabetismo',
        'Sin estudios' => 'Sin estudios',
        'Primarios' => 'Primarios',
        'Secundarios' => 'Secundarios',
        'Grado medio' => 'Grado medio',
        'Grado superior' => 'Grado superior',
        'Universitarios' => 'Universitarios',
        'Otros' => 'Otros',
        ], null, ['class' => 'form-control', 'id' => 'estudios_carer']); ?>

    </div>

    <!--otro nivel de estudios-->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_estudio" style="display: none;">
        <?php echo Form::label('', 'Otros (especificar) :'); ?>

        <?php echo Form::text('', null, ['class' => 'form-control', 'id' => 'estudios_carer_field']); ?>

    </div>

    <script>
        $('#estudios_carer').on('change', function() {
            if ($(this).val() == 'Otros') {
                $('#otro_estudio').css('display', 'block');
                $("#estudios_carer_field").attr("name", "estudios_carer");
                $("#estudios_carer").attr("name", "");
                $('#estudios_carer_field').attr('required', 'required');
                
            } else {
                $('#otro_estudio').css('display', 'none');
                $("#estudios_carer").attr("name", "estudios_carer");
                $("#estudios_carer_field").attr("name", "");
            }
        });
    </script>




    <!-- Ano Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('ano_care', 'Fecha inicio del Cuidado'); ?>

        <?php echo Form::date('ano_care', null, ['class' => 'form-control']); ?>

    </div>


    <!-- Servicios que recibe actualmente -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('sit_apoyo', 'Servicios de Apoyo Que Recibe Actualmente:'); ?>

        <select class="form-control select2" id="sit_apoyo" name="sit_apoyo[]" multiple="multiple">
            <option value="Ninguno">Ninguno</option>
            <option value="Apoyo Emocional">Apoyo Emocional</option>
            <option value="Grupo Cuidadoras">Grupo Cuidadoras</option>
            <option value="Otros">Otros</option>
        </select>
    </div>

    <!-- Otra situacion de apoyo -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_serv_apoyo" style="display: none;">
        <?php echo Form::label('otro_serv_apoyo', 'Otros (especificar) :'); ?>

        <?php echo Form::text('otro_serv_apoyo', null, ['class' => 'form-control', 'id' => 'otro_serv_apoyo_field']); ?>

    </div>

    <script>
        $('#sit_apoyo').on('change', function() {
            if ($("#sit_apoyo option[value=Otros]:selected").length > 0){
                 $('#otro_serv_apoyo').css('display', 'block');
                 $('#otro_serv_apoyo_field').attr('required', 'required');
            }
            else {
                $('#otro_serv_apoyo').css('display', 'none');
            }
        });
    </script>

    <!-- Cesion Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('cesion_care', 'Cesión de Imagen:'); ?>

        <?php echo Form::select('cesion_care', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

    </div>

    <!-- Whatsapp Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('whatsapp', 'Whatsapp:'); ?>

        <?php echo Form::select('whatsapp', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

    </div>

    <!-- Contactar Para Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('contactar_para', 'Contactar para:'); ?>

        <select class="form-control select2" id="contactar_para" name="contactar_para[]" multiple="multiple">
            <option value="Urgencias">Urgencias</option>
            <option value="Seguimiento diario">Seguimiento diario</option>
            <option value="Contabilidad">Contabilidad</option>
            <option value="Otros">Otros</option>
        </select>
    </div>

    <!-- Otro contactar para-->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_contactar_para" style="display: none;">
        <?php echo Form::label('otro_contactar_para', 'Otros (especificar):'); ?>

        <?php echo Form::text('otro_contactar_para', null, ['class' => 'form-control', 'id' => 'otro_contactar_field']); ?>

    </div>

    <script>
        $('#contactar_para').on('change', function() {
            if ($("#contactar_para option[value=Otros]:selected").length > 0){
                 $('#otro_contactar_para').css('display', 'block');
                 $('#otro_contactar_field').attr('required', 'required');
            }
            else {
                $('#otro_contactar_para').css('display', 'none');
            }
        });
    </script>


    <div class="form-group col-sm-12">
        <?php echo Form::label('es_tutor', '¿Es Tutor/a Legal?'); ?>

        <?php echo Form::select('es_tutor', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Añadir Persona de Referencia', ['class' => 'btn btn-primary float-right' ]); ?>

        <?php echo Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']); ?>

    </div>


</div><?php /**PATH /var/www/resources/views/patients/create/carer.blade.php ENDPATH**/ ?>