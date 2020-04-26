<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('nom_servicio', 'Nombre del servicio:') !!}
        {!! Form::select('nom_servicio', [
        null => '',
        'CALO' => 'CALO',
        'CEA' => 'CEA',
        'SPAP' => 'SPAP',
        'UEC' => 'UEC',
        'CD' => 'CD',
        'SPAPD' => 'SPAPD'
        ], null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    {{-- @php 
    $name = array($patient->patientServices);
    var_dump(in_array('es_primario',$name));
    var_dump($patient->patientServices[1]['es_primario']);
    var_dump($patient->patientServices[2]['es_primario']);
    @endphp
     --}}
    {{-- @if ($patient->patientServices) --}}
        <div class="form-group col-sm-6">
        {!! Form::label('es_primario', '¿Es el servicio primario?') !!}
        {!! Form::select('es_primario', [
        null => '',
        'es_primario' => 'Si',
        'no_es_primario' => 'No',
        ], null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    {{-- //@endif --}}

    <div class="form-group col-sm-6">
        {!! Form::label('service_worker_id', 'Trabajadora social responsable del caso:') !!}
        <select class="form-control" id="service_worker_id" name="service_worker_id" required>
            @foreach($workers as $worker)
            @if (in_array($worker->id,$patient->worker_id))
            <option value="{{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
            @endif
            @endforeach
        </select>
    </div>

   

    <!-- Municipio Serv Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('municipio_serv', 'Municipio :') !!}
        <select class="form-control select2" id="municipio_serv" name="municipio_serv" required>
            <option value="">Selecciona una opción</option>
            <option value='' disabled>Tenerife</option>
            <option value='Adeje'>Adeje</option>
            <option value='Arafo'>Arafo</option>
            <option value='Arico'>Arico</option>
            <option value='Arona'>Arona</option>
            <option value='Buenavista del Norte'>Buenavista del Norte</option>
            <option value='Candelaria'>Candelaria</option>
            <option value='El Rosario'>El Rosario</option>
            <option value='El Sauzal'>El Sauzal</option>
            <option value='El Tanque'>El Tanque</option>
            <option value='Fasnia'>Fasnia</option>
            <option value='Garachico'>Garachico</option>
            <option value='Granadilla de Abona'>Granadilla de Abona</option>
            <option value='Güímar'>Güímar</option>
            <option value='Guía de Isora'>Guía de Isora</option>
            <option value='Icod de los Vinos'>Icod de los Vinos</option>
            <option value=' La Guancha'> La Guancha</option>
            <option value='La Matanza de Acentejo'>La Matanza de Acentejo</option>
            <option value='La Orotava'>La Orotava</option>
            <option value='La Victoria de Acentejo'>La Victoria de Acentejo</option>
            <option value='Los Realejos'>Los Realejos</option>
            <option value='Los Silos'>Los Silos</option>
            <option value='Puerto de la Cruz'>Puerto de la Cruz</option>
            <option value='San Cristóbal de la Laguna'>San Cristóbal de la Laguna</option>
            <option value='San Juan de la Rambla'>San Juan de la Rambla</option>
            <option value='San Miguel de Abona'>San Miguel de Abona</option>
            <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>
            <option value='Santa Úrsula'>Santa Úrsula</option>
            <option value='Santiago del Teide'>Santiago del Teide</option>
            <option value='Tacoronte'>Tacoronte</option>
            <option value='Tegueste'>Tegueste</option>
            <option value='Vilaflor'>Vilaflor</option>
            <option value='' disabled>La Gomera</option>
            <option value='Agulo'>Agulo</option>
            <option value='Alajeró'>Alajeró</option>
            <option value='Hermigua'>Hermigua</option>
            <option value='San Sebastián de la Gomera'>San Sebastián de la Gomera</option>
            <option value='Valle Gran Rey'>Valle Gran Rey</option>
            <option value='Vallehermoso'>Vallehermoso</option>

            <option value='' disabled>El Hierro</option>
            <option value='Frontera'>Frontera</option>
            <option value='El Pinar de El Hierro'>El Pinar de El Hierro</option>
            <option value='Valverde'>Valverde</option>

            <option value='' disabled>La Palma</option>
            <option value='Barlovento'>Barlovento</option>
            <option value='Breña Alta'>Breña Alta</option>
            <option value='Breña Baja'>Breña Baja</option>
            <option value='Fuencaliente de la Palma'>Fuencaliente de la Palma</option>
            <option value='Garafía'>Garafía</option>
            <option value='Los Llanos de Aridane'>Los Llanos de Aridane</option>
            <option value='El Paso'>El Paso</option>
            <option value='Puntagorda'>Puntagorda</option>
            <option value='Puntallana'>Puntallana</option>
            <option value='San Andrés y Sauces'>San Andrés y Sauces</option>
            <option value='Santa Cruz de la Palma'>Santa Cruz de la Palma</option>
            <option value='Tazacorte'>Tazacorte</option>
            <option value='Tijarafe y Villa de Mazo'>Tijarafe y Villa de Mazo</option>

            <option value='' disabled>Lanzarote</option>
            <option value='Arrecife'>Arrecife</option>
            <option value='Haría'>Haría</option>
            <option value='San Bartolomé'>San Bartolomé</option>
            <option value='Teguise'>Teguise</option>
            <option value='Tías'>Tías</option>
            <option value='Tinajo y Yaiza'>Tinajo y Yaiza</option>

            <option value='' disabled>Fuerteventura</option>
            <option value='Antigua'>Antigua</option>
            <option value='Betancuria'>Betancuria</option>
            <option value='La Oliva'>La Oliva</option>
            <option value='Pájara'>Pájara</option>
            <option value='Puerto del Rosario'>Puerto del Rosario</option>
            <option value='Tuineje'>Tuineje</option>

            <option value='' disabled>Gran Canaria</option>
            <option value='Agaete'>Agaete</option>
            <option value='Agüimes'>Agüimes</option>
            <option value='La Aldea de San Nicolás'>La Aldea de San Nicolás</option>
            <option value='Artenara'>Artenara</option>
            <option value='Arucas'>Arucas</option>
            <option value='Firgas'>Firgas</option>
            <option value='Gáldar'>Gáldar</option>
            <option value='Ingenio'>Ingenio</option>
            <option value='Mogán'>Mogán</option>
            <option value='Moya'>Moya</option>
            <option value='Las Palmas de Gran Canaria'>Las Palmas de Gran Canaria</option>
            <option value='San Bartolomé de Tirajana'>San Bartolomé de Tirajana</option>
            <option value='Santa Brígida'>Santa Brígida</option>
            <option value='Santa Lucía de Tirajana'>Santa Lucía de Tirajana</option>
            <option value='Santa María de Guía de Gran Canaria'>Santa María de Guía de Gran Canaria</option>
            <option value='Tejeda Telde'>Tejeda Telde</option>
            <option value='Teror'>Teror</option>
            <option value='Valleseco'>Valleseco</option>
            <option value='Valsequillo de Gran Canaria'>Valsequillo de Gran Canaria</option>
            <option value='Vega de San Mateo.'>Vega de San Mateo.</option>
        </select>
    </div>

    <!-- Tipo Plaza Serv Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tipo_plaza_serv', 'Tipo de Plaza (Señalar varias):') !!}
        {!! Form::select('tipo_plaza_serv[]', [
        'Privada' => 'Privada',
        'Publica' => 'Pública',
        'Subvencionada' => 'Subvencionada'], null, [
        'class' => 'select2 form-control',
        'id' => 'tipo_plaza',
        'required' => 'required',
        'multiple' => 'multiple']) !!}
    </div>


    <script>
        $('#tipo_plaza').change(function() {
	var vals = $(this).val()    
    $("#plaza_privada").toggle(vals.indexOf("Privada")>-1);
    $("#Subvencionada").toggle(vals.indexOf("Subvencionada")>-1);
})
    </script>

    <!-- Fecha Form Serv Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_form_serv', 'Fecha Formalizacion de Servicio:') !!}
        {!! Form::date('fecha_form_serv', null, ['class' => 'form-control','id'=>'fecha_form_serv','required' =>
        'required']) !!}
    </div>

    <!-- Plaza Privada Serv Field -->
    <div class="form-group col-sm-6 bg-secondary py-3" id="plaza_privada" style="display: none;">
        {!! Form::label('plaza_privada_serv', 'Plaza Privada:') !!}
        {!! Form::select('plaza_privada_serv[]', [
        'Socixs' => 'Socixs',
        'No Socixs' => 'No Socixs',
        'PEVS' => 'PEVS'],
        null, [
        'class' => 'select2 form-control',
        'multiple' => 'multiple'
        ]) !!}
    </div>

    <!-- Plaza Sub Serv Field -->
    <div class="form-group col-sm-6 bg-secondary py-3" id="Subvencionada" style="display: none;">
        {!! Form::label('plaza_sub_serv', 'Plaza Subvencionada:') !!}
        {!! Form::text('plaza_sub_serv', null, ['class' => 'form-control',]) !!}
    </div>



    @section('scripts')
    <script type="text/javascript">
        $('#fecha_form_serv').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
    @endsection
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>