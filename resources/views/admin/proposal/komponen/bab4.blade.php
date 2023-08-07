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
                                <div class="col-sm-3 col-form-label text-bold">Rencana Pelaksanaan
                                    Pembelajaran<code>*</code></div>
                                <div class="col-sm-9">
                                    <div id="RPP" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->rencana_pelaksanaan_pembelajaran) &&
                                        trim($proposal->bab4->rencana_pelaksanaan_pembelajaran) !== ''
                                            ? $proposal->bab4->rencana_pelaksanaan_pembelajaran
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
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
                                                    <a href="{{ route('admin.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_pt)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Perguruan Tinggi Mitra-->
                                        <div class="col-sm-4  border-right">
                                            <div class="text-bold">Perguruan Tinggi Mitra</div>
                                            Kurikulum Prodi
                                            <div id="KurikulumPTMitra" class="pb-2 pt-2">
                                                @if (isset($proposal->bab4->scan_desain_kurikulum_mitra) && trim($proposal->bab4->scan_desain_kurikulum_mitra) !== '')
                                                    <a href="{{ route('admin.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_mitra)) }}"
                                                        class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                @else
                                                    <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                            class="fas fa-file-pdf text-white"></i></button>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Gabungan-->
                                        <div class="col-sm-4">
                                            <div class="text-bold">Gabungan</div>
                                            Kurikulum Prodi
                                            <div id="KurikulumGabungan" class="pb-2 pt-2">
                                                @if (isset($proposal->bab4->scan_desain_kurikulum_gabungan) &&
                                                        trim($proposal->bab4->scan_desain_kurikulum_gabungan) !== '')
                                                    <a href="{{ route('admin.proposal.download', encrypt($proposal->bab4->scan_desain_kurikulum_gabungan)) }}"
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

                            <!-- JENIS KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Jenis Kerjasama<code>*</code></div>
                                <div class="col-sm-9">
                                    <div id="JenisKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->kerjasama->jenis_kerjasama) &&
                                        trim($proposal->bab4->kerjasama->jenis_kerjasama) !== ''
                                            ? $proposal->bab4->kerjasama->jenis_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Ijazah yang Akan Diterbitkan -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Jumlah Ijazah yang Akan
                                    Diterbitkan<code>*</code></div>
                                <div class="col-sm-9 border-bottom border-grey d-flex align-items-center">
                                    <div id="JumlahIjazah" class="pb-2 pt-2">
                                        {!! isset($proposal->bab4->jumlah_ijazah_terbit) && trim($proposal->bab4->jumlah_ijazah_terbit) !== ''
                                            ? $proposal->bab4->jumlah_ijazah_terbit
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

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
                                            <br> Jabatan:
                                            <div id="TTDJabatanPT" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                {!! isset($proposal->bab4->jabatan_ttd_ijazah_pt) && trim($proposal->bab4->jabatan_ttd_ijazah_pt) !== ''
                                                    ? $proposal->bab4->jabatan_ttd_ijazah_pt
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>

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
                                            <br> Jabatan:
                                            <div id="TTDJabatanPTMitra" class="pb-2 pt-2 pl-0 pr-2 border-bottom">
                                                {!! isset($proposal->bab4->jabatan_ttd_ijazah_mitra) && trim($proposal->bab4->jabatan_ttd_ijazah_mitra) !== ''
                                                    ? $proposal->bab4->jabatan_ttd_ijazah_mitra
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kriteria Calon Mahasiswa -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Kriteria Calon Mahasiswa<code>*</code>
                                </div>
                                <div class="col-sm-9">
                                    <div id="KriteriaCalonMahasiswa" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->kriteria_calon_mahasiswa) && trim($proposal->bab4->kriteria_calon_mahasiswa) !== ''
                                            ? $proposal->bab4->kriteria_calon_mahasiswa
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

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

                            <!-- Berkas penjadwalan program kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Berkas penjadwalan program
                                    kerjasama<code>*</code></div>
                                <div class="col-sm-9 d-flex align-items-center">
                                    <div id="BerkasPenjadwalanProgramKerjasama" class="pb-2 pt-2">
                                        @if (isset($proposal->bab4->file_penjadwalan_kerjasama) && trim($proposal->bab4->file_penjadwalan_kerjasama) !== '')
                                            <a href="{{ route('admin.proposal.download', encrypt($proposal->bab4->file_penjadwalan_kerjasama)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Berkas SKPI -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Surat Keterangan Pendamping Ijazah
                                    (SKPI)<code>*</code></div>
                                <div class="col-sm-9 d-flex align-items-center">
                                    <div id="BerkasSKPI" class="pb-2 pt-2">
                                        @if (isset($proposal->bab4->file_skpi) && trim($proposal->bab4->file_skpi) !== '')
                                            <a href="{{ route('admin.proposal.download', encrypt($proposal->bab4->file_skpi)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- KEBERLANJUTAN UNTUK STUDI LANJUT -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Keberlanjutan untuk studi
                                    lanjut<code>*</code></div>
                                <div class="col-sm-9">
                                    <div id="KeberlanjutanStudiLanjut" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab4->keberlanjutan_studi_lanjut) &&
                                        trim($proposal->bab4->keberlanjutan_studi_lanjut) !== ''
                                            ? $proposal->bab4->keberlanjutan_studi_lanjut
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Studi Lanjut MOA -->
                            <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-bold">Studi Lanjut MOA<code>*</code></div>
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

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <!-- Bab sebelumnya -->
            <a href="{{ route('admin.proposal.viewBab3', encrypt($proposal->id)) }}"
                class="btn btn-primary">Sebelumnya</a>
            <!-- Kembali ke menu utama -->
            <a href="{{ route('admin.proposal.show', encrypt($proposal->id)) }}" class="btn btn-primary float-right">Kembali ke halaman utama</a>
            

        </div>
    </div>
</div>
