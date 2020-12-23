<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña para: <strong>
                        {{$worker->email}}</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    {!! Form::open(['url' => route('updatePassword.user', ['worker_id' => $worker->id]),'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <input name="_token" type="hidden" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <strong><label for="password">Nueva Contraseña: (mínimo 8 caracteres)</label></strong>
                        <input type="password" name="user_password" id="password" class="form-control" value="" required oninput="setPasswordConfirmValidity();" pattern=".{8,30}">
                    </div>
                    <div class="form-group">
                        <strong><label for="password">Repite la contraseña (mínimo 8 caracteres):</label></strong>
                        <input type="password" name="" id="confirm_password" class="form-control" value="" required oninput="setPasswordConfirmValidity();" pattern=".{8,30}">
                    </div>
                    <input class="btn btn-primary float-right" type="submit" value="Cambiar password" onclick="return confirm(' ¿Estas segura que quieres cambiar el password? ')"> {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function setPasswordConfirmValidity(str) {
        const password1 = document.getElementById('password');
        const password2 = document.getElementById('confirm_password');

        if (password1.value === password2.value) {
            password2.setCustomValidity('');
        } else {
            password2.setCustomValidity('Las contraseñas deben coincidir');
        }
        console.log('password2 customError ', document.getElementById('password2').validity.customError);
        console.log('password2 validationMessage ', document.getElementById('password2').validationMessage);
    }
</script>