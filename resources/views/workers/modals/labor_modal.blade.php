<!-- Modal Add Labor-->
<div class="modal fade" id="labor_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Relaciones laborales</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                {!! Form::open(['url' => route('workerLabors.store', ['worker_id' => $worker->id]),'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}      
                    @include('workers.create.laboral')
                {!! Form::close() !!}

                </div>
                </div>
            </div>
</div>
<!--end modal add Labor-->