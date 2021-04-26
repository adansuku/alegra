<!-- Modal Add Document-->
<div class="modal fade" id="spapd_fecha_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir fechas</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm_spapd_dates" accept-charset="UTF-8">
                    @csrf
                    <input type="hidden" id="spadp_dates_patient_spapd_id" name="patient_spapd_id" />
                    @include('patients.create.spapd_dates')
                </form>
            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->