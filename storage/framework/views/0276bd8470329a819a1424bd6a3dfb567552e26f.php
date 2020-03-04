<div class="row m-0 p-3">
    <!-- Nombre Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('nombre', 'Nombre:'); ?>

        <?php echo Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']); ?>

    </div>

    <!-- Apellido Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('apellido', 'Apellido:'); ?>

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
    <div class="form-group col-sm-12 bg-secondary p-3" id="otros_parentesco" style="display:none">
        <?php echo Form::label('otro_paren', 'Otros (especificar):'); ?>

        <?php echo Form::text('otro_paren', null, ['class' => 'form-control', 'id'=>'parent_field']); ?>

    </div>



    <script>
        $("#parentesco").focus(function(){
            if ($('#parentesco').val() == 'Otros') {
                $('#otros_parentesco').css('display', 'block');
                $('#parent_field').attr('required', 'required');
            } else {
                $('#otros_parentesco').css('display', 'none');
            }
        });

        $("#parentesco").on('change', function(){
            if ($(this).val() === 'Otros') {
                $('#otros_parentesco').css('display', 'block');
                $('#parent_field').attr('required', 'required');
            } else {
                $('#otros_parentesco').css('display', 'none');
            }
        });
    </script>


    <!-- Fecha Nac Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('fecha_nac_care', 'Fecha Nacimiento:'); ?>

        <?php echo Form::date('fecha_nac_care', $patientCarer->fecha_nac_care, ['class' => 'form-control']); ?>

    </div>



    <!-- Direccion Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('direccion_care', 'Dirección:'); ?>

        <?php echo Form::text('direccion_care', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Municipio Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('municipio_carer', 'Municipio:'); ?>

        <select class="form-control select2" id="municipio" name="municipio_carer">
            <option value="">Selecciona un municipio</option>
            <option value="" disabled>Tenerife</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Adeje' ? 'selected':''); ?>>Adeje</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Arafo' ? 'selected':''); ?>>Arafo</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Arico' ? 'selected':''); ?>>Arico</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Arona' ? 'selected':''); ?>>Arona</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Buenavista del Norte' ? 'selected':''); ?>>Buenavista del Norte
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'Candelaria' ? 'selected':''); ?>>Candelaria</option>
            <option <?php echo e($patientCarer->municipio_carer == 'El Rosario' ? 'selected':''); ?>>El Rosario</option>
            <option <?php echo e($patientCarer->municipio_carer == 'El Sauzal' ? 'selected':''); ?>>El Sauzal</option>
            <option <?php echo e($patientCarer->municipio_carer == 'El Tanque' ? 'selected':''); ?>>El Tanque</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Fasnia' ? 'selected':''); ?>>Fasnia</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Garachico' ? 'selected':''); ?>>Garachico</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Granadilla de Abona' ? 'selected':''); ?>>Granadilla de Abona
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'Güímar' ? 'selected':''); ?>>Güímar</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Guía de Isora' ? 'selected':''); ?>>Guía de Isora</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Icod de los Vinos' ? 'selected':''); ?>>Icod de los Vinos
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'La Guancha' ? 'selected':''); ?>>La Guancha</option>
            <option <?php echo e($patientCarer->municipio_carer == 'La Matanza de Acentejo' ? 'selected':''); ?>>La Matanza de
                Acentejo</option>
            <option <?php echo e($patientCarer->municipio_carer == 'La Orotava' ? 'selected':''); ?>>La Orotava</option>
            <option <?php echo e($patientCarer->municipio_carer == 'La Victoria de Acentejo' ? 'selected':''); ?>>La Victoria de
                Acentejo</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Los Realejos' ? 'selected':''); ?>>Los Realejos</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Los Silos' ? 'selected':''); ?>>Los Silos</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Puerto de la Cruz' ? 'selected':''); ?>>Puerto de la Cruz
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Cristóbal de la Laguna' ? 'selected':''); ?>>San Cristóbal
                de la Laguna</option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Juan de la Rambla' ? 'selected':''); ?>>San Juan de la
                Rambla</option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Miguel de Abona' ? 'selected':''); ?>>San Miguel de Abona
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santa Cruz de Tenerife' ? 'selected':''); ?>>Santa Cruz de
                Tenerife</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santa Úrsula' ? 'selected':''); ?>>Santa Úrsula</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santiago del Teide' ? 'selected':''); ?>>Santiago del Teide
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tacoronte' ? 'selected':''); ?>>Tacoronte</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tegueste' ? 'selected':''); ?>>Tegueste</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Vilaflor' ? 'selected':''); ?>>Vilaflor</option>

            <option value="" disabled></option>
            <option value="" disabled>La Gomera</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Agulo' ? 'selected':''); ?>>Agulo</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Alajeró' ? 'selected':''); ?>>Alajeró</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Hermigua' ? 'selected':''); ?>>Hermigua</option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Sebastián de la Gomera' ? 'selected':''); ?>>San Sebastián
                de la Gomera</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Valle Gran Rey' ? 'selected':''); ?>>Valle Gran Rey</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Vallehermoso' ? 'selected':''); ?>>Vallehermoso</option>

            <option value="" disabled></option>
            <option value="" disabled>El Hierro</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Frontera' ? 'selected':''); ?>>Frontera</option>
            <option <?php echo e($patientCarer->municipio_carer == 'El Pinar de El Hierro' ? 'selected':''); ?>>El Pinar de El
                Hierro</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Valverde' ? 'selected':''); ?>>Valverde</option>

            <option value="" disabled></option>
            <option value="" disabled>La Palma</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Barlovento' ? 'selected':''); ?>>Barlovento</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Breña Alta' ? 'selected':''); ?>>Breña Alta</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Breña Baja' ? 'selected':''); ?>>Breña Baja</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Fuencaliente de la Palma' ? 'selected':''); ?>>Fuencaliente de
                la Palma</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Garafía' ? 'selected':''); ?>>Garafía</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Los Llanos de Aridane' ? 'selected':''); ?>>Los Llanos de
                Aridane</option>
            <option <?php echo e($patientCarer->municipio_carer == 'El Paso' ? 'selected':''); ?>>El Paso</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Puntagorda' ? 'selected':''); ?>>Puntagorda</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Puntallana' ? 'selected':''); ?>>Puntallana</option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Andrés y Sauces' ? 'selected':''); ?>>San Andrés y Sauces
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santa Cruz de la Palma' ? 'selected':''); ?>>Santa Cruz de la
                Palma</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tazacorte' ? 'selected':''); ?>>Tazacorte</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tijarafe y Villa de Mazo' ? 'selected':''); ?>>Tijarafe y Villa
                de Mazo</option>

            <option value="" disabled></option>
            <option value="" disabled>Lanzarote</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Arrecife' ? 'selected':''); ?>>Arrecife</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Haría' ? 'selected':''); ?>>Haría</option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Bartolomé' ? 'selected':''); ?>>San Bartolomé</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Teguise' ? 'selected':''); ?>>Teguise</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tías' ? 'selected':''); ?>>Tías</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tinajo y Yaiza' ? 'selected':''); ?>>Tinajo y Yaiza</option>

            <option value="" disabled>Fuerteventura</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Antigua' ? 'selected':''); ?>>Antigua</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Betancuria' ? 'selected':''); ?>>Betancuria</option>
            <option <?php echo e($patientCarer->municipio_carer == 'La Oliva' ? 'selected':''); ?>>La Oliva</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Pájara' ? 'selected':''); ?>>Pájara</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Puerto del Rosario' ? 'selected':''); ?>>Puerto del Rosario
            </option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tuineje' ? 'selected':''); ?>>Tuineje</option>

            <option value="" disabled></option>
            <option value="" disabled>Gran Canaria</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Agaete' ? 'selected':''); ?>>Agaete</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Agüimes' ? 'selected':''); ?>>Agüimes</option>
            <option <?php echo e($patientCarer->municipio_carer == 'La Aldea de San Nicolás' ? 'selected':''); ?>>La Aldea de San
                Nicolás</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Artenara' ? 'selected':''); ?>>Artenara</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Arucas' ? 'selected':''); ?>>Arucas</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Firgas' ? 'selected':''); ?>>Firgas</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Gáldar' ? 'selected':''); ?>>Gáldar</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Ingenio' ? 'selected':''); ?>>Ingenio</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Mogán' ? 'selected':''); ?>>Mogán</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Moya' ? 'selected':''); ?>>Moya</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Las Palmas de Gran Canaria' ? 'selected':''); ?>>Las Palmas de
                Gran Canaria</option>
            <option <?php echo e($patientCarer->municipio_carer == 'San Bartolomé de Tirajana' ? 'selected':''); ?>>San Bartolomé de
                Tirajana</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santa Brígida' ? 'selected':''); ?>>Santa Brígida</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santa Lucía de Tirajana' ? 'selected':''); ?>>Santa Lucía de
                Tirajana</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Santa María de Guía de Gran Canaria' ? 'selected':''); ?>>Santa
                María de Guía de Gran Canaria</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Tejeda Telde' ? 'selected':''); ?>>Tejeda Telde</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Teror' ? 'selected':''); ?>>Teror</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Valleseco' ? 'selected':''); ?>>Valleseco</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Valsequillo de Gran Canaria' ? 'selected':''); ?>>Valsequillo de
                Gran Canaria</option>
            <option <?php echo e($patientCarer->municipio_carer == 'Vega de San Mateo.' ? 'selected':''); ?>>Vega de San Mateo.
            </option>
        </select>
    </div>

    <!-- Tel Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('tel_care', 'Teléfono fijo:'); ?>

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

    <!-- Whatsapp Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('whatsapp', 'Whatsapp:'); ?>

        <?php echo Form::select('whatsapp', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

    </div>

    <!-- Sit Laboral Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('sit_laboral', 'Ocupación:'); ?>

        <?php echo Form::select('sit_laboral', [
        '' => 'Selecciona una ocupación',
        'Jubilación' => 'Jubilación',
        'Ocupada Remunerada' => 'Ocupada Remunerada',
        'Ocupada No Remunerada' => 'Ocupada No Remunerada',
        'Desempleada' => 'Desempleada',
        'Estudiante' => 'Estudiante',
        'Otras' => 'Otras'], null, ['class' => 'form-control', 'id'=>'sit_laboral']); ?>

    </div>

    <!-- Otra ocupacion Field -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_ocupacion" style="display: none;">
        <?php echo Form::label('otro_ocupacion', 'Otros (especificar):'); ?>

        <?php echo Form::text('otro_ocupacion', null, ['class' => 'form-control', 'id' => 'otro_field']); ?>

    </div>


    <script>
        $("#sit_laboral").focus(function(){
            if ($("#sit_laboral option[value=Otras]:selected").length > 0){
                $('#otro_ocupacion').css('display', 'block');
                $('#otro_field').attr('required', 'required');
            } else {
                $('#otro_ocupacion').css('display', 'none');
            }
        });

        $('#sit_laboral').on('change', function() {
             if ($("#sit_laboral option[value=Otras]:selected").length > 0){
                $('#otro_ocupacion').css('display', 'block');
                $('#otro_field').attr('required', 'required');
            } else {
                $('#otro_ocupacion').css('display', 'none');
            }
        });
    </script>


    <!-- Trabajo actual Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('trabajo_care', 'Trabajo Actual:'); ?>

        <?php echo Form::select('trabajo_care[]', [
        'Cuidadora familiar' => 'Cuidadora familiar',
        'Cuidadora profesional' => 'Cuidadora profesional',
        'Ama de casa' => 'Ama de casa',
        'Otro' => 'Otro'], null,
        [
        'class' => 'select2 form-control',
        'id' => 'trabajo_care',
        'multiple' => 'multiple'
        ]); ?>


    </div>

    <!-- Otra trabajo -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_trabajo" style="display: none">
        <?php echo Form::label('otro_trabajo', 'Otros (especificar):'); ?>

        <?php echo Form::text('otro_trabajo', null, ['class' => 'form-control', 'id'=>'trabajo_field']); ?>

    </div>

    <script>
        $("#trabajo_care").focus(function(){
            if ($('#trabajo_care').val() == 'Otras') {
                $('#otro_trabajo').css('display', 'block');
                $('#trabajo_field').attr('required', 'required');
            } else {
                $('#otro_trabajo').css('display', 'none');
            }
        });

        $('#trabajo_care').on('change', function() {
            console.log("hello");
            if ($("#trabajo_care option[value=Otro]:selected").length > 0){
                 $('#otro_trabajo').css('display', 'block');
                 $('#trabajo_field').attr('required', 'required');
            }
            else {
                $('#otro_trabajo').css('display', 'none');
            }
        });
    </script>


    <!-- Nivel de estudios -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('estudios_carer', 'Estudios:'); ?>

        <?php echo Form::select('estudios_carer', [
        '' => '',
        'Analfabetismo' => 'Analfabetismo',
        'Sin estudios' => 'Sin estudios',
        'Primarios' => 'Primarios',
        'Secundarios' => 'Secundarios',
        'Grado medio' => 'Grado medio',
        'Grado superior' => 'Grado superior',
        'Universitarios' => 'Universitarios',
        'Otros' => 'Otros',
        ], $patientCarer->estudios_carer, ['class' => 'form-control', 'id' => 'estudios_carer']); ?>

    </div>

    <!--otro nivel de estudios-->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_estudio" style="display:none">
        <?php echo Form::label('', 'Otros (especificar):'); ?>

        <?php echo Form::text('', null, ['class' => 'form-control', 'id'=>'estudio_field']); ?>

    </div>


    <script>
        $("#estudios_carer").focus(function(){
            if ($('#estudios_carer').val() == 'Otras') {
                $('#otro_estudio').css('display', 'block');
                $('#estudio_field').attr('required', 'required');
                $("#estudio_field").attr("name", "estudios_carer");
            } else {
                $('#otro_estudio').css('display', 'none');
                $("#estudios_carer").attr("name", "estudios_carer");
            }
        });

        $('#estudios_carer').on('change', function() {
            if ($(this).val() == 'Otros') {
                $('#otro_estudio').css('display', 'block');
                $("#otro_estudio").attr("name", "estudios_carer");
                $("#estudios_carer").attr("name", "");
                $('#estudio_field').attr('required', 'required');
            } else {
                $('#otro_estudio').css('display', 'none');
                $("#estudios_carer").attr("name", "estudios_carer");
                $("#otro_estudio").attr("name", "");
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
        <?php echo Form::label('sit_apoyo', 'Servicios Apoyo recibe actualmente:'); ?>

        <?php echo Form::select('sit_apoyo[]', [
        'Ninguno' => 'Ninguno',
        'Apoyo Emocional' => 'Apoyo Emocional',
        'Grupo Cuidadoras' => 'Grupo Cuidadoras',
        'Otros' => 'Otros',], $patientCarer->sit_apoyo,
        [
        'class' => 'select2 form-control',
        'id' => 'sit_apoyo',
        'multiple' => 'multiple'
        ]); ?>


    </div>


    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_serv_apoyo" style="display: none">
        <?php echo Form::label('otro_serv_apoyo', 'Otros (especificar):'); ?>

        <?php echo Form::text('otro_serv_apoyo', null, ['class' => 'form-control', 'id' => 'apoyo_field']); ?>

    </div>
    <script>
        $("#sit_apoyo").focus(function(){
            if ($('#sit_apoyo').val() == 'Otras') {
                $('#otro_serv_apoyo').css('display', 'block');
                $('#apoyo_field').attr('required', 'required');
            } else {
                $('#otro_serv_apoyo').css('display', 'none');
            }
        });

        $('#sit_apoyo').on('change', function() {
            if ($("#sit_apoyo option[value=Otros]:selected").length > 0){
                 $('#otro_serv_apoyo').css('display', 'block');
                 $('#apoyo_field').attr('required', 'required');
            }
            else {
                $('#otro_serv_apoyo').css('display', 'none');
            }
        });
    </script>




    <!-- Cesion Care Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('cesion_care', 'Cesión de imagen:'); ?>

        <?php echo Form::select('cesion_care', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

    </div>

    <!-- Contactar Para Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('contactar_para', 'Contactar para:'); ?>

        <?php echo Form::select('contactar_para[]', [
        'Urgencias' => 'Urgencias',
        'Seguimiento diario' => 'Seguimiento diario',
        'Contabilidad' => 'Contabilidad',
        'Otros' => 'Otros',], $patientCarer->contactar_para,
        [
        'class' => 'select2 form-control',
        'id' => 'contactar_para',
        'multiple' => 'multiple'
        ]); ?>

    </div>

    <!-- Otro contactar para-->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_contactar_para" style="display: none">
        <?php echo Form::label('otro_contactar_para', 'Otros (especificar)::'); ?>

        <?php echo Form::text('otro_contactar_para', null, ['class' => 'form-control', 'id' => 'contactar_field']); ?>

    </div>

    <script>
        $("#contactar_para").focus(function(){
            if ($('#contactar_para').val() == 'Otras') {
                $('#otro_contactar_para').css('display', 'block');
                $('#contactar_field').attr('required', 'required');
            } else {
                $('#otro_contactar_para').css('display', 'none');
            }
        });

        $('#contactar_para').on('change', function() {
            if ($("#contactar_para option[value=Otros]:selected").length > 0){
                 $('#otro_contactar_para').css('display', 'block');
                 $('#contactar_field').attr('required', 'required');
            }
            else {
                $('#otro_contactar_para').css('display', 'none');
            }
        });
    </script>


    <div class="form-group col-sm-12">
        <?php echo Form::label('es_tutor', '¿Es tutor/a legal?'); ?>

        <?php echo Form::select('es_tutor', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']); ?>

    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Actualizar cuidadora', ['class' => 'btn btn-primary float-right' ]); ?>

        <?php echo Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']); ?>

    </div>


</div><?php /**PATH /var/www/resources/views/patient_carers/fields.blade.php ENDPATH**/ ?>