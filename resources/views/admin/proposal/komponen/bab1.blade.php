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
                                <div class="col-sm-4 col-form-label text-bold">Nama Perguruan
                                    Tinggi<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="NamaPT" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->nama_pt) && trim($proposal->bab1->nama_pt != '')
                                            ? $proposal->bab1->nama_pt
                                            : "<b
                                                                                    class='text-red'>BELUM DIISI</b>" !!}
                                    </div>

                                </div>
                            </div>
                            <!-- ./Nama Perguruan Tinggi -->

                            <!-- Alamat Perguruan Tinggi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Alamat Perguruan Tinggi<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="AlamatPT" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->alamat_pt) && trim($proposal->bab1->alamat_pt != '')
                                            ? $proposal->bab1->alamat_pt
                                            : "<b
                                                                                    class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Alamat Perguruan Tinggi -->

                            <!-- Izin Operasional -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Izin Operasional Perguruan
                                    Tinggi<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="IzinOperasional" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->izin_operasional_pt) && trim($proposal->bab1->izin_operasional_pt != '')
                                            ? $proposal->bab1->izin_operasional_pt
                                            : "<b
                                                                                    class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan Izin Operasional</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class=" pt-1">
                                                    @isset($proposal->bab1->scan_ijin_operasional_pt)
                                                        <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_pt)) }}"
                                                            class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                    @else
                                                        <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                                class="fas fa-file-pdf text-white"></i></button>
                                                    @endisset
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Izin Operasional -->

                            <!-- Status Akreditasi Institusi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Status Akreditasi Institusi<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="StatusAkreditasi" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->status_akreditasi_institusi->status)
                                            ? $proposal->bab1->status_akreditasi_institusi->status
                                            : "<b class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan SK Akreditasi Institusi</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class=" pt-1">
                                                    @isset($proposal->bab1->scan_status_akreditasi_institusi)
                                                        <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_status_akreditasi_institusi)) }}"
                                                            class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                    @else
                                                        <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                                class="fas fa-file-pdf text-white"></i></button>
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
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
                                <div class="col-sm-4 col-form-label text-bold">Nama Perguruan Tinggi<code>*</code></div>
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

                            <!-- Alamat Perguruan Tinggi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Alamat Perguruan Tinggi<code>*</code>
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

                            <!-- Negara -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Negara<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="NegaraPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->negara_mitra->name)
                                            ? $proposal->bab1->negara_mitra->name
                                            : "<b class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Negara -->

                            <!-- Izin Operasional Perguruan Tinggi-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Izin Operasional Perguruan
                                    Tinggi<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="IzinOperasional" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->izin_operasional_pt_mitra)
                                            ? $proposal->bab1->izin_operasional_pt_mitra
                                            : "<b class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan Izin Operasional</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class=" pt-1">
                                                    @isset($proposal->bab1->scan_ijin_operasional_pt_mitra)
                                                        <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_pt_mitra)) }}"
                                                            class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                    @else
                                                        <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                                class="fas fa-file-pdf text-white"></i></button>
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Izin Operasional Perguruan Tinggi -->

                            <!-- Status Akreditasi Institusi -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Status Akreditasi
                                    Institusi<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="StatusAkreditasi" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->status_akreditasi_institusi_mitra->status)
                                            ? $proposal->bab1->status_akreditasi_institusi_mitra->status
                                            : "<b class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan SK Akreditasi Institusi</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class=" pt-1">
                                                    @isset($proposal->bab1->scan_status_akreditasi_institusi_mitra)
                                                        <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_status_akreditasi_institusi_mitra)) }}"
                                                            class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                                    @else
                                                        <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                                class="fas fa-file-pdf text-white"></i></button>
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Status Akreditasi Institusi -->

                            <!-- Peringkat Internasional -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Peringkat Internasional<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="PeringkatPTMitra" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab1->peringkat_pt_mitra) && trim($proposal->bab1->peringkat_pt_mitra != '')
                                            ? $proposal->bab1->peringkat_pt_mitra
                                            : "<b class='text-red'>BELUM DIISI</b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Peringkat Internasional -->

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
                                <div class="col-sm-4 col-form-label text-bold">Nama Prodi<code>*</code>
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

                            <div class="row">
                                <div class="col-sm-4 col-form-label text-bold">Akreditasi Prodi<code>*</code>
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


                            <div class="row">
                                <div class="col-sm-4 col-form-label text-bold">SK Akreditasi Prodi<code>*</code>
                                </div>
                                <div class="col-sm-4 border-right pt-1">
                                    <div class="form-group">
                                        <div class="text-bold">PT</div>
                                        <div class="pt-2">

                                            @isset($proposal->bab1->scan_sk_akreditasi_prodi)
                                                <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_sk_akreditasi_prodi)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endisset

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 pt-1">

                                    <div class="text-bold">PT Mitra</div>
                                    <div class="pt-2">

                                        @isset($proposal->bab1->scan_sk_akreditasi_prodi_mitra)
                                            <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_sk_akreditasi_prodi_mitra)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-form-label text-bold">Izin Operasional Prodi<code>*</code>
                                </div>
                                <div class="col-sm-4 border-right border-top pt-1">
                                    <div class="text-bold">PT</div>
                                    <div class="pt-2">
                                        @isset($proposal->bab1->scan_ijin_operasional_prodi)
                                            <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_prodi)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endisset
                                    </div>
                                </div>
                                <div class="col-sm-4 border-top pt-1">
                                    <div class="text-bold">PT Mitra</div>
                                    <div class="pt-2">
                                        @isset($proposal->bab1->scan_ijin_operasional_prodi_mitra)
                                            <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->scan_ijin_operasional_prodi_mitra)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endisset
                                    </div>
                                </div>
                            </div>

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
                                    Tinggi<code>*</code>
                                </div>
                                <div class="col-sm-8 pt-1">
                                    @isset($proposal->bab1->proposal_usulan_kerjsama)
                                        <a target="_blank" href= "{{ route('admin.proposal.download', encrypt($proposal->bab1->proposal_usulan_kerjsama)) }}"
                                            class="btn btn-primary btn-sm">Download <i
                                                            class="fas fa-file-pdf text-white"></i></a>
                                    @else
                                        <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                class="fas fa-file-pdf text-white"></i></button>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <!-- Kembali -->
            <a href="{{ route('admin.proposal.show', encrypt($proposal->id)) }}" class="btn btn-primary">Kembali ke
                halaman utama</a>
            <!-- Bab selanjutnya -->
            <a href="{{ route('admin.proposal.viewBab2', encrypt($proposal->id)) }}"
                class="btn btn-primary float-right">Selanjutnya</a>
        </div>
    </div>
</div>
