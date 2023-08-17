<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title" style="margin: 2px">
                BAB 1 | PROFIL PERGURUAN TINGGI
            </h3>
        </div>

        <div class="card-body">
            <div class="accordion" id="accordionBAB1">

                <!-- Panel Profil Perguruan Tinggi -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelProfilPT-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelProfilPT-collapse" aria-expanded="false"
                            aria-controls="panelProfilPT-collapse">
                            A. Profil Perguruan Tinggi
                        </button>
                    </h2>
                    <div id="panelProfilPT-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelProfilPT-heading">
                        <div class="accordion-body">
                            <!-- Nama Perguruan Tinggi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Nama Perguruan Tinggi</div>
                                <div class="col-sm-8">
                                    <div id="NamaPT" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->nama_pt) && trim($proposal->bab1->nama_pt != '')
                                            ? $proposal->bab1->nama_pt
                                            : "<b class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Nama Perguruan Tinggi -->

                            @isset($hasilReview)
                                <!-- Komentar Nama Perguruan Tinggi -->

                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea disabled id="KomentarNamaPT" name="komentar_nama_pt" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->nama_pt }}</textarea>

                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>

                                <hr class="mt-0 mb-0">

                                <!-- ./ KomentarNama Perguruan Tinggi -->
                            @endisset

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

                            @isset($hasilReview)
                                <!-- Komentar Alamat Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar alamat perguruan tinggi -->
                                        <textarea disabled id="KomentarAlamatPT" name="komentar_alamat_pt" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->alamat_pt }}</textarea>

                                        <!-- ./Text area komentar alamat perguruan tinggi -->
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">

                                <!-- ./Komentar Alamat Perguruan Tinggi -->
                            @endisset

                            <!-- Izin Operasional -->
                            <div class="form-group row">
                                <div class="row">
                                    <div class="col-sm-4 col-form-label text-bold">Izin Operasional Perguruan
                                        Tinggi</div>
                                    <div class="col-sm-8">
                                        <div id="IzinOperasional" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab1->ijin_operasional_pt) && trim($proposal->bab1->ijin_operasional_pt != '')
                                                ? $proposal->bab1->ijin_operasional_pt
                                                : "<b class='text-red'>BELUM DIISI</b>" !!}
                                        </div>

                                    </div>
                                </div>

                                @isset($hasilReview)
                                    <!-- Komentar Izin Operasional -->
                                    <div class="form-group row pt-3 ">
                                        <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                        <div class="col-sm-8">
                                            <!-- Text area komentar izin operasional -->
                                            <textarea disabled id="KomentarIzinOperasional" name="komentar_ijin_operasional_pt" class="form-control" rows="3"
                                                placeholder="Komentar">{{ $hasilReview->ijin_operasional_pt }}</textarea>

                                            <!-- ./Text area komentar izin operasional -->
                                        </div>
                                    </div>
                                    <!-- ./Komentar Izin Operasional -->
                                @endisset

                                <div class="row">
                                    <div class="col-sm-8 offset-sm-4">
                                        <div class="form-group row pt-2">
                                            <label class="col-sm-4 col-form-label">Scan Izin Operasional</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="pt-1">
                                                        @isset($proposal->bab1->scan_ijin_operasional_pt)
                                                            <a target="_blank"
                                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_pt)) }}"
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

                                        @isset($hasilReview)
                                            <!-- Komentar Scan Izin Operasional -->
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                                <div class="col-sm-8">
                                                    <!-- Text area komentar scan izin operasional -->
                                                    <textarea disabled id="KomentarScanIzinOperasional" name="komentar_scan_ijin_operasional_pt" class="form-control"
                                                        rows="3" placeholder="Komentar">{{ $hasilReview->scan_ijin_operasional_pt }}</textarea>

                                                    <!-- ./Text area komentar scan izin operasional -->
                                                </div>
                                            </div>
                                            <!-- ./Komentar Scan Izin Operasional -->
                                        @endisset

                                    </div>
                                </div>
                            </div>
                            <!-- ./Izin Operasional -->

                            @isset($hasilReview)
                                <hr class="mt-0 mb-0">
                            @endisset

                            <!-- Status Akreditasi Institusi -->
                            <div class="form-group row">
                                <div class="row">
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

                                @isset($hasilReview)
                                    <!-- Komentar Status Akreditasi Institusi -->
                                    <div class="form-group row pt-3 ">
                                        <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                        <div class="col-sm-8">
                                            <!-- Text area komentar status akreditasi institusi -->
                                            <textarea disabled id="KomentarStatusAkreditasi" name="komentar_status_akreditasi_institusi" class="form-control"
                                                rows="3" placeholder="Komentar">{{ $hasilReview->status_akreditasi_institusi }}</textarea>

                                            <!-- ./Text area komentar status akreditasi institusi -->
                                        </div>
                                    </div>
                                    <!-- ./Komentar Status Akreditasi Institusi -->
                                @endisset

                                <div class="row">
                                    <div class="col-sm-8 offset-sm-4">
                                        <div class="form-group row pt-2">
                                            <label class="col-sm-4 col-form-label">Scan SK Akreditasi Institusi</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class=" pt-1">
                                                        @isset($proposal->bab1->scan_status_akreditasi_institusi)
                                                            <a target="_blank"
                                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_status_akreditasi_institusi)) }}"
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

                                        @isset($hasilReview)
                                            <!-- Komentar Scan SK Akreditasi Institusi -->
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                                <div class="col-sm-8">
                                                    <!-- Text area komentar scan sk akreditasi institusi -->
                                                    <textarea disabled id="KomentarScanStatusAkreditasi" name="komentar_scan_status_akreditasi_institusi"
                                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_status_akreditasi_institusi }}</textarea>

                                                    <!-- ./Text area komentar scan sk akreditasi institusi -->
                                                </div>
                                            </div>
                                            <!-- ./Komentar Scan SK Akreditasi Institusi -->
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <!-- ./Status Akreditasi Institusi -->
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
                            B. Profil Perguruan Tinggi Mitra
                        </button>
                    </h2>
                    <div id="panelProfilPTMitra-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelProfilPTMitra-heading">
                        <div class="accordion-body">

                            <!-- Nama Perguruan Tinggi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Nama Perguruan Tinggi</div>
                                <div class="col-sm-8">
                                    <div id="NamaPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->nama_pt_mitra) && trim($proposal->bab1->nama_pt_mitra != '')
                                            ? $proposal->bab1->nama_pt_mitra
                                            : "<b
                                                                                                                                                                                                                                                                                                                                                                            class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Nama Perguruan Tinggi -->

                            @isset($hasilReview)
                                <!-- Komentar Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar alamat perguruan tinggi -->
                                        <textarea disabled id="KomentarNamaPTMitra" name="komentar_nama_pt_mitra" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->nama_pt_mitra }}</textarea>

                                        <!-- ./Text area komentar alamat perguruan tinggi -->
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <!-- ./Komentar Perguruan Tinggi -->
                            @endisset

                            <!-- Alamat Perguruan Tinggi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Alamat Perguruan Tinggi
                                </div>
                                <div class="col-sm-8">
                                    <div id="AlamatPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->alamat_pt_mitra) && trim($proposal->bab1->alamat_pt_mitra != '')
                                            ? $proposal->bab1->alamat_pt_mitra
                                            : "<b
                                                                                                                                                                                                                                                                                                                                                                            class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Alamat Perguruan Tinggi -->

                            @isset($hasilReview)
                                <!-- Komentar Alamat Perguruan Tinggi -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar alamat perguruan tinggi -->
                                        <textarea disabled id="KomentarAlamatPTMitra" name="komentar_alamat_pt_mitra" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->alamat_pt_mitra }}</textarea>

                                        <!-- ./Text area komentar alamat perguruan tinggi -->
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <!-- ./Komentar Alamat Perguruan Tinggi -->
                            @endisset

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

                            @isset($hasilReview)
                                <!-- Komentar Negara -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar negara -->
                                        <textarea disabled id="KomentarNegaraPTMitra" name="komentar_negara_pt_mitra" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->negara_mitra }}</textarea>

                                        <!-- ./Text area komentar negara -->
                                    </div>
                                </div>
                                <hr class="mt-0 mb-0">
                                <!-- ./Komentar Negara -->
                            @endisset

                            <!-- Izin Operasional Perguruan Tinggi-->
                            <div class="form-group row">
                                <div class="row">
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

                                @isset($hasilReview)
                                    <!-- Komentar Izin Operasional Perguruan Tinggi -->
                                    <div class="form-group row pt-3 ">
                                        <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                        <div class="col-sm-8">
                                            <!-- Text area komentar izin operasional perguruan tinggi -->
                                            <textarea disabled id="KomentarIzinOperasionalPTMitra" name="komentar_ijin_operasional_pt_mitra" class="form-control"
                                                rows="3" placeholder="Komentar">{{ $hasilReview->ijin_operasional_pt_mitra }}</textarea>

                                            <!-- ./Text area komentar izin operasional perguruan tinggi -->
                                        </div>
                                    </div>
                                    <!-- ./Komentar Izin Operasional Perguruan Tinggi -->
                                @endisset

                                <div class="row">
                                    <div class="col-sm-8 offset-sm-4">
                                        <div class="form-group row pt-2">
                                            <label class="col-sm-4 col-form-label">Scan Izin Operasional</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class=" pt-1">
                                                        @isset($proposal->bab1->scan_ijin_operasional_pt_mitra)
                                                            <a target="_blank"
                                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_pt_mitra)) }}"
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

                                        @isset($hasilReview)
                                            <!-- Komentar Scan Izin Operasional Perguruan Tinggi -->
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                                <div class="col-sm-8">
                                                    <!-- Text area komentar scan izin operasional perguruan tinggi -->
                                                    <textarea disabled id="KomentarScanIzinOperasionalPTMitra" name="komentar_scan_ijin_operasional_pt_mitra"
                                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_ijin_operasional_pt_mitra }}</textarea>

                                                    <!-- ./Text area komentar scan izin operasional perguruan tinggi -->
                                                </div>
                                            </div>
                                            <!-- ./Komentar Scan Izin Operasional Perguruan Tinggi -->
                                        @endisset

                                    </div>
                                </div>
                            </div>
                            <!-- ./Izin Operasional Perguruan Tinggi -->

                            @isset($hasilReview)
                                <hr class="mt-0 mb-0">
                            @endisset

                            <!-- Status Akreditasi Institusi -->
                            <div class="form-group row">
                                <div class="row">
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

                                @isset($hasilReview)
                                    <!-- Komentar Status Akreditasi Institusi -->
                                    <div class="form-group row pt-3 ">
                                        <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                        <div class="col-sm-8">
                                            <!-- Text area komentar status akreditasi institusi -->
                                            <textarea disabled id="KomentarStatusAkreditasiPTMitra" name="komentar_status_akreditasi_institusi_mitra"
                                                class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->status_akreditasi_institusi_mitra }}</textarea>

                                            <!-- ./Text area komentar status akreditasi institusi -->
                                        </div>
                                    </div>
                                    <!-- ./Komentar Status Akreditasi Institusi -->
                                @endisset

                                <div class="row">
                                    <div class="col-sm-8 offset-sm-4">
                                        <div class="form-group row pt-2">
                                            <label class="col-sm-4 col-form-label">Scan SK Akreditasi Institusi</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class=" pt-1">
                                                        @isset($proposal->bab1->scan_status_akreditasi_institusi_mitra)
                                                            <a target="_blank"
                                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_status_akreditasi_institusi_mitra)) }}"
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

                                        @isset($hasilReview)
                                            <!-- Komentar Scan SK Akreditasi Institusi -->
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                                <div class="col-sm-8">
                                                    <!-- Text area komentar scan sk akreditasi institusi -->
                                                    <textarea disabled id="KomentarScanStatusAkreditasiPTMitra" name="komentar_scan_status_akreditasi_institusi_mitra"
                                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_status_akreditasi_institusi_mitra }}</textarea>

                                                    <!-- ./Text area komentar scan sk akreditasi institusi -->
                                                </div>
                                            </div>
                                            <!-- ./Komentar Scan SK Akreditasi Institusi -->
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <!-- ./Status Akreditasi Institusi -->

                            @isset($hasilReview)
                                <hr class="mt-0 mb-0">
                            @endisset

                            <!-- Peringkat Internasional -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Peringkat Internasional
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

                            @isset($hasilReview)
                            <!-- Komentar Peringkat Internasional -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar peringkat internasional -->
                                    <textarea disabled id="KomentarPeringkatPTMitra" name="komentar_peringkat_internasional_mitra" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->peringkat_internasional_mitra }}</textarea>

                                    <!-- ./Text area komentar peringkat internasional -->
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <!-- ./Komentar Peringkat Internasional -->
                            @endisset

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
                            C. Profil Program Study
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

                            @isset($hasilReview)
                            <!-- Komentar Nama Prodi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-4 border-right">
                                    <!-- Text area komentar nama prodi -->
                                    <textarea disabled id="KomentarProdiPT" name="komentar_nama_prodi" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->nama_prodi }}</textarea>

                                    <!-- ./Text area komentar nama prodi -->
                                </div>
                                <div class="col-sm-4">
                                    <!-- Text area komentar nama prodi mitra -->
                                    <textarea disabled id="KomentarProdiPTMitra" name="komentar_nama_prodi_mitra" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->nama_prodi_mitra }}</textarea>

                                    <!-- ./Text area komentar nama prodi mitra -->
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <!-- ./Komentar Nama Prodi -->
                            @endisset

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

                            @isset($hasilReview)
                            <!-- Komentar Akreditasi Prodi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-4 border-right">
                                    <!-- Text area komentar akreditasi prodi -->
                                    <textarea disabled id="KomentarAkreditasiProdiPT" name="komentar_status_akreditasi_prodi" class="form-control"
                                        rows="3" placeholder="Komentar">{{ $hasilReview->status_akreditasi_prodi }}</textarea>

                                    <!-- ./Text area komentar akreditasi prodi -->
                                </div>
                                <div class="col-sm-4">
                                    <!-- Text area komentar akreditasi prodi mitra -->
                                    <textarea disabled id="KomentarAkreditasiProdiPTMitra" name="komentar_status_akreditasi_prodi_mitra"
                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->status_akreditasi_prodi_mitra }}</textarea>

                                    <!-- ./Text area komentar akreditasi prodi mitra -->
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <!-- ./Komentar Akreditasi Prodi -->
                            @endisset


                            <div class="row">
                                <div class="col-sm-4 col-form-label text-bold">SK Akreditasi Prodi
                                </div>
                                <div class="col-sm-4 border-right pt-2">
                                    <div class="form-group">
                                        <div class="text-bold">PT</div>
                                        <div class="pt-1">

                                            @isset($proposal->bab1->scan_sk_akreditasi_prodi)
                                                <a target="_blank"
                                                    href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_sk_akreditasi_prodi)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                        class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endisset

                                            &nbsp;&nbsp;
                                            
                                            {!! isset($proposal->bab1->scan_sk_akreditasi_prodi)
                                                ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 pt-2">

                                    <div class="text-bold">PT Mitra</div>
                                    <div class="pt-1">

                                        @isset($proposal->bab1->scan_sk_akreditasi_prodi_mitra)
                                            <a target="_blank"
                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_sk_akreditasi_prodi_mitra)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endisset
                                        &nbsp;&nbsp;
                                        {!! isset($proposal->bab1->scan_sk_akreditasi_prodi_mitra)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                    </div>
                                    
                                </div>
                            </div>

                            @isset($hasilReview)
                            <!-- Komentar SK Akreditasi Prodi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-4 border-right">
                                    <!-- Text area komentar sk akreditasi prodi -->
                                    <textarea disabled id="KomentarSKAkreditasiProdiPT" name="komentar_scan_sk_akreditasi_prodi" class="form-control"
                                        rows="3" placeholder="Komentar">{{ $hasilReview->scan_sk_akreditasi_prodi }}</textarea>

                                    <!-- ./Text area komentar sk akreditasi prodi -->
                                </div>
                                <div class="col-sm-4">
                                    <!-- Text area komentar sk akreditasi prodi mitra -->
                                    <textarea disabled id="KomentarSKAkreditasiProdiPTMitra" name="komentar_scan_sk_akreditasi_prodi_mitra"
                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_sk_akreditasi_prodi_mitra }}</textarea>

                                    <!-- ./Text area komentar sk akreditasi prodi mitra -->
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <!-- ./Komentar SK Akreditasi Prodi -->
                            @endisset

                            <div class="row">
                                <div class="col-sm-4 col-form-label text-bold">Izin Operasional Prodi
                                </div>
                                <div class="col-sm-4 border-right border-top pt-2">
                                    <div class="text-bold">PT</div>
                                    <div class="pt-1">
                                        @isset($proposal->bab1->scan_ijin_operasional_prodi)
                                            <a target="_blank"
                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_prodi)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endisset

                                        &nbsp;&nbsp;
                                        {!! isset($proposal->bab1->scan_ijin_operasional_prodi)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                    </div>
                                </div>
                                <div class="col-sm-4 border-top pt-2">
                                    <div class="text-bold">PT Mitra</div>
                                    <div class="pt-1">
                                        @isset($proposal->bab1->scan_ijin_operasional_prodi_mitra)
                                            <a target="_blank"
                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_prodi_mitra)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endisset

                                        &nbsp;&nbsp;
                                        {!! isset($proposal->bab1->scan_ijin_operasional_prodi_mitra)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                    </div>
                                </div>
                            </div>
                            
                            @isset($hasilReview)
                            <!-- Komentar Izin Operasional Prodi -->
                            <div class="form-group row pt-3">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-4 border-right">
                                    <!-- Text area komentar izin operasional prodi -->
                                    <textarea disabled id="KomentarIzinOperasionalProdiPT" name="komentar_scan_ijin_operasional_prodi"
                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_ijin_operasional_prodi }}</textarea>

                                    <!-- ./Text area komentar izin operasional prodi -->
                                </div>
                                <div class="col-sm-4">
                                    <!-- Text area komentar izin operasional prodi mitra -->
                                    <textarea disabled id="KomentarIzinOperasionalProdiPTMitra" name="komentar_scan_ijin_operasional_prodi_mitra"
                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_ijin_operasional_prodi_mitra }}</textarea>

                                    <!-- ./Text area komentar izin operasional prodi mitra -->
                                </div>
                            </div>
                            <!-- ./Komentar Izin Operasional Prodi -->
                            @endisset
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelDokumen-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelDokumen-collapse" aria-expanded="false"
                            aria-controls="panelDokumen-collapse">
                            D. Dokumen Kerjasama
                        </button>
                    </h2>
                    <div id="panelDokumen-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelDokumen-heading">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-sm-4 col-form-label text-bold">Proposal Usulan Kerja Sama Perguruan
                                    Tinggi
                                </div>
                                <div class="col-sm-8 pt-1 d-flex align-items-center">
                                    @isset($proposal->bab1->proposal_usulan_kerjsama)
                                        <a target="_blank"
                                            href="{{ route('verifikator.proposal.download', encrypt($proposal->bab1->scan_proposal_usulan_kerjsama)) }}"
                                            class="btn btn-primary btn-sm">Download <i
                                                class="fas fa-file-pdf text-white"></i></a>
                                    @else
                                        <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                class="fas fa-file-pdf text-white"></i></button>
                                    @endisset

                                    &nbsp;&nbsp;&nbsp;
                                    
                                    {!! isset($proposal->bab1->proposal_usulan_kerjsama)
                                        ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                        : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                

                                </div>
                                
                            </div>

                            @isset($hasilReview)
                            <!-- Komentar Proposal Usulan Kerja Sama Perguruan Tinggi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar proposal usulan kerja sama perguruan tinggi -->
                                    <textarea disabled id="KomentarProposalUsulanKerjasama" name="komentar_proposal_usulan_kerjsama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->proposal_usulan_kerjsama }}</textarea>
                                    <!-- ./Text area komentar proposal usulan kerja sama perguruan tinggi -->
                                </div>
                            </div>
                            <!-- ./Komentar Proposal Usulan Kerja Sama Perguruan Tinggi -->
                            @endisset
                        </div>
                    </div>
                </div>
            </div>

            @isset($hasilReview)
            <br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-bold text-primary mt-1">Komentar Reviewer</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-4 col-xs-12 col-form-label text-bold">Review BAB 1</div>
                        <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                            <!-- Text area komentar bab2 -->
                            <textarea disabled id="KomentarBab2" name="komentar_bab2" class="form-control"
                                rows="3" placeholder="Tuliskan review anda...">{{ $hasilReview->komentar_bab1 }}</textarea>
                            <!-- ./Text area komentar bab2 -->
                        </div>
                    </div>
                </div>
            </div>
            @endisset

        </div>
        <div class="card-footer">
            <a href="{{ route('verifikator.proposal.show', encrypt($proposal->id)) }}" class="btn btn-secondary">Kembali ke halaman utama</a>
            @isset($hasilReview)
                <a href="{{ route('verifikator.proposal.viewBab2', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                    class="btn btn-primary float-right">Selanjutnya</a>
            @else
                <a href="{{ route('verifikator.proposal.viewBab2', encrypt($proposal->id)) }}"
                    class="btn btn-primary float-right">Selanjutnya</a>
            @endisset
        </div>
    </div>
</div>
