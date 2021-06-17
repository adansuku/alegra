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
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#reconocimiento_social" role="tab"
            aria-controls="contact" aria-selected="false">
            <i class="fas fa-award"></i> Reconocimientos Sociales
        </a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="valoracion_social" role="tabpanel" aria-labelledby="valoracion_social">
        @include('patients.edit.social_information.social_valoration')
    </div>

    <div class="tab-pane fade" id="ley_dependencia" role="tabpanel" aria-labelledby="ley_dependencia">
        @include('patients.edit.social_information.dependency_law')
     </div>

     <div class="tab-pane fade" id="ayudas_sociosanitarias" role="tabpanel" aria-labelledby="ayudas_sociosanitarias">
        @include('patients.edit.social_information.other_help_socio')
     </div>

     <div class="tab-pane fade" id="informacion_legal" role="tabpanel" aria-labelledby="informacion_legal">
        @include('patients.edit.social_information.legal_information')
     </div>
     <div class="tab-pane fade" id="reconocimiento_social" role="tabpanel" aria-labelledby="informacion_legal">
        @include('patients.edit.social_information.reconocimiento_social')
     </div>
</div>