<div class="row">
    <!-- Cat Documentos Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cat_documentos', 'Tipo de Documento:'); ?>

    <?php echo Form::select('cat_documentos', [
        '' => '',
        'Documentación Personal' => 'Documentación Personal',
        'Documentos de Admision' => 'Documentos de Admisión',
        'Contratos' => 'Contratos',
        'Documentación Sanitaria' => 'Documentación Sanitaria',
        'Ley de Dependencia' => 'Ley de Dependencia',
        'Documentación económina' => 'Documentación económina',
        'Autorizaciones y Solicitudes Generales' => 'Autorizaciones y Solicitudes Generales',
        'Informes y Comunicaciones Desde Acufade' => 'Informes y Comunicaciones Desde Acufade',
        'Otras' => 'Otras',
        ], null, ['class' => 'form-control', 'required' => 'required', 'id' => 'cat_documentos']); ?>

</div>

<script>
    $('#cat_documentos').on('change', function() {
        $('#documentacion_personal').css('display', 'none');
        if ($(this).val() === 'Documentación Personal') {
            $('#documentacion_personal').css('display', 'block');
        }

        $('#documentos_admision').css('display', 'none');
        if ($(this).val() === 'Documentos de Admision') {
            $('#documentos_admision').css('display', 'block');
        }

        $('#contratos').css('display', 'none');
        if ($(this).val() === 'Contratos') {
            $('#contratos').css('display', 'block');
        }

        $('#documentos_sanitarios').css('display', 'none');
        if ($(this).val() === 'Documentación Sanitaria') {
            $('#documentos_sanitarios').css('display', 'block');
        }

        $('#dependencia').css('display', 'none');
        if ($(this).val() === 'Ley de Dependencia') {
            $('#dependencia').css('display', 'block');
        }

        $('#economia').css('display', 'none');
        if ($(this).val() === 'Documentación económina') {
            $('#economia').css('display', 'block');
        }

        $('#autorizaciones').css('display', 'none');
        if ($(this).val() === 'Autorizaciones y Solicitudes Generales') {
            $('#autorizaciones').css('display', 'block');
        }

        $('#informes').css('display', 'none');
        if ($(this).val() === 'Informes y Comunicaciones Desde Acufade') {
            $('#informes').css('display', 'block');
        }

        $('#otros').css('display', 'none');
        if ($(this).val() === 'Otras') {
            $('#otros').css('display', 'block');
        }



    });
</script>



<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_doc', 'Nombre de Documento:'); ?>


    <?php echo Form::select('nombre_doc', [
        'DNI usuario/a' => 'DNI usuario/a',
        'DNI familiar' => 'DNI familiar',
        'Documento de incapacidad' => 'Documento de incapacidad',
        'Declaración de guardador de hecho' => 'Declaración de guardador de hecho',
        'Declaración de régimen de tutela' => 'Declaración de régimen de tutela',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control',
    'id' => 'documentacion_personal',
    'style' => 'display: none'
    ]); ?>




    <?php echo Form::select('nombre_doc', [
        'Ficha de recogida de datos básicos' => 'Ficha de recogida de datos básicos',
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
    ]); ?>




    <?php echo Form::select('nombre_doc', [
        'Contrato de admisión del servicio de promoción de la autonomía personal en domicilio' => 'Contrato de admisión del servicio de promoción de la autonomía personal en domicilio',
        'Contrato de admisión de servicios en centro' => 'Contrato de admisión de servicios en centro',
        'Anexo I: cambio de condiciones de contrato SPAPD' => 'Anexo I: cambio de condiciones de contrato SPAPD',
        'Anexo II: cambio de condiciones de contrato en servicios centro' => 'Anexo II: cambio de condiciones de contrato en servicios centro',
        'Otros' => 'Otros'
    ], null, ['class' => 'form-control', 
    'id' => 'contratos',
    'style' => 'display: none'
    ]); ?>



    <?php echo Form::select('nombre_doc', [
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
    ]); ?>




    <?php echo Form::select('nombre_doc', [
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
    ]); ?>




    <?php echo Form::select('nombre_doc', [
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
    ]); ?>




    <?php echo Form::select('nombre_doc', [
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
    ]); ?>




    <?php echo Form::select('nombre_doc', [
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
    ]); ?>



    

</div>



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
    </div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Subir documento', ['class' => 'btn btn-primary float-right']); ?>

    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
</div>
</div><?php /**PATH /var/www/resources/views/patients/create/documents.blade.php ENDPATH**/ ?>