 <!-- Cat Documentos Field -->
 <div class="form-group col-sm-12">
    {!! Form::label('cat_documentos', 'Cat Documentos:') !!}
    {!! Form::select('cat_documentos', [
        ''=>'',
        'Contrato Trabajo' => 'Contrato Trabajo', 
        'Contrato Mercantil Autónomo' => 'Contrato Mercantil Autónomo', 
        'ContratoFGULL' => 'ContratoFGULL', 'Modelo 145' => 'Modelo 145', 
        'Declaración Jurada No Tener Delitos Penales' => 'Declaración Jurada No Tener Delitos Penales', 
        'DNI' => 'DNI', 'Tarjeta Sanitaria' => 'Tarjeta Sanitaria', 
        'Título/Certificado Principal' => 'Título/Certificado Principal', 
        'Cursos Complementarios' => 'Cursos Complementarios', 
        'Habiltación Sanitaria' => 'Habiltación Sanitaria', 'Colegiación' => 'Colegiación', 
        'Nª Cuenta' => 'Nª Cuenta', 
        'Informe Vida Laboral' => 'Informe Vida Laboral', 
        'Anexo-Modificación de contrato' => 'Anexo-Modificación de contrato', 
        'LOPD y Cesión de imagen' => 'LOPD y Cesión de imagen', 
        'Alta a la SS' => 'Alta a la SS', 
        'Nóminas' => 'Nóminas', 
        'Carné Manipulador de Alimentos' => 'Carné Manipulador de Alimentos', 
        'Currículum' => 'Currículum', 
        'DARDE' => 'DARDE'], null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('nombre_documento', 'Nombre para el documento:') !!}
    {!! Form::text('nombre_documento', null, ['class' => 'form-control', 'required' => 'required']) !!}
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
    {!! Form::submit('Subir documento', ['class' => 'btn btn-primary float-right']) !!}
    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
</div>
