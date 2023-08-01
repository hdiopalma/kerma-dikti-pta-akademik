<div class="col-12 col-sm-12 col-md-12">
    <div class="card card-dark">
        <div class="card-header" role="button" data-card-widget="collapse">
            <h3 class="card-title" style="margin: 2px">
                <i class="fas fa-edit"></i> Navigasi Bab
            </h3>
            <div class="card-tools">
                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="collapse"
                >
                    <i class="fas fa-minus"></i>
                </button>
                <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="remove"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row row d-flex">
                <div class="clearfix hidden-md-up"></div>
                <div class="p-2 col-12 col-sm-6 col-md-3">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>BAB 1</h3>
                            <p>Profil Perguruan Tinggi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dolly-flatbed"></i>
                        </div>
                        <a
                            href="{{ route('admin.proposal.viewBab1', encrypt($proposal->id)) }}"
                            class="small-box-footer"
                        >
                            Detail
                            <i
                                class="fas fa-fw fa-xs fa-arrow-circle-right"
                            ></i>
                        </a>
                    </div>
                </div>
                <div class="p-2 col-12 col-sm-6 col-md-3">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>BAB 2</h3>
                            <p>Dokumen Kerjasama</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <a
                            href="{{ route('admin.proposal.viewBab2', encrypt($proposal->id)) }}"
                            class="small-box-footer"
                        >
                            Detail
                            <i
                                class="fas fa-fw fa-xs fa-arrow-circle-right"
                            ></i>
                        </a>
                    </div>
                </div>
                <div class="p-2 col-12 col-sm-6 col-md-3">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>BAB 3</h3>
                            <p>Kesiapan Sumber Daya</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <a
                            href="{{ route('admin.proposal.viewBab3', encrypt($proposal->id)) }}"
                            class="small-box-footer"
                        >
                            Detail
                            <i
                                class="fas fa-fw fa-xs fa-arrow-circle-right"
                            ></i>
                        </a>
                    </div>
                </div>
                <div class="p-2 col-12 col-sm-6 col-md-3">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>BAB 4</h3>
                            <p>Rencana Pelaksanaan Kerjasama</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-upload"></i>
                        </div>
                        <a
                            href="{{ route('admin.proposal.viewBab4', encrypt($proposal->id)) }}"
                            class="small-box-footer"
                        >
                            Detail
                            <i
                                class="fas fa-fw fa-xs fa-arrow-circle-right"
                            ></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix hidden-md-up" style="margin-top: 0px"></div>
            <hr class="mt-0" />
        </div>
    </div>
</div>

@push('styles')
<style>
    .container-fluid .small-box .inner h3 {
        font-size: 1.5rem;
    }
    .container-fluid .small-box .inner p {
        margin-bottom: 0;
        font-size: 0.9rem;
    }

    /* Add custom CSS to remove gaps */
</style>
@endpush