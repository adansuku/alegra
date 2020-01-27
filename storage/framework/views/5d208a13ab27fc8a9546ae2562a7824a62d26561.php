<div class="row mt-3">
    <div class="col-sm-6">
            <!-- Centro Acufade Field -->
            <div class="form-group ">
                <?php echo Form::label('centro_acufade', 'Centro Acufade:'); ?>

                <?php echo Form::text('centro_acufade', null, ['class' => 'form-control']); ?>

            </div>
            <!-- Titulacion Curso Field -->
            <div class="form-group ">
                <?php echo Form::label('titulacion_curso', 'Titulacion | Curso:'); ?>

                <?php echo Form::text('titulacion_curso', null, ['class' => 'form-control']); ?>

            </div>

            <!-- Tutor Academico Field -->
            <div class="form-group ">
                <?php echo Form::label('tutor_academico', 'Tutor Academico:'); ?>

                <?php echo Form::text('tutor_academico', null, ['class' => 'form-control']); ?>

            </div>
    </div>

    <div class="col-sm-6">
            <!-- Tutor Telefono Field -->
            <div class="form-group ">
                <?php echo Form::label('tutor_telefono', 'Teléfono tutor:'); ?>

                <?php echo Form::number('tutor_telefono', null, ['class' => 'form-control']); ?>

            </div>

            <!-- Tutor Email Field -->
            <div class="form-group ">
                <?php echo Form::label('tutor_email', 'Email tutor:'); ?>

                <?php echo Form::email('tutor_email', null, ['class' => 'form-control']); ?>

            </div>

            <!-- Persona Ref Acufade Field -->
            <div class="form-group ">
                <?php echo Form::label('persona_ref_Acufade', 'Persona de referencia en Acufade:'); ?>

                <?php echo Form::text('persona_ref_Acufade', null, ['class' => 'form-control']); ?>

            </div>
    </div>
</div><?php /**PATH /var/www/resources/views/workers/partials/practice.blade.php ENDPATH**/ ?>