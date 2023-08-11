<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title" style="margin: 2px">
                BAB 3 | KESIAPAN SUMBER DAYA
            </h3>
        </div>

        <div class="card-body">
            <div class="accordion" id="accordionBAB3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelKJSDM-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelKJSDM-collapse" aria-expanded="false"
                            aria-controls="panelKJSDM-collapse">
                            A. KESIAPAN KERJA SAMA DARI SEGI SDM
                        </button>
                    </h2>
                    <div id="panelKJSDM-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelKJSDM-heading">
                        <div class="accordion-body">
                            <!-- DESKRIPSI SINGKAT KESIAPAN SDM -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label d-flex align-items-center text-bold">Deskripsi
                                    Singkat Kesiapan SDM</div>
                                <div class="col-sm-9">
                                    <div class="row border-bottom border-grey">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            <div id="KesiapanSDMPT" class="pb-2 pt-2 pl-0 pr-2 border-right">
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

                            <!-- Jumlah Dosen yang Terlibat -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label d-flex align-items-center text-bold">Jumlah Dosen
                                    yang Terlibat</div>
                                <div class="col-sm-9">
                                    <div class="row border-bottom border-grey">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            <div id="JumlahDosenPT" class="pb-2 pt-2 pl-0 pr-2 border-right">
                                                {!! isset($proposal->bab3->jumlah_dosen_terlibat_pt) && trim($proposal->bab3->jumlah_dosen_terlibat_pt) !== ''
                                                    ? $proposal->bab3->jumlah_dosen_terlibat_pt
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi Mitra</div>
                                            <div id="JumlahDosenPTMitra" class="pb-2 pt-2">
                                                {!! isset($proposal->bab3->jumlah_dosen_terlibat_mitra) &&
                                                trim($proposal->bab3->jumlah_dosen_terlibat_mitra) !== ''
                                                    ? $proposal->bab3->jumlah_dosen_terlibat_mitra
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data dosen yang terlibat -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label d-flex align-items-center text-bold"> Data Dosen
                                    yang Terlibat</div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            <div id="DataDosenPT" class="pb-2 pt-2 pl-0 pr-2 border-right">
                                                @if (isset($proposal->bab3->file_data_dosen_terlibat_pt) && trim($proposal->bab3->file_data_dosen_terlibat_pt) !== '')
                                                    <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab3->file_data_dosen_terlibat_pt)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi Mitra</div>
                                            <div id="DataDosenPTMitra" class="pb-2 pt-2">
                                                @if (isset($proposal->bab3->file_data_dosen_terlibat_mitra) &&
                                                        trim($proposal->bab3->file_data_dosen_terlibat_mitra) !== '')
                                                    <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab3->file_data_dosen_terlibat_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelKJSS-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelKJSS-collapse" aria-expanded="false"
                            aria-controls="panelKJSS-collapse">
                            B. KESIAPAN KERJA SAMA DARI SEGI SARANA
                        </button>
                    </h2>
                    <div id="panelKJSS-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelKJSS-heading">
                        <div class="accordion-body">
                            <!-- DESKRIPSI SINGKAT Perguruan TInggi -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label d-flex align-items-center text-bold">Deskripsi
                                    Singkat Perguruan Tinggi</div>
                                <div class="col-sm-9">
                                    <div class="row border-bottom border-grey">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            <div id="DeskripsiPT" class="pb-2 pt-2 pl-0 pr-2 border-right">
                                                {!! isset($proposal->bab3->deskripsi_singkat_pt) && trim($proposal->bab3->deskripsi_singkat_pt) !== ''
                                                    ? $proposal->bab3->deskripsi_singkat_pt
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-6">
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

                            <!-- LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label d-flex align-items-center text-bold"> Lampiran Data
                                    Sarana dan Prasarana yang Dimiliki</div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            <div id="SaranaPrasaranaPT" class="pb-2 pt-2 pl-0 pr-2 border-right">
                                                @if (isset($proposal->bab3->file_lampiran_sarana_prasarana_pt) &&
                                                        trim($proposal->bab3->file_lampiran_sarana_prasarana_pt) !== '')
                                                    <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab3->file_lampiran_sarana_prasarana_pt)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi Mitra</div>
                                            <div id="SaranaPrasaranaPTMitra" class="pb-2 pt-2">
                                                @if (isset($proposal->bab3->file_lampiran_sarana_prasarana_mitra) &&
                                                        trim($proposal->bab3->file_lampiran_sarana_prasarana_mitra) !== '')
                                                    <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab3->file_lampiran_sarana_prasarana_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <!-- Bab sebelumnya -->
            <a href="{{ route('admin.proposal.viewBab2', encrypt($proposal->id)) }}"
                class="btn btn-primary float-left">Sebelumnya</a>
            <!-- Bab selanjutnya -->
            <a href="{{ route('admin.proposal.viewBab4', encrypt($proposal->id)) }}"
                class="btn btn-primary float-right">Selanjutnya</a>
        </div>
    </div>
</div>
