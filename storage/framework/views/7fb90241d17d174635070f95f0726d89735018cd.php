<div class="form-group col-sm-4">
    <!-- Año tarifa -->
    <p>
        <?php echo Form::label('anio_tarifa', 'Año tarifa aplicada:'); ?>

        <?php echo Form::text('anio_tarifa', $patient->patientOther->anio_tarifa, ['class' => 'form-control']); ?>

    </p>


    <!-- importe mensual servicios-->
    <p>
        <?php echo Form::label('importe_serv', 'Importe mensual servicio:'); ?>

        <?php echo Form::text('importe_serv', $patient->patientOther->importe_serv,
        ['id' => 'num1', 'class' => 'form-control', 'onchange' => 'sumar(this.value)']); ?>

    </p>

    <!-- Importe mensual transporte -->
    <p>
        <?php echo Form::label('importe_trans', 'Importe mensual transporte:'); ?>

        <?php echo Form::text('importe_trans', $patient->patientOther->importe_trans,
        ['class' => 'form-control', 'id' => 'num2', 'onchange' => 'sumar(this.value)']); ?>

    </p>

    <div class="my-3 h5">Importe total a facturar:
        <span class="h3" id="spTotal"></span> €
    </div>

    <script>
        $(document).ready(function(){
            num1 = document.getElementById('num1').value;
            num2 = document.getElementById('num2').value;
            total = (parseInt(num1) + parseInt(num2));
            document.getElementById('spTotal').innerHTML = total;
            
        });

        function sumar(valor) {
            var total = 0;
            valor = parseInt(valor); 
            total = document.getElementById('spTotal').innerHTML;
            total = (total == null || total == undefined || total == "") ? 0 : total;
            total = (parseInt(total) + parseInt(valor));
            document.getElementById('spTotal').innerHTML = total;
        }
    </script>
</div>


<div class="form-group col-sm-4">
    <!-- IBAN Bancario -->
    <p>
        <?php echo Form::label('iban', 'IBAN bancario:'); ?>

        <?php echo Form::number('iban', $patient->patientOther->iban, ['class' => 'form-control', 'max' =>
        '999999999999999999999999']); ?>

    </p>

    <!-- Factura -->
    <p>
        <?php echo Form::label('factura', 'Solicitud factura:'); ?>

        <?php echo Form::select('factura', ['' => 'Selecciona una opción', 'Si' => 'Si',' No' => 'No'],
        $patient->patientOther->factura, ['class' =>
        'form-control','id' => 'factura']); ?>

    </p>

    <!-- Forma de entrega -->
    <p>
        <?php echo Form::label('forma_entrega', 'Forma de entrega:'); ?>

        <?php echo Form::select('forma_entrega', ['' => 'Selecciona una opción', 'email' => 'email','whatsapp' => 'whatsapp',
        'papel' => 'papel',
        'profesional' => 'profesional'], $patient->patientOther->forma_entrega, ['class' => 'form-control']); ?>

    </p>

</div>





<div class="form-group col-sm-4">
    <p>
        <?php echo Form::label('forma_pago', 'Forma de pago:'); ?>

        <select class="form-control" id="type" name="forma_pago">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->forma_pago == 'Cesion' ? 'selected':''); ?>>Cesión de derechos de cobros
            </option>
            <option <?php echo e($patient->patientOther->forma_pago == 'Efectivo' ? 'selected':''); ?>>Efectivo</option>
            <option <?php echo e($patient->patientOther->forma_pago == 'Transferencia' ? 'selected':''); ?>>Transferencia</option>
            <option <?php echo e($patient->patientOther->forma_pago == 'Domiciliación bancaria' ? 'selected':''); ?>>Domiciliación
                bancaria</option>
        </select>
    </p>

    <!-- Observaciones economicas -->
    <p>
        <?php echo Form::label('obs_economicas', 'Acuerdos de Facturación (rellenar si procede):'); ?>

        <?php echo Form::textarea('obs_economicas', $patient->patientOther->obs_economicas, ['class' => 'form-control', 'rows'
        => '5']); ?>

    </p>

</div>




<hr width="100%">

<div class="col-sm-12 my-3">
    <h4><i class="fas fa-file-medical"></i> Datos de socio/a</h4>
</div>



<div class="col-lg-12">
    <p>
        <?php echo Form::label('socio', 'Socio/a:'); ?>

        <select class="form-control" id="socio" name="socio">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->socio == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientOther->socio == 'No' ? 'selected':''); ?>>No</option>
        </select>
    </p>
</div>


<div class="col-lg-6 socio_si" style="display:none">
    <p>
        <!-- No Socio Field -->
        <?php echo Form::label('no_socio', 'Número de Socio/a:'); ?>

        <?php echo Form::number('no_socio', $patient->patientOther->no_socio , ['class' => 'form-control numero_socio', 'id' =>
        'numero_socio']); ?>

    </p>

    <p>
        <?php echo Form::label('cuota_socio', 'Cuota de socio/a:'); ?>

        <select class="form-control" id="cuota-socio" name="cuota_socio">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->cuota_socio == 'Si' ? 'selected':''); ?>>Si</option>
            <option <?php echo e($patient->patientOther->cuota_socio == 'No' ? 'selected':''); ?>>No</option>
        </select>
    </p>
    
</div>


<div class="col-lg-6 socio_si" style="display:none">
    <p>
            <?php echo Form::label('periodicidad', 'Periodicidad:'); ?>

            <select class="form-control" id="type" name="periodicidad">
                <option value="">Selecciona una opción</option>
                <option <?php echo e($patient->patientOther->periodicidad == 'Anual' ? 'selected':''); ?>>Anual (60€)</option>
                <option <?php echo e($patient->patientOther->periodicidad == 'Semestral' ? 'selected':''); ?>>Semestral (30€)
                </option>
                <option <?php echo e($patient->patientOther->periodicidad == 'Trimestral' ? 'selected':''); ?>>Trimestral (15€)
                </option>
                <option <?php echo e($patient->patientOther->periodicidad == 'Mensual' ? 'selected':''); ?>>Mensual (5€)</option>
            </select>
    </p>

    <p>
        <!-- Cuota de socio -->
        <?php echo Form::label('pago_socio', 'Forma pago Cuota Socio/a:'); ?>

        <select class="form-control" id="type" name="pago_socio">
            <option value="">Selecciona una opción</option>
            <option <?php echo e($patient->patientOther->pago_socio == 'Efectivo' ? 'selected':''); ?>>Efectivo</option>
            <option <?php echo e($patient->patientOther->pago_socio == 'Transferencia' ? 'selected':''); ?>>Transferencia</option>
            <option <?php echo e($patient->patientOther->pago_socio == 'Domiciliación bancaria' ? 'selected':''); ?>>Domiciliación
                bancaria</option>
        </select>
    </p>
</div>


<?php $__env->startPush('scripts'); ?>
<script>
   

    $(document).ready(function() {
        $('#socio').on('change', function() {
            if ($(this).val() == 'Si' ) {
                $('.socio_si').css('display', 'block');
            }else{
                $('.socio_si').css('display', 'none');
            }
        });

        var selected_option = $('#socio').val();
        if(selected_option == 'Si'){
            $('.socio_si').css('display', 'block');
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/resources/views/patients/edit/add_economy.blade.php ENDPATH**/ ?>