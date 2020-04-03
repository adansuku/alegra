<div class="row m-0 p-3">
    <!-- Nombre Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <!-- Apellido Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('apellido', 'Apellidos:') !!}
        {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Genero Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('genero_carer', 'Género:') !!}
        {!! Form::select('genero_carer', [
        "" => 'Elige una opción',
        'Hombre' => 'Hombre',
        'Mujer' => 'Mujer',
        'Intersexual' => 'Intersexual'
        ], null, ['class' => 'form-control']) !!}
    </div>

    <!-- Dni Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('dni', 'DNI:') !!}
        {!! Form::text('dni', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Parentesco Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('parentesco', 'Parentesco:') !!}
        {!! Form::select('parentesco', [
        '' => '',
        'Hija/o' => 'Hija/o',
        'Hermana/o' => 'Hermana/o',
        'Nuera' => 'Nuera', 'Yerno' => 'Yerno',
        'Cuidador/a profesional' => 'Cuidador/a profesional', 'Nieta/o' => 'Nieta/o', 'Sobrina/o' => 'Sobrina/o',
        'Pareja' => 'Pareja', 'Madre' => 'Madre', 'Padre' => 'Padre', 'Otros' => 'Otros'
        ], null, ['class' => 'form-control', 'id' => 'parentesco']) !!}
    </div>


    <!-- Otro parentesco -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otros_parentesco" style="display: none;">
        {!! Form::label('otro_paren', 'Otros (especificar) :') !!}
        {!! Form::text('otro_paren', null, ['class' => 'form-control', 'id'=> 'otro_parentesco_field']) !!}
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
        {!! Form::label('fecha_nac_care', 'Fecha Nacimiento:') !!}
        {!! Form::date('fecha_nac_care', null, ['class' => 'form-control','id'=>'fecha_nac_care']) !!}
    </div>

    @section('scripts')
    <script type="text/javascript">
        $('#fecha_nac_care').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
    @endsection

    <!-- Direccion Care Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('direccion_care', 'Dirección:') !!}
        {!! Form::text('direccion_care', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Municipio Care Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('municipio_carer', 'Municipio:') !!}
        <select class="form-control select2" id="municipio" name="municipio_carer">
            <option value="">Selecciona una opción</option>
            <option value="" disabled>Tenerife</option>
            <option {{ $patient->Municipio == 'Adeje' ? 'selected':'' }}>Adeje</option>
            <option {{ $patient->Municipio == 'Arafo' ? 'selected':'' }}>Arafo</option>
            <option {{ $patient->Municipio == 'Arico' ? 'selected':'' }}>Arico</option>
            <option {{ $patient->Municipio == 'Arona' ? 'selected':'' }}>Arona</option>
            <option {{ $patient->Municipio == 'Buenavista del Norte' ? 'selected':'' }}>Buenavista del Norte</option>
            <option {{ $patient->Municipio == 'Candelaria' ? 'selected':'' }}>Candelaria</option>
            <option {{ $patient->Municipio == 'El Rosario' ? 'selected':'' }}>El Rosario</option>
            <option {{ $patient->Municipio == 'El Sauzal' ? 'selected':'' }}>El Sauzal</option>
            <option {{ $patient->Municipio == 'El Tanque' ? 'selected':'' }}>El Tanque</option>
            <option {{ $patient->Municipio == 'Fasnia' ? 'selected':'' }}>Fasnia</option>
            <option {{ $patient->Municipio == 'Garachico' ? 'selected':'' }}>Garachico</option>
            <option {{ $patient->Municipio == 'Granadilla de Abona' ? 'selected':'' }}>Granadilla de Abona</option>
            <option {{ $patient->Municipio == 'Güímar' ? 'selected':'' }}>Güímar</option>
            <option {{ $patient->Municipio == 'Guía de Isora' ? 'selected':'' }}>Guía de Isora</option>
            <option {{ $patient->Municipio == 'Icod de los Vinos' ? 'selected':'' }}>Icod de los Vinos</option>
            <option {{ $patient->Municipio == 'La Guancha' ? 'selected':'' }}>La Guancha</option>
            <option {{ $patient->Municipio == 'La Matanza de Acentejo' ? 'selected':'' }}>La Matanza de Acentejo
            </option>
            <option {{ $patient->Municipio == 'La Orotava' ? 'selected':'' }}>La Orotava</option>
            <option {{ $patient->Municipio == 'La Victoria de Acentejo' ? 'selected':'' }}>La Victoria de Acentejo
            </option>
            <option {{ $patient->Municipio == 'Los Realejos' ? 'selected':'' }}>Los Realejos</option>
            <option {{ $patient->Municipio == 'Los Silos' ? 'selected':'' }}>Los Silos</option>
            <option {{ $patient->Municipio == 'Puerto de la Cruz' ? 'selected':'' }}>Puerto de la Cruz</option>
            <option {{ $patient->Municipio == 'San Cristóbal de la Laguna' ? 'selected':'' }}>San Cristóbal de la Laguna
            </option>
            <option {{ $patient->Municipio == 'San Juan de la Rambla' ? 'selected':'' }}>San Juan de la Rambla</option>
            <option {{ $patient->Municipio == 'San Miguel de Abona' ? 'selected':'' }}>San Miguel de Abona</option>
            <option {{ $patient->Municipio == 'Santa Cruz de Tenerife' ? 'selected':'' }}>Santa Cruz de Tenerife
            </option>
            <option {{ $patient->Municipio == 'Santa Úrsula' ? 'selected':'' }}>Santa Úrsula</option>
            <option {{ $patient->Municipio == 'Santiago del Teide' ? 'selected':'' }}>Santiago del Teide</option>
            <option {{ $patient->Municipio == 'Tacoronte' ? 'selected':'' }}>Tacoronte</option>
            <option {{ $patient->Municipio == 'Tegueste' ? 'selected':'' }}>Tegueste</option>
            <option {{ $patient->Municipio == 'Vilaflor' ? 'selected':'' }}>Vilaflor</option>

            <option value="" disabled></option>
            <option value="" disabled>La Gomera</option>
            <option {{ $patient->Municipio == 'Agulo' ? 'selected':'' }}>Agulo</option>
            <option {{ $patient->Municipio == 'Alajeró' ? 'selected':'' }}>Alajeró</option>
            <option {{ $patient->Municipio == 'Hermigua' ? 'selected':'' }}>Hermigua</option>
            <option {{ $patient->Municipio == 'San Sebastián de la Gomera' ? 'selected':'' }}>San Sebastián de la Gomera
            </option>
            <option {{ $patient->Municipio == 'Valle Gran Rey' ? 'selected':'' }}>Valle Gran Rey</option>
            <option {{ $patient->Municipio == 'Vallehermoso' ? 'selected':'' }}>Vallehermoso</option>

            <option value="" disabled></option>
            <option value="" disabled>El Hierro</option>
            <option {{ $patient->Municipio == 'Frontera' ? 'selected':'' }}>Frontera</option>
            <option {{ $patient->Municipio == 'El Pinar de El Hierro' ? 'selected':'' }}>El Pinar de El Hierro</option>
            <option {{ $patient->Municipio == 'Valverde' ? 'selected':'' }}>Valverde</option>

            <option value="" disabled></option>
            <option value="" disabled>La Palma</option>
            <option {{ $patient->Municipio == 'Barlovento' ? 'selected':'' }}>Barlovento</option>
            <option {{ $patient->Municipio == 'Breña Alta' ? 'selected':'' }}>Breña Alta</option>
            <option {{ $patient->Municipio == 'Breña Baja' ? 'selected':'' }}>Breña Baja</option>
            <option {{ $patient->Municipio == 'Fuencaliente de la Palma' ? 'selected':'' }}>Fuencaliente de la Palma
            </option>
            <option {{ $patient->Municipio == 'Garafía' ? 'selected':'' }}>Garafía</option>
            <option {{ $patient->Municipio == 'Los Llanos de Aridane' ? 'selected':'' }}>Los Llanos de Aridane</option>
            <option {{ $patient->Municipio == 'El Paso' ? 'selected':'' }}>El Paso</option>
            <option {{ $patient->Municipio == 'Puntagorda' ? 'selected':'' }}>Puntagorda</option>
            <option {{ $patient->Municipio == 'Puntallana' ? 'selected':'' }}>Puntallana</option>
            <option {{ $patient->Municipio == 'San Andrés y Sauces' ? 'selected':'' }}>San Andrés y Sauces</option>
            <option {{ $patient->Municipio == 'Santa Cruz de la Palma' ? 'selected':'' }}>Santa Cruz de la Palma
            </option>
            <option {{ $patient->Municipio == 'Tazacorte' ? 'selected':'' }}>Tazacorte</option>
            <option {{ $patient->Municipio == 'Tijarafe y Villa de Mazo' ? 'selected':'' }}>Tijarafe y Villa de Mazo
            </option>

            <option value="" disabled></option>
            <option value="" disabled>Lanzarote</option>
            <option {{ $patient->Municipio == 'Arrecife' ? 'selected':'' }}>Arrecife</option>
            <option {{ $patient->Municipio == 'Haría' ? 'selected':'' }}>Haría</option>
            <option {{ $patient->Municipio == 'San Bartolomé' ? 'selected':'' }}>San Bartolomé</option>
            <option {{ $patient->Municipio == 'Teguise' ? 'selected':'' }}>Teguise</option>
            <option {{ $patient->Municipio == 'Tías' ? 'selected':'' }}>Tías</option>
            <option {{ $patient->Municipio == 'Tinajo y Yaiza' ? 'selected':'' }}>Tinajo y Yaiza</option>

            <option value="" disabled>Fuerteventura</option>
            <option {{ $patient->Municipio == 'Antigua' ? 'selected':'' }}>Antigua</option>
            <option {{ $patient->Municipio == 'Betancuria' ? 'selected':'' }}>Betancuria</option>
            <option {{ $patient->Municipio == 'La Oliva' ? 'selected':'' }}>La Oliva</option>
            <option {{ $patient->Municipio == 'Pájara' ? 'selected':'' }}>Pájara</option>
            <option {{ $patient->Municipio == 'Puerto del Rosario' ? 'selected':'' }}>Puerto del Rosario</option>
            <option {{ $patient->Municipio == 'Tuineje' ? 'selected':'' }}>Tuineje</option>

            <option value="" disabled></option>
            <option value="" disabled>Gran Canaria</option>
            <option {{ $patient->Municipio == 'Agaete' ? 'selected':'' }}>Agaete</option>
            <option {{ $patient->Municipio == 'Agüimes' ? 'selected':'' }}>Agüimes</option>
            <option {{ $patient->Municipio == 'La Aldea de San Nicolás' ? 'selected':'' }}>La Aldea de San Nicolás
            </option>
            <option {{ $patient->Municipio == 'Artenara' ? 'selected':'' }}>Artenara</option>
            <option {{ $patient->Municipio == 'Arucas' ? 'selected':'' }}>Arucas</option>
            <option {{ $patient->Municipio == 'Firgas' ? 'selected':'' }}>Firgas</option>
            <option {{ $patient->Municipio == 'Gáldar' ? 'selected':'' }}>Gáldar</option>
            <option {{ $patient->Municipio == 'Ingenio' ? 'selected':'' }}>Ingenio</option>
            <option {{ $patient->Municipio == 'Mogán' ? 'selected':'' }}>Mogán</option>
            <option {{ $patient->Municipio == 'Moya' ? 'selected':'' }}>Moya</option>
            <option {{ $patient->Municipio == 'Las Palmas de Gran Canaria' ? 'selected':'' }}>Las Palmas de Gran Canaria
            </option>
            <option {{ $patient->Municipio == 'San Bartolomé de Tirajana' ? 'selected':'' }}>San Bartolomé de Tirajana
            </option>
            <option {{ $patient->Municipio == 'Santa Brígida' ? 'selected':'' }}>Santa Brígida</option>
            <option {{ $patient->Municipio == 'Santa Lucía de Tirajana' ? 'selected':'' }}>Santa Lucía de Tirajana
            </option>
            <option {{ $patient->Municipio == 'Santa María de Guía de Gran Canaria' ? 'selected':'' }}>Santa María de
                Guía de Gran Canaria</option>
            <option {{ $patient->Municipio == 'Tejeda Telde' ? 'selected':'' }}>Tejeda Telde</option>
            <option {{ $patient->Municipio == 'Teror' ? 'selected':'' }}>Teror</option>
            <option {{ $patient->Municipio == 'Valleseco' ? 'selected':'' }}>Valleseco</option>
            <option {{ $patient->Municipio == 'Valsequillo de Gran Canaria' ? 'selected':'' }}>Valsequillo de Gran
                Canaria</option>
            <option {{ $patient->Municipio == 'Vega de San Mateo.' ? 'selected':'' }}>Vega de San Mateo.</option>
        </select>
    </div>

    <!-- Tel Care Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('tel_care', 'Teléfono Fijo:') !!}
        {!! Form::number('tel_care', null, ['class' => 'form-control','required' => 'required']) !!}
    </div>

    <!-- Movil Care Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('movil_care', 'Teléfono Móvil:') !!}
        {!! Form::number('movil_care', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Care Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('email_care', 'Email:') !!}
        {!! Form::email('email_care', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Sit Laboral Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('sit_laboral', 'Ocupación:') !!}
        {!! Form::select('sit_laboral', [
        '' => 'Selecciona una opción',
        'Jubilación' => 'Jubilación',
        'Ocupada Remunerada' => 'Ocupada Remunerada',
        'Ocupada No Remunerada' => 'Ocupada No Remunerada',
        'Desempleada' => 'Desempleada',
        'Estudiante' => 'Estudiante',
        'Otras' => 'Otras'], null, ['class' => 'form-control', 'id'=>'sit_laboral']) !!}
    </div>

    <!-- Otra ocupacion Field -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_ocupacion" style="display: none;">
        {!! Form::label('otro_ocupacion', 'Otras (especificar) :') !!}
        {!! Form::text('otro_ocupacion', null, ['class' => 'form-control', 'id'=>'otro_ocupacion_field']) !!}
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
        {!! Form::label('trabajo_care', 'Trabajo Actual:') !!}
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
        {!! Form::label('otro_trabajo', 'Otro (especificar) :') !!}
        {!! Form::text('otro_trabajo', null, ['class' => 'form-control', 'id'=>'otro_trabajo_field']) !!}
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
        {!! Form::label('', 'Estudios:') !!}
        {!! Form::select('', [
        '' => 'Selecciona una opción',
        'Analfabetismo' => 'Analfabetismo',
        'Sin estudios' => 'Sin estudios',
        'Primarios' => 'Primarios',
        'Secundarios' => 'Secundarios',
        'Grado medio' => 'Grado medio',
        'Grado superior' => 'Grado superior',
        'Universitarios' => 'Universitarios',
        'Otros' => 'Otros',
        ], null, ['class' => 'form-control', 'id' => 'estudios_carer']) !!}
    </div>

    <!--otro nivel de estudios-->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_estudio" style="display: none;">
        {!! Form::label('', 'Otros (especificar) :') !!}
        {!! Form::text('', null, ['class' => 'form-control', 'id' => 'estudios_carer_field']) !!}
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
        {!! Form::label('ano_care', 'Fecha inicio del Cuidado') !!}
        {!! Form::date('ano_care', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Servicios que recibe actualmente -->
    <div class="form-group col-sm-12">
        {!! Form::label('sit_apoyo', 'Servicios de Apoyo Que Recibe Actualmente:') !!}
        <select class="form-control select2" id="sit_apoyo" name="sit_apoyo[]" multiple="multiple">
            <option value="Ninguno">Ninguno</option>
            <option value="Apoyo Emocional">Apoyo Emocional</option>
            <option value="Grupo Cuidadoras">Grupo Cuidadoras</option>
            <option value="Otros">Otros</option>
        </select>
    </div>

    <!-- Otra situacion de apoyo -->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_serv_apoyo" style="display: none;">
        {!! Form::label('otro_serv_apoyo', 'Otros (especificar) :') !!}
        {!! Form::text('otro_serv_apoyo', null, ['class' => 'form-control', 'id' => 'otro_serv_apoyo_field']) !!}
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
        {!! Form::label('cesion_care', 'Cesión de Imagen:') !!}
        {!! Form::select('cesion_care', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
    </div>

    <!-- Whatsapp Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('whatsapp', 'Whatsapp:') !!}
        {!! Form::select('whatsapp', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
    </div>

    <!-- Contactar Para Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('contactar_para', 'Contactar para:') !!}
        <select class="form-control select2" id="contactar_para" name="contactar_para[]" multiple="multiple">
            <option value="Urgencias">Urgencias</option>
            <option value="Seguimiento diario">Seguimiento diario</option>
            <option value="Contabilidad">Contabilidad</option>
            <option value="Otros">Otros</option>
        </select>
    </div>

    <!-- Otro contactar para-->
    <div class="form-group col-sm-12 bg-secondary p-3" id="otro_contactar_para" style="display: none;">
        {!! Form::label('otro_contactar_para', 'Otros (especificar):') !!}
        {!! Form::text('otro_contactar_para', null, ['class' => 'form-control', 'id' => 'otro_contactar_field']) !!}
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
        {!! Form::label('es_tutor', '¿Es Tutor/a Legal?') !!}
        {!! Form::select('es_tutor', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Añadir Persona de Referencia', ['class' => 'btn btn-primary float-right' ]) !!}
        {!! Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']) !!}
    </div>


</div>