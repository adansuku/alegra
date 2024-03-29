<div class="row">
    <!-- Nom Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_servicio', 'Nombre del Servicio:') !!}
    <select class="form-control" id="nom_servicio" name="nom_servicio" required>
        <option value="" selected disabled hidden>Elegir un servicio</option>
        <option value="SPAP">SPAPD</option>
        <option value="UEC">UEC</option>
        <option value="CD">CD</option>
        <option value="SPAPD">SPAPD</option>
    </select>
</div>

<!-- Fecha Inicio Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio_serv', 'Fecha de formalización:') !!}
    {!! Form::date('fecha_inicio_serv', null, ['class' => 'form-control','id'=>'fecha_inicio_serv', 'required' => 'required']) !!}
</div>

@section('scripts')
<script type="text/javascript">
    $('#fecha_inicio_serv').datetimepicker({
        format: 'dd-mm-YYYY',
        useCurrent: false
    })
</script>
@endsection

<!-- Lugar Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_serv', 'Municipio :') !!}
    <select class="select2 form-control " id="lugar_serv" name="lugar_serv" required>
        <option value="">Selecciona un municipio</option>

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

<!-- Dias Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dias_serv', 'Dias del servicio:') !!}
    {!! Form::select('dias_serv[]', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles',
    'Jueves' => 'Jueves', 'Viernes' => 'Viernes'], null, ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => 'required']) !!}

</div>

<!-- Horario Serv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario_serv', 'Horario:') !!}
    <select class="form-control" id="horario_serv" name="horario_serv" required>
        <option value="" selected disabled hidden>Elegir un servicio</option>
        <option value="9:00 - 13:00">9:00 - 13:00</option>
        <option value="9:00 - 17:00">9:00 - 17:00</option>
        <option value="17:00 - 20:00">17:00 - 20:00</option>
    </select>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Crear servicio', ['class' => 'btn btn-primary']) !!}
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
</div>

</div>