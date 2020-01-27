<div class="row p-3">

    <!-- Regimen Sanitario Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('diagnostico', 'Diagnóstico:') !!}
        {!! Form::select('diagnostico', [
        'Envejecimiento Activo' => 'Envejecimiento Activo',
        'Demencias' => 'Demencias',
        'Neurológico' => 'Neurológico',
        'Diversidad Física' => 'Diversidad Física',
        'Diversidad Intelectual' => 'Diversidad Intelectual',
        'Diversidad Psíquico-Afectivo' => 'Diversidad Psíquico-Afectivo',
        'Cardiopatías' => 'Cardiopatías',
        'Prob. Respiratorios' => 'Prob. Respiratorios'],
        null, ['class' => 'form-control', 'onchange' => 'diagCon(this.value, this.id);']) !!}
    </div>


    <!-- Regimen Sanitario Neurologico Field -->
    <div class="form-group col-sm-12 flaggy" id="neuro_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'Parkinson' => 'Parkinson',
        'Ictus' => 'Ictus',
        'Traumatismo' => 'Traumatismo',
        'Craneo-Encefálico' => 'Craneo-Encefálico',
        'Deterioro cognitivo' => 'Deterioro cognitivo',
        'Epilepsia' => 'Epilepsia',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Regimen Sanitario Demencia Field -->
    <div class="form-group col-sm-12 flaggy" id="demencia_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'Alzheimer' => 'Alzheimer',
        'Mixta' => 'Mixta',
        'Vascular' => 'Vascular',
        'Frontal' => 'Frontal',
        'Fronto-temporal' => 'Fronto-temporal',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Regimen Sanitario Diversidad Fisica Field -->
    <div class="form-group col-sm-12 flaggy" id="diver_fisica_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'Discapacidad física' => 'Discapacidad física',
        'Paraplejia' => 'Paraplejia',
        'Hemiplejia' => 'Hemiplejia',
        'Tetraplejia' => 'Tetraplejia',
        'Distrofia muscular' => 'Distrofia muscular',
        'Amputación' => 'Amputación',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Regimen Sanitario Diversidad Intelectual Field -->
    <div class="form-group col-sm-12 flaggy" id="diversidad_intel_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'Retraso mental' => 'Retraso mental',
        'Discapacidad intelectual' => 'Discapacidad intelectual',
        'Restraso del desarrollo' => 'Restraso del desarrollo',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Regimen Sanitario Diversidad Psíquico-Afectivo Field -->
    <div class="form-group col-sm-12 flaggy" id="diver_psiqAfect_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'Depresión' => 'Depresión',
        'Trastorno psicótico' => 'Trastorno psicótico',
        'Esquizofrenia' => 'Esquizofrenia',
        'Trastorno bipolar' => 'Trastorno bipolar',
        'Trastorno paranoide' => 'Trastorno paranoide',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Regimen Sanitario Cardiopatías Field -->
    <div class="form-group col-sm-12 flaggy" id="cardio_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'Fibrilación auricular' => 'Fibrilación auricular',
        'Insuficiencia venosa' => 'Insuficiencia venosa',
        'Isquemia crónica' => 'Isquemia crónica',
        'Insuficiencia cardiaca' => 'Insuficiencia cardiaca',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Regimen Sanitario Prob. Respiratorios Field -->
    <div class="form-group col-sm-12 flaggy" id="prob_resp_content" hidden="hidden">
        {!! Form::label('diagnos_concreto', 'Diagnóstico Concreto:') !!}
        {!! Form::select('diagnos_concreto', [
        'EPOC' => 'EPOC',
        'Insuficiencia respiratoria' => 'Insuficiencia respiratoria',
        'Bronquitis crónica' => 'Bronquitis crónica',
        'Otras' => 'Otras'],
        null, ['class' => 'form-control select2 flagg',
        'multiple' => 'multiple'])
        !!}
    </div>

    <!-- Otro -->
    <div class="form-group col-sm-12" id="diagnos_concreto_cont" hidden="hidden">
        {!! Form::label('diagnos_concreto_otro', 'Si no esta en la lista, especifica cual:') !!}
        {!! Form::text('diagnos_concreto_otro', null, ['class' => 'form-control', 'name' => 'diagnos_concreto[]']) !!}
    </div>


</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Añadir diagnóstico', ['class' => 'btn btn-primary float-right']) !!}
    <a href="{!! route('patientDiagnostics.index') !!}" class="btn btn-default float-right"
        data-dismiss='modal'>Cancelar</a>
</div>


<script>
    function diagCon(val, id) {
        switch (true) {
            case val == 'Demencias':
                    $("#demencia_content").removeAttr('hidden').show();
                    $("#diagnos_concreto").addClass('select2');
                    console.log("este");
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#neuro_content").attr('hidden', 'hidden').hide();
                    $("#diver_fisica_content").attr('hidden', 'hidden').hide();
                    $("#diversidad_intel_content").attr('hidden', 'hidden').hide();
                    $("#diver_psiqAfect_content").attr('hidden', 'hidden').hide();
                    $("#cardio_content").attr('hidden', 'hidden').hide();
                    $("#prob_resp_content").attr('hidden', 'hidden').hide();
                    const element = document.querySelector('#demencia_content');
                    element.addEventListener('change', (e) => {
                        if(e.target.value != 'Otras') {
                            $("#diagnos_concreto_otro").removeAttr('name');
                            $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                        } else {
                            $("#diagnos_concreto_cont").removeAttr('hidden').show();
                            $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                        }
                    });
            break;
            case val == 'Neurológico':
                    $("#neuro_content").removeAttr('hidden').show();
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#demencia_content").attr('hidden', 'hidden').hide();
                    $("#diver_fisica_content").attr('hidden', 'hidden').hide();
                    $("#diversidad_intel_content").attr('hidden', 'hidden').hide();
                    $("#diver_psiqAfect_content").attr('hidden', 'hidden').hide();
                    $("#cardio_content").attr('hidden', 'hidden').hide();
                    $("#prob_resp_content").attr('hidden', 'hidden').hide();
                    const element2 = document.querySelector('#neuro_content');
                    element2.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                });
            break;
            case val == 'Diversidad Física':
                    $("#diver_fisica_content").removeAttr('hidden').show();
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#demencia_content").attr('hidden', 'hidden').hide();
                    $("#neuro_content").attr('hidden', 'hidden').hide();
                    $("#diversidad_intel_content").attr('hidden', 'hidden').hide();
                    $("#diver_psiqAfect_content").attr('hidden', 'hidden').hide();
                    $("#cardio_content").attr('hidden', 'hidden').hide();
                    $("#prob_resp_content").attr('hidden', 'hidden').hide();
                    const element3 = document.querySelector('#diver_fisica_content');
                    element3.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Diversidad Intelectual':
                    $("#diversidad_intel_content").removeAttr('hidden').show();
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#demencia_content").attr('hidden', 'hidden').hide();
                    $("#neuro_content").attr('hidden', 'hidden').hide();
                    $("#diver_fisica_content").attr('hidden', 'hidden').hide();
                    $("#diver_psiqAfect_content").attr('hidden', 'hidden').hide();
                    $("#cardio_content").attr('hidden', 'hidden').hide();
                    $("#prob_resp_content").attr('hidden', 'hidden').hide();
                    const element4 = document.querySelector('#diversidad_intel_content');
                    element4.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Diversidad Psíquico-Afectivo':
                    $("#diver_psiqAfect_content").removeAttr('hidden').show();
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#demencia_content").attr('hidden', 'hidden').hide();
                    $("#neuro_content").attr('hidden', 'hidden').hide();
                    $("#diver_fisica_content").attr('hidden', 'hidden').hide();
                    $("#diversidad_intel_content").attr('hidden', 'hidden').hide();
                    $("#cardio_content").attr('hidden', 'hidden').hide();
                    $("#prob_resp_content").attr('hidden', 'hidden').hide();
                    const element5 = document.querySelector('#diver_psiqAfect_content');
                    element5.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Cardiopatías':
                    $("#cardio_content").removeAttr('hidden').show();
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#demencia_content").attr('hidden', 'hidden').hide();
                    $("#neuro_content").attr('hidden', 'hidden').hide();
                    $("#diver_fisica_content").attr('hidden', 'hidden').hide();
                    $("#diversidad_intel_content").attr('hidden', 'hidden').hide();
                    $("#diver_psiqAfect_content").attr('hidden', 'hidden').hide();
                    $("#prob_resp_content").attr('hidden', 'hidden').hide();
                    const element6 = document.querySelector('#cardio_content');
                    element6.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            case val == 'Prob. Respiratorios':
                    $("#prob_resp_content").removeAttr('hidden').show();
                    // $("#diagnos_concreto_cont").removeAttr('hidden').show();
                    $("#demencia_content").attr('hidden', 'hidden').hide();
                    $("#neuro_content").attr('hidden', 'hidden').hide();
                    $("#diver_fisica_content").attr('hidden', 'hidden').hide();
                    $("#diversidad_intel_content").attr('hidden', 'hidden').hide();
                    $("#diver_psiqAfect_content").attr('hidden', 'hidden').hide();
                    $("#cardio_content").attr('hidden', 'hidden').hide();
                    const element7 = document.querySelector('#prob_resp_content');
                    element7.addEventListener('change', (e) => {
                    if(e.target.value != 'Otras') {
                        $("#diagnos_concreto_otro").removeAttr('name');
                        $("#diagnos_concreto_cont").attr('hidden', 'hidden').hide();
                    } else {
                        $("#diagnos_concreto_cont").removeAttr('hidden').show();
                        $("#diagnos_concreto_otro").attr('name', 'diagnos_concreto[]');
                    }
                    });
            break;
            default:
                $("#diagnostico").val('Envejecimiento Activo');
            break;
    }
}

</script>
