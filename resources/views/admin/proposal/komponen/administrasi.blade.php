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
                    <h6 class="text-bold">Status:</h6>
                </div>
                <div class="col-6 col-md-7 text-left">
                    <h6><span class="card-text text-red text-bold">{{ $proposal->statusBerkas->status }}</span></h6>
                </div>
            </div>
        </div>
        <!-- /.Status Berkas Proposal -->

        <hr style="margin: 0px">

        <!-- Ajukan Verifikator, sementara pake data reviewer dulu -->
        <div class="card-body">
            <div class="row">
                <div class="col-4 col-md-12">
                    <h6>Verifikator:</h6>
                </div>
                <div class="col-8 col-md-12 text-left">
                    @if ($proposal->verifikator != null)
                        <h6><span
                                class="card-text text-green text-bold">{{ $proposal->verifikator->nama_verifikator }}</span>
                        </h6>
                    @else
                        <h6><span class="card-text text-red text-bold"> Belum ditugaskan </span></h6>
                    @endif
                </div>
            </div>

            @isset($administrasiProposal['verifikatorTable'])
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                    data-bs-target="#modalVerifikatorTabel">
                    Ajukan Verifikator
                </button>
            @endisset
        </div>
        <!-- /.Ajukan Verifikator -->

        <hr style="margin: 0px">

        <!-- Ajukan Reviewer 1 -->
        <div class="card-body">
            <div class="row">
                <div class="col-4 col-md-12">
                    <h6>Reviewer 1:</h6>
                </div>
                <div class="col-8 col-md-12 text-left">
                    @if ($proposal->reviewer1 != null)
                        <h6><span
                                class="card-text text-green text-bold">{{ $proposal->reviewer1->nama_reviewer }}</span>
                        </h6>
                    @else
                        <h6><span class="card-text text-red text-bold"> Belum ditugaskan </span></h6>
                    @endif
                </div>
            </div>
            @isset($administrasiProposal['reviewer1Table'])
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                    data-bs-target="#modalReviewer1Tabel">
                    Ajukan Reviewer 1
                </button>
            @endisset
        </div>
        <!-- /.Ajukan Reviewer 1 -->

        <hr style="margin: 0px">

        <!-- Ajukan Reviewer 2 -->
        <div class="card-body">
            <div class="row">
                <div class="col-4 col-md-12">
                    <h6>Reviewer 2:</h6>
                </div>
                <div class="col-8 col-md-12 text-left">
                    @if ($proposal->reviewer2 != null)
                        <h6><span
                                class="card-text text-green text-bold">{{ $proposal->reviewer2->nama_reviewer }}</span>
                        </h6>
                    @else
                        <h6><span class="card-text text-red text-bold"> Belum ditugaskan </span></h6>
                    @endif
                </div>
            </div>

            @isset($administrasiProposal['reviewer2Table'])
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                    data-bs-target="#modalReviewer2Tabel">
                    Ajukan Reviewer 2
                </button>
            @endisset
        </div>
        <!-- /.Ajukan Reviewer 2 -->
        <hr style="margin: 0px">



    </div>
</div>

@push('modals')
    <!-- Modal Verifikator sementara pake data reviewer dulu-->
    @isset($administrasiProposal['verifikatorTable'])
        <div class="modal fade" id="modalVerifikatorTabel" tabindex="-1" aria-labelledby="modalVerifikatorTabelLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalVerifikatorTabelLabel">Ajukan Verifikator</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $administrasiProposal['verifikatorTable']->table(['id' => 'verifikatorTable', 'class' => 'table table-bordered table-hover table-striped']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endisset
    <!-- /.modal verifikator -->

    <!-- Modal Reviewer 1-->
    @isset($administrasiProposal['reviewer1Table'])
        <div class="modal fade" id="modalReviewer1Tabel" tabindex="-1" aria-labelledby="modalReviewer1TabelLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalReviewer1TabelLabel">Ajukan Reviewer 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $administrasiProposal['reviewer1Table']->table(['id' => 'reviewer1Table', 'class' => 'table table-bordered table-hover table-striped nowrap']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endisset
    <!-- /.modal reviewer 1 -->

    <!-- Modal Reviewer 2-->
    @isset($administrasiProposal['reviewer2Table'])
        <div class="modal fade" id="modalReviewer2Tabel" tabindex="-1" aria-labelledby="modalReviewer2TabelLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalReviewer2TabelLabel">Ajukan Reviewer 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $administrasiProposal['reviewer2Table']->table(['id' => 'reviewer2Table', 'class' => 'table table-bordered table-hover table-striped']) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endisset
    <!-- /.modal reviewer 2 -->
@endpush

@push('scripts')
    {{ isset($administrasiProposal['reviewer1Table']) ? $administrasiProposal['reviewer1Table']->scripts(attributes: ['type' => 'module']) : '' }}
    {{ isset($administrasiProposal['reviewer2Table']) ? $administrasiProposal['reviewer2Table']->scripts(attributes: ['type' => 'module']) : '' }}
    {{ isset($administrasiProposal['verifikatorTable']) ? $administrasiProposal['verifikatorTable']->scripts(attributes: ['type' => 'module']) : '' }}
@endpush
