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

        <!-- Status Berkas Proposal -->
        <div class="card-body pb-2">
            <div class="row">
                <div class="col-5 col-md-12 col-sm-4">
                    <h6 class="text-bold">Status Berkas:</h6>
                </div>
                <div class="col-6 col-md-12 text-left">
                    <h6><span class="card-text text-red text-bold">{{ $proposal->statusBerkas->status }}</span></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <a type="button" class="btn btn-primary btn-md btn-block" href="{{ route('reviewer.proposal.viewBab1', encrypt($proposal->id)) }}">
                        <i class="fas fa-file-alt"></i>&nbsp;
                Review Proposal
                </a>
                </div>
            </div>
            
        </div>
        <!-- /.Status Berkas Proposal -->
        <hr style="margin: 0px">
    </div>
</div>

