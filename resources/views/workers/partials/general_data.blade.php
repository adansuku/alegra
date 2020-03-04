<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>

<div class="row align-items-center h-100 no-gutters">
    <div class="col-sm-3 text-center mt-3">
        <!-- <img class="rounded-circle" src="/storage/{{ $worker->avatar }}"  
        width="90%"/> -->

        <div class="avatar" style="background-image:url({{ asset("storage/$worker->avatar") }})">
        </div>

    </div>
    <div class="col-sm-9">
        <div class="file-upload">
            <button class="btn-block btn btn-secondary" type="button"
                onclick="$('.file-upload-input').trigger( 'click' )">Añadir Avatar</button>

            <div class="image-upload-wrap">
                <input class="file-upload-input" name="avatar" type='file' onchange="readURL(this);" accept="image/" />
                <div class="drag-text">
                    <h3>Arrastra un archivo</h3>
                    <p>Recuerda utilizar archivos pequeños</p>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Eliminar <span
                            class="image-title">Uploaded Image</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-6">

        <!-- Nombre Field -->
        <div class="form-group">
            <strong>{!! Form::label('nombre', 'Nombre:') !!}</strong>
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>


        <!-- Apellido Field -->
        <div class="form-group ">
            <strong>{!! Form::label('apellido', 'Apellidos:') !!}</strong>
            {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Fecha Nacimiento Field -->
        <div class="form-group ">
            <strong>{!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}</strong>
            {!! Form::date('fecha_nacimiento', $worker->fecha_nacimiento, ['class' =>
            'form-control','id'=>'fecha_nacimiento']) !!}
        </div>

        @section('scripts')
        <script type="text/javascript">
            $('#fecha_nacimiento').datetimepicker({
                format: 'dd-mm-YYYY',
                useCurrent: false
            })
        </script>
        @endsection

        <!-- Dni Field -->
        <div class="form-group ">
            <strong>{!! Form::label('dni', 'Dni:') !!}</strong>
            {!! Form::text('dni', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Direccion Field -->
        <div class="form-group ">
            <strong>{!! Form::label('direccion', 'Direccion:') !!}</strong>
            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <!-- Email Corporativo Field -->
        <div class="form-group ">
            <strong>{!! Form::label('email_personal', 'Email personal ') !!}</strong> (este no es el email para iniciar
            sesión)
            {!! Form::email('email_personal', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Telefono Field -->
        <div class="form-group ">
            <strong>{!! Form::label('telefono', 'Telefono:') !!}</strong>
            {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Telefono Movil Field -->
        <div class="form-group ">
            <strong>{!! Form::label('telefono_movil', 'Telefono Movil:')!!} </strong>
            {!! Form::number('telefono_movil', null, ['class' => 'form-control']) !!}
        </div>


        <!-- Cat Profesional Field -->
        <div class="form-group ">
            <strong>{!! Form::label('cat_profesional', 'Categoría Profesional:') !!}</strong>
            <select class="form-control" id="cat_profesional" name="cat_profesional">
                <option value="" selected disabled hidden>Selecciona una opción</option>
                <option {{ $worker->cat_profesional == 'Psicólogo/a' ? 'selected':'' }}>Psicólogo/a</option>
                <option {{ $worker->cat_profesional == 'Fisioterapeuta' ? 'selected':'' }}>Fisioterapeuta</option>
                <option {{ $worker->cat_profesional == 'Terapeuta Ocupacional' ? 'selected':'' }}>Terapeuta Ocupacional
                </option>
                <option {{ $worker->cat_profesional == 'Trabajadora Social' ? 'selected':'' }}>Trabajadora Social
                </option>
                <option {{ $worker->cat_profesional == 'Técnico en Integración Social' ? 'selected':'' }}>Técnico en
                    Integración Social</option>
                <option {{ $worker->cat_profesional == 'Gerocultor/a' ? 'selected':'' }}>Gerocultor/a</option>
                <option {{ $worker->cat_profesional == 'Auxiliar Administrativo' ? 'selected':'' }}>Auxiliar
                    Administrativo</option>
                <option {{ $worker->cat_profesional == 'Administrativo' ? 'selected':'' }}>Administrativo</option>
                <option {{ $worker->cat_profesional == 'Otros' ? 'selected':'' }}>Otros</option>
            </select>
        </div>

        <!-- Titulacion Field -->
        <div class="form-group ">
            <strong>{!! Form::label('titulacion', 'Titulacion:') !!}</strong>
            <select class="form-control" id="titulacion" name="titulacion">
                <option value="" selected disabled hidden>Selecciona una opción</option>
                <option {{ $worker->titulacion == 'Grado/Licenciado/a Psicología' ? 'selected':'' }}>Grado/Licenciado/a
                    Psicología</option>
                <option {{ $worker->titulacion == 'Grado/Diplomado/a Fisioterapia' ? 'selected':'' }}>Grado/Diplomado/a
                    Fisioterapia</option>
                <option {{ $worker->titulacion == 'Grado/Licenciado Pedagogía' ? 'selected':'' }}>Grado/Licenciado
                    Pedagogía</option>
                <option {{ $worker->titulacion == 'Grado/Diplomado/a Trabajo Social' ? 'selected':'' }}>
                    Grado/Diplomado/a Trabajo Social</option>
                <option {{ $worker->titulacion == 'Grado/Diplomatura Educación Social' ? 'selected':'' }}>
                    Grado/Diplomatura Educación Social</option>
                <option {{ $worker->titulacion == 'Grado/Licenciado Logopedia' ? 'selected':'' }}>Grado/Licenciado
                    Logopedia</option>
                <option {{ $worker->titulacion == 'Grado/Diplomatura Terapia Ocupacional' ? 'selected':'' }}>
                    Grado/Diplomatura Terapia Ocupacional</option>
                <option {{ $worker->titulacion == 'Técnico Auxiliar Administrativo' ? 'selected':'' }}>Técnico Auxiliar
                    Administrativo</option>
                <option {{ $worker->titulacion == 'Técnico Superior Administración' ? 'selected':'' }}>Técnico Superior
                    Administración</option>
                <option {{ $worker->titulacion == 'Técnico en Atención a Personas Dependientes' ? 'selected':'' }}>
                    Técnico en Atención a Personas Dependientes</option>
                <option {{ $worker->titulacion == 'Auxiliar de Enfermería' ? 'selected':'' }}>Auxiliar de Enfermería
                </option>
                <option {{ $worker->titulacion == 'Técnico en Integración Social' ? 'selected':'' }}>Técnico en
                    Integración Social</option>
                <option
                    {{ $worker->titulacion == 'Certificado de Profesionalidad de Atención a personas dependientes en instituciones sociales' ? 'selected':'' }}>
                    Certificado de Profesionalidad de Atención a personas dependientes en instituciones sociales
                </option>
                <option
                    {{ $worker->titulacion == 'Certificado de profesionalidad de atención a personas depnendientes en domicilio' ? 'selected':'' }}>
                    Certificado de profesionalidad de atención a personas depnendientes en domicilio</option>
                <option {{ $worker->titulacion == 'Otros' ? 'selected':'' }}>Otros</option>
            </select>
        </div>
    </div>
</div>



<!-- <img src="{{ asset("storage/$worker->avatar") }}" alt=""> -->