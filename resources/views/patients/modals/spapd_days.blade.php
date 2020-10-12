<!-- Modal Add Document-->
<div class="modal fade" id="spapd_dia_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir dias de <span id="spadp_title" style="font-weight: bold;"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm_spapd_days" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @include('patients.create.spapd_days')
                </form>
                        

            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->