<ul class="nav nav-tabs bg-light mb-4" id="myTab" role="tablist" style="margin-top:-24px;">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#situacion_actual" role="tab"
            aria-controls="home" aria-selected="true">
            <i class="fas fa-allergies"></i> Situación Actual De Salud
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#antecedentes_salud" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-file-medical-alt"></i> Antecedentes Salud Importantes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cobertura_sanitaria" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-file-medical"></i> Cobertura Sanitaria
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#doctores_esp" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-user-nurse"></i> Doctores Especialistas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#medicacion_tab" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-pills"></i> Medicación
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#indicadores_salud" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-heartbeat"></i> Indicadores De Salud
        </a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="situacion_actual" role="tabpanel" aria-labelledby="situacion_actual">
        <?php echo $__env->make('patients.edit.sanitary_info.health_actual_situation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="tab-pane fade show active" id="antecedentes_salud" role="tabpanel" aria-labelledby="antecedentes_salud">
        <?php echo $__env->make('patients.edit.sanitary_info.past_health', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="tab-pane fade" id="cobertura_sanitaria" role="tabpanel" aria-labelledby="cobertura_sanitaria">
        <?php echo $__env->make('patients.edit.sanitary_info.sanitary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>

     <div class="tab-pane fade" id="doctores_esp" role="tabpanel" aria-labelledby="doctores_esp">
        <?php echo $__env->make('patients.edit.sanitary_info.doctors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>

     <div class="tab-pane fade" id="medicacion_tab" role="tabpanel" aria-labelledby="medicacion_tab">
        <?php echo $__env->make('patients.edit.sanitary_info.medication', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>

     <div class="tab-pane fade" id="indicadores_salud" role="tabpanel" aria-labelledby="indicadores_salud">
        <?php echo $__env->make('patients.edit.sanitary_info.health_indicator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>
</div>








<?php /**PATH /var/www/resources/views/patients/edit/health_info.blade.php ENDPATH**/ ?>