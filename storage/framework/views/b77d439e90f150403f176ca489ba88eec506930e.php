<ul class="nav nav-tabs bg-light mb-4" id="myTab" role="tablist" style="margin-top:-24px;">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#valoracion_social" role="tab"
            aria-controls="home" aria-selected="true">
            <i class="fas fa-heart"></i> Valoración social
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ley_dependencia" role="tab"
            aria-controls="contact" aria-selected="false"><i class="fas fa-file-medical">
                </i> Información Ley Dependencia
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ayudas_sociosanitarias" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-hands-helping"></i> Otras ayudas sociosanitarias
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#informacion_legal" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-balance-scale"></i> Información legal
        </a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="valoracion_social" role="tabpanel" aria-labelledby="valoracion_social">
        <?php echo $__env->make('patients.edit.social_information.social_valoration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="tab-pane fade" id="ley_dependencia" role="tabpanel" aria-labelledby="ley_dependencia">
        <?php echo $__env->make('patients.edit.social_information.dependency_law', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>

     <div class="tab-pane fade" id="ayudas_sociosanitarias" role="tabpanel" aria-labelledby="ayudas_sociosanitarias">
        <?php echo $__env->make('patients.edit.social_information.other_help_socio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>

     <div class="tab-pane fade" id="informacion_legal" role="tabpanel" aria-labelledby="informacion_legal">
        <?php echo $__env->make('patients.edit.social_information.legal_information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </div>
</div><?php /**PATH /var/www/resources/views/patients/edit/social_info.blade.php ENDPATH**/ ?>