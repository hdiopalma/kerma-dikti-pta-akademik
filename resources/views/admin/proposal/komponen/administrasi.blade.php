<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header bg-primary" role="button" data-card-widget="collapse">
            <h3 class="card-title" style="margin: 2px"><b>Administrasi Proposal</b></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus text-white"></i>
                </button>
            </div>
        </div>
        <div class="card-body pb-2">
            <div class="row">
                <div class="col-6 col-lg-6 col-md-6 col-sm-4">
                    <h5 class="text-bold">Status Berkas:</h5>
                </div>
                <div class="col-6 text-left">
                    <h5><span class="card-text text-red text-bold">{{ $proposal->statusBerkas->status }}</span></h5>
                </div>
            </div>  
        </div>
        <hr style="margin: 0px">
        <div class="card-body">
            
            <div class="row">
                <div class="col-4 col-md-12">
                    <h5>Reviewer 1:</h5>
                </div>
                <div class="col-8 col-md-12 text-left">
                    @if ($proposal->reviewer1 != null)
                        <h5><span class="card-text text-green text-bold">{{ $proposal->reviewer1->nama_reviewer }}</span></h5>
                    @else
                        <h5><span class="card-text text-red text-bold"> Belum ditugaskan </span></h5>
                    @endif
                </div>
            </div> 
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalReviewer1Tabel">
                Ajukan Reviewer 1
              </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 col-md-12">
                    <h5>Reviewer 2:</h5>
                </div>
                <div class="col-8 col-md-12 text-left">
                    @if ($proposal->reviewer2 != null)
                        <h5><span class="card-text text-green text-bold">{{ $proposal->reviewer2->nama_reviewer }}</span></h5>
                    @else
                        <h5><span class="card-text text-red text-bold"> Belum ditugaskan </span></h5>
                    @endif
                </div>
            </div> 
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalReviewer2Tabel">
                Ajukan Reviewer 2
              </button>
        </div>

    </div>
</div>

<!-- Modal Reviewer 1-->
<div class="modal fade" id="modalReviewer1Tabel" tabindex="-1" aria-labelledby="modalReviewer1TabelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReviewer1TabelLabel">Ajukan Reviewer 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                {{ $reviewer1Table->table(['id' => 'reviewer1Table', 'class' => 'table table-bordered table-hover table-striped nowrap']) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal reviewer 1 -->

<!-- Modal Reviewer 2-->
<div class="modal fade" id="modalReviewer2Tabel" tabindex="-1" aria-labelledby="modalReviewer2TabelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReviewer2TabelLabel">Ajukan Reviewer 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                {{ $reviewer2Table->table(['id' => 'reviewer2Table', 'class' => 'table table-bordered table-hover table-striped']) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
 
    {{ $reviewer1Table->scripts(attributes: ['type' => 'module']) }}
    {{ $reviewer2Table->scripts(attributes: ['type' => 'module']) }}

@endpush
