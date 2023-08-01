<div class="col-12 col-sm-12 col-md-12">
        <div class="card card-primary">
            <div class="card-header" role="button" data-card-widget="collapse">
                <h3 class="card-title" style="margin: 2px">Detail Kerjasama (no. berkas : {{$proposal->id}})</h3>
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