<div class="pt-4 px-3">
    <h5 class="display-4 text-danger"><i class="fas fa-briefcase-medical"></i> Contacto para urgencias</h5> 
</div>

<div class="row py-3">
    <!-- Urg Nom Ape Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('urg_nom_ape', 'Nombre y apelidos:') !!}
        {!! Form::text('urg_nom_ape', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Urg Parentesco Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('urg_parentesco', 'Parentesco:') !!}
        {!! Form::text('urg_parentesco', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Urg Telefono Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('urg_telefono', 'Telefono para urgencias') !!}
        {!! Form::text('urg_telefono', null, ['class' => 'form-control']) !!}
    </div>
</div>