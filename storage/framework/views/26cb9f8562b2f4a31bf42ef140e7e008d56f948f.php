<!-- Divider -->
<hr class="sidebar-divider">
<li class="<?php echo e(Request::is('workers*') ? 'active' : ''); ?> nav-item">
    <a class="nav-link" href="" data-toggle="collapse" data-target="#workers-tab" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-user"></i>
        <span>Trabajadores/as</span>
    </a>
    <div id="workers-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="<?php echo route('workers.create'); ?>"><i class="fas fa-plus"></i> Añadir
                trabajador/a</a>
            <a class="collapse-item" href="<?php echo route('workers.index'); ?>"><i class="fas fa-list"></i> Lista
                trabajadores/as</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<li class="<?php echo e(Request::is('patients*') ? 'active' : ''); ?> nav-item">
    <a class="nav-link" href="" data-toggle="collapse" data-target="#patients-tab" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-users"></i>
        <span>Personas Antendidas</span></a>

    <div id="patients-tab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="<?php echo route('patients.create'); ?>"><i class="fas fa-plus"></i> Añadir
                persona</a>
            <a class="collapse-item" href="<?php echo route('patients.index'); ?>"><i class="fas fa-list"></i> Lista
                personas</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">
<<<<<<< Updated upstream
<li class="<?php echo e(Request::is('workerSessions*') ? 'active' : ''); ?> nav-item">
    <a class="nav-link" href="<?php echo route('workerSessions.index'); ?>"><i class="fas fa-fw fa-table"></i><span>Mi área
            personal</span></a>
</li><?php /**PATH /var/www/resources/views/layouts/menu.blade.php ENDPATH**/ ?>
=======
<li class="<?php echo e(Request::is('workerTimes*') ? 'active' : ''); ?> nav-item">
    <a class="nav-link" href="<?php echo route('workerTimes.index'); ?>"><i class="fas fa-fw fa-table"></i><span>Worker Times</span></a>
</li>
<hr class="sidebar-divider">
<li class="<?php echo e(Request::is('workerSessions*') ? 'active' : ''); ?> nav-item">
    <a class="nav-link" href="<?php echo route('workerSessions.index'); ?>"><i class="fas fa-fw fa-table"></i><span>Mi área personal</span></a>
</li>
<?php /**PATH /var/www/resources/views/layouts/menu.blade.php ENDPATH**/ ?>
>>>>>>> Stashed changes
