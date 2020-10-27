<!-- Divider -->
@if(in_array(Auth::user()->role_id,[1,3]))
<hr class="sidebar-divider">
<li class="{{ Request::is('workers*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="" data-toggle="collapse" data-target="#workers-tab" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-user"></i>
        <span>Trabajadores/as</span>
    </a>
    <div id="workers-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            @if(Auth::user()->role_id == 1)
            <a class="collapse-item" href="{!! route('workers.create') !!}"><i class="fas fa-plus"></i> Añadir
                trabajador/a</a>
            @endif
            <a class="collapse-item" href="{!! route('workers.index') !!}"><i class="fas fa-list"></i> Lista
                trabajadores/as</a>
        </div>
    </div>
</li>
@endif

<!-- Divider -->

<hr class="sidebar-divider">

<li class="{{ Request::is('patients*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="" data-toggle="collapse" data-target="#patients-tab" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-users"></i>
        <span>Personas Antendidas</span></a>

    <div id="patients-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            @if(Auth::user()->role_id == 1)
            <a class="collapse-item" href="{!! route('patients.create') !!}"><i class="fas fa-plus"></i> Añadir
                persona</a>
            @endif
            <a class="collapse-item" href="{!! route('patients.index') !!}"><i class="fas fa-list"></i> Lista
                personas</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">
<li class="{{ Request::is('workerSessions*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('workerSessions.index') !!}"><i class="fas fa-fw fa-table"></i><span>Mi área
            personal</span></a>
</li>
@if(Auth::user()->role_id == 2)
<hr class="sidebar-divider">
<li class="{{ Request::is('workerSessions*') ? 'active' : '' }} nav-item">
    <a class="nav-link" href="{!! route('worker.patients') !!}"><i class="fas fa-fw fa-users"></i><span>Mis personas atendidas</span></a>
</li>
@endif