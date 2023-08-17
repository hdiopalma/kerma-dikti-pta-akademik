<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
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
                            A. KESIAPAN PELAKSANAAN KERJA SAMA
                        </button>
                    </h2>
                    <div id="panelKPKS-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelKPKS-heading">
                        <div class="accordion-body">
                            <!-- RENCANA PELAKSANAAN PEMBELAJARAN-->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Rencana Pelaksanaan Pembelajaran</div>
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

                            @isset($hasilReview)
                                <!-- Komentar RENCANA PELAKSANAAN PEMBELAJARAN -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar RENCANA PELAKSANAAN PEMBELAJARAN -->
                                        <textarea disabled id="KomentarRPP" name="komentar_rencana_pelaksanaan_pembelajaran" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->rencana_pelaksanaan_pembelajaran }}</textarea>

                                        <!-- ./Text area komentar RENCANA PELAKSANAAN PEMBELAJARAN -->
                                    </div>
                                </div>
                                <!-- ./Komentar RENCANA PELAKSANAAN PEMBELAJARAN -->
                                <hr>
                            @endisset

                            <!-- Desain Kurikulum -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label pt-0 text-bold">Desain Kurikulum</div>
                                <div class="col-sm-9">
                                    <div class="row border-bottom border-grey">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-4 border-right">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            Kurikulum Prodi
                                            <div id="KurikulumPT" class="pb-2 pt-2 pl-0 pr-2">
                                                @if (isset($proposal->bab4->scan_desain_kurikulum_pt) && trim($proposal->bab4->scan_desain_kurikulum_pt) !== '')
                                                    <a target="_blank"
                                                        href="{{ route('verifikator.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_pt)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif

                                                <br>

                                                {!! isset($proposal->bab4->scan_desain_kurikulum_pt)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-4  border-right">
                                            <div class="text-bold">Perguruan Tinggi Mitra</div>
                                            Kurikulum Prodi
                                            <div id="KurikulumPTMitra" class="pb-2 pt-2">
                                                @if (isset($proposal->bab4->scan_desain_kurikulum_mitra) && trim($proposal->bab4->scan_desain_kurikulum_mitra) !== '')
                                                    <a target="_blank"
                                                        href="{{ route('verifikator.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif

                                                <br>

                                                {!! isset($proposal->bab4->scan_desain_kurikulum_mitra)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                        <!-- Gabungan-->
                                        <div class="col-sm-4">
                                            <div class="text-bold">Gabungan</div>
                                            Kurikulum Prodi
                                            <div id="KurikulumGabungan" class="pb-2 pt-2">
                                                @if (isset($proposal->bab4->scan_desain_kurikulum_gabungan) &&
                                                        trim($proposal->bab4->scan_desain_kurikulum_gabungan) !== '')
                                                    <a target="_blank"
                                                        href="{{ route('verifikator.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_gabungan)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif

                                                <br>

                                                {!! isset($proposal->bab4->scan_desain_kurikulum_gabungan)
                                                    ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                    : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Desain Kurikulum -->

                            @isset($hasilReview)
                                <!-- Komentar Desain Kurikulum -->
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label pt-0 text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <!-- Komentar Perguruan Tinggi-->
                                            <div class="col-sm-4 border-right">
                                                <div id="KurikulumPT" class="pb-2 pl-0">
                                                    <textarea disabled id="KomentarDesainKurikulumPT" name="komentar_scan_desain_kurikulum_pt" class="form-control"
                                                        rows="3" placeholder="Komentar">{{ $hasilReview->scan_desain_kurikulum_pt }}</textarea>
                                                </div>
                                            </div>
                                            <!-- Komentar Perguruan Tinggi Mitra-->
                                            <div class="col-sm-4  border-right">
                                                <div id="KurikulumPTMitra" class="pb-2">
                                                    <textarea disabled id="KomentarDesainKurikulumPTMitra" name="komentar_scan_desain_kurikulum_mitra" class="form-control"
                                                        rows="3" placeholder="Komentar">{{ $hasilReview->scan_desain_kurikulum_mitra }}</textarea>
                                                </div>
                                            </div>
                                            <!-- Komentar Gabungan-->
                                            <div class="col-sm-4">
                                                <div id="KurikulumGabungan" class="pb-2">
                                                    <textarea disabled id="KomentarDesainKurikulumGabungan" name="komentar_scan_desain_kurikulum_gabungan"
                                                        class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->scan_desain_kurikulum_gabungan }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar Desain Kurikulum -->
                                <hr>
                            @endisset

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

                            @isset($hasilReview)
                                <!-- Komentar JENIS KERJA SAMA -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar JENIS KERJA SAMA -->
                                        <textarea disabled id="KomentarJenisKerjaSama" name="komentar_jenis_kerjasama" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->jenis_kerjasama }}</textarea>

                                        <!-- ./Text area komentar JENIS KERJA SAMA -->
                                    </div>
                                </div>
                                <!-- ./Komentar JENIS KERJA SAMA -->
                                <hr>
                            @endisset

                            <!-- Jumlah Ijazah yang Akan Diterbitkan -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Jumlah Ijazah yang Akan
                                    Diterbitkan</div>
                                <div class="col-sm-9 d-flex align-items-center border-bottom">
                                    <div id="JumlahIjazah" class="pb-2 pt-2">
                                        {!! isset($proposal->bab4->jumlah_ijazah_terbit) && trim($proposal->bab4->jumlah_ijazah_terbit) !== ''
                                            ? $proposal->bab4->jumlah_ijazah_terbit
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Jumlah Ijazah yang Akan Diterbitkan -->

                            @isset($hasilReview)
                                <!-- Komentar Jumlah Ijazah yang Akan Diterbitkan -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Jumlah Ijazah yang Akan Diterbitkan -->
                                        <textarea disabled id="KomentarJumlahIjazah" name="komentar_jumlah_ijazah_terbit" class="form-control"
                                            rows="3" placeholder="Komentar">{{ $hasilReview->jumlah_ijazah_terbit }}</textarea>

                                        <!-- ./Text area komentar Jumlah Ijazah yang Akan Diterbitkan -->
                                    </div>
                                </div>
                                <!-- ./Komentar Jumlah Ijazah yang Akan Diterbitkan -->
                                <hr>
                            @endisset

                            <!-- Penandatanganan Ijazah -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold  pt-0"> Penandatanganan Ijazah</div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <!-- Perguruan Tinggi-->
                                        <div class="col-sm-6 border-right">
                                            <div class="text-bold">Perguruan Tinggi</div>
                                            <br> <b>Nama:</b>
                                            <div id="TTDNamaPT" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                {!! isset($proposal->bab4->nama_ttd_ijazah_pt) && trim($proposal->bab4->nama_ttd_ijazah_pt) !== ''
                                                    ? $proposal->bab4->nama_ttd_ijazah_pt
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                            @isset($hasilReview)
                                                <!-- Komentar Nama Penandatangan Ijazah Perguruan Tinggi -->
                                                <div class="row ">
                                                    <div class="col-sm-12 col-form-label text-bold">Komentar</div>
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar Nama Penandatangan Ijazah Perguruan Tinggi -->
                                                        <textarea disabled id="KomentarTTDNamaPT" name="komentar_nama_ttd_ijazah_pt" class="form-control" rows="3"
                                                            placeholder="Komentar">{{ $hasilReview->nama_ttd_ijazah_pt }}</textarea>

                                                        <!-- ./Text area komentar Nama Penandatangan Ijazah Perguruan Tinggi -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar Nama Penandatangan Ijazah Perguruan Tinggi -->
                                            @endisset
                                            <br> <b>Jabatan:</b>
                                            <div id="TTDJabatanPT" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                {!! isset($proposal->bab4->jabatan_ttd_ijazah_pt) && trim($proposal->bab4->jabatan_ttd_ijazah_pt) !== ''
                                                    ? $proposal->bab4->jabatan_ttd_ijazah_pt
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                            @isset($hasilReview)
                                                <!-- Komentar Jabatan Penandatangan Ijazah Perguruan Tinggi -->
                                                <div class="row ">
                                                    <div class="col-sm-12 col-form-label text-bold">Komentar</div>
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar Jabatan Penandatangan Ijazah Perguruan Tinggi -->
                                                        <textarea disabled id="KomentarTTDJabatanPT" name="komentar_jabatan_ttd_ijazah_pt" class="form-control"
                                                            rows="3" placeholder="Komentar">{{ $hasilReview->jabatan_ttd_ijazah_pt }}</textarea>

                                                        <!-- ./Text area komentar Jabatan Penandatangan Ijazah Perguruan Tinggi -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar Jabatan Penandatangan Ijazah Perguruan Tinggi -->
                                            @endisset

                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-6">
                                            <div class="text-bold">Perguruan Tinggi Mitra</div>
                                            <br> <b>Nama:</b>
                                            <div id="TTDNamaPTMitra" class="pb-2 pt-2 border-bottom ">
                                                {!! isset($proposal->bab4->nama_ttd_ijazah_mitra) && trim($proposal->bab4->nama_ttd_ijazah_mitra) !== ''
                                                    ? $proposal->bab4->nama_ttd_ijazah_mitra
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                            @isset($hasilReview)
                                                <!-- Komentar Nama Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                                <div class="row ">
                                                    <div class="col-sm-12 col-form-label text-bold">Komentar</div>
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar Nama Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                                        <textarea disabled id="KomentarTTDNamaPTMitra" name="komentar_nama_ttd_ijazah_mitra" class="form-control"
                                                            rows="3" placeholder="Komentar">{{ $hasilReview->nama_ttd_ijazah_mitra }}</textarea>

                                                        <!-- ./Text area komentar Nama Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar Nama Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                            @endisset
                                            <br> <b>Jabatan:</b>
                                            <div id="TTDJabatanPTMitra" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                {!! isset($proposal->bab4->jabatan_ttd_ijazah_mitra) && trim($proposal->bab4->jabatan_ttd_ijazah_mitra) !== ''
                                                    ? $proposal->bab4->jabatan_ttd_ijazah_mitra
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                            @isset($hasilReview)
                                                <!-- Komentar Jabatan Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                                <div class="row ">
                                                    <div class="col-sm-12 col-form-label text-bold">Komentar</div>
                                                    <div class="col-sm-12">
                                                        <!-- Text area komentar Jabatan Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                                        <textarea disabled id="KomentarTTDJabatanPTMitra" name="komentar_jabatan_ttd_ijazah_mitra" class="form-control"
                                                            rows="3" placeholder="Komentar">{{ $hasilReview->jabatan_ttd_ijazah_mitra }}</textarea>

                                                        <!-- ./Text area komentar Jabatan Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                                    </div>
                                                </div>
                                                <!-- ./Komentar Jabatan Penandatangan Ijazah Perguruan Tinggi Mitra -->
                                            @endisset
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

                            @isset($hasilReview)
                                <!-- Komentar Kriteria Calon Mahasiswa -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Kriteria Calon Mahasiswa -->
                                        <textarea disabled id="KomentarKriteriaCalonMahasiswa" name="komentar_kriteria_calon_mahasiswa" class="form-control"
                                            rows="3" placeholder="Komentar">{{ $hasilReview->kriteria_calon_mahasiswa }}</textarea>

                                        <!-- ./Text area komentar Kriteria Calon Mahasiswa -->
                                    </div>
                                </div>
                                <!-- ./Komentar Kriteria Calon Mahasiswa -->
                                <hr>
                            @endisset

                            <!-- Proses Seleksi -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Proses Seleksi</div>
                                <div class="col-sm-9">
                                    <div id="ProsesSeleksi" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->proses_seleksi) && trim($proposal->bab4->proses_seleksi) !== ''
                                            ? $proposal->bab4->proses_seleksi
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Proses Seleksi -->

                            @isset($hasilReview)
                                <!-- Komentar Proses Seleksi -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Proses Seleksi -->
                                        <textarea disabled id="KomentarProsesSeleksi" name="komentar_proses_seleksi" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->proses_seleksi }}</textarea>

                                        <!-- ./Text area komentar Proses Seleksi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Proses Seleksi -->
                                <hr>
                            @endisset

                            <!-- Skema Pembiayaan -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Skema Pembiayaan</div>
                                <div class="col-sm-9">
                                    <div id="SkemaPembiayaan" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->skema_pembiayaan) && trim($proposal->bab4->skema_pembiayaan) !== ''
                                            ? $proposal->bab4->skema_pembiayaan
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Skema Pembiayaan -->

                            @isset($hasilReview)
                                <!-- Komentar Skema Pembiayaan -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Skema Pembiayaan -->
                                        <textarea disabled id="KomentarSkemaPembiayaan" name="komentar_skema_pembiayaan" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->skema_pembiayaan }}</textarea>

                                        <!-- ./Text area komentar Skema Pembiayaan -->
                                    </div>
                                </div>
                                <!-- ./Komentar Skema Pembiayaan -->
                                <hr>
                            @endisset

                            <!-- Berkas penjadwalan program kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Berkas penjadwalan program
                                    kerjasama</div>
                                <div class="col-sm-9 d-flex align-items-center">
                                    <div id="BerkasPenjadwalanProgramKerjasama" class="pb-2 pt-2">
                                        @if (isset($proposal->bab4->file_penjadwalan_kerjasama) && trim($proposal->bab4->file_penjadwalan_kerjasama) !== '')
                                            <a target="_blank"
                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab4->file_penjadwalan_kerjasama)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endif

                                        &nbsp; &nbsp; &nbsp;

                                        {!! isset($proposal->bab4->file_penjadwalan_kerjasama)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Berkas penjadwalan program kerjasama -->

                            @isset($hasilReview)
                                <!-- Komentar Berkas penjadwalan program kerjasama -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Berkas penjadwalan program kerjasama -->
                                        <textarea disabled id="KomentarBerkasPenjadwalanProgramKerjasama" name="komentar_file_penjadwalan_kerjasama"
                                            class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->file_penjadwalan_kerjasama }}</textarea>

                                        <!-- ./Text area komentar Berkas penjadwalan program kerjasama -->
                                    </div>
                                </div>
                                <!-- ./Komentar Berkas penjadwalan program kerjasama -->
                                <hr>
                            @endisset

                            <!-- Berkas SKPI -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Surat Keterangan Pendamping Ijazah
                                    (SKPI)</div>
                                <div class="col-sm-9 d-flex align-items-center">
                                    <div id="BerkasSKPI" class="pb-2 pt-2">
                                        @if (isset($proposal->bab4->file_skpi) && trim($proposal->bab4->file_skpi) !== '')
                                            <a target="_blank"
                                                href="{{ route('verifikator.proposal.download', encrypt($proposal->bab4->file_skpi)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endif

                                        &nbsp; &nbsp; &nbsp;

                                        {!! isset($proposal->bab4->file_skpi)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Berkas SKPI -->

                            @isset($hasilReview)
                                <!-- Komentar Berkas SKPI -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Berkas SKPI -->
                                        <textarea disabled id="KomentarBerkasSKPI" name="komentar_file_skpi" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->file_skpi }}</textarea>

                                        <!-- ./Text area komentar Berkas SKPI -->
                                    </div>
                                </div>
                                <!-- ./Komentar Berkas SKPI -->
                                <hr>
                            @endisset

                            <!-- KEBERLANJUTAN UNTUK STUDI LANJUT -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Keberlanjutan untuk studi
                                    lanjut</div>
                                <div class="col-sm-9">
                                    <div id="KeberlanjutanStudiLanjut" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->keberlanjutan_studi_lanjut) &&
                                        trim($proposal->bab4->keberlanjutan_studi_lanjut) !== ''
                                            ? $proposal->bab4->keberlanjutan_studi_lanjut
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./KEBERLANJUTAN UNTUK STUDI LANJUT -->

                            @isset($hasilReview)
                                <!-- Komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                        <textarea disabled id="KomentarKeberlanjutanStudiLanjut" name="komentar_keberlanjutan_studi_lanjut"
                                            class="form-control" rows="3" placeholder="Komentar">{{ $hasilReview->keberlanjutan_studi_lanjut }}</textarea>

                                        <!-- ./Text area komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                    </div>
                                </div>
                                <!-- ./Komentar KEBERLANJUTAN UNTUK STUDI LANJUT -->
                                <hr>
                            @endisset

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
                                                    disabled> Ya <br>
                                                <input type="radio" name="studi_lanjut_moa" value="Tidak"
                                                    {{ isset($proposal->bab4->studi_lanjut_moa) && $proposal->bab4->studi_lanjut_moa == 0 ? 'checked' : '' }}
                                                    disabled> Tidak

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Studi Lanjut MOA -->

                            @isset($hasilReview)
                                <!-- Komentar Studi Lanjut MOA -->
                                <div class="row ">
                                    <div class="col-sm-3 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-9">
                                        <!-- Text area komentar Studi Lanjut MOA -->
                                        <textarea disabled id="KomentarStudiLanjutMOA" name="komentar_studi_lanjut_moa" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->studi_lanjut_moa }}</textarea>

                                        <!-- ./Text area komentar Studi Lanjut MOA -->
                                    </div>
                                </div>
                                <!-- ./Komentar Studi Lanjut MOA -->
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
                        <div class="col-sm-4 col-xs-12 col-form-label text-bold">Review BAB 4</div>
                        <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                            <!-- Text area komentar bab2 -->
                            <textarea disabled id="KomentarBab4" name="komentar_bab2" class="form-control"
                                rows="3" placeholder="Tuliskan review anda...">{{ $hasilReview->komentar_bab4 }}</textarea>
                            <!-- ./Text area komentar bab2 -->
                        </div>
                    </div>
                </div>
            </div>
            @endisset

        </div>
        <div class="card-footer d-flex">

            <!-- Bab sebelumnya -->
            <div class="flex-grow-0">
                <a href="{{ route('verifikator.proposal.viewBab3', encrypt($proposal->id)) }}"
                    class="btn btn-primary">Sebelumnya</a>
            </div>

            @isset($hasilReview)
                <div class="btn-group flex-grow-0 ms-auto" role="group" aria-label="Konfirmasi">
                    <!-- Button: Revisi -->
                    <form action="{{ route('verifikator.proposal.revisi') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ encrypt($proposal->id) }}">
                        <button type="submit" class="btn btn-warning">Revisi</button>
                    </form>

                    <!-- Button: Tolak -->
                    <form action="{{ route('verifikator.proposal.tolak') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ encrypt($proposal->id) }}">
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>

                    <!-- Button: Setujui -->
                    <form action="{{ route('verifikator.proposal.setujui') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ encrypt($proposal->id) }}">
                        <button type="submit" class="btn btn-success">Setujui</button>
                    </form>
                </div>
            @else
                <!-- Verifikasi kelengkapan berkas, modal -->
                <div class="flex-grow-1 text-right">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#modalVerifikasiBerkas">Verifikasi Kelengkapan Berkas</button>
                </div>
            @endisset
        </div>
    </div>
</div>

@push('modals')
    <!-- Modal verifikasi kelengkapan berkas -->
    <div class="modal fade" id="modalVerifikasiBerkas" tabindex="-1" aria-labelledby="modalVerifikasiBerkasLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerifikasiBerkasLabel">Verifikasi Berkas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form verifikasi kelengkapan berkas -->
                    <form action="{{ route('verifikator.proposal.verifikasi', encrypt($proposal->id)) }}" method="POST"
                        enctype="multipart/form-data" id="formVerifikasiBerkas">
                        @csrf
                        <div class="row">
                            <!-- Verifikasi berkas -->
                            <div class="col-sm-12 col-form-label text-bold">Verifikasi berkas</div>
                            <!-- hidden id proposal -->
                            <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">

                            <div class="col-sm-12">
                                <select class="form-select @error('id_status_berkas') is-invalid @enderror"
                                    name="id_status_berkas" id="status_berkas">
                                    <option value="" selected disabled>-- Pilih --</option>
                                    @foreach ($statusBerkas as $status)
                                        <option value="{{ $status->id }}"
                                            {{ $status->id == $proposal->id_status_berkas ? 'selected' : '' }}>
                                            {{ $status->status }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_status_berkas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Catatan -->
                            <div class="col-sm-12 col-form-label text-bold">Komentar</div>
                            <div class="col-sm-12">
                                <textarea class="form-control @error('komentar') is-invalid @enderror" name="komentar" id="komentar" rows="3"
                                    placeholder="Masukkan komentar">{{ $proposal->komentar }}</textarea>
                                @error('komentar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    -->

                        </div>
                    </form>
                    <!-- End of form verifikasi kelengkapan berkas -->
                </div>
                <div class="modal-footer">
                    <!-- Button save form formVerifikasiBerkas -->
                    <button type="button" class="btn btn-primary"
                        onclick="event.preventDefault(); document.getElementById('formVerifikasiBerkas').submit();">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endpush
