<div class="row">
    <!-- Cat Documentos Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cat_documentos', 'Tipo de Documento:') !!}
    {!! Form::select('cat_documentos', [
        '' => '',
        'Documentación Personal' => 'Documentación Personal',
        'Documentos de Admision' => 'Documentos de Admisión',
        'Contratos' => 'Contratos',
        'Documentación Sanitaria' => 'Documentación Sanitaria',
        'Ley de Dependencia' => 'Ley de Dependencia',
        'Documentación económina' => 'Documentación económina',
        'Autorizaciones y Solicitudes Generales' => 'Autorizaciones y Solicitudes Generales',
        'Informes y Comunicaciones Desde Acufade' => 'Informes y Comunicaciones Desde Acufade',
        'Otras' => 'Otras'
        ], null, [
            'class' => 'form-control', 
            'required' => 'required', 
            'onchange' => 'addDocumentName(this)',
            'id' => 'cat_documentos'
            ]) !!}
</div>


<!--
<script>

    function addDocumentName(idCampo){
        var selected = idCampo.value;

        switch (selected) {
            case 'Documentación Personal':
                console.log(selected);
            break;

            case 'Documentos de Admision':
                console.log(selected);
            break;
                
            case 'Contratos':
            console.log(selected);
            break;

            case 'Ley de Dependencia':
            console.log(selected);
            break;

            case 'Documentación Sanitaria':
            console.log(selected);
            break;

            case 'Documentación económina':
            console.log(selected);
            break;

            case 'Autorizaciones y Solicitudes Generales':
            console.log(selected);
            break;

            case 'Informes y Comunicaciones Desde Acufade':
            console.log(selected);
            break;

            case 'Valoraciones iniciales y de seguimiento':
            console.log(selected);
            break;
         
            default:
                console.log('Lo lamentamos, por el momento no disponemos de ' + expr + '.');
        }


    }

</script>
-->


 <script>
    $('#cat_documentos').on('change', function() {
        
        if ($(this).val() === 'Documentación Personal') {
            $('#documentacion_personal').css('display', 'block');
            $('#documentacion_personal').attr('name', 'nombre_doc' );
        }else {
            $('#documentacion_personal').removeAttr('name', 'nombre_doc' );
            $('#documentacion_personal').css('display', 'none');
        }

        if ($(this).val() === 'Documentos de Admision') {
            $('#documentos_admision').css('display', 'block');
            $('#documentos_admision').attr('name', 'nombre_doc' );
        }else {
            $('#documentos_admision').removeAttr('name', 'nombre_doc' );
            $('#documentos_admision').css('display', 'none');
        }

        if ($(this).val() === 'Contratos') {
            $('#contratos').css('display', 'block');
            $('#contratos').attr('name', 'nombre_doc' );
        }else {
            $('#contratos').removeAttr('name', 'nombre_doc' );
            $('#contratos').css('display', 'none');
        }

        if ($(this).val() === 'Documentación Sanitaria') {
            $('#documentos_sanitarios').css('display', 'block');
            $('#documentos_sanitarios').attr('name', 'nombre_doc' );
        }else {
            $('#documentos_sanitarios').removeAttr('name', 'nombre_doc' );
            $('#documentos_sanitarios').css('display', 'none');
        }

        if ($(this).val() === 'Ley de Dependencia') {
            $('#dependencia').css('display', 'block');
            $('#dependencia').attr('name', 'nombre_doc' );
        }else {
            $('#dependencia').removeAttr('name', 'nombre_doc' );
            $('#dependencia').css('display', 'none');
        }

        $('#economia').css('display', 'none');
        if ($(this).val() === 'Documentación económina') {
            $('#economia').css('display', 'block');
            $('#economia').attr('name', 'nombre_doc' );
        }else {
            $('#economia').removeAttr('name', 'nombre_doc' );
            $('#economia').css('display', 'none');
        }

        $('#autorizaciones').css('display', 'none');
        if ($(this).val() === 'Autorizaciones y Solicitudes Generales') {
            $('#autorizaciones').css('display', 'block');
            $('#autorizaciones').attr('name', 'nombre_doc' );
        }else {
            $('#autorizaciones').removeAttr('name', 'nombre_doc' );
            $('#autorizaciones').css('display', 'none');
        }

        $('#informes').css('display', 'none');
        if ($(this).val() === 'Informes y Comunicaciones Desde Acufade') {
            $('#informes').css('display', 'block');
            $('#informes').attr('name', 'nombre_doc' );
        }else {
            $('#informes').removeAttr('name', 'nombre_doc' );
            $('#informes').css('display', 'none');
        }

        $('#valoraciones').css('display', 'none');
        if ($(this).val() === 'Valoraciones iniciales y de seguimiento') {
            $('#valoraciones').css('display', 'block');
            $('#valoraciones').attr('name', 'nombre_doc' );
        }else {
            $('#valoraciones').removeAttr('name', 'nombre_doc' );
            $('#valoraciones').css('display', 'none');
        }

        $('#valoraciones').css('display', 'none');
        if ($(this).val() === 'Valoraciones iniciales y de seguimiento') {
            $('#valoraciones').css('display', 'block');
            $('#valoraciones').attr('name', 'nombre_doc' );
        }else {
            $('#valoraciones').removeAttr('name', 'nombre_doc' );
            $('#valoraciones').css('display', 'none');
        }


  
        if ($(this).val() === 'Otras') {
            $('#otros_documentos').css('display', 'block');
            $('#otros_documentos').attr('name', 'nombre_doc' );
        } else {
            $('#otros_documentos').removeAttr('name', 'nombre_doc' );
            $('#otros_documentos').css('display', 'none');
        }
    });

</script> 



<div class="form-group col-sm-4">
    {!! Form::label('nombre_doc', 'Nombre de Documento:') !!}

    {!! Form::select('', [
        'DNI usuario/a' => 'DNI usuario/a',
        'DNI familiar' => 'DNI familiar',
        'Documento de incapacidad' => 'Documento de incapacidad',
        'Declaración de guardador de hecho' => 'Declaración de guardador de hecho',
        'Declaración de régimen de tutela' => 'Declaración de régimen de tutela',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control',
    'id' => 'documentacion_personal',
    'style' => 'display: none'
    ]) !!}



    {!! Form::select('', [
        'Ficha de datos básicos' => 'Ficha de datos básicos',
        'Ficha de acogida' => 'Ficha de acogida',
        'Solicitud de plaza' => 'Solicitud de plaza',
        'LOPD usuarios/as, cesión de imagen y otros' => 'LOPD usuarios/as, cesión de imagen y otros',
        'Ficha de registro de socios/as' => 'Ficha de registro de socios/as',
        'Autorización de cesión de datos a terceros/as' => 'Autorización de cesión de datos a terceros/as',
        'Solicitud para la gestión y traslado de la documentación personal' => 'Solicitud para la gestión y traslado de la documentación personal',
        'Autorización para la aplicación de costes adicionales' => 'Autorización para la aplicación de costes adicionales',
        'Compartiendo transporte en ACUFADE' => 'Compartiendo transporte en ACUFADE',
        'Historia de vida' => 'Historia de vida',
        'Solicitud de admisión de plaza pública' => 'Solicitud de admisión de plaza pública',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control', 
    'id' => 'documentos_admision',
    'style' => 'display: none'
    ]) !!}



    {!! Form::select('', [
        'Contrato de admisión del servicio de promoción de la autonomía personal en domicilio' => 'Contrato de admisión del servicio de promoción de la autonomía personal en domicilio',
        'Contrato de admisión de servicios en centro' => 'Contrato de admisión de servicios en centro',
        'Anexo I: cambio de condiciones de contrato SPAPD' => 'Anexo I: cambio de condiciones de contrato SPAPD',
        'Anexo II: cambio de condiciones de contrato en servicios centro' => 'Anexo II: cambio de condiciones de contrato en servicios centro',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control', 
    'id' => 'contratos',
    'style' => 'display: none'
    ]) !!}


    {!! Form::select('', [
        'Informes médico/a de cabecera' => 'Informes médico/a de cabecera',
        'Informes médico/a especialista' => 'Informes médico/a especialista',
        'Receta electrónica/tratamiento' => 'Receta electrónica/tratamiento',
        'Tarjeta sanitaria (pública/privada)' => 'Tarjeta sanitaria (pública/privada)',
        'Solicitud de actualización de documentación de salud' => 'Solicitud de actualización de documentación de salud',
        'Solicitud de administración de medicamentos' => 'Solicitud de administración de medicamentos',
        'Certificado de discapacidad' => 'Certificado de discapacidad',
        'Otros' => 'Otros'
       
    ], null, ['class' => 'form-control', 
    'id' => 'documentos_sanitarios',
    'style' => 'display: none'
    ]) !!}


    {{-- {!! Form::select('', [
        'Ficha de Acogida' => 'Ficha de Acogida',
        'Registros Valoración Sociofamiliar' => 'Registros Valoración Sociofamiliar',
        'Registros Valoración Cognitiva' => 'Registros Valoración Cognitiva',
        'Registros Valoración Física' => 'Registros Valoración Física',
        'Registros Valoración Funcional' => 'Registros Valoración Funcional',
        'Registros Valoración Emocional' => 'Registros Valoración Emocional',
        'Otros' => 'Otros'
       
    ], null, ['class' => 'form-control', 
    'id' => 'valoraciones',
    'style' => 'display: none'
    ]) !!} --}}



    {!! Form::select('', [
        'Solicitud de grado' => 'Solicitud de grado',
        'Carta de resolución de grado' => 'Carta de resolución de grado',
        'Carta de resolución PIA' => 'Carta de resolución PIA',
        'Solicitud de revisión de grado' => 'Solicitud de revisión de grado',
        'Comunicación genérica' => 'Comunicación genérica',
        'Comunicación de variaciones y/o aportaciones de documentación' => 'Comunicación de variaciones y/o aportaciones de documentación',
        'Comunicación de incidencias' => 'Comunicación de incidencias',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control', 'required' => 'required', 
    'id' => 'dependencia',
    'style' => 'display: none'
    ]) !!}



    {!! Form::select('', [
        'Aviso de suspensión del servicio por impago dirigido al usuarios/as' => 'Aviso de suspensión del servicio por impago dirigido al usuarios/as',
        'Aviso de suspensión de prestación del servicio por impago dirigido a la dirección general de dependencia' => 'Aviso de suspensión de prestación del servicio por impago dirigido a la dirección general de dependencia',
        'Cesión de derechos de cobro' => 'Cesión de derechos de cobro',
        'Orden de domiciliación bancaria (solo socios/as)' => 'Orden de domiciliación bancaria (solo socios/as)',
        'Iban bancario ' => 'Iban bancario ',
        'Factura' => 'Factura',
        'Otros' => 'Otros'

    ], null, ['class' => 'form-control', 
    'id' => 'economia',
    'style' => 'display: none'
    ]) !!}



    {!! Form::select('', [
        'Autorización de actividad externa puntual SPAPD' => 'Autorización de actividad externa puntual SPAPD',
        'Autorización salidas grupales en centro' => 'Autorización salidas grupales en centro',
        'Autorización general para actividades externas de SPAPD' => 'Autorización general para actividades externas de SPAPD',
        'Solicitud de suspensión temporal del servicio de Centro de Día' => 'Solicitud de suspensión temporal del servicio de Centro de Día',
        'Solicitud y propuesta de baja' => 'Solicitud y propuesta de baja',
        'Solicitud de cambio de condiciones de plaza' => 'Solicitud de cambio de condiciones de plaza',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control', 
    'id' => 'autorizaciones',
    'style' => 'display: none'
    ]) !!}



    {!! Form::select('', [
        'Compromiso de prestación del servicio' => 'Compromiso de prestación del servicio',
        'Informe de alta de prestación de servicio' => 'Informe de alta de prestación de servicio',
        'Informe de baja de prestación de servicio' => 'Informe de baja de prestación de servicio',
        'Comunicación de ingreso plaza pública' => 'Comunicación de ingreso plaza pública',
        'Comunicación de baja plaza pública' => 'Comunicación de baja plaza pública',
        'Informes de salud a petición' => 'Informes de salud a petición',
        'Registro de control de sesiones del SPAPD' => 'Registro de control de sesiones del SPAPD',
        'Otros' => 'Otros',
       
    ], null, ['class' => 'form-control', 
    'id' => 'informes',
    'style' => 'display: none'
    ]) !!}


    <!-- Observaciones Doctor Field -->
     {!! Form::text('', null, ['class' => 'form-control', 'id' => 'otros_documentos']) !!}
    


</div>

<div class="form-group col-sm-4">
    {!! Form::label('fecha_documento', 'Fecha del documento:') !!}
    {!! Form::date('fecha_documento', null, ['class' => 'form-control','id'=>'fecha_documento']) !!}
</div>
@section('scripts')
<script type="text/javascript">
    $('#fecha_documento').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
</script>
@endsection


<!-- Url Field -->
<div class="form-group col-sm-12">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Subir archivo</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01"
            aria-describedby="inputGroupFileAddon01" name="url" required>
            <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo</label>
        </div>

        <script>
            $('#inputGroupFile01').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
    </div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Subir documento', ['class' => 'btn btn-primary float-right']) !!}
    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
</div>
</div>