<div class="row">
    <div class="col-sm-4">
        <div class="avatar" style="background-image:url({{asset("storage/$patient->foto_paciente") }})"></div>
    </div>
    <div class="col-sm-8">

        <!-- Nombre Field -->
        <small>Nombre:</small>
        <h6><strong>{!! $patient->nombre !!}</strong></h6>

        <!-- Apellido Field -->
        <small>Apellidos:</small>
        <h6><strong>{!! $patient->apellido !!}</strong></h6>

        <!-- Fecha Alta Paciente Field -->
        <small>Fecha Alta:</small>
        <h6><strong>{{ date('d / m / Y', strtotime($patient->fecha_alta_paciente)) }}</strong></h6>

        <!-- Numero Expediente Field -->
        <small>Numero Expediente:</small>
        <h6><strong>{!! $patient->numero_expediente !!}</strong></h6>

        <!-- Alias Field -->
        <small>Alias:</small>
        <h6><strong>{!! $patient->alias !!}</strong></h6>

        {{-- <small>Trabajadora social GESTORA CASO:</small>
        <h6><strong>{{$worker->nombre}} {{$worker->apellido}}</strong></h6> --}}



        {{-- <table class="table dark" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Pia en Vigor</th>
                    <th>Fecha máx. Elaboración y Entrega</th>
                </tr>
            </thead>

            @foreach($patient->patientPia->slice(0, 2) as $patientPia)
            <tr>
                <td>
                    {!! $patientPia->tipo_pia !!}
                </td>

                <td>
                    {{ date('d/m/Y', strtotime($patientPia->fecha_limite)) }}
                </td>
            </tr>
            @endforeach
        </table>  --}}



    </div>
</div>