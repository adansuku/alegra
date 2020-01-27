<script>
 function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});

</script>

<div class="row align-items-center h-100 no-gutters">
        <div class="col-sm-3 text-center mt-3">
        <img class="rounded-circle" src="/storage/<?php echo e($worker->avatar); ?>"  
        width="90%"/>

            <!-- Avatar Field
            <div class="avatar" style="
            background-color: grey;
            background-size: 20px;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            background-size: cover;
            background-position: center;
            background-image:url(<?php echo e(asset("storage/$worker->avatar")); ?>)">
            </div> -->

        </div>
        <div class="col-sm-9">
            <div class="file-upload">
                <button class="btn-block btn btn-secondary" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Añadir Avatar</button>

                <div class="image-upload-wrap">
                    <input class="file-upload-input" name="avatar" type='file' onchange="readURL(this);" accept="image/" />
                    <div class="drag-text">
                    <h3>Arrastra una archivo</h3>
                    <p>Recuerda utilizar archivos pequeños</p>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Eliminar <span class="image-title">Uploaded Image</span></button>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="row mt-3">
        <div class="col-sm-6">
            
                <!-- Nombre Field -->
                <div class="form-group">
                    <?php echo Form::label('nombre', 'Nombre:'); ?>

                    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Apellido Field -->
                <div class="form-group ">
                    <?php echo Form::label('apellido', 'Apellido:'); ?>

                    <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Fecha Nacimiento Field -->
                <div class="form-group ">
                    <?php echo Form::label('fecha_nacimiento', 'Fecha Nacimiento:'); ?>

                    <?php echo Form::date('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']); ?>

                </div>

                <?php $__env->startSection('scripts'); ?>
                    <script type="text/javascript">
                        $('#fecha_nacimiento').datetimepicker({
                            format: 'DD-MM-YYYY',
                            useCurrent: false
                        })
                    </script>
                <?php $__env->stopSection(); ?>

                <!-- Dni Field -->
                <div class="form-group ">
                    <?php echo Form::label('dni', 'Dni:'); ?>

                    <?php echo Form::text('dni', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Direccion Field -->
                <div class="form-group ">
                    <?php echo Form::label('direccion', 'Direccion:'); ?>

                    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

                </div>
        </div>

        <div class="col-sm-6">

                <!-- Telefono Field -->
                <div class="form-group ">
                    <?php echo Form::label('telefono', 'Telefono:'); ?>

                    <?php echo Form::number('telefono', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Telefono Movil Field -->
                <div class="form-group ">
                    <?php echo Form::label('telefono_movil', 'Telefono Movil:'); ?>

                    <?php echo Form::number('telefono_movil', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Email Field -->
                <div class="form-group ">
                    <?php echo Form::label('email', 'Email:'); ?>

                    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Cat Profesional Field -->
                <div class="form-group ">
                    <?php echo Form::label('cat_profesional', 'Cat Profesional:'); ?>

                    <?php echo Form::text('cat_profesional', null, ['class' => 'form-control']); ?>

                </div>

                <!-- Titulacion Field -->
                <div class="form-group ">
                    <?php echo Form::label('titulacion', 'Titulacion:'); ?>

                    <?php echo Form::text('titulacion', null, ['class' => 'form-control']); ?>

                </div>
                
        </div>
</div>



<!-- <img src="<?php echo e(asset("storage/$worker->avatar")); ?>" alt=""> -->


<?php /**PATH /var/www/resources/views/workers/partials/datos_generales.blade.php ENDPATH**/ ?>