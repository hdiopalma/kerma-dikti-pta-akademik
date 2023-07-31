@extends('layouts.app') @section('title', 'Proposal') @section('contents')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12">
        <div class="card card-primary">
            <div class="card-header" role="button" data-card-widget="collapse">
                <h3 class="card-title" style="margin: 2px">Detail Kerjasama</h3>
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
                <h4>{{ $proposal->judul }}</h4>
                <hr>
                <div class="row">     
                    <div class="border-right col-12 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Perguruan Tinggi Negeri</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->universitas->nama_universitas }}"
                                disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Prodi Perguruan Tinggi Negeri</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->prodi_pt_mitra_negeri}}"
                                disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Perguruan Tinggi Mitra</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->pt_mitra_negeri }}"
                                disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Prodi Perguruan Tinggi Mitra</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->prodi_pt_mitra_negeri }}"
                                disabled
                            />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Jenis Kerjasama
                                </label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->kerjasama->jenis_kerjasama }}"
                                disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Tanggal Pengajuan
                                </label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->tanggal_pengajuan }}"
                                disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Status Pengisian
                                </label
                            >
                            <input
                                type="text"
                                class="form-control form-control-border border-width-2"
                                id="exampleInputBorderWidth2"
                                value="{{ $proposal->status_pengisian }}"
                                disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorderWidth2"
                                >Komentar
                                </label
                            >
                            <textarea class="form-control" rows="3" disabled="">{{ $proposal->komentar }}</textarea>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
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
                                href="http://pluto-escm.test/pemasok"
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
                                href="http://pluto-escm.test/pelanggan"
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
                                href="http://pluto-escm.test/transaksiPemasok"
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
                                href="http://pluto-escm.test/transaksiPelanggan"
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
                <div
                    class="clearfix hidden-md-up"
                    style="margin-top: 0px"
                ></div>
                <hr class="mt-0" />
            </div>
        </div>
    </div>
</div>
@stop @push('styles')
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
