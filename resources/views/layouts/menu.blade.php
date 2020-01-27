
<!-- Divider -->
<hr class="sidebar-divider">
<li class="{{ Request::is('workers*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="" data-toggle="collapse" data-target="#workers-tab" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user"></i>
        <span>Trabajadores/as</span>
    </a>
    <div id="workers-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Opciones:</h6>
        <a class="collapse-item" href="{!! route('workers.create') !!}"><i class="fas fa-plus"></i> Añadir trabajador/a</a>
        <a class="collapse-item" href="{!! route('workers.index') !!}"><i class="fas fa-list"></i>  Lista trabajadores/as</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<li class="{{ Request::is('patients*') ? 'active' : '' }} nav-item">
<a class="nav-link" href="" data-toggle="collapse" data-target="#patients-tab" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-users"></i>
    <span>Personas Antendidas</span></a>

    <div id="patients-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Opciones:</h6>
        <a class="collapse-item" href="{!! route('patients.create') !!}"><i class="fas fa-plus"></i> Añadir persona</a>
        <a class="collapse-item" href="{!! route('patients.index') !!}"><i class="fas fa-list"></i>  Lista personas</a>
        </div>
    </div>
</li>
{{-- <!-- Divider -->
<hr class="sidebar-divider">
<li class="{{ Request::is('patientServices*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('patientServices.index') !!}"><i class="fas fa-fw fa-table"></i><span>Patient Services</span></a>
</li> --}}

{{-- <!-- Divider -->
<hr class="sidebar-divider">
<li class="{{ Request::is('patientPasts*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('patientPasts.index') !!}"><i class="fas fa-fw fa-table"></i><span>Patient Pasts</span></a>
</li>








<!-- Divider -->
<hr class="sidebar-divider">
<li class="{{ Request::is('patientMedications*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('patientMedications.index') !!}"><i class="fas fa-fw fa-table"></i><span>Patient Medications</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="{{ Request::is('patientServicesDates*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('patientServicesDates.index') !!}"><i class="fas fa-fw fa-table"></i><span>Patient  Services  Dates</span></a>
</li> --}}

<!-- Divider -->
<hr class="sidebar-divider">
<li class="{{ Request::is('workerTimes*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('workerTimes.index') !!}"><i class="fas fa-fw fa-table"></i><span>Worker Times</span></a>
</li>

