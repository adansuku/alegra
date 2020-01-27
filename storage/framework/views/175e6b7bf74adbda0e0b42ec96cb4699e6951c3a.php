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

<!-- Grado Dependencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('grado_dependencia', 'Grado Dependencia:'); ?>

    <?php echo Form::select('grado_dependencia', [' No valorado' => ' No valorado', ' Grado I' => ' Grado I', ' Grado II' => ' Grado II', ' Grado III' => ' Grado III'], null, ['class' => 'form-control']); ?>

</div>

<!-- Transporte Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('transporte', 'Transporte:'); ?>

    <?php echo Form::select('transporte', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Transp Dias Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('transp_dias', 'Transp Dias:'); ?>

    <?php echo Form::select('transp_dias', [' Lunes' => ' Lunes', ' Martes' => ' Martes', ' Miércoles' => ' Miércoles', ' Jueves' => ' Jueves', ' Viernes' => ' Viernes'], null, ['class' => 'form-control']); ?>

</div>

<!-- Trayecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('trayecto', 'Trayecto:'); ?>

    <?php echo Form::select('trayecto', [' Ida' => ' Ida', ' Vuelta' => ' Vuelta'], null, ['class' => 'form-control']); ?>

</div>

<!-- Transp Fecha Init Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('transp_fecha_init', 'Transp Fecha Init:'); ?>

    <?php echo Form::date('transp_fecha_init', null, ['class' => 'form-control','id'=>'transp_fecha_init']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#transp_fecha_init').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Transp Dir Recogida Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('transp_dir_recogida', 'Transp Dir Recogida:'); ?>

    <?php echo Form::text('transp_dir_recogida', null, ['class' => 'form-control']); ?>

</div>

<!-- Cesion Imagen Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cesion_imagen', 'Cesion Imagen:'); ?>

    <?php echo Form::select('cesion_imagen', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Autoriz Salida Ext Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('autoriz_salida_ext', 'Autoriz Salida Ext:'); ?>

    <?php echo Form::select('autoriz_salida_ext', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Autoriz Salir Centro Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('autoriz_salir_centro', 'Autoriz Salir Centro:'); ?>

    <?php echo Form::select('autoriz_salir_centro', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Socio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('socio', 'Socio:'); ?>

    <?php echo Form::select('socio', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Num Socio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('num_socio', 'Num Socio:'); ?>

    <?php echo Form::text('num_socio', null, ['class' => 'form-control']); ?>

</div>

<!-- Nivel Educativo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nivel_educativo', 'Nivel Educativo:'); ?>

    <?php echo Form::select('nivel_educativo', [' Lee y escribe' => ' Lee y escribe', ' No lee ni escribe' => ' No lee ni escribe', ' Graduado Escolar' => ' Graduado Escolar', ' Bachillerato' => ' Bachillerato', ' FPGM' => ' FPGM', ' FPGS' => ' FPGS', ' Estudios Superiores' => ' Estudios Superiores'], null, ['class' => 'form-control']); ?>

</div>

<!-- Estudios Terminados Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estudios_terminados', 'Estudios Terminados:'); ?>

    <?php echo Form::select('estudios_terminados', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Ocupacion Anterior Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ocupacion_anterior', 'Ocupacion Anterior:'); ?>

    <?php echo Form::text('ocupacion_anterior', null, ['class' => 'form-control']); ?>

</div>

<!-- Inter Actuales Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('inter_actuales', 'Inter Actuales:'); ?>

    <?php echo Form::text('inter_actuales', null, ['class' => 'form-control']); ?>

</div>

<!-- Lee Escribe Ahora Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lee_escribe_ahora', 'Lee Escribe Ahora:'); ?>

    <?php echo Form::select('lee_escribe_ahora', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Sit Dependencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sit_dependencia', 'Sit Dependencia:'); ?>

    <?php echo Form::select('sit_dependencia', [' No solicitud' => ' No solicitud', ' Solicitud' => ' Solicitud', ' Espera Grado' => ' Espera Grado', ' Espera PEVS' => ' Espera PEVS', ' Recibe PEVS' => ' Recibe PEVS'], null, ['class' => 'form-control']); ?>

</div>

<!-- Lp Grados Dependencia Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lp_grados_dependencia', 'Lp Grados Dependencia:'); ?>

    <?php echo Form::select('lp_grados_dependencia', [' I' => ' I', ' II' => ' II', ' III' => ' III', ' Espera Revisión' => ' Espera Revisión'], null, ['class' => 'form-control']); ?>

</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nivel', 'Nivel:'); ?>

    <?php echo Form::select('nivel', [' Nivel I' => ' Nivel I', ' Nivel II' => ' Nivel II', ' Nivel III' => ' Nivel III'], null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Ayuda Depend Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_ayuda_depend', 'Tipo Ayuda Depend:'); ?>

    <?php echo Form::select('tipo_ayuda_depend', [' PEVS' => ' PEVS', ' Cuidados' => ' Cuidados', ' Entornos' => ' Entornos', ' Otras' => ' Otras'], null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Solic Grado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_solic_grado', 'Fecha Solic Grado:'); ?>

    <?php echo Form::date('fecha_solic_grado', null, ['class' => 'form-control','id'=>'fecha_solic_grado']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_solic_grado').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Fecha Resol Grado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_resol_grado', 'Fecha Resol Grado:'); ?>

    <?php echo Form::date('fecha_resol_grado', null, ['class' => 'form-control','id'=>'fecha_resol_grado']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_resol_grado').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Fecha Resol Prest Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_resol_prest', 'Fecha Resol Prest:'); ?>

    <?php echo Form::date('fecha_resol_prest', null, ['class' => 'form-control','id'=>'fecha_resol_prest']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_resol_prest').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Fecha Revision Grado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_revision_grado', 'Fecha Revision Grado:'); ?>

    <?php echo Form::date('fecha_revision_grado', null, ['class' => 'form-control','id'=>'fecha_revision_grado']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_revision_grado').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Cuantia Resol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cuantia_resol', 'Cuantia Resol:'); ?>

    <?php echo Form::text('cuantia_resol', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Ayuda Sociosani Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_ayuda_sociosani', 'Tipo Ayuda Sociosani:'); ?>

    <?php echo Form::select('tipo_ayuda_sociosani', [' Teleasistencia' => ' Teleasistencia', ' SAD' => ' SAD', ' Servicio Domicilio' => ' Servicio Domicilio', ' Fisioterapia Externa' => ' Fisioterapia Externa', ' Estimulación Cognitiva Externa' => ' Estimulación Cognitiva Externa', ' Apoyo Emocional Externo' => ' Apoyo Emocional Externo', ' Centro Atención Residencial' => ' Centro Atención Residencial', ' Centro Estancia Diurna' => ' Centro Estancia Diurna', ' AFATE' => ' AFATE', ' Otros' => ' Otros'], null, ['class' => 'form-control']); ?>

</div>

<!-- Certi Discapacidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('certi_discapacidad', 'Certi Discapacidad:'); ?>

    <?php echo Form::select('certi_discapacidad', [' Si' => ' Si', ' No' => ' No'], null, ['class' => 'form-control']); ?>

</div>

<!-- Grado Discapacidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('grado_discapacidad', 'Grado Discapacidad:'); ?>

    <?php echo Form::text('grado_discapacidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Resol Discapacidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_resol_discapacidad', 'Fecha Resol Discapacidad:'); ?>

    <?php echo Form::date('fecha_resol_discapacidad', null, ['class' => 'form-control','id'=>'fecha_resol_discapacidad']); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#fecha_resol_discapacidad').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
<?php $__env->stopSection(); ?>

<!-- Tipo Discapacidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_discapacidad', 'Tipo Discapacidad:'); ?>

    <?php echo Form::select('tipo_discapacidad', [' Intelectual' => ' Intelectual', ' Física' => ' Física', ' Sensorial' => ' Sensorial', ' Psíquica' => ' Psíquica'], null, ['class' => 'form-control']); ?>

</div>

<!-- Sit Legal Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sit_legal', 'Sit Legal:'); ?>

    <?php echo Form::select('sit_legal', [' Autónomo/a' => ' Autónomo/a', ' Tutela' => ' Tutela', ' Curatela' => ' Curatela', ' Guarda de hecho' => ' Guarda de hecho'], null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('people.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/people/fields.blade.php ENDPATH**/ ?>