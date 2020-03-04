<div class="row">


    <!-- Dia Trans Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('dia_trans', 'Dias:'); ?>

        <?php echo Form::select('dia_trans', ['' => '', 'Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles',
        'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'de Lunes a Viernes' => 'de Lunes a Viernes'], null, ['class' =>
        'form-control', 'required' => 'required']); ?>

    </div>

    <!-- Tray Trans Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('tray_trans', 'Trayecto Transporte:'); ?>

        <?php echo Form::select('tray_trans', ['' => '', 'Ida' => 'Ida', 'Vuelta' => 'Vuelta', 'Ida y Vuelta' => 'Ida y
        Vuelta'], null, ['class' => 'form-control', 'required' => 'required']); ?>

    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Añadir transporte', ['class' => 'btn btn-primary float-right' ]); ?>

        <?php echo Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']); ?>

    </div>
</div><?php /**PATH /var/www/resources/views/patients/create/transport.blade.php ENDPATH**/ ?>