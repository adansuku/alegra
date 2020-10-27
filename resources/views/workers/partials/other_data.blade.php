<div class="row mt-3">
    <div class="col-sm-6">
        <div class="form-group ">
            {!! Form::label('alergias', 'Alergias:') !!}
            {!! Form::text('alergias', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Otras Alergias Field -->
        <div class="form-group ">
            {!! Form::label('otras_alergias', 'Otras Alergias:') !!}
            {!! Form::text('otras_alergias', null, ['class' => 'form-control']) !!}
        </div>
    </div> 

    <div class="col-sm-6 col-sm-6 pt-3 pl-5">
        <p>¿Autoriza el usuario a tomarle fotos, videos... y publicarlos?</p>

        {!! Form::checkbox('cesion_imagen', null, ['class' => 'form-control', 'checked']) !!}
            <!-- <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="cesion_imagen">
                    <label class="custom-control-label" for="customSwitch1" >Cesión de imagen</label>
                </div>
            </div> -->
        </div>    
</div>