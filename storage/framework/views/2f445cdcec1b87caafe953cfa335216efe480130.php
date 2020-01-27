<!-- Numero Expediente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('numero_expediente', 'Numero Expediente:'); ?>

    <?php echo Form::text('numero_expediente', null, ['class' => 'form-control']); ?>

</div>

<!-- Foto Paciente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('foto_paciente', 'Foto Paciente:'); ?>

    <?php echo Form::text('foto_paciente', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Alta Paciente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_alta_paciente', 'Fecha Alta Paciente:'); ?>

    <?php echo Form::date('fecha_alta_paciente', null, ['class' => 'form-control','id'=>'fecha_alta_paciente']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_alta_paciente').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellido', 'Apellido:'); ?>

    <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('alias', 'Alias:'); ?>

    <?php echo Form::text('alias', null, ['class' => 'form-control']); ?>

</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('genero', 'Genero:'); ?>

    <?php echo Form::select('genero', ['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_nacimiento', 'Fecha Nacimiento:'); ?>

    <?php echo Form::date('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_nacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dni', 'Dni:'); ?>

    <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Civil Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado_civil', 'Estado Civil:'); ?>

    <?php echo Form::select('estado_civil', [' Soltera/o' => ' Soltera/o', ' Viuda/o' => ' Viuda/o', ' Casada/o' => ' Casada/o', ' Divorciada/o' => ' Divorciada/o'], null, ['class' => 'form-control']); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Municipio', 'Municipio:'); ?>

    <?php echo Form::text('Municipio', null, ['class' => 'form-control']); ?>

</div>

<!-- Isla Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Isla', 'Isla:'); ?>

    <?php echo Form::text('Isla', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::number('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Movil Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono_movil', 'Telefono Movil:'); ?>

    <?php echo Form::number('telefono_movil', null, ['class' => 'form-control']); ?>

</div>

<!-- Convive Con Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('convive_con', 'Convive Con:'); ?>

    <?php echo Form::text('convive_con', null, ['class' => 'form-control']); ?>

</div>

<!-- Grado Dependencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('grado_dependencia', 'Grado Dependencia:'); ?>

    <?php echo Form::text('grado_dependencia', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patients.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patients/fields.blade.php ENDPATH**/ ?>