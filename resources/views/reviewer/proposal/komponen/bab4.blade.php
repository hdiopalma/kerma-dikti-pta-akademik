<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <form id="formReviewBab4" method="POST" enctype="multipart/form-data"
            action="{{ route('reviewer.proposal.simpanReviewBab4') }}">
            @csrf
            <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">
            <div class="card-header bg-primary">
                <h3 class="card-title" style="margin: 2px">
                    BAB 4 | RENCANA PELAKSANAAN KERJASAMA
                </h3>
            </div>

            <div class="card-body">
                <div class="accordion" id="accordionBAB4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelKPKS-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelKPKS-collapse" aria-expanded="false"
                                aria-controls="panelKPKS-collapse">
                                <div class="text-bold text-primary">A. KESIAPAN PELAKSANAAN KERJA SAMA</div>
                            </button>
                        </h2>
                        <div id="panelKPKS-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelKPKS-heading">
                            <div class="accordion-body">
                                <!-- RENCANA PELAKSANAAN PEMBELAJARAN-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Rencana Pelaksanaan
                                        Pembelajaran</div>
                                    <div class="col-sm-9">
                                        <div id="RPP" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab4->rencana_pelaksanaan_pembelajaran) &&
                                            trim($proposal->bab4->rencana_pelaksanaan_pembelajaran) !== ''
                                                ? $proposal->bab4->rencana_pelaksanaan_pembelajaran
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./RENCANA PELAKSANAAN PEMBELAJARAN-->

                                <!-- Komentar RENCANA PELAKSANAAN PEMBELAJARAN-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-9">
                                        <div>
                                            <!-- Text area komentar rencana pelaksanaan pembelajaran -->
                                            <textarea id="komentarRPP" name="komentar_rencana_pelaksanaan_pembelajaran"
                                                class="form-control @error('komentar_rencana_pelaksanaan_pembelajaran') is-invalid @enderror" rows="3"
                                                placeholder="Komentar">{{ old('komentar_rencana_pelaksanaan_pembelajaran', $reviewer_bab4->rencana_pelaksanaan_pembelajaran ?? '') }}</textarea>
                                            @error('komentar_rencana_pelaksanaan_pembelajaran')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <!-- ./Text area komentar rencana pelaksanaan pembelajaran -->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar RENCANA PELAKSANAAN PEMBELAJARAN-->

                                <hr>


                                <!-- Desain Kurikulum Perguruan Tinggi-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Desain Kurikulum Perguruan
                                        Tinggi</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                Kurikulum Prodi
                                                <div class="d-flex align-items-center border-bottom">
                                                    <div id="KurikulumPT" class="pb-2 pt-2 pl-0 pr-2">
                                                        @if (isset($proposal->bab4->scan_desain_kurikulum_pt) && trim($proposal->bab4->scan_desain_kurikulum_pt) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_pt)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-2 pt-1 mb-1">
                                                        {!! isset($proposal->bab4->scan_desain_kurikulum_pt)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./-->

                                <!-- Komentar Desain Kurikulum Perguruan Tinggi-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar desain kurikulum perguruan tinggi -->
                                        <textarea id="komentarKurikulumPT" name="komentar_scan_desain_kurikulum_pt"
                                            class="form-control @error('komentar_scan_desain_kurikulum_pt') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_desain_kurikulum_pt', $reviewer_bab4->scan_desain_kurikulum_pt ?? '') }}</textarea>
                                        @error('komentar_scan_desain_kurikulum_pt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar desain kurikulum perguruan tinggi -->

                                    </div>
                                </div>
                                <!-- ./Komentar Desain Kurikulum Perguruan Tinggi-->

                                <hr>

                                <!-- Desain Kurikulum Perguruan Tinggi Mitra-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Desain Kurikulum Perguruan
                                        Tinggi Mitra</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                Kurikulum Prodi
                                                <div class="d-flex align-items-center border-bottom">
                                                    <div id="KurikulumPTMitra" class="pb-2 pt-2 pl-0 pr-2">
                                                        @if (isset($proposal->bab4->scan_desain_kurikulum_mitra) && trim($proposal->bab4->scan_desain_kurikulum_mitra) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_mitra)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-2 pt-1 mb-1">
                                                        {!! isset($proposal->bab4->scan_desain_kurikulum_mitra)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Desain Kurikulum Perguruan Tinggi Mitra-->

                                <!-- Komentar Desain Kurikulum Perguruan Tinggi Mitra-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar desain kurikulum perguruan tinggi mitra -->
                                        <textarea id="komentarKurikulumPTMitra" name="komentar_scan_desain_kurikulum_mitra"
                                            class="form-control @error('komentar_scan_desain_kurikulum_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_desain_kurikulum_mitra', $reviewer_bab4->scan_desain_kurikulum_mitra ?? '') }}</textarea>
                                        @error('komentar_scan_desain_kurikulum_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar desain kurikulum perguruan tinggi mitra -->

                                    </div>
                                </div>
                                <!-- ./Komentar Desain Kurikulum Perguruan Tinggi Mitra-->

                                <hr>

                                <!-- Desain Kurikulum Gabungan-->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Desain Kurikulum Gabungan</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                Kurikulum Prodi
                                                <div class="d-flex align-items-center border-bottom ">
                                                    <div id="KurikulumGabungan" class="pb-2 pt-2 pl-0 pr-2">
                                                        @if (isset($proposal->bab4->scan_desain_kurikulum_gabungan) &&
                                                                trim($proposal->bab4->scan_desain_kurikulum_gabungan) !== '')
                                                            <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_gabungan)) }}"
                                                                class="btn btn-primary btn-sm">Download <i
                                                                    class="fas fa-file-pdf text-white"></i></a>
                                                        @else
                                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload
                                                                <i class="fas fa-file-pdf text-white"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="pl-2 pt-1 mb-1">
                                                        {!! isset($proposal->bab4->scan_desain_kurikulum_gabungan)
                                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Desain Kurikulum Gabungan -->

                                <!-- Komentar Desain Kurikulum Gabungan -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar desain kurikulum gabungan -->
                                        <textarea id="komentarKurikulumGabungan" name="komentar_scan_desain_kurikulum_gabungan"
                                            class="form-control @error('komentar_scan_desain_kurikulum_gabungan') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_scan_desain_kurikulum_gabungan', $reviewer_bab4->scan_desain_kurikulum_gabungan ?? '') }}</textarea>
                                        @error('komentar_scan_desain_kurikulum_gabungan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar desain kurikulum gabungan -->

                                    </div>
                                </div>
                                <!-- ./Komentar Desain Kurikulum Gabungan -->

                                <hr>

                                <!-- JENIS KERJA SAMA -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Jenis Kerjasama</div>
                                    <div class="col-sm-9">
                                        <div id="JenisKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab4->kerjasama->jenis_kerjasama) &&
                                            trim($proposal->bab4->kerjasama->jenis_kerjasama) !== ''
                                                ? $proposal->bab4->kerjasama->jenis_kerjasama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./JENIS KERJA SAMA -->

                                <!-- Komentar Jenis Kerja Sama -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar jenis kerja sama -->
                                        <textarea id="komentarJenisKerjaSama" name="komentar_jenis_kerjasama"
                                            class="form-control @error('komentar_jenis_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_jenis_kerjasama', $reviewer_bab4->jenis_kerjasama ?? '') }}</textarea>
                                        @error('komentar_jenis_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar jenis kerja sama -->

                                    </div>
                                </div>
                                <!-- ./Komentar Jenis Kerja Sama -->

                                <hr>

                                <!-- Jumlah Ijazah yang Akan Diterbitkan -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Jumlah Ijazah yang Akan
                                        Diterbitkan</div>
                                    <div class="col-sm-9 border-grey">
                                        <div id="JumlahIjazah" class="pb-2 pt-2 border-bottom">
                                            {!! isset($proposal->bab4->jumlah_ijazah_terbit) && trim($proposal->bab4->jumlah_ijazah_terbit) !== ''
                                                ? $proposal->bab4->jumlah_ijazah_terbit
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Jumlah Ijazah yang Akan Diterbitkan -->

                                <!-- Komentar Jumlah Ijazah yang Akan Diterbitkan -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar jumlah ijazah yang akan diterbitkan -->
                                        <textarea id="komentarJumlahIjazah" name="komentar_jumlah_ijazah_terbit"
                                            class="form-control @error('komentar_jumlah_ijazah_terbit') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_jumlah_ijazah_terbit', $reviewer_bab4->jumlah_ijazah_terbit ?? '') }}</textarea>
                                        @error('komentar_jumlah_ijazah_terbit')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar jumlah ijazah yang akan diterbitkan -->

                                    </div>
                                </div>
                                <!-- ./Komentar Jumlah Ijazah yang Akan Diterbitkan -->

                                <hr>

                                <!-- Penandatanganan Ijazah -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold  pt-0"> Penandatanganan Ijazah</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Perguruan Tinggi-->
                                            <div class="col-sm-6 border-right">
                                                <div class="text-bold">Perguruan Tinggi</div>
                                                <br> Nama:
                                                <div id="TTDNamaPT" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                    {!! isset($proposal->bab4->nama_ttd_ijazah_pt) && trim($proposal->bab4->nama_ttd_ijazah_pt) !== ''
                                                        ? $proposal->bab4->nama_ttd_ijazah_pt
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                                <!-- Komentar TTDNamaPT -->
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar TTDNamaPT -->
                                                        <textarea id="komentarTTDNamaPT" name="komentar_nama_ttd_ijazah_pt"
                                                            class="form-control @error('komentar_nama_ttd_ijazah_pt') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_nama_ttd_ijazah_pt', $reviewer_bab4->nama_ttd_ijazah_pt ?? '') }}</textarea>
                                                        @error('komentar_nama_ttd_ijazah_pt')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <!-- ./Text area komentar TTDNamaPT -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar TTDNamaPT -->
                                                <br> Jabatan:
                                                <div id="TTDJabatanPT" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                    {!! isset($proposal->bab4->jabatan_ttd_ijazah_pt) && trim($proposal->bab4->jabatan_ttd_ijazah_pt) !== ''
                                                        ? $proposal->bab4->jabatan_ttd_ijazah_pt
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                                <!-- Komentar TTDJabatanPT -->
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar TTDJabatanPT -->
                                                        <textarea id="komentarTTDJabatanPT" name="komentar_jabatan_ttd_ijazah_pt"
                                                            class="form-control @error('komentar_jabatan_ttd_ijazah_pt') is-invalid @enderror" rows="3"
                                                            placeholder="Komentar">{{ old('komentar_jabatan_ttd_ijazah_pt', $reviewer_bab4->jabatan_ttd_ijazah_pt ?? '') }}</textarea>
                                                        @error('komentar_jabatan_ttd_ijazah_pt')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <!-- ./Text area komentar TTDJabatanPT -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar TTDJabatanPT -->
                                            </div>
                                            <!-- Perguruan Tinggi Mitra-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Perguruan Tinggi Mitra</div>
                                                <br> Nama:
                                                <div id="TTDNamaPTMitra" class="pb-2 pt-2 border-bottom ">
                                                    {!! isset($proposal->bab4->nama_ttd_ijazah_mitra) && trim($proposal->bab4->nama_ttd_ijazah_mitra) !== ''
                                                        ? $proposal->bab4->nama_ttd_ijazah_mitra
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                                <!-- Komentar TTDNamaPTMitra -->
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar TTDNamaPTMitra -->
                                                        <textarea id="komentarTTDNamaPTMitra" name="komentar_nama_ttd_ijazah_mitra"
                                                            class="form-control @error('komentar_nama_ttd_ijazah_mitra') is-invalid @enderror" rows="3"
                                                            placeholder="Komentar">{{ old('komentar_nama_ttd_ijazah_mitra', $reviewer_bab4->nama_ttd_ijazah_mitra ?? '') }}</textarea>
                                                        @error('komentar_nama_ttd_ijazah_mitra')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <!-- ./Text area komentar TTDNamaPTMitra -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar TTDNamaPTMitra -->

                                                <br> Jabatan:
                                                <div id="TTDJabatanPTMitra" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                    {!! isset($proposal->bab4->jabatan_ttd_ijazah_mitra) && trim($proposal->bab4->jabatan_ttd_ijazah_mitra) !== ''
                                                        ? $proposal->bab4->jabatan_ttd_ijazah_mitra
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                                <!-- Komentar TTDJabatanPTMitra -->
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar TTDJabatanPTMitra -->
                                                        <textarea id="komentarTTDJabatanPTMitra" name="komentar_jabatan_ttd_ijazah_mitra"
                                                            class="form-control @error('komentar_jabatan_ttd_ijazah_mitra') is-invalid @enderror" rows="3"
                                                            placeholder="Komentar">{{ old('komentar_jabatan_ttd_ijazah_mitra', $reviewer_bab4->jabatan_ttd_ijazah_mitra ?? '') }}</textarea>
                                                        @error('komentar_jabatan_ttd_ijazah_mitra')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <!-- ./Text area komentar TTDJabatanPTMitra -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar TTDJabatanPTMitra -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Penandatanganan Ijazah -->

                                <hr>

                                <!-- Kriteria Calon Mahasiswa -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Kriteria Calon Mahasiswa
                                    </div>
                                    <div class="col-sm-9">
                                        <div id="KriteriaCalonMahasiswa" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab4->kriteria_calon_mahasiswa) && trim($proposal->bab4->kriteria_calon_mahasiswa) !== ''
                                                ? $proposal->bab4->kriteria_calon_mahasiswa
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Kriteria Calon Mahasiswa -->

                                <!-- Komentar Kriteria Calon Mahasiswa -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar kriteria calon mahasiswa -->
                                        <textarea id="komentarKriteriaCalonMahasiswa" name="komentar_kriteria_calon_mahasiswa"
                                            class="form-control @error('komentar_kriteria_calon_mahasiswa') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_kriteria_calon_mahasiswa', $reviewer_bab4->kriteria_calon_mahasiswa ?? '') }}</textarea>
                                        @error('komentar_kriteria_calon_mahasiswa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar kriteria calon mahasiswa -->

                                    </div>
                                </div>
                                <!-- ./Komentar Kriteria Calon Mahasiswa -->

                                <hr>

                                <!-- Proses Seleksi -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Proses Seleksi<code>*</code></div>
                                    <div class="col-sm-9">
                                        <div id="ProsesSeleksi" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab4->proses_seleksi) && trim($proposal->bab4->proses_seleksi) !== ''
                                                ? $proposal->bab4->proses_seleksi
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Proses Seleksi -->

                                <!-- Komentar Proses Seleksi -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar proses seleksi -->
                                        <textarea id="komentarProsesSeleksi" name="komentar_proses_seleksi"
                                            class="form-control @error('komentar_proses_seleksi') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_proses_seleksi', $reviewer_bab4->proses_seleksi ?? '') }}</textarea>
                                        @error('komentar_proses_seleksi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar proses seleksi -->

                                    </div>
                                </div>
                                <!-- ./Komentar Proses Seleksi -->

                                <hr>

                                <!-- Skema Pembiayaan -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Skema Pembiayaan<code>*</code></div>
                                    <div class="col-sm-9">
                                        <div id="SkemaPembiayaan" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab4->skema_pembiayaan) && trim($proposal->bab4->skema_pembiayaan) !== ''
                                                ? $proposal->bab4->skema_pembiayaan
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Skema Pembiayaan -->

                                <!-- Komentar Skema Pembiayaan -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar skema pembiayaan -->
                                        <textarea id="komentarSkemaPembiayaan" name="komentar_skema_pembiayaan"
                                            class="form-control @error('komentar_skema_pembiayaan') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_skema_pembiayaan', $reviewer_bab4->skema_pembiayaan ?? '') }}</textarea>
                                        @error('komentar_skema_pembiayaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar skema pembiayaan -->
                                    </div>
                                </div>
                                <!-- ./Komentar Skema Pembiayaan -->

                                <hr>

                                <!-- Berkas penjadwalan program kerjasama -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Berkas penjadwalan program
                                        kerjasama<code>*</code></div>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <div id="BerkasPenjadwalanProgramKerjasama" class="pb-2 pt-2">
                                            @if (isset($proposal->bab4->file_penjadwalan_kerjasama) && trim($proposal->bab4->file_penjadwalan_kerjasama) !== '')
                                                <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab4->file_penjadwalan_kerjasama)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                        class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endif
                                        </div>
                                        <div class="pl-2 pt-1 mb-1">
                                            {!! isset($proposal->bab4->file_penjadwalan_kerjasama)
                                                ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                        </div>

                                    </div>
                                </div>
                                <!-- ./Berkas penjadwalan program kerjasama -->

                                <!-- Komentar Berkas penjadwalan program kerjasama -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar penjadwalan program kerjasama -->
                                        <textarea id="komentarPenjadwalanProgramKerjasama" name="komentar_file_penjadwalan_kerjasama"
                                            class="form-control @error('komentar_file_penjadwalan_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_file_penjadwalan_kerjasama', $reviewer_bab4->file_penjadwalan_kerjasama ?? '') }}</textarea>
                                        @error('komentar_file_penjadwalan_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar penjadwalan program kerjasama -->
                                    </div>
                                </div>
                                <!-- ./Komentar Berkas penjadwalan program kerjasama -->

                                <hr>

                                <!-- Berkas SKPI -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Surat Keterangan Pendamping Ijazah
                                        (SKPI)<code>*</code></div>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <div id="BerkasSKPI" class="pb-2 pt-2">
                                            @if (isset($proposal->bab4->file_skpi) && trim($proposal->bab4->file_skpi) !== '')
                                                <a href="{{ route('reviewer.proposal.download', encrypt($proposal->bab4->file_skpi)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                        class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endif
                                        </div>
                                        <div class="pl-2 pt-1 mb-1">
                                            {!! isset($proposal->bab4->file_skpi)
                                                ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Berkas SKPI -->

                                <!-- Komentar Berkas SKPI -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar SKPI -->
                                        <textarea id="komentarSKPI" name="komentar_file_skpi"
                                            class="form-control @error('komentar_file_skpi') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_file_skpi', $reviewer_bab4->file_skpi ?? '') }}</textarea>
                                        @error('komentar_file_skpi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar SKPI -->
                                    </div>
                                </div>
                                <!-- ./Komentar Berkas SKPI -->

                                <hr>

                                <!-- KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Keberlanjutan untuk studi
                                        lanjut<code>*</code></div>
                                    <div class="col-sm-9">
                                        <div id="KeberlanjutanStudiLanjut"
                                            class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab4->keberlanjutan_studi_lanjut) &&
                                            trim($proposal->bab4->keberlanjutan_studi_lanjut) !== ''
                                                ? $proposal->bab4->keberlanjutan_studi_lanjut
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./KEBERLANJUTAN UNTUK STUDI LANJUT -->

                                <!-- Komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                        <textarea id="komentarKeberlanjutanStudiLanjut" name="komentar_keberlanjutan_studi_lanjut"
                                            class="form-control @error('komentar_keberlanjutan_studi_lanjut') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_keberlanjutan_studi_lanjut', $reviewer_bab4->keberlanjutan_studi_lanjut ?? '') }}</textarea>
                                        @error('komentar_keberlanjutan_studi_lanjut')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                    </div>
                                </div>
                                <!-- ./Komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->

                                <hr>

                                <!-- Studi Lanjut MOA -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Studi Lanjut MOA</div>
                                    <div class="col-sm-9">
                                        <div id="StudiLanjutMOA" class="pb-2">
                                            <div class="row">
                                                <!-- Apakah hal tersebut tercantum dalam MOA? -->
                                                <div class="col-sm-12 col-form-label text-bold">
                                                    <input type="radio" name="studi_lanjut_moa" value="Ya"
                                                        {{ isset($proposal->bab4->studi_lanjut_moa) && $proposal->bab4->studi_lanjut_moa == 1 ? 'checked' : '' }}
                                                        disabled> Ya &nbsp;
                                                    <input type="radio" name="studi_lanjut_moa" value="Tidak"
                                                        {{ isset($proposal->bab4->studi_lanjut_moa) && $proposal->bab4->studi_lanjut_moa == 0 ? 'checked' : '' }}
                                                        disabled> Tidak
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Studi Lanjut MOA -->

                                <!-- Komentar Studi Lanjut MOA -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Studi Lanjut MOA -->
                                        <textarea id="komentarStudiLanjutMOA" name="komentar_studi_lanjut_moa"
                                            class="form-control @error('komentar_studi_lanjut_moa') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_studi_lanjut_moa', $reviewer_bab4->studi_lanjut_moa ?? '') }}</textarea>
                                        @error('komentar_studi_lanjut_moa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar Studi Lanjut MOA -->
                                    </div>
                                </div>
                                <!-- ./Komentar Studi Lanjut MOA -->

                            </div>

                        </div>
                    </div>
                </div>

                <br>
                <!-- kolom komentar bab 4 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold text-primary mt-1">Komentar Reviewer</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4 col-form-label text-bold">Status Proposal BAB 4</div>
                            <div class="col-sm-8">
                                <select name="status_proposal" id="status_proposal"
                                    class="form-control @error('status_proposal') is-invalid @enderror">
                                    <option value=""> -- Pilih -- </option>
                                    <option value="Ditolak"
                                        {{ old('status_proposal') == 'Ditolak' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab4->status_proposal) && $reviewer_bab4->status_proposal == 'Ditolak' ? 'selected' : '' }}>
                                        Ditolak
                                    </option>
                                    <option value="Revisi" {{ old('status_proposal') == 'Revisi' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab4->status_proposal) && $reviewer_bab4->status_proposal == 'Revisi' ? 'selected' : '' }}>
                                        Revisi
                                    </option>
                                    <option value="Diterima"
                                        {{ old('status_proposal') == 'Diterima' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab4->status_proposal) && $reviewer_bab4->status_proposal == 'Diterima' ? 'selected' : '' }}>
                                        Diterima
                                    </option>
                                </select>
                                @error('status_proposal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 col-xs-12 col-form-label text-bold mt-3">Review BAB 4</div>
                            <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                                <!-- Text area komentar bab4 -->
                                <textarea id="KomentarBab2" name="komentar_bab4" class="form-control @error('komentar_bab4') is-invalid @enderror"
                                    rows="3" placeholder="Tuliskan review anda...">{{ old('komentar_bab4', $reviewer_bab4->komentar_bab4 ?? '') }}</textarea>
                                @error('komentar_bab4')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <!-- ./Text area komentar bab4 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./kolom komentar bab 3 -->

            </div>
            <div class="card-footer">

                <!-- Bab sebelumnya -->
                
                    <a href="{{ route('reviewer.proposal.viewBab3', encrypt($proposal->id)) }}"
                        class="btn btn-primary">Sebelumnya</a>
                


                <!-- Simpan dan Lanjutkan -->
                <button type="submit" class="btn btn-warning float-end">Simpan dan Lanjutkan</button>
            </div>
        </form>
    </div>
</div>


@push('modals')
@endpush
