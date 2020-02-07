<!--  $patient->patientInfo->grado_disc  -->

<!-- Nivel Educativo Field -->

<div class="row">
    <div class="col-sm-12 my-3">
        <h4><i class="fas fa-heart"></i> Valoración social</h4>
    </div>

    <div class="form-group col-sm-4">
        <!-- Miembros unidad familiar -->
        {!! Form::label('miem_familia', 'Miembros Unidad Familiar:') !!}
        {!! Form::number('miem_familia', $patient->patientInfo->miem_familia, ['class' => 'form-control', 'max' =>
        '20']) !!}
    </div>

    <!-- Hijos -->
    <div class="form-group col-sm-4">
        {!! Form::label('hijos', 'Hijos:') !!}
        {!! Form::number('hijos', $patient->patientInfo->hijos, ['class' => 'form-control']) !!}
    </div>

    <!-- Vivienda -->
    <div class="form-group col-sm-4">
        {!! Form::label('tipo_vivienda', 'Vivienda:') !!}
        <select class="form-control" id="tipo_vivienda" name="vivienda" onchange="showInput(this.value, this.id);">
            <option {{ $patient->patientInfo->vivienda == 'Selecciona una opción' ? 'selected':'' }}>Selecciona una
                opción</option>
            <option {{ $patient->patientInfo->vivienda == 'Propiedad' ? 'selected':'' }}>Propiedad</option>
            <option {{ $patient->patientInfo->vivienda == 'Alquiler,' ? 'selected':'' }}>Alquiler</option>
            <option {{ $patient->patientInfo->vivienda == 'Otros (especificar)' ? 'selected':'' }}>Otros (especificar)
            </option>
        </select>



        @if ($patient->patientInfo->vivienda == "Otros (especificar)")
        <script>
            $(document).ready(function(){
                    $('#tipo_vivienda_cont').removeAttr('hidden');
                        });
        </script>
        @endif

        <div class="form-group col-sm-12 bg-secondary py-3" id="tipo_vivienda_cont" hidden="hidden">
            {!! Form::label('vivienda_otros', 'Especifica cual:') !!}
            {!! Form::text('vivienda_otros', $patient->patientInfo->vivienda_otros, ['class' => 'form-control',
            'placeholder' => 'Qué otros?']) !!}
        </div>
    </div>



    <!-- nivel educativo -->
    <div class="form-group col-sm-4">
        {!! Form::label('nivel_educativo', 'Nivel Educativo:') !!}



        <select class="form-control" id="nivel_educativo" name="nivel_educativo"
            onchange="showInput(this.value, this.id);">

            <option {{ $patient->patientInfo->nivel_educativo == 'No sabe leer y escribir' ? 'selected':'' }}>No sabe
                leer y escribir</option>
            <option {{ $patient->patientInfo->nivel_educativo == 'Sabe leer y escribir' ? 'selected':'' }}>Sabe leer y
                escribir </option>
            <option {{ $patient->patientInfo->nivel_educativo == 'Graduado Escolar' ? 'selected':'' }}>Graduado Escolar
            </option>
            <option {{ $patient->patientInfo->nivel_educativo == 'Bachillerato' ? 'selected':'' }}>Bachillerato</option>
            <option {{ $patient->patientInfo->nivel_educativo == 'Formación Profesional grado medio' ? 'selected':'' }}>
                Formación Profesional grado medio</option>
            <option
                {{ $patient->patientInfo->nivel_educativo == 'Formación Profesional grado superior' ? 'selected':'' }}>
                Formación Profesional grado superior</option>
            <option {{ $patient->patientInfo->nivel_educativo == 'Estudios Universitarios' ? 'selected':'' }}>Estudios
                Universitarios</option>
            <option {{ $patient->patientInfo->nivel_educativo == 'Otros' ? 'selected':''}}>Otros</option>
        </select>

        @if (
        $patient->patientInfo->nivel_educativo != "No sabe leer y escribir" ||
        $patient->patientInfo->nivel_educativo != "Sabe leer y escribir" ||
        $patient->patientInfo->nivel_educativo != "Graduado Escolar" ||
        $patient->patientInfo->nivel_educativo != "Bachillerato" ||
        $patient->patientInfo->nivel_educativo != "Formación Profesional grado medio" ||
        $patient->patientInfo->nivel_educativo != "Formación Profesional grado superior" ||
        $patient->patientInfo->nivel_educativo != "Estudios Universitarios"
        )
        <script>
            $(document).ready(function(){
                    $('#nivel_educativo_cont').removeAttr('hidden');
                    $("#nivel_educativo option").each(function(){
                        if ($(this).text() == "Otros")
                        $(this).attr("selected","selected");
                    });
                });
        </script>
        @endif

        <div class="pt-3" id="nivel_educativo_cont" hidden="hidden">
            {!! Form::label('nivelEducativo', 'Especifica cual:') !!}
            {!! Form::text('nivelEducativo', $patient->patientInfo->nivel_educativo, ['class' => 'form-control', 'name'
            =>
            'nivel_educativo', 'placeholder' => 'Qué otros estudios?']) !!}
        </div>
    </div>




    <!-- Estudios End Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('estudios_end', 'Estudios finalizados:') !!}
        <select class="form-control" id="type" name="estudios_end">
            <option {{ $patient->patientInfo->estudios_end == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientInfo->estudios_end == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

    {{-- <!-- Otra vivienda-->
    <div class="form-group col-sm-4" id="vivienda" style="display: none;">
        {!! Form::label('vivienda_otros', 'Otra vivienda (especificar):') !!}
        {!! Form::text('vivienda_otros', $patient->patientInfo->vivienda_otros, ['class' => 'form-control']) !!}
    </div>

    <script>
        $('#tipo_vivienda').on('change', function() {
            $('#vivienda').css('display', 'none');
            if ($(this).val() === 'Otros (especificar)') {
                $('#vivienda').css('display', 'block');
            }
        });

        $(document).ready(function() {
            if ($('#tipo_vivienda').val() == 'Si')
                $('#vivienda').show(); // Don't forget to surround the div id with quotes
        });
    </script> --}}

    <!-- ingresos -->
    <div class="form-group col-sm-4">
        {!! Form::label('ingresos_m', 'Ingresos mensuales:') !!}
        {!! Form::text('ingresos_m', $patient->patientInfo->ingresos_m, ['class' => 'form-control']) !!}
    </div>

    <!-- Procedencia Ingresos -->
    <div class="form-group col-sm-4">
        {!! Form::label('ingresos_proced', 'Procedencia Ingresos:') !!}
        {{ $patient->patientInfo->ingresos_proced}}

        <select class="form-control" id="ingresos_proced" name="ingresos_proced"
            onchange="showInput(this.value, this.id);">
            <option {{ $patient->patientInfo->ingresos_proced == 'Selecciona una opción' ? 'selected':'' }}>Selecciona
                una opción</option>
            <option {{ $patient->patientInfo->ingresos_proced == 'Salario' ? 'selected':'' }}>Salario</option>
            <option {{ $patient->patientInfo->ingresos_proced == 'Jubilacion,' ? 'selected':'' }}>Jubilacion</option>
            <option {{ $patient->patientInfo->ingresos_proced == 'Viudedad,' ? 'selected':'' }}>Viudedad</option>
            <option {{ $patient->patientInfo->ingresos_proced == 'PNC,' ? 'selected':'' }}>PNC</option>
            <option {{ $patient->patientInfo->ingresos_proced == 'Otros (especificar)' ? 'selected':'' }}>
                Otros(especificar)</option>
        </select>

        @if ($patient->patientInfo->ingresos_proced == "Otros (especificar)")
        <script>
            $(document).ready(function(){
                    $('#ingresos_proced_cont').removeAttr('hidden');
                });
        </script>
        @endif


        <div class="pt-3" id="ingresos_proced_cont" hidden="hidden">
            {!! Form::label('ingresosProced', 'Especifica cual:') !!}
            {!! Form::text('ingresosProced', $patient->patientInfo->ingresos_proced, ['class' => 'form-control', 'name'
            =>
            'ingresos_proced', 'placeholder' => 'Procedencia?']) !!}
        </div>
    </div>

    <!-- Ocupacion Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('ocupacion', 'Ocupación Anterior:') !!}
        {!! Form::text('ocupacion', $patient->patientInfo->ocupacion, ['class' => 'form-control']) !!}
    </div>

    <!-- Intereses Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('intereses', 'Intereses actuales:') !!}
        {!! Form::text('intereses', $patient->patientInfo->intereses, ['class' => 'form-control']) !!}
    </div>

    <!-- Lee Escribe Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('¿Lee y escribe ahora?', '¿Lee y escribe ahora?:') !!}
        <select class="form-control" id="type" name="lee_escribe">
            <option {{ $patient->patientInfo->lee_escribe == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientInfo->lee_escribe == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>

    <hr width="100%">








    <div class="col-sm-12 my-3">
        <h4><i class="fas fa-file-medical"></i> Información Ley Dependencia</h4>
    </div>


    <!-- Situacion Dep Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('situacion_dep', 'Situacion dependencia:') !!}
        <select class="form-control" id="type" name="situacion_dep">
            <option {{ $patient->patientInfo->situacion_dep == 'No Solicitada' ? 'selected':'' }}>No Solicitada</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Solicitada' ? 'selected':'' }}>Solicitada</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Resolución de Grado' ? 'selected':'' }}>Resolución de
                Grado</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Espera PIA' ? 'selected':'' }}>Espera PIA</option>
            <option {{ $patient->patientInfo->situacion_dep == 'Disfruta Prestacón/Servicio' ? 'selected':'' }}>Disfruta
                Prestacón/Servicio</option>
        </select>
    </div>

    <!-- Grado Dep Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('grado_dep', 'Grado Dependencia:') !!}
        <select class="form-control" id="type" name="grado_dep">
            <option {{ $patient->patientInfo->grado_dep == 'Sin Grado' ? 'selected':'' }}>Sin Grado</option>
            <option {{ $patient->patientInfo->grado_dep == 'I' ? 'selected':'' }}>I</option>
            <option {{ $patient->patientInfo->grado_dep == 'II' ? 'selected':'' }}>II</option>
            <option {{ $patient->patientInfo->grado_dep == 'III' ? 'selected':'' }}>III</option>
        </select>
    </div>

    <!-- Revisión de Grado Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('grado_rev', 'Revisión de Grado:') !!}
        <select class="form-control" id="grado_rev" name="grado_rev">
            <option {{ $patient->patientInfo->grado_rev == 'SI' ? 'selected':'' }}>SI</option>
            <option {{ $patient->patientInfo->grado_rev == 'NO' ? 'selected':'' }}>NO</option>
        </select>
    </div>

    <!-- Nivel Dep Field -->
    <!--<div class="form-group col-sm-4">
        {!! Form::label('nivel_dep', 'Nivel Dependencia:') !!}
        <select class="form-control" id="type" name="nivel_dep">
            <option {{ $patient->patientInfo->nivel_dep == 'Nivel 1' ? 'selected':'' }}>Nivel 1</option>
            <option {{ $patient->patientInfo->nivel_dep == 'Nivel 2' ? 'selected':'' }}>Nivel 2</option>
            <option {{ $patient->patientInfo->nivel_dep == 'Nivel 3' ? 'selected':'' }}>Nivel 3</option>
        </select>
    </div>-->

    <!-- Ayuda Dep Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('ayuda_dep', 'Tipo de Ayuda:') !!}
        {!! Form::select('ayuda_dep', ['PEVS' => 'PEVS', 'PECEF' => 'PECEF', 'PEAE' => 'PEAE', 'Otras' => '
        Otras'], null, ['class' => 'form-control', 'onchange' =>'showInput(this.value, this.id);']) !!}

        @if ($patient->patientInfo->ayuda_dep == "Otras")
        <script>
            $(document).ready(function(){
                    $('#ayuda_dep_cont').removeAttr('hidden');
                        });
        </script>
        @endif

        <div class="pt-3" id="ayuda_dep_cont" hidden="hidden">
            {!! Form::label('ayudaDep', 'Especifica cual:') !!}
            {!! Form::text('ayudaDep', $patient->patientInfo->ayuda_dep, ['class' => 'form-control', 'name'
            =>
            'ayuda_dep', 'placeholder' => 'Cuáles?']) !!}
        </div>
    </div>

    <!-- Cuantia Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('cuantia', 'Cuantia Resolución PIA:') !!}
        {!! Form::text('cuantia', $patient->patientInfo->cuantia, ['class' => 'form-control']) !!}
    </div>

    <!-- Tec Dependencia Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('tec_dependencia', 'Técnico/a Dependencia:') !!}
        {!! Form::text('tec_dependencia', $patient->patientInfo->tec_dependencia, ['class' => 'form-control']) !!}
    </div>

    <!-- Guarda Hecho Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('guarda_hecho', 'Persona Guardadora:') !!}
        {!! Form::text('guarda_hecho', $patient->patientInfo->guarda_hecho, ['class' => 'form-control']) !!}
    </div>



    <div class="col-sm-12 my-3">
        <div class="row">
            <div class="col-lg-6">
                <h4><i class="fas fa-file-medical">
                    </i> Fechas Dependencia</h4>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-secondary float-right" data-toggle="modal"
                    data-target="#dates_modal">
                    Añadir nueva fecha <i class="fas fa-file-upload"></i>
                </button>
            </div>
        </div>


    </div>
    <div class="col-sm-12 my-3">
        <table class="table datatables" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Fecha Paciente</th>
                    <th>Descripción de la fecha añadida</th>
                    <th>Documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patient->patientDates as $item)
                <tr>
                    <td>{{ date('d/m/Y', strtotime($item->fecha_paciente)) }}</td>
                    <td>{!! $item->desc_fecha_paciente !!}</td>
                    <td>{!! $item->documento_fecha_paciente !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <hr width="100%">











    <div class="col-sm-12 my-3">
        <h4><i class="fas fa-hands-helping"></i>Otras ayudas sociosanitarias</h4>
    </div>

    <!-- Ayuda Soc Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('ayuda_soc', 'Tipo Ayudas:') !!}
        <select class="form-control" id="ayuda_soc" name="ayuda_soc" onchange="showInput(this.value, this.id);">
            <option {{ $patient->patientInfo->ayuda_soc == '' ? 'selected':'' }}>Selecciona una opción</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Teleasistencia' ? 'selected':'' }}>Teleasistencia</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'SAD' ? 'selected':'' }}>SAD</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Empleada de Hogar,' ? 'selected':'' }}>Empleada de Hogar
            </option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Cuidadora interna' ? 'selected':'' }}>Cuidadora interna
            </option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Fisioterapia' ? 'selected':'' }}>Fisioterapia</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Estimulación Cognitiva' ? 'selected':'' }}>Estimulación
                Cognitiva</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Apoyo Emocional' ? 'selected':'' }}>Apoyo Emocional</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Centro Atención Residencial' ? 'selected':'' }}> Centro
                Atención Residencial</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Centro Estancia Diurna' ? 'selected':'' }}>Centro Estancia
                Diurna</option>
            <option {{ $patient->patientInfo->ayuda_soc == 'Otros' ? 'selected':'' }}>Otros</option>
        </select>


        @if (
        $patient->patientInfo->ayuda_soc != "Teleasistencia" ||
        $patient->patientInfo->ayuda_soc != "SAD" ||
        $patient->patientInfo->ayuda_soc != "Empleada de Hogar" ||
        $patient->patientInfo->ayuda_soc != "Cuidadora interna" ||
        $patient->patientInfo->ayuda_soc != "Fisioterapia" ||
        $patient->patientInfo->ayuda_soc != "Apoyo Emocional" ||
        $patient->patientInfo->ayuda_soc != "Estimulación Cognitiva" ||
        $patient->patientInfo->ayuda_soc != "Centro Atención Residencial" ||
        $patient->patientInfo->ayuda_soc != "Centro Estancia Diurna"
        )
        <script>
            $(document).ready(function(){
                    $('#ayuda_soc_cont').removeAttr('hidden');
                    $("#nivel_educativo option").each(function(){
                        if ($(this).text() == "Otros")
                        $(this).attr("selected","selected");
                    });
                });
        </script>
        @else
        <script>
            $(document).ready(function(){
                    $('#ayuda_soc_cont').attr('hidden', 'hidden');
                    
                });
        </script>
        @endif


        <div class="pt-3" id="ayuda_soc_cont" hidden="hidden">
            {!! Form::label('ayudaSoc', 'Especifica cual:') !!}
            {!! Form::text('ayudaSoc', $patient->patientInfo->ayuda_soc, ['class' => 'form-control', 'name' =>
            'ayuda_soc', 'placeholder' => 'Qué otras ayudas?']) !!}
        </div>
    </div>







    <!-- Cert Disc Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cert_disc', 'Certificado Discapacidad:') !!}
        <select class="form-control" id="certificad_disc" name="cert_disc">
            <option {{ $patient->patientInfo->cert_disc == 'Selecciona una opción' ? 'selected':'' }}>Selecciona una
                opción</option>
            <option {{ $patient->patientInfo->cert_disc == 'Si' ? 'selected':'' }}>Si</option>
            <option {{ $patient->patientInfo->cert_disc == 'No' ? 'selected':'' }}>No</option>
        </select>
    </div>



    <!-- Tipo Disc Field -->
    <div class="form-group col-sm-4 discapacidad bg-secondary py-3"" style=" display: none;">
        {!! Form::label('tipo_disc', 'Tipo Discapacidad:') !!}
        <select class="form-control" id="type" name="tipo_disc">
            <option {{ $patient->patientInfo->tipo_disc == 'Intelectual' ? 'selected':'' }}>Intelectual</option>
            <option {{ $patient->patientInfo->tipo_disc == 'Física' ? 'selected':'' }}>Física</option>
            <option {{ $patient->patientInfo->tipo_disc == 'Sensorial' ? 'selected':'' }}>Sensorial</option>
            <option {{ $patient->patientInfo->tipo_disc == 'Psíquica' ? 'selected':'' }}>Psíquica</option>
        </select>
    </div>

    <!-- Grado Disc Field -->
    <div class="form-group col-sm-4 discapacidad bg-secondary py-3"" style=" display: none;">
        {!! Form::label('grado_disc', 'Porcentaje Discapacidad:') !!}
        {!! Form::text('grado_disc', $patient->patientInfo->grado_disc, ['class' => 'form-control']) !!}
    </div>

    <!-- Fecha Res Disc Field -->
    <div class="form-group col-sm-4 discapacidad bg-secondary py-3"" style=" display: none;">
        {!! Form::label('fecha_res_disc', 'Fecha Resolución Grado Discapacidad:') !!}
        {!! Form::date('fecha_res_disc', $patient->patientInfo->fecha_res_disc, ['class' =>
        'form-control','id'=>'fecha_res_disc']) !!}
    </div>





    @section('scripts')
    <script type="text/javascript">
        $('#fecha_res_disc').datetimepicker({
            format: 'dd-mm-yyyy',
            useCurrent: false
        })
    </script>
    @endsection

    <script>
        $('#certificad_disc').on('change', function() {
            $('.discapacidad').css('display', 'none');
            if ($(this).val() === 'Si') {
                $('.discapacidad').css('display', 'block');
            }
        });

        $(document).ready(function() {
            if ($('#certificad_disc').val() == 'Si')
                $('.discapacidad').show(); // Don't forget to surround the div id with quotes
        });
    </script>

    <hr width="100%">
    <div class="col-sm-12 my-3">
        <h4><i class="fas fa-balance-scale"></i>Información legal</h4>
    </div>
    <!-- Sit Legal Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('sit_legal', 'Situación Legal:') !!}
        <select class="form-control" id="type" name="sit_legal">
            <option {{ $patient->patientInfo->sit_legal == '' ? 'selected':'' }}></option>
            <option {{ $patient->patientInfo->sit_legal == 'Autónoma' ? 'selected':'' }}>Autónoma</option>
            <option {{ $patient->patientInfo->sit_legal == 'Tutela' ? 'selected':'' }}>Tutela</option>
            <option {{ $patient->patientInfo->sit_legal == 'Curatela' ? 'selected':'' }}>Curatela</option>
            <option {{ $patient->patientInfo->sit_legal == 'Guarda de Hecho' ? 'selected':'' }}>Guarda de Hecho</option>
        </select>
    </div>

</div>