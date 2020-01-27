<!-- N Expediente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('n_expediente', 'N Expediente:'); ?>

    <?php echo Form::text('n_expediente', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Alta Acufade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_alta_acufade', 'Fecha Alta Acufade:'); ?>

    <?php echo Form::date('fecha_alta_acufade', null, ['class' => 'form-control','id'=>'fecha_alta_acufade']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_alta_acufade').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('foto', 'Foto:'); ?>

    <?php echo Form::file('foto'); ?>

</div>
<div class="clearfix"></div>

<!-- Nombre Completo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_completo', 'Nombre Completo:'); ?>

    <?php echo Form::text('nombre_completo', null, ['class' => 'form-control']); ?>

</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('alias', 'Alias:'); ?>

    <?php echo Form::text('alias', null, ['class' => 'form-control']); ?>

</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('genero', 'Genero:'); ?>

    <?php echo Form::select('genero', [' Hombre' => ' Hombre', ' Mujer' => ' Mujer'], null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Naci Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_naci', 'Fecha Naci:'); ?>

    <?php echo Form::date('fecha_naci', null, ['class' => 'form-control','id'=>'fecha_naci']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_naci').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('edad', 'Edad:'); ?>

    <?php echo Form::text('edad', null, ['class' => 'form-control']); ?>

</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dni', 'Dni:'); ?>

    <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

</div>

<!-- Est Civil Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('est_civil', 'Est Civil:'); ?>

    <?php echo Form::select('est_civil', [' Soltero/a' => ' Soltero/a', ' Viudo/a' => ' Viudo/a', ' Casado/a' => ' Casado/a', ' Divorciado/a' => ' Divorciado/a'], null, ['class' => 'form-control']); ?>

</div>

<!-- Calle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('calle', 'Calle:'); ?>

    <?php echo Form::text('calle', null, ['class' => 'form-control']); ?>

</div>

<!-- Num Calle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('num_calle', 'Num Calle:'); ?>

    <?php echo Form::text('num_calle', null, ['class' => 'form-control']); ?>

</div>

<!-- Puerta Piso Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('puerta_piso', 'Puerta Piso:'); ?>

    <?php echo Form::text('puerta_piso', null, ['class' => 'form-control']); ?>

</div>

<!-- Cp Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cp', 'Cp:'); ?>

    <?php echo Form::text('cp', null, ['class' => 'form-control']); ?>

</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ciudad', 'Ciudad:'); ?>

    <?php echo Form::text('ciudad', null, ['class' => 'form-control']); ?>

</div>

<!-- Isla Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('isla', 'Isla:'); ?>

    <?php echo Form::select('isla', [' Tenerife' => ' Tenerife', ' El Hierro' => ' El Hierro', ' La Palma' => ' La Palma', ' La Gomera' => ' La Gomera', ' Gran Canaria' => ' Gran Canaria', ' Fuerteventura' => ' Fuerteventura', ' Lanzarote' => ' Lanzarote'], null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Domi Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono_domi', 'Telefono Domi:'); ?>

    <?php echo Form::text('telefono_domi', null, ['class' => 'form-control']); ?>

</div>

<!-- Movil Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('movil', 'Movil:'); ?>

    <?php echo Form::text('movil', null, ['class' => 'form-control']); ?>

</div>
<!-- Lp Grados Dependencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lp_grados_dependencia', 'Lp Grados Dependencia:'); ?>

    <?php echo Form::select('lp_grados_dependencia', [' I' => ' I', ' II' => ' II', ' III' => ' III', ' Espera Revisión' => ' Espera Revisión'], null, ['class' => 'form-control']); ?>

</div>
<?php /**PATH /var/www/resources/views/people/edit/personal_data.blade.php ENDPATH**/ ?>