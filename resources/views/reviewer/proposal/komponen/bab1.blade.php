<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <form id="formReviewBab1" method="POST" enctype="multipart/form-data"
            action="{{ route('reviewer.proposal.simpanReviewBab1') }}">
            @csrf
            <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">
            <div class="card-header bg-primary">
                <h3 class="card-title" style="margin: 2px">
                    BAB 1 | PROFIL PERGURUAN TINGGI
                </h3>
            </div>

            <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">
            <div class="card-body">
                <div class="accordion" id="accordionBAB1">

                    <!-- Panel Profil Perguruan Tinggi -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelProfilPT-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelProfilPT-collapse" aria-expanded="false"
                                aria-controls="panelProfilPT-collapse">
                                <div class="text-bold text-primary">A. Profil Perguruan Tinggi</div>
                            </button>
                        </h2>
                        <div id="panelProfilPT-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelProfilPT-heading">
                            <div class="accordion-body">
                                <!-- Nama Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Nama Perguruan
                                        Tinggi</div>
                                    <div class="col-sm-8">
                                        <div id="NamaPT" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->nama_pt) && trim($proposal->bab1->nama_pt != '')
                                                ? $proposal->bab1->nama_pt
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>

                                    </div>
                                </div>

                                <!-- Komentar Nama Perguruan Tinggi -->

                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="KomentarNamaPT" name="komentar_nama_pt"
                                            class="form-control @error('komentar_nama_pt') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_nama_pt', $reviewer_bab1->nama_pt ?? '') }}</textarea>
                                        @error('komentar_nama_pt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>

                                <hr class="mt-0 mb-0">

                                <!-- ./ KomentarNama Perguruan Tinggi -->

                                <!-- ./Nama Perguruan Tinggi -->

                                <!-- Alamat Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Alamat Perguruan Tinggi
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="AlamatPT" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->alamat_pt) && trim($proposal->bab1->alamat_pt != '')
                                                ? $proposal->bab1->alamat_pt
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Alamat Perguruan Tinggi -->

                                <!-- Komentar Alamat Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar alamat perguruan tinggi -->
                                        <textarea id="KomentarAlamatPT" name="komentar_alamat_pt"
                                            class="form-control @error('komentar_alamat_pt') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_alamat_pt', $reviewer_bab1->alamat_pt ?? '') }}</textarea>
                                        @error('komentar_alamat_pt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar alamat perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Alamat Perguruan Tinggi -->

                                <hr class="mt-0 mb-0">

                                <!-- Izin Operasional -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Izin Operasional Perguruan
                                        Tinggi</div>
                                    <div class="col-sm-8">
                                        <div id="IzinOperasional" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->ijin_operasional_pt) && trim($proposal->bab1->ijin_operasional_pt != '')
                                                ? $proposal->bab1->ijin_operasional_pt
                                                : "<b
                                                                                                                                                                                                                                                                                                                class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Izin Operasional -->

                                <!-- Komentar Izin Operasional -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar izin operasional -->
                                        <textarea id="KomentarIzinOperasional" name="komentar_ijin_operasional_pt"
                                            class="form-control @error('komentar_ijin_operasional_pt') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_ijin_operasional_pt', $reviewer_bab1->ijin_operasional_pt ?? '') }}</textarea>
                                        @error('komentar_ijin_operasional_pt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar izin operasional -->
                                    </div>
                                </div>
                                <!-- ./Komentar Izin Operasional -->

                                <!-- Scan Izin Operasional -->
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Scan Izin Operasional Perguruan
                                        Tinggi</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="pt-1">
                                                @isset($proposal->bab1->scan_ijin_operasional_pt)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_pt)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset
                                            </div>
                                            <div class="pl-3 pt-2">
                                                {!! isset($proposal->bab1->scan_ijin_operasional_pt)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- ./Scan Izin Operasional -->

                                <!-- Komentar Scan Izin Operasional -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar scan izin operasional -->
                                        <textarea id="KomentarScanIzinOperasional" name="komentar_scan_ijin_operasional_pt"
                                            class="form-control @error('komentar_scan_ijin_operasional_pt') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_ijin_operasional_pt', $reviewer_bab1->scan_ijin_operasional_pt ?? '') }}</textarea>
                                        @error('komentar_scan_ijin_operasional_pt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar scan izin operasional -->
                                    </div>
                                </div>
                                <!-- ./Komentar Scan Izin Operasional -->

                                <hr class="mt-0 mb-0">

                                <!-- Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Status Akreditasi Institusi
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="StatusAkreditasi" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->status_akreditasi_institusi->status)
                                                ? $proposal->bab1->status_akreditasi_institusi->status
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Status Akreditasi Institusi -->

                                <!-- Komentar Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar status akreditasi institusi -->
                                        <textarea id="KomentarStatusAkreditasi" name="komentar_status_akreditasi_institusi"
                                            class="form-control @error('komentar_status_akreditasi_institusi') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_status_akreditasi_institusi', $reviewer_bab1->status_akreditasi_institusi ?? '') }}</textarea>
                                        @error('komentar_status_akreditasi_institusi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar status akreditasi institusi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Status Akreditasi Institusi -->

                                <!-- Scan Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Scan Status Akreditasi Institusi</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_status_akreditasi_institusi)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_status_akreditasi_institusi)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset
                                            </div>
                                            <div class="pl-3 pt-2">
                                                {!! isset($proposal->bab1->scan_status_akreditasi_institusi)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Scan Status Akreditasi Institusi -->

                                <!-- Komentar Scan Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar scan status akreditasi institusi -->
                                        <textarea id="KomentarScanStatusAkreditasi" name="komentar_scan_status_akreditasi_institusi"
                                            class="form-control @error('komentar_scan_status_akreditasi_institusi') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_status_akreditasi_institusi', $reviewer_bab1->scan_status_akreditasi_institusi ?? '') }}</textarea>
                                        @error('komentar_scan_status_akreditasi_institusi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar scan status akreditasi institusi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Scan Status Akreditasi Institusi -->
                            </div>
                        </div>
                    </div>
                    <!-- ./Profil Perguruan Tinggi -->

                    <!-- Profil Perguruan Tinggi Mitra -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelProfilPTMitra-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelProfilPTMitra-collapse" aria-expanded="false"
                                aria-controls="panelProfilPTMitra-collapse">
                                <div class="text-bold text-primary">B. Profil Perguruan Tinggi Mitra</div>
                            </button>
                        </h2>
                        <div id="panelProfilPTMitra-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelProfilPTMitra-heading">
                            <div class="accordion-body">

                                <!-- Nama Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Nama Perguruan Tinggi
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="NamaPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->nama_pt_mitra) && trim($proposal->bab1->nama_pt_mitra != '')
                                                ? $proposal->bab1->nama_pt_mitra
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Nama Perguruan Tinggi -->

                                <!-- Komentar Nama Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar nama perguruan tinggi -->
                                        <textarea id="KomentarNamaPTMitra" name="komentar_nama_pt_mitra"
                                            class="form-control @error('komentar_nama_pt_mitra') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_nama_pt_mitra', $reviewer_bab1->nama_pt_mitra ?? '') }}</textarea>
                                        @error('komentar_nama_pt_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar nama perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Nama Perguruan Tinggi -->

                                <hr>

                                <!-- Alamat Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Alamat Perguruan
                                        Tinggi
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="AlamatPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->alamat_pt_mitra) && trim($proposal->bab1->alamat_pt_mitra != '')
                                                ? $proposal->bab1->alamat_pt_mitra
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Alamat Perguruan Tinggi -->

                                <!-- Komentar Alamat Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar alamat perguruan tinggi -->
                                        <textarea id="KomentarAlamatPTMitra" name="komentar_alamat_pt_mitra"
                                            class="form-control @error('komentar_alamat_pt_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_alamat_pt_mitra', $reviewer_bab1->alamat_pt_mitra ?? '') }}</textarea>
                                        <!-- ./Text area komentar alamat perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Alamat Perguruan Tinggi -->

                                <hr>

                                <!-- Negara -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Negara</div>
                                    <div class="col-sm-8">
                                        <div id="NegaraPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->negara_mitra->name)
                                                ? $proposal->bab1->negara_mitra->name
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Negara -->

                                <!-- Komentar Negara -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar negara -->
                                        <textarea id="KomentarNegaraPTMitra" name="komentar_negara_mitra"
                                            class="form-control @error('komentar_negara_mitra') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_negara_mitra', $reviewer_bab1->negara_mitra ?? '') }}</textarea>
                                        @error('komentar_negara_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar negara -->
                                    </div>
                                </div>
                                <!-- ./Komentar Negara -->

                                <hr>

                                <!-- Izin Operasional Perguruan Tinggi-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Izin Operasional Perguruan
                                        Tinggi</div>
                                    <div class="col-sm-8">
                                        <div id="IzinOperasional" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->ijin_operasional_pt_mitra)
                                                ? $proposal->bab1->ijin_operasional_pt_mitra
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Izin Operasional Perguruan Tinggi -->

                                <!-- Komentar Izin Operasional Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar izin operasional perguruan tinggi -->
                                        <textarea id="KomentarIzinOperasional" name="komentar_ijin_operasional_pt_mitra"
                                            class="form-control @error('komentar_ijin_operasional_pt_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_ijin_operasional_pt_mitra', $reviewer_bab1->ijin_operasional_pt_mitra ?? '') }}</textarea>
                                        @error('komentar_ijin_operasional_pt_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar izin operasional perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Izin Operasional Perguruan Tinggi -->

                                <!-- Scan Izin Operasional Perguruan Tinggi -->
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Scan Izin Operasional Perguruan
                                        Tinggi</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_ijin_operasional_pt_mitra)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_pt_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset
                                            </div>
                                            <div class="pl-3 pt-2">
                                                {!! isset($proposal->bab1->scan_ijin_operasional_pt_mitra)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Scan Izin Operasional Perguruan Tinggi -->

                                <!-- Komentar Scan Izin Operasional Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar scan izin operasional perguruan tinggi -->
                                        <textarea id="KomentarScanIzinOperasional" name="komentar_scan_ijin_operasional_pt_mitra"
                                            class="form-control @error('komentar_scan_ijin_operasional_pt_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_ijin_operasional_pt_mitra', $reviewer_bab1->scan_ijin_operasional_pt_mitra ?? '') }}</textarea>
                                        @error('komentar_scan_ijin_operasional_pt_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar scan izin operasional perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Scan Izin Operasional Perguruan Tinggi -->

                                <hr>

                                <!-- Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Status Akreditasi
                                        Institusi
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="StatusAkreditasi" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->status_akreditasi_institusi_mitra->status)
                                                ? $proposal->bab1->status_akreditasi_institusi_mitra->status
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Status Akreditasi Institusi -->

                                <!-- Komentar Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar status akreditasi institusi -->
                                        <textarea id="KomentarStatusAkreditasi" name="komentar_status_akreditasi_institusi_mitra"
                                            class="form-control @error('komentar_status_akreditasi_institusi_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_status_akreditasi_institusi_mitra', $reviewer_bab1->status_akreditasi_institusi_mitra ?? '') }}</textarea>
                                        @error('komentar_status_akreditasi_institusi_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar status akreditasi institusi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Status Akreditasi Institusi -->

                                <!-- Scan Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Scan Status Akreditasi Institusi</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_status_akreditasi_institusi_mitra)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_status_akreditasi_institusi_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset
                                            </div>
                                            <div class="pl-3 pt-2">
                                                {!! isset($proposal->bab1->scan_status_akreditasi_institusi_mitra)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Scan Status Akreditasi Institusi -->

                                <!-- Komentar Scan Status Akreditasi Institusi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar scan status akreditasi institusi -->
                                        <textarea id="KomentarScanStatusAkreditasi" name="komentar_scan_status_akreditasi_institusi_mitra"
                                            class="form-control @error('komentar_scan_status_akreditasi_institusi_mitra') is-invalid @enderror"
                                            rows="3" placeholder="Komentar">{{ old('komentar_scan_status_akreditasi_institusi_mitra', $reviewer_bab1->scan_status_akreditasi_institusi_mitra ?? '') }}</textarea>
                                        @error('komentar_scan_status_akreditasi_institusi_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar scan status akreditasi institusi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Scan Status Akreditasi Institusi -->

                                <hr>

                                <!-- Peringkat Internasional -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Peringkat
                                        Internasional
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="PeringkatPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->peringkat_internasional_mitra) &&
                                            trim($proposal->bab1->peringkat_internasional_mitra != '')
                                                ? $proposal->bab1->peringkat_internasional_mitra
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Peringkat Internasional -->

                                <!-- Komentar Peringkat Internasional -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar peringkat internasional -->
                                        <textarea id="KomentarPeringkatPTMitra" name="komentar_peringkat_internasional_mitra"
                                            class="form-control @error('komentar_peringkat_internasional_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_peringkat_internasional_mitra', $reviewer_bab1->peringkat_internasional_mitra ?? '') }}</textarea>
                                        @error('komentar_peringkat_internasional_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar peringkat internasional -->
                                    </div>
                                </div>
                                <!-- ./Komentar Peringkat Internasional -->

                            </div>
                        </div>
                    </div>
                    <!-- ./Profil Perguruan Tinggi Mitra -->

                    <!-- Profil Program Study -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelProfilProdi-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelProfilProdi-collapse" aria-expanded="false"
                                aria-controls="panelProfilProdi-collapse">
                                <div class="text-bold text-primary">C. Profil Program Study</div>
                            </button>
                        </h2>
                        <div id="panelProfilProdi-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelProfilProdi-heading">
                            <div class="accordion-body">
                                <!-- Nama Prodi -->
                                <div class="row">
                                    <div class="col-sm-4 col-form-label text-bold">Nama Prodi
                                    </div>
                                    <div class="col-sm-4 border-right pt-1">

                                        <div class="text-bold">PT</div>
                                        <div id="ProdiPT" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->nama_prodi) && trim($proposal->bab1->nama_prodi != '')
                                                ? $proposal->bab1->nama_prodi
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>

                                    </div>
                                    <div class="col-sm-4 pt-1">

                                        <div class="text-bold">PT Mitra</div>
                                        <div id="ProdiPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->nama_prodi_mitra) && trim($proposal->bab1->nama_prodi_mitra != '')
                                                ? $proposal->bab1->nama_prodi_mitra
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>

                                    </div>
                                </div>
                                <!-- ./Nama Prodi -->

                                <!-- Komentar Nama Prodi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-4 border-right">
                                        <!-- Text area komentar nama prodi -->
                                        <textarea id="KomentarProdiPT" name="komentar_nama_prodi"
                                            class="form-control @error('komentar_nama_prodi') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_nama_prodi', $reviewer_bab1->nama_prodi ?? '') }}</textarea>
                                        @error('komentar_nama_prodi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar nama prodi -->
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- Text area komentar nama prodi mitra -->
                                        <textarea id="KomentarProdiPTMitra" name="komentar_nama_prodi_mitra"
                                            class="form-control @error('komentar_nama_prodi_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_nama_prodi_mitra', $reviewer_bab1->nama_prodi_mitra ?? '') }}</textarea>
                                        @error('komentar_nama_prodi_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar nama prodi mitra -->
                                    </div>
                                </div>
                                <!-- ./Komentar Nama Prodi -->

                                <hr>

                                <!-- Akreditasi Prodi -->
                                <div class="row">
                                    <div class="col-sm-4 col-form-label text-bold">Akreditasi Prodi
                                    </div>
                                    <div class="col-sm-4 border-right pt-1">

                                        <div class="text-bold">PT</div>
                                        <div id="AkreditasiProdiPT" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->status_akreditasi_prodi->status)
                                                ? $proposal->bab1->status_akreditasi_prodi->status
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>

                                    </div>
                                    <div class="col-sm-4 pt-1">

                                        <div class="text-bold">PT Mitra</div>
                                        <div id="AkreditasiProdiPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->status_akreditasi_prodi_mitra->status)
                                                ? $proposal->bab1->status_akreditasi_prodi_mitra->status
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>

                                    </div>
                                </div>
                                <!-- ./Akreditasi Prodi -->

                                <!-- Komentar Akreditasi Prodi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-4 border-right">
                                        <!-- Text area komentar akreditasi prodi -->
                                        <textarea id="KomentarAkreditasiProdiPT" name="komentar_akreditasi_prodi"
                                            class="form-control @error('komentar_akreditasi_prodi') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_akreditasi_prodi', $reviewer_bab1->akreditasi_prodi ?? '') }}</textarea>
                                        @error('komentar_akreditasi_prodi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar akreditasi prodi -->
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- Text area komentar akreditasi prodi mitra -->
                                        <textarea id="KomentarAkreditasiProdiPTMitra" name="komentar_akreditasi_prodi_mitra"
                                            class="form-control @error('komentar_akreditasi_prodi_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_akreditasi_prodi_mitra', $reviewer_bab1->akreditasi_prodi_mitra ?? '') }}</textarea>
                                        @error('komentar_akreditasi_prodi_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar akreditasi prodi mitra -->
                                    </div>
                                </div>
                                <!-- ./Komentar Akreditasi Prodi -->



                                <!-- SK Akreditasi Prodi -->
                                <div class="row">
                                    <div class="col-sm-4 col-form-label text-bold">SK Akreditasi Prodi
                                    </div>
                                    <div class="col-sm-4 border-right pt-1">
                                        <div class="form-group d-flex justify-content-start">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_sk_akreditasi_prodi)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_sk_akreditasi_prodi)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset

                                            </div>
                                            <div class="pl-3 pt-2">
                                                {!! isset($proposal->bab1->scan_sk_akreditasi_prodi)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        <div class="form-group d-flex justify-content-start">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_sk_akreditasi_prodi_mitra)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_sk_akreditasi_prodi_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset

                                            </div>
                                            <div class="pl-3 pt-2">
                                                {!! isset($proposal->bab1->scan_sk_akreditasi_prodi_mitra)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./SK Akreditasi Prodi -->

                                <!-- Komentar SK Akreditasi Prodi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-4 border-right">
                                        <!-- Text area komentar sk akreditasi prodi -->
                                        <textarea id="KomentarSKAkreditasiProdiPT" name="komentar_scan_sk_akreditasi_prodi"
                                            class="form-control @error('komentar_scan_sk_akreditasi_prodi') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_sk_akreditasi_prodi', $reviewer_bab1->scan_sk_akreditasi_prodi ?? '') }}</textarea>
                                        @error('komentar_scan_sk_akreditasi_prodi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar sk akreditasi prodi -->
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- Text area komentar sk akreditasi prodi mitra -->
                                        <textarea id="KomentarSKAkreditasiProdiPTMitra" name="komentar_scan_sk_akreditasi_prodi_mitra"
                                            class="form-control @error('komentar_scan_sk_akreditasi_prodi_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_sk_akreditasi_prodi_mitra', $reviewer_bab1->scan_sk_akreditasi_prodi_mitra ?? '') }}</textarea>
                                        @error('komentar_scan_sk_akreditasi_prodi_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar sk akreditasi prodi mitra -->
                                    </div>
                                </div>
                                <!-- ./Komentar SK Akreditasi Prodi -->

                                <hr>

                                <!-- Izin Operasional Prodi -->
                                <div class="row">
                                    <div class="col-sm-4 col-form-label text-bold">Izin Operasional Prodi
                                    </div>
                                    <div class="col-sm-4 border-right pt-1">
                                        <div class="text-bold">PT</div>
                                        <div class="form-group d-flex justify-content-start">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_ijin_operasional_prodi)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_prodi)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset
                                            </div>
                                            <div class="pl-3 pt-2">

                                                {!! isset($proposal->bab1->scan_ijin_operasional_prodi)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        <div class="text-bold">PT Mitra</div>
                                        <div class="form-group d-flex justify-content-start">
                                            <div class=" pt-1">
                                                @isset($proposal->bab1->scan_ijin_operasional_prodi_mitra)
                                                    <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_prodi_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endisset
                                            </div>
                                            <div class="pl-3 pt-2">

                                                {!! isset($proposal->bab1->scan_ijin_operasional_prodi_mitra)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Izin Operasional Prodi -->

                                <!-- Komentar Izin Operasional Prodi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-4 border-right">
                                        <!-- Text area komentar izin operasional prodi -->
                                        <textarea id="KomentarIzinOperasionalProdiPT" name="komentar_scan_ijin_operasional_prodi"
                                            class="form-control @error('komentar_scan_ijin_operasional_prodi') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_ijin_operasional_prodi', $reviewer_bab1->scan_ijin_operasional_prodi ?? '') }}</textarea>
                                        @error('komentar_scan_ijin_operasional_prodi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar izin operasional prodi -->
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- Text area komentar izin operasional prodi mitra -->
                                        <textarea id="KomentarIzinOperasionalProdiPTMitra" name="komentar_scan_ijin_operasional_prodi_mitra"
                                            class="form-control @error('komentar_scan_ijin_operasional_prodi_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_ijin_operasional_prodi_mitra', $reviewer_bab1->scan_ijin_operasional_prodi_mitra ?? '') }}</textarea>
                                        @error('komentar_scan_ijin_operasional_prodi_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar izin operasional prodi mitra -->
                                    </div>
                                </div>
                                <!-- ./Komentar Izin Operasional Prodi -->

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelDokumen-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelDokumen-collapse" aria-expanded="false"
                                aria-controls="panelDokumen-collapse">
                                <div class="text-bold text-primary">D. Dokumen Kerjasama</div>
                            </button>
                        </h2>
                        <div id="panelDokumen-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelDokumen-heading">
                            <div class="accordion-body">

                                <!-- Proposal Usulan Kerja Sama Perguruan Tinggi -->
                                <div class="row">
                                    <div class="col-sm-4 col-form-label text-bold">Proposal Usulan Kerja Sama Perguruan
                                        Tinggi
                                    </div>
                                    <div class="col-sm-8 pt-1 d-flex align-items-center">
                                        <div class=" pt-1">
                                            {!! isset($proposal->bab1->proposal_usulan_kerjsama)
                                                ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                        </div>
                                        <div class="pt-2 pl-2">
                                            @isset($proposal->bab1->proposal_usulan_kerjsama)
                                                <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab1->proposal_usulan_kerjsama)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                        class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Proposal Usulan Kerja Sama Perguruan Tinggi -->

                                <!-- Komentar Proposal Usulan Kerja Sama Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar proposal usulan kerja sama perguruan tinggi -->
                                        <textarea id="KomentarProposalUsulanKerjaSamaPT" name="komentar_proposal_usulan_kerjsama"
                                            class="form-control @error('komentar_proposal_usulan_kerjsama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_proposal_usulan_kerjsama', $reviewer_bab1->proposal_usulan_kerjsama ?? '') }}</textarea>
                                        @error('komentar_proposal_usulan_kerjsama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar proposal usulan kerja sama perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Proposal Usulan Kerja Sama Perguruan Tinggi -->
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold text-primary mt-1">Komentar Reviewer</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <!--
                            <div class="col-sm-4 col-form-label text-bold">Status Proposal BAB 1</div>
                            <div class="col-sm-8">
                                <select name="status_proposal" id="status_proposal"
                                    class="form-control @error('status_proposal') is-invalid @enderror">
                                    <option value=""> -- Pilih -- </option>
                                    <option value="Ditolak"
                                        {{ old('status_proposal', $reviewer_bab1->status_proposal ?? '') == 'Ditolak' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab1->status_proposal) && $reviewer_bab1->status_proposal == 'Ditolak' ? 'selected' : '' }}>
                                        Ditolak
                                    </option>
                                    <option value="Revisi"
                                        {{ old('status_proposal', $reviewer_bab1->status_proposal ?? '') == 'Revisi' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab1->status_proposal) && $reviewer_bab1->status_proposal == 'Revisi' ? 'selected' : '' }}>
                                        Revisi
                                    </option>
                                    <option value="Diterima"
                                        {{ old('status_proposal', $reviewer_bab1->status_proposal ?? '') == 'Diterima' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab1->status_proposal) && $reviewer_bab1->status_proposal == 'Diterima' ? 'selected' : '' }}>
                                        Diterima
                                    </option>
                                </select>
                                @error('status_proposal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        -->
                            <div class="col-sm-4 col-xs-12 col-form-label text-bold">Review BAB 1</div>
                            <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                                <!-- Text area komentar bab1 -->
                                <textarea id="KomentarBab1" name="komentar_bab1" class="form-control @error('komentar_bab1') is-invalid @enderror"
                                    rows="3" placeholder="Tuliskan review anda...">{{ old('komentar_bab1', $reviewer_bab1->komentar_bab1 ?? '') }}</textarea>
                                @error('komentar_bab1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <!-- ./Text area komentar bab1 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <!-- Kembali -->
                <a href="{{ route('reviewer.proposal.show', encrypt($proposal->id)) }}"
                    class="btn btn-secondary">Kembali ke
                    halaman utama</a>
                <!-- Simpan dan Lanjutkan -->
                <button type="submit" class="btn btn-warning float-end">Simpan dan Lanjutkan</button>
            </div>
        </form>
    </div>
</div>

<!-- Hampir 1000 line, semoga tidak ada bug :) -->