@section('scripts')

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

    $("#convive_con").focus(function(){
        if ($('#convive_con').val() == 'Otras') {
            $('#otro_parent').css('display', 'block');
        } else {
            $('#otro_parent').css('display', 'none');
        }
    });

    $('#convive_con').on('change', function() {
        console.log("hello");
        if ($("#convive_con option[value=Otro]:selected").length > 0){
             $('#otro_parent').css('display', 'block');
        }
        else {
            $('#otro_parent').css('display', 'none');
        }
    });
</script>

@endsection
<div class="row">
    <div class="col-sm-12 col-md-4">
        <!-- Foto Paciente Field -->
        <div class="avatar" style="background-image:url({{ asset("storage/$patient->foto_paciente") }})"></div>
    </div>

    <div class="col-sm-12 col-md-8">
        <div class="file-upload">
            <button class="btn-block btn btn-secondary" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Añadir Avatar</button>

            <div class="image-upload-wrap">
                <input class="file-upload-input" name="foto_paciente" type='file' onchange="readURL(this);" accept="image/" />
                <div class="drag-text">
                    <h3>Arrastra una archivo</h3>
                    <p>Recuerda utilizar archivos pequeños</p>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Eliminar <span class="image-title">Uploaded Image</span></button>
                </div>
            </div>
        </div>
        <!--file-upload-->

    </div>
</div>


<div class="row">
    <div class="col-sm-12 col-md-4">

        <!-- Numero expediente -->
        <p>{!! Form::label('numero_expediente', 'Número Expediente:') !!}
            {!! Form::text('numero_expediente', $patient->numero_expediente, ['class' => 'form-control',  'readonly' => 'readonly']) !!}</p>

        <!-- Fecha Alta Paciente Field -->
        <p>{!! Form::label('fecha_alta_paciente', 'Fecha Alta:') !!}
            {!! Form::date('fecha_alta_paciente', $patient->fecha_alta_paciente, ['class' => 'form-control','id'=>'fecha_alta_paciente']) !!}</p>
       
        <!-- Nombre Field -->
        <p>{!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', $patient->nombre, ['class' => 'form-control']) !!}</p>

        <!-- Apellido Field -->
        <p>{!! Form::label('apellido', 'Apellidos:') !!}
            {!! Form::text('apellido', $patient->apellido, ['class' => 'form-control']) !!}</p>

        <!-- Alias Field -->
        <p>{!! Form::label('alias', 'Alias:') !!}
            {!! Form::text('alias', $patient->alias, ['class' => 'form-control']) !!}</p>

        <!-- Genero Field -->
        <p>{!! Form::label('genero', 'Género:') !!}
            <select class="form-control" id="type" name="genero">
                <option value="">Selecciona una opcion</option>
                <option {{ $patient->genero == 'Hombre' ? 'selected':'' }}>Hombre</option>
                <option {{ $patient->genero == 'Mujer' ? 'selected':'' }}>Mujer</option>
                <option {{ $patient->genero == 'Intersexual' ? 'selected':'' }}>Intersexual</option>
            </select>
        </p>

        <!-- Fecha Nacimiento Field -->
        <p>
            {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento:') !!}
            {!! Form::date('fecha_nacimiento', $patient->fecha_nacimiento, ['class' => 'form-control','id'=>'fecha_nacimiento']) !!}
        </p>

         <!-- Dni Field -->
         <p>
            {!! Form::label('dni', 'Dni:') !!}
            {!! Form::text('dni', null, ['class' => 'form-control']) !!}
        </p>

        <!-- Estado Civil Field -->
        <p>{!! Form::label('estado_civil', 'Estado Civil:') !!}
            {{$patient->estado_civil}}
            <select class="form-control" id="type" name="estado_civil">

                <option value="">Selecciona una opcion</option>
                <option {{ $patient->estado_civil == 'Soltera/o' ? 'selected':'' }}>Soltera/o</option>
                <option {{ $patient->estado_civil == 'Viuda/o' ? 'selected':'' }}> Viuda/o</option>
                <option {{ $patient->estado_civil == 'Casada/o' ? 'selected':'' }}>Casada/o</option>
                <option {{ $patient->estado_civil == 'Divorciada/o' ? 'selected':'' }}>Divorciada/o</option>
            </select></p>

    </div>

    <div class="col-sm-12 col-md-4">        

        <!-- Isla Field -->
        <p>{!! Form::label('Isla', 'Isla:') !!}
            <select class="form-control" id="isla" name="Isla">
                <option value="">Selecciona una opcion</option>
                <option id="Tenerife" {{ $patient->Isla == 'Tenerife' ? 'selected':'' }}>Tenerife</option>
                <option {{ $patient->Isla == 'Gran Canaria' ? 'selected':'' }}>Gran Canaria</option>
                <option {{ $patient->Isla == 'La Graciosa' ? 'selected':'' }}>La Graciosa</option>
                <option {{ $patient->Isla == 'La Gomera' ? 'selected':'' }}>La Gomera</option>
                <option {{ $patient->Isla == 'La Palma' ? 'selected':'' }}>La Palma</option>
                <option {{ $patient->Isla == 'El Hierro' ? 'selected':'' }}>El Hierro</option>
                <option {{ $patient->Isla == 'Fuerteventura' ? 'selected':'' }}>Fuerteventura</option>
                <option {{ $patient->Isla == 'Lanzarote' ? 'selected':'' }}>Lanzarote</option>
            </select>
        </p>


        <!-- Direccion Field -->
        <p>
            {!! Form::label('direccion', 'Dirección (calle, avenida, plaza…)') !!}
            {!! Form::text('direccion', $patient->direccion, ['class' => 'form-control']) !!}
        </p>

        <p>
            {!! Form::label('num_direcion', 'Número') !!}
            {!! Form::text('num_direcion', $patient->num_direcion, ['class' => 'form-control']) !!}
        </p>

        <p>
            {!! Form::label('bloq_piso', 'Bloque, Piso y/o puerta') !!}
            {!! Form::text('bloq_piso', $patient->bloq_piso, ['class' => 'form-control']) !!}
        </p>

         <!--codigfo postal-->
         <p>
            {!! Form::label('codigo_postal', 'Código postal:') !!}
            {!! Form::number(' codigo_postal', $patient-> codigo_postal, ['class' => 'form-control']) !!}
        </p>

        <!-- Municipio Field -->
        <p>{!! Form::label('Municipio', 'Municipio:') !!}

            <select class="select2" id="municipio" name="Municipio">
                <option value="">Selecciona un municipio</option>
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
                <option {{ $patient->Municipio == 'La Matanza de Acentejo' ? 'selected':'' }}>La Matanza de Acentejo</option>
                <option {{ $patient->Municipio == 'La Orotava' ? 'selected':'' }}>La Orotava</option>
                <option {{ $patient->Municipio == 'La Victoria de Acentejo' ? 'selected':'' }}>La Victoria de Acentejo</option>
                <option {{ $patient->Municipio == 'Los Realejos' ? 'selected':'' }}>Los Realejos</option>
                <option {{ $patient->Municipio == 'Los Silos' ? 'selected':'' }}>Los Silos</option>
                <option {{ $patient->Municipio == 'Puerto de la Cruz' ? 'selected':'' }}>Puerto de la Cruz</option>
                <option {{ $patient->Municipio == 'San Cristóbal de la Laguna' ? 'selected':'' }}>San Cristóbal de la Laguna</option>
                <option {{ $patient->Municipio == 'San Juan de la Rambla' ? 'selected':'' }}>San Juan de la Rambla</option>
                <option {{ $patient->Municipio == 'San Miguel de Abona' ? 'selected':'' }}>San Miguel de Abona</option>
                <option {{ $patient->Municipio == 'Santa Cruz de Tenerife' ? 'selected':'' }}>Santa Cruz de Tenerife</option>
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
                <option {{ $patient->Municipio == 'San Sebastián de la Gomera' ? 'selected':'' }}>San Sebastián de la Gomera</option>
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
                <option {{ $patient->Municipio == 'Fuencaliente de la Palma' ? 'selected':'' }}>Fuencaliente de la Palma</option>
                <option {{ $patient->Municipio == 'Garafía' ? 'selected':'' }}>Garafía</option>
                <option {{ $patient->Municipio == 'Los Llanos de Aridane' ? 'selected':'' }}>Los Llanos de Aridane</option>
                <option {{ $patient->Municipio == 'El Paso' ? 'selected':'' }}>El Paso</option>
                <option {{ $patient->Municipio == 'Puntagorda' ? 'selected':'' }}>Puntagorda</option>
                <option {{ $patient->Municipio == 'Puntallana' ? 'selected':'' }}>Puntallana</option>
                <option {{ $patient->Municipio == 'San Andrés y Sauces' ? 'selected':'' }}>San Andrés y Sauces</option>
                <option {{ $patient->Municipio == 'Santa Cruz de la Palma' ? 'selected':'' }}>Santa Cruz de la Palma</option>
                <option {{ $patient->Municipio == 'Tazacorte' ? 'selected':'' }}>Tazacorte</option>
                <option {{ $patient->Municipio == 'Tijarafe y Villa de Mazo' ? 'selected':'' }}>Tijarafe y Villa de Mazo</option>

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
                <option {{ $patient->Municipio == 'La Aldea de San Nicolás' ? 'selected':'' }}>La Aldea de San Nicolás</option>
                <option {{ $patient->Municipio == 'Artenara' ? 'selected':'' }}>Artenara</option>
                <option {{ $patient->Municipio == 'Arucas' ? 'selected':'' }}>Arucas</option>
                <option {{ $patient->Municipio == 'Firgas' ? 'selected':'' }}>Firgas</option>
                <option {{ $patient->Municipio == 'Gáldar' ? 'selected':'' }}>Gáldar</option>
                <option {{ $patient->Municipio == 'Ingenio' ? 'selected':'' }}>Ingenio</option>
                <option {{ $patient->Municipio == 'Mogán' ? 'selected':'' }}>Mogán</option>
                <option {{ $patient->Municipio == 'Moya' ? 'selected':'' }}>Moya</option>
                <option {{ $patient->Municipio == 'Las Palmas de Gran Canaria' ? 'selected':'' }}>Las Palmas de Gran Canaria</option>
                <option {{ $patient->Municipio == 'San Bartolomé de Tirajana' ? 'selected':'' }}>San Bartolomé de Tirajana</option>
                <option {{ $patient->Municipio == 'Santa Brígida' ? 'selected':'' }}>Santa Brígida</option>
                <option {{ $patient->Municipio == 'Santa Lucía de Tirajana' ? 'selected':'' }}>Santa Lucía de Tirajana</option>
                <option {{ $patient->Municipio == 'Santa María de Guía de Gran Canaria' ? 'selected':'' }}>Santa María de Guía de Gran Canaria</option>
                <option {{ $patient->Municipio == 'Tejeda Telde' ? 'selected':'' }}>Tejeda Telde</option>
                <option {{ $patient->Municipio == 'Teror' ? 'selected':'' }}>Teror</option>
                <option {{ $patient->Municipio == 'Valleseco' ? 'selected':'' }}>Valleseco</option>
                <option {{ $patient->Municipio == 'Valsequillo de Gran Canaria' ? 'selected':'' }}>Valsequillo de Gran Canaria</option>
                <option {{ $patient->Municipio == 'Vega de San Mateo.' ? 'selected':'' }}>Vega de San Mateo.</option>
            </select>
        </p>

        <p>
            {!! Form::label('obs_direcion', 'Observaciones dirección') !!}
            {!! Form::textArea('obs_direcion', $patient->obs_direcion, ['class' => 'form-control']) !!}
            </p>
    </div>

    <div class="col-sm-12 col-md-4">
       
       
        

            
        <!-- Telefono Field -->
        <p>{!! Form::label('telefono', 'Teléfono Fijo (de su residencia):') !!}
            {!! Form::number('telefono', $patient->telefono, ['class' => 'form-control']) !!}</p>


        <!-- Telefono Movil Field -->
        <p>{!! Form::label('teléfono_movil', 'Teléfono móvil:') !!}
            {!! Form::number('telefono_movil', $patient->telefono_movil, ['class' => 'form-control']) !!}</p>


        <!-- Convive Con Field -->
        <p>{!! Form::label('convive_con', 'Convive con (nombre/s/parentesco/s):') !!}

            <select class="form-control select2" id="convive_con" name="convive_con[]" multiple="multiple">
                <option {{ in_array('Abuela/o', $patient->convive_con) ? 'selected':'' }}>Abuela/o</option>
                <option {{ in_array('Padre', $patient->convive_con) ? 'selected':'' }}>Padre</option>
                <option {{ in_array('Madre', $patient->convive_con) ? 'selected':'' }}>Madre</option>
                <option {{ in_array('Hija/o', $patient->convive_con) ? 'selected':'' }}>Hija/o</option>
                <option {{ in_array('Hermana/o', $patient->convive_con) ? 'selected':'' }}>Hermana/o</option>
                <option {{ in_array('Nuera', $patient->convive_con) ? 'selected':'' }}> Nuera</option>
                <option {{ in_array('Yerno', $patient->convive_con) ? 'selected':'' }}>Yerno</option>
                <option {{ in_array('Cuidador/a profesional' , $patient->convive_con) ? 'selected':'' }}>Cuidador/a profesional</option>
                <option {{ in_array('Nieta/o', $patient->convive_con) ? 'selected':'' }}>Nieta/o</option>
                <option {{ in_array('Sobrina/o', $patient->convive_con) ? 'selected':'' }}>Sobrina/o</option>
                <option {{ in_array('Pareja', $patient->convive_con) ? 'selected':'' }}>Pareja</option>
                <option {{ in_array('Sola', $patient->convive_con) ? 'selected':'' }}>Sola</option>
                <option {{ in_array('Otros', $patient->convive_con) ? 'selected':'' }}>Otros</option>
                @if ($patient->convive_con == null)
                $patient->convive_con[0] = "vacio"
                @endif
            </select>
        </p>

        <!--otro parentesco-->
        
            <div class="bg-secondary p-3" id="otro_parent">   
                {!! Form::label('otros_parentesco', 'Otro (especificar):') !!}
                {!! Form::text('otros_parentesco', $patient->otros_parentesco, ['class' => 'form-control']) !!}
            </div>

            



            <!--  Dependencia Field -->

            <p>{!! Form::label('worker_id', 'Trabajadora social gestora del caso:') !!}
                <select class="form-control" id="worker_id" name="worker_id" required>
                    @foreach($workers as $worker)
                        @if ($worker->cat_profesional == 'Trabajadora Social')
                            <option {{ $patient->worker_id == $worker->id ? 'selected':'' }} value="{{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
                        @endif        
                    @endforeach
                </select>
            </p>
    </div>

</div>