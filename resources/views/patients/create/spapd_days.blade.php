<div class="row">
    <div class="form-group col-sm-6" style="text-align:center;">
        Dias
    </div>
    <div class="form-group col-sm-6" style="text-align:center;">
        Inicio
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <input type="checkbox" value="Lunes" name="dias[]" class="day_check" data-ref="#inicio_lunes" /> Lunes 
    </div>
    <div class="form-group col-sm-6">

        <div class="input-group date time_picker"
            data-date-format="HH:mm"
            data-date-useseconds="false"
            data-date-pickDate="false">

            <input type="text" class="form-control" id="inicio_lunes" name="Lunes" disabled />   
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
        </div>

       
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <input type="checkbox" value="Martes" name="dias[]" class="day_check" data-ref="#inicio_martes" /> Martes 
    </div>
    <div class="form-group col-sm-6">

        <div class="input-group date time_picker"
            data-date-format="HH:mm"
            data-date-useseconds="false"
            data-date-pickDate="false">

            <input type="text" class="form-control time_picker" id="inicio_martes" name="Martes" disabled />   
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
        </div>

        
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <input type="checkbox" value="Miercoles" name="dias[]" class="day_check" data-ref="#inicio_miercoles" /> Miercoles 
    </div>
    <div class="form-group col-sm-6">

        <div class="input-group date time_picker"
            data-date-format="HH:mm"
            data-date-useseconds="false"
            data-date-pickDate="false">

            <input type="text" class="form-control time_picker" id="inicio_miercoles" name="Miercoles" disabled />   
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
        </div>

        
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <input type="checkbox" value="Jueves" name="dias[]" class="day_check" data-ref="#inicio_jueves" /> Jueves 
    </div>
    <div class="form-group col-sm-6">

        <div class="input-group date time_picker"
            data-date-format="HH:mm"
            data-date-useseconds="false"
            data-date-pickDate="false">

            <input type="text" class="form-control time_picker" id="inicio_jueves" name="Jueves" disabled />   
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
        </div>


        
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <input type="checkbox" value="Viernes" name="dias[]" class="day_check" data-ref="#inicio_viernes" /> Viernes 
    </div>
    <div class="form-group col-sm-6">

        <div class="input-group date time_picker"
            data-date-format="HH:mm"
            data-date-useseconds="false"
            data-date-pickDate="false">

            <input type="text" class="form-control time_picker" id="inicio_viernes" name="Viernes" disabled />   
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
        </div>

        
    </div>
</div>

<div class="form-group col-sm-12">
    <input id="btnSubmitSpadpDay" class="btn btn-primary float-right" type="button" value="Guardar">
</div>