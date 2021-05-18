

<div class="row" style="border-bottom: 1px solid #f2f2f2; margin-bottom: 20px;">
    <div class="form-group col-sm-2">
        <strong>Día</strong>
    </div>
    <div class="form-group col-sm-6">
        <strong>Horario</strong>
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        <input type="checkbox" value="Lunes" name="dias[]" class="day_check add_days_imput checkbox_big " data-ref=".inicio_lunes" 
        style="" /> Lunes 
    </div>
    
    <div class="form-group col-sm-4">
        <select class="form-control inicio_lunes"  name="horario_centro[]" required disabled>
            <option value="" selected disabled hidden>Elegir horario</option>
            <option value="9:00 - 13:00">9:00 - 13:00</option>
            <option value="9:00 - 17:00">9:00 - 17:00</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        <input type="checkbox" value="Martes" name="dias[]" class="day_check add_days_imput checkbox_big" data-ref=".inicio_martes" /> Martes 
    </div>
    

    <div class="form-group col-sm-4">
        <select class="form-control inicio_martes"  name="horario_centro[]" required disabled>
            <option value="" selected disabled hidden>Elegir horario</option>
            <option value="9:00 - 13:00">9:00 - 13:00</option>
            <option value="9:00 - 17:00">9:00 - 17:00</option>
        </select>
    </div>

</div>
<div class="row">
    <div class="form-group col-sm-2">
        <input type="checkbox" value="Miercoles" name="dias[]" class="day_check add_days_imput checkbox_big " data-ref=".inicio_miercoles" /> Miercoles 
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control inicio_miercoles"  name="horario_centro[]" required disabled>
            <option value="" selected disabled hidden>Elegir horario</option>
            <option value="9:00 - 13:00">9:00 - 13:00</option>
            <option value="9:00 - 17:00">9:00 - 17:00</option>
        </select>
    </div>


</div>
<div class="row">
    <div class="form-group col-sm-2">
        <input type="checkbox" value="Jueves" name="dias[]" class="day_check add_days_imput checkbox_big" data-ref=".inicio_jueves" /> Jueves 
    </div>

    <div class="form-group col-sm-4">
        <select class="form-control inicio_jueves"  name="horario_centro[]" required disabled>
            <option value="" selected disabled hidden>Elegir horario</option>
            <option value="9:00 - 13:00">9:00 - 13:00</option>
            <option value="9:00 - 17:00">9:00 - 17:00</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-2">
        <input type="checkbox" value="Viernes" name="dias[]" class="day_check add_days_imput checkbox_big" data-ref=".inicio_viernes" /> Viernes 
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control inicio_viernes"  name="horario_centro[]" required disabled>
            <option value="" selected disabled hidden>Elegir horario</option>
            <option value="9:00 - 13:00">9:00 - 13:00</option>
            <option value="9:00 - 17:00">9:00 - 17:00</option>
        </select>
    </div>

</div>

<div class="form-group col-sm-12">
    <input id="btnSubmitCentroDay" class="btn btn-primary float-right" type="button" value="Guardar">
</div>