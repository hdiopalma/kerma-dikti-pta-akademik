<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <form id="formReviewBab2" method="POST" enctype="multipart/form-data"
            action="{{ route('reviewer.proposal.simpanReviewBab3') }}">
            @csrf
            <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">
            <div class="card-header bg-primary">
                <h3 class="card-title" style="margin: 2px">
                    BAB 3 | KESIAPAN SUMBER DAYA
                </h3>
            </div>

            <!-- card body -->
            <div class="card-body">
                <div class="accordion" id="accordionBAB3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelKJSDM-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelKJSDM-collapse" aria-expanded="false"
                                aria-controls="panelKJSDM-collapse">
                                <div class="text-bold text-primary">A. KESIAPAN KERJA SAMA DARI SEGI SDM</div>
                            </button>
                        </h2>
                        <div id="panelKJSDM-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelKJSDM-heading">
                            <div class="accordion-body">
                                <!-- DESKRIPSI SINGKAT KESIAPAN SDM -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Deskripsi
                                        Singkat Kesiapan SDM</div>
                                    <div class="col-sm-9">
                                        <div class="row border-grey">
                                            <!-- Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">
                                                <div class="text-bold">Perguruan Tinggi</div>
                                                <div id="KesiapanSDMPT" class="pb-2 pt-2 pl-0 pr-2">
                                                    {!! isset($proposal->bab3->deskripsi_singkat_kesiapan_sdm_pt) &&
                                                    trim($proposal->bab3->deskripsi_singkat_kesiapan_sdm_pt) !== ''
                                                        ? $proposal->bab3->deskripsi_singkat_kesiapan_sdm_pt
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                            <!-- Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Perguruan Tinggi Mitra</div>
                                                <div id="KesiapanSDMPTMitra" class="pb-2 pt-2">
                                                    {!! isset($proposal->bab3->deskripsi_singkat_kesiapan_sdm_mitra) &&
                                                    trim($proposal->bab3->deskripsi_singkat_kesiapan_sdm_mitra) !== ''
                                                        ? $proposal->bab3->deskripsi_singkat_kesiapan_sdm_mitra
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./DESKRIPSI SINGKAT KESIAPAN SDM -->

                                <!-- Komentar DESKRIPSI SINGKAT KESIAPAN SDM -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Komentar <code>*</code></div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Komentar Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">

                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarKesiapanSDMPT" name="komentar_deskripsi_singkat_kesiapan_sdm_pt"
                                                    class="form-control @error('komentar_deskripsi_singkat_kesiapan_sdm_pt') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_deskripsi_singkat_kesiapan_sdm_pt', $reviewer_bab3->deskripsi_singkat_kesiapan_sdm_pt ?? '') }}</textarea>
                                                @error('komentar_deskripsi_singkat_kesiapan_sdm_pt')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi-->
                                            <!-- Komentar Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">

                                                <!-- Text area komentar perguruan tinggi mitra -->
                                                <textarea id="komentarKesiapanSDMPTMitra" name="komentar_deskripsi_singkat_kesiapan_sdm_mitra"
                                                    class="form-control @error('komentar_deskripsi_singkat_kesiapan_sdm_mitra') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_deskripsi_singkat_kesiapan_sdm_mitra', $reviewer_bab3->deskripsi_singkat_kesiapan_sdm_mitra ?? '') }}</textarea>
                                                @error('komentar_deskripsi_singkat_kesiapan_sdm_mitra')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi mitra -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi Mitra-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar DESKRIPSI SINGKAT KESIAPAN SDM -->

                                <hr>

                                <!-- Jumlah Dosen yang Terlibat -->
                                <div class="form-group row">
                                    <div class="col-sm-3 text-bold pt-0">Jumlah Dosen yang Terlibat</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">
                                                <div class="text-bold">Perguruan Tinggi</div>
                                                <div id="JumlahDosenPT" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                    {!! isset($proposal->bab3->jumlah_dosen_terlibat_pt) && trim($proposal->bab3->jumlah_dosen_terlibat_pt) !== ''
                                                        ? $proposal->bab3->jumlah_dosen_terlibat_pt
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                            <!-- Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Perguruan Tinggi Mitra</div>
                                                <div id="JumlahDosenPTMitra" class="pb-2 pt-2 border-bottom">
                                                    {!! isset($proposal->bab3->jumlah_dosen_terlibat_mitra) &&
                                                    trim($proposal->bab3->jumlah_dosen_terlibat_mitra) !== ''
                                                        ? $proposal->bab3->jumlah_dosen_terlibat_mitra
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Jumlah Dosen yang Terlibat -->

                                <!-- Komentar Jumlah Dosen yang Terlibat -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Komentar <code>*</code></div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Komentar Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">

                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarJumlahDosenPT" name="komentar_jumlah_dosen_terlibat_pt"
                                                    class="form-control @error('komentar_jumlah_dosen_terlibat_pt') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_jumlah_dosen_terlibat_pt', $reviewer_bab3->jumlah_dosen_terlibat_pt ?? '') }}</textarea>
                                                @error('komentar_jumlah_dosen_terlibat_pt')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi-->
                                            <!-- Komentar Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">

                                                <!-- Text area komentar perguruan tinggi mitra -->
                                                <textarea id="komentarJumlahDosenPTMitra" name="komentar_jumlah_dosen_terlibat_mitra"
                                                    class="form-control @error('komentar_jumlah_dosen_terlibat_mitra') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_jumlah_dosen_terlibat_mitra', $reviewer_bab3->jumlah_dosen_terlibat_mitra ?? '') }}</textarea>
                                                @error('komentar_jumlah_dosen_terlibat_mitra')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi mitra -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi Mitra-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar Jumlah Dosen yang Terlibat -->

                                <hr>

                                <!-- Data dosen yang terlibat -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold"> Data Dosen
                                        yang Terlibat</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">
                                                <div class="text-bold">Perguruan Tinggi</div>
                                                <div class="d-flex align-content-center">
                                                    <div id="DataDosenPT" class="pt-1">
                                                        @if (isset($proposal->bab3->file_data_dosen_terlibat_pt) && trim($proposal->bab3->file_data_dosen_terlibat_pt) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab3->file_data_dosen_terlibat_pt)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-3 pt-1">
                                                        {!! isset($proposal->bab3->file_data_dosen_terlibat_pt)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Perguruan Tinggi Mitra</div>
                                                <div class="d-flex align-content-center">
                                                    <div id="DataDosenPTMitra" class="pt-1">
                                                        @if (isset($proposal->bab3->file_data_dosen_terlibat_mitra) &&
                                                                trim($proposal->bab3->file_data_dosen_terlibat_mitra) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab3->file_data_dosen_terlibat_mitra)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-3 pt-1">
                                                        {!! isset($proposal->bab3->file_data_dosen_terlibat_mitra)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Data dosen yang terlibat -->

                                <!-- Komentar Data dosen yang terlibat -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Komentar <code>*</code></div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Komentar Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">

                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarDataDosenPT" name="komentar_file_data_dosen_terlibat_pt"
                                                    class="form-control @error('komentar_file_data_dosen_terlibat_pt') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_file_data_dosen_terlibat_pt', $reviewer_bab3->file_data_dosen_terlibat_pt ?? '') }}</textarea>
                                                @error('komentar_file_data_dosen_terlibat_pt')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi-->
                                            <!-- Komentar Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">

                                                <!-- Text area komentar perguruan tinggi mitra -->
                                                <textarea id="komentarDataDosenPTMitra" name="komentar_file_data_dosen_terlibat_mitra"
                                                    class="form-control @error('komentar_file_data_dosen_terlibat_mitra') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_file_data_dosen_terlibat_mitra', $reviewer_bab3->file_data_dosen_terlibat_mitra ?? '') }}</textarea>
                                                @error('komentar_file_data_dosen_terlibat_mitra')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi mitra -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi Mitra-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar Data dosen yang terlibat -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelKJSS-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelKJSS-collapse" aria-expanded="false"
                                aria-controls="panelKJSS-collapse">
                                <div class="text-bold text-primary">B. KESIAPAN KERJA SAMA DARI SEGI SARANA</div>
                            </button>
                        </h2>
                        <div id="panelKJSS-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelKJSS-heading">
                            <div class="accordion-body">
                                <!-- DESKRIPSI SINGKAT Perguruan TInggi -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Deskripsi
                                        Singkat Perguruan Tinggi</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Perguruan Tinggi-->
                                            <div class="col-sm-6 border-bottom border-right">
                                                <div class="text-bold">Perguruan Tinggi</div>
                                                <div id="DeskripsiPT" class="pb-2 pt-2 pl-0 pr-2">
                                                    {!! isset($proposal->bab3->deskripsi_singkat_pt) && trim($proposal->bab3->deskripsi_singkat_pt) !== ''
                                                        ? $proposal->bab3->deskripsi_singkat_pt
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                            <!-- Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6 border-bottom">
                                                <div class="text-bold">Perguruan Tinggi Mitra</div>
                                                <div id="DeskripsiPTMitra" class="pb-2 pt-2">
                                                    {!! isset($proposal->bab3->deskripsi_singkat_mitra) && trim($proposal->bab3->deskripsi_singkat_mitra) !== ''
                                                        ? $proposal->bab3->deskripsi_singkat_mitra
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./DESKRIPSI SINGKAT Perguruan TInggi -->

                                <!-- Komentar DESKRIPSI SINGKAT Perguruan TInggi -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Komentar <code>*</code></div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Komentar Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">

                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarDeskripsiPT" name="komentar_deskripsi_singkat_pt"
                                                    class="form-control @error('komentar_deskripsi_singkat_pt') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_deskripsi_singkat_pt', $reviewer_bab3->deskripsi_singkat_pt ?? '') }}</textarea>
                                                @error('komentar_deskripsi_singkat_pt')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi-->
                                            <!-- Komentar Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">

                                                <!-- Text area komentar perguruan tinggi mitra -->
                                                <textarea id="komentarDeskripsiPTMitra" name="komentar_deskripsi_singkat_mitra"
                                                    class="form-control @error('komentar_deskripsi_singkat_mitra') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_deskripsi_singkat_mitra', $reviewer_bab3->deskripsi_singkat_mitra ?? '') }}</textarea>
                                                @error('komentar_deskripsi_singkat_mitra')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi mitra -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi Mitra-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar DESKRIPSI SINGKAT Perguruan TInggi -->

                                <hr>

                                <!-- LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold"> Lampiran Data Sarana dan
                                        Prasarana yang Dimiliki</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">
                                                <div class="text-bold">Perguruan Tinggi</div>
                                                <div class="d-flex align-items-center">
                                                    <div id="SaranaPrasaranaPT" class="pb-2 pt-2 pl-0 pr-2">
                                                        @if (isset($proposal->bab3->file_lampiran_sarana_prasarana_pt) &&
                                                                trim($proposal->bab3->file_lampiran_sarana_prasarana_pt) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab3->file_lampiran_sarana_prasarana_pt)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-3 pt-1">
                                                        {!! isset($proposal->bab3->file_lampiran_sarana_prasarana_pt)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ./Perguruan Tinggi-->
                                            <!-- Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Perguruan Tinggi Mitra</div>
                                                <div class="d-flex align-items-center">
                                                    <div id="SaranaPrasaranaPTMitra" class="pb-2 pt-2 pl-0 pr-2">
                                                        @if (isset($proposal->bab3->file_lampiran_sarana_prasarana_mitra) &&
                                                                trim($proposal->bab3->file_lampiran_sarana_prasarana_mitra) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab3->file_lampiran_sarana_prasarana_mitra)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-3 pt-1">
                                                        {!! isset($proposal->bab3->file_lampiran_sarana_prasarana_mitra)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ./Perguruan Tinggi Mitra-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI -->

                                <!-- Komentar LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Komentar <code>*</code></div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Komentar Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">

                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarSaranaPrasaranaPT" name="komentar_file_lampiran_sarana_prasarana_pt"
                                                    class="form-control @error('komentar_file_lampiran_sarana_prasarana_pt') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_file_lampiran_sarana_prasarana_pt', $reviewer_bab3->file_lampiran_sarana_prasarana_pt ?? '') }}</textarea>
                                                    @error('komentar_file_lampiran_sarana_prasarana_pt')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi-->
                                            <!-- Komentar Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">

                                                <!-- Text area komentar perguruan tinggi mitra -->
                                                <textarea id="komentarSaranaPrasaranaPTMitra" name="komentar_file_lampiran_sarana_prasarana_mitra"
                                                    class="form-control @error('komentar_file_lampiran_sarana_prasarana_mitra') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_file_lampiran_sarana_prasarana_mitra', $reviewer_bab3->file_lampiran_sarana_prasarana_mitra ?? '') }}</textarea>
                                                    @error('komentar_file_lampiran_sarana_prasarana_mitra')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                <!-- ./Text area komentar perguruan tinggi mitra -->
                                            </div>
                                            <!-- ./Komentar Perguruan Tinggi Mitra-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI -->
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- kolom komentar bab 3 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold text-primary mt-1">Komentar Reviewer</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4 col-form-label text-bold">Status Proposal BAB 3</div>
                            <div class="col-sm-8">
                                <select name="status_proposal" id="status_proposal"
                                    class="form-control @error('status_proposal') is-invalid @enderror">
                                    <option value=""> -- Pilih -- </option>
                                    <option value="Ditolak"
                                        {{ old('status_proposal') == 'Ditolak' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab3->status_proposal) && $reviewer_bab3->status_proposal == 'Ditolak' ? 'selected' : '' }}>
                                        Ditolak
                                    </option>
                                    <option value="Revisi" {{ old('status_proposal') == 'Revisi' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab3->status_proposal) && $reviewer_bab3->status_proposal == 'Revisi' ? 'selected' : '' }}>
                                        Revisi
                                    </option>
                                    <option value="Diterima"
                                        {{ old('status_proposal') == 'Diterima' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab3->status_proposal) && $reviewer_bab3->status_proposal == 'Diterima' ? 'selected' : '' }}>
                                        Diterima
                                    </option>
                                </select>
                                @error('status_proposal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 col-xs-12 col-form-label text-bold mt-3">Review BAB 2</div>
                            <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                                <!-- Text area komentar bab3 -->
                                <textarea id="KomentarBab2" name="komentar_bab3" class="form-control @error('komentar_bab3') is-invalid @enderror"
                                    rows="3" placeholder="Tuliskan review anda...">{{ old('komentar_bab3', $reviewer_bab3->komentar_bab3 ?? '') }}</textarea>
                                @error('komentar_bab3')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <!-- ./Text area komentar bab3 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./kolom komentar bab 3 -->
            </div>
            <!-- ./card body -->
            <div class="card-footer">
                <!-- Bab sebelumnya -->
                <a href="{{ route('reviewer.proposal.viewBab2', encrypt($proposal->id)) }}"
                    class="btn btn-primary float-left">Sebelumnya</a>
                <!-- Bab selanjutnya -->
                <!-- Simpan dan Lanjutkan -->
                <button type="submit" class="btn btn-warning float-end">Simpan dan Lanjutkan</button>
            </div>
        </form>
    </div>
</div>
