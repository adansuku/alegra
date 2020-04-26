

<div class="row">
    <!-- Med Centro Field -->
    <div class="form-group col-sm-6">
        <p>
            {!! Form::label('med_centro', 'Medicación en Centro:') !!}
            {!! Form::select('med_centro', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control']) !!}
        </p>
    </div>

    <div class="col-sm-6 text-right">
        <button type="button" class=" btn btn-secondary my-3 float-right " data-toggle="modal"
            data-target="#medication_modal"> Añadir medicación <i class="fas fa-file-upload"></i></button>
    </div>
    <div class="col-sm-12">
        @include('patients.show.show_medication')
    </div>
</div>