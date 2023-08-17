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
                    <a type="button" class="btn btn-primary btn-md btn-block"
                        href="{{ route('verifikator.proposal.viewBab1', encrypt($proposal->id)) }}">
                        <i class="fas fa-file-alt"></i>&nbsp;
                        Periksa Proposal
                    </a>
                </div>
            </div>

            @if (optional($hasil_review1['bab1'])->id != null &&
                    optional($hasil_review1['bab2'])->id != null &&
                    optional($hasil_review1['bab3'])->id != null &&
                    optional($hasil_review1['bab4'])->id != null)
            <hr>

            <div class="row">
                <div class="col-5 col-md-12 col-sm-4">
                    <h6 class="text-bold">Reviewer 1:</h6>
                </div>
                <div class="col-6 col-md-12 text-left">
                    <h6><span class="card-text text-primary text-bold">{{ $proposal->reviewer1->nama_reviewer }}</span>
                    </h6>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-12 col-md-12 col-sm-12">
                    <a type="button" class="btn btn-warning btn-md btn-block"
                        href="{{ route('verifikator.proposal.viewBab1', [encrypt($proposal->id), 'reviewer' => encrypt($proposal->reviewer1->id)]) }}"> 
                        <i class="fas fa-file-alt"></i>&nbsp;
                        Periksa Hasil Review
                    </a>
                </div>
            </div>

            @endif

            @if (optional($hasil_review2['bab1'])->id != null &&
                    optional($hasil_review2['bab2'])->id != null &&
                    optional($hasil_review2['bab3'])->id != null &&
                    optional($hasil_review2['bab4'])->id != null)
                <hr>

                <div class="row">
                    <div class="col-5 col-md-12 col-sm-4">
                        <h6 class="text-bold">Reviewer 2:</h6>
                    </div>
                    <div class="col-6 col-md-12 text-left">
                        <h6><span
                                class="card-text text-primary text-bold">{{ $proposal->reviewer2->nama_reviewer }}</span>
                        </h6>
                    </div>
                </div>

                <div class="row pt-2">
                    <div class="col-12 col-md-12 col-sm-12">
                        <a type="button" class="btn btn-warning btn-md btn-block"
                            href="{{ route('verifikator.proposal.viewBab1', encrypt($proposal->id)) }}">
                            <i class="fas fa-file-alt"></i>&nbsp;
                            Periksa Hasil Review
                        </a>
                    </div>
                </div>
            @endif

        </div>
        <!-- /.Status Berkas Proposal -->
        <hr style="margin: 0px">
    </div>
</div>
