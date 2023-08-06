<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header bg-primary" role="button" data-card-widget="collapse">
            <h3 class="card-title" style="margin: 2px"><b>Administrasi Proposal</b></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus text-white"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times text-white"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <h5 class="text-bold">Status Berkas:  <span class="card-text text-red text-bold">{{$proposal->statusBerkas->status}}</span></h5>
        </div>
        <div class="card-body">
            <h5>Ajukan Reviewer 1</h5>
            <hr>
            {{ $reviewer1Table->table(['id' => 'reviewer1Table', 'class' => 'table table-bordered table-hover table-striped']) }}
        </div>
        <hr>
        <div class="card-body">
            <h5>Ajukan Reviewer 2</h5>
            <hr>
            {{ $reviewer2Table->table(['id' => 'reviewer2Table', 'class' => 'table table-bordered table-hover table-striped']) }}
        </div>
        
    </div>
</div>

@push('scripts')
    {{ $reviewer1Table->scripts(attributes: ['type' => 'module']) }}
    {{ $reviewer2Table->scripts(attributes: ['type' => 'module']) }}
@endpush