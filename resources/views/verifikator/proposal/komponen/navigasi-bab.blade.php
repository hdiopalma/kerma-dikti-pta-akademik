<div class="col-12 col-sm-12 col-md-12">
    <div class="card card-dark">
        @isset($hasilReview)
            <div class="card-header bg-primary" role="button" data-card-widget="collapse">
                <h3 class="card-title" style="margin: 2px">
                    <i class="fas fa-edit"></i> Periksa Hasil Review
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        @endisset
        <div class="card-body pb-0">
            <div class="row d-flex">

                <div class=" col-12 col-sm-6 col-md-3">
                    <div class="small-box {{ isset($bab) && $bab == 1 ? 'bg-warning' : 'bg-primary' }}">
                        <div class="inner">
                            <h3>BAB 1</h3>
                            <p>Profil Perguruan Tinggi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>

                        @isset($hasilReview)
                            <a href="{{ route('verifikator.proposal.viewBab1', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @else
                            <a href="{{ route('verifikator.proposal.viewBab1', encrypt($proposal->id)) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @endisset
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-3">
                    <div class="small-box {{ isset($bab) && $bab == 2 ? 'bg-warning' : 'bg-primary' }}">
                        <div class="inner">
                            <h3>BAB 2</h3>
                            <p>Dokumen Kerjasama</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        @isset($hasilReview)
                            <a href="{{ route('verifikator.proposal.viewBab2', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @else
                            <a href="{{ route('verifikator.proposal.viewBab2', encrypt($proposal->id)) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @endisset
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-3">
                    <div class="small-box {{ isset($bab) && $bab == 3 ? 'bg-warning' : 'bg-primary' }}">
                        <div class="inner">
                            <h3>BAB 3</h3>
                            <p>Kesiapan Sumber Daya</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        @isset($hasilReview)
                            <a href="{{ route('verifikator.proposal.viewBab3', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @else
                            <a href="{{ route('verifikator.proposal.viewBab3', encrypt($proposal->id)) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @endisset
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-3">
                    <div class="small-box {{ isset($bab) && $bab == 4 ? 'bg-warning' : 'bg-primary' }}">
                        <div class="inner">
                            <h3>BAB 4</h3>
                            <p>Rencana Pelaksanaan Kerjasama</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-upload"></i>
                        </div>
                        @isset($hasilReview)
                            <a href="{{ route('verifikator.proposal.viewBab4', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @else
                            <a href="{{ route('verifikator.proposal.viewBab4', encrypt($proposal->id)) }}"
                                class="small-box-footer">
                                Detail
                                <i class="fas fa-fw fa-xs fa-arrow-circle-right"></i>
                            </a>
                        @endisset
                    </div>
                </div>
            </div>


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
