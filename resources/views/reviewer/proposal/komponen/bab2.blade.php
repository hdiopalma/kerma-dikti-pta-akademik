@php
    function indonesian_date($date)
    {
        $months = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $time = strtotime($date);
        $month = $months[date('F', $time)];
        return date('d', $time) . ' ' . $month . ' ' . date('Y', $time);
    }
@endphp

<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <form id="formReviewBab2" method="POST" enctype="multipart/form-data"
            action="{{ route('reviewer.proposal.simpanReviewBab2') }}">
            @csrf
            <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">
            <div class="card-header bg-primary">
                <h3 class="card-title" style="margin: 2px">
                    BAB 2 | DOKUMEN KERJA SAMA
                </h3>
            </div>

            <div class="card-body">
                <div class="accordion" id="accordionBAB2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelMM-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelMM-collapse" aria-expanded="false"
                                aria-controls="panelMM-collapse">
                                <div class="text-bold text-primary">A. MOU & MOA</div>
                            </button>
                        </h2>
                        <div id="panelMM-collapse" class="accordion-collapse collapse"
                            aria-labelledby="panelMM-heading">
                            <div class="accordion-body">
                                <!-- Ringkasan MOU-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Ringkasan MOU</div>
                                    <div class="col-sm-8">
                                        <div id="RingkasanMOU" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->ringkasan_mou) && trim($proposal->bab2->ringkasan_mou) !== ''
                                                ? $proposal->bab2->ringkasan_mou
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Ringkasan MOU-->

                                <!-- Komentar Ringkasan MOU-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarRingkasanMOU" name="komentar_ringkasan_mou"
                                            class="form-control @error('komentar_ringkasan_mou') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_ringkasan_mou', $reviewer_bab2->ringkasan_mou ?? '') }}</textarea>
                                        @error('komentar_ringkasan_mou')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Ringkasan MOU-->

                                <hr>

                                <!-- Berkas MOU-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Berkas MOU</div>
                                    <div class="col-sm-8 d-flex align-items-center">
                                        <div id="BerkasMOU" class="pt-1">
                                            @if (isset($proposal->bab2->file_mou) && trim($proposal->bab2->file_mou) !== '')
                                                <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab2->file_mou)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                        class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endif
                                        </div>
                                        <div class="pl-3 pt-1">
                                            {!! isset($proposal->bab2->file_mou)
                                                ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}

                                        </div>
                                    </div>
                                </div>
                                <!-- ./Berkas MOU-->

                                <!-- Komentar Berkas MOU-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarBerkasMOU" name="komentar_file_mou"
                                            class="form-control @error('komentar_file_mou') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_file_mou', $reviewer_bab2->file_mou ?? '') }}</textarea>
                                        @error('komentar_file_mou')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Berkas MOU-->

                                <hr>


                                <!-- Nomor MOA-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Nomor MOA</div>
                                    <div class="col-sm-8">
                                        <div id="NomorMOA" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->no_moa) && trim($proposal->bab2->no_moa) !== ''
                                                ? $proposal->bab2->no_moa
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Nomor MOA-->

                                <!-- Komentar Nomor MOA-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarNomorMOA" name="komentar_no_moa"
                                            class="form-control @error('komentar_no_moa') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_no_moa', $reviewer_bab2->no_moa ?? '') }}</textarea>
                                        @error('komentar_no_moa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Nomor MOA-->

                                <hr>

                                <!-- Deskripsi Singkat MOA-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Deskripsi Singkat MOA
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="DeskripsiSingkatMOA" class="border-bottom border-grey pb-1 pt-1">
                                            {!! isset($proposal->bab2->deskripsi_singkat_moa) && trim($proposal->bab2->deskripsi_singkat_moa) !== ''
                                                ? $proposal->bab2->deskripsi_singkat_moa
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Deskripsi Singkat MOA-->

                                <!-- Komentar Deskripsi Singkat MOA-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarDeskripsiSingkatMOA" name="komentar_deskripsi_singkat_moa"
                                            class="form-control @error('komentar_deskripsi_singkat_moa') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_deskripsi_singkat_moa', $reviewer_bab2->deskripsi_singkat_moa ?? '') }}</textarea>
                                        @error('komentar_deskripsi_singkat_moa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Deskripsi Singkat MOA-->

                                <hr>

                                <!-- Tanggal MOA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Tanggal</div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <!-- Tanggal Mulai MOA-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Tanggal Dimulai MOA</div>
                                                <div id="TanggalMulaiMOA" class="border-bottom border-grey pb-2 pt-2">
                                                    {!! isset($proposal->bab2->tanggal_dimulai_moa) && trim($proposal->bab2->tanggal_dimulai_moa) !== ''
                                                        ? indonesian_date($proposal->bab2->tanggal_dimulai_moa)
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                            <!-- Tanggal Berakhir MOA-->
                                            <div class="col-sm-6">
                                                <div class="text-bold">Tanggal Berakhir MOA</div>
                                                <div id="TanggalBerakhirMOA"
                                                    class="border-bottom border-grey pb-2 pt-2">
                                                    {!! isset($proposal->bab2->tanggal_berakhir_moa) && trim($proposal->bab2->tanggal_berakhir_moa) !== ''
                                                        ? indonesian_date($proposal->bab2->tanggal_berakhir_moa)
                                                        : "<b class='text-red'> BELUM DIISI </b>" !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Tanggal MOA -->

                                <!-- Komentar Tanggal MOA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <!-- Komentar Tanggal Mulai MOA-->
                                            <div class="col-sm-6">
                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarTanggalMulaiMOA" name="komentar_tanggal_mulai_moa"
                                                    class="form-control @error('komentar_tanggal_mulai_moa') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_tanggal_mulai_moa', $reviewer_bab2->tanggal_mulai_moa ?? '') }}</textarea>
                                                @error('komentar_tanggal_mulai_moa')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Tanggal Mulai MOA-->

                                            <!-- Komentar Tanggal Berakhir MOA-->
                                            <div class="col-sm-6">
                                                <!-- Text area komentar perguruan tinggi -->
                                                <textarea id="komentarTanggalBerakhirMOA" name="komentar_tanggal_berakhir_moa"
                                                    class="form-control @error('komentar_tanggal_berakhir_moa') is-invalid @enderror" rows="3"
                                                    placeholder="Komentar">{{ old('komentar_tanggal_berakhir_moa', $reviewer_bab2->tanggal_berakhir_moa ?? '') }}</textarea>
                                                @error('komentar_tanggal_berakhir_moa')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <!-- ./Text area komentar perguruan tinggi -->
                                            </div>
                                            <!-- ./Komentar Tanggal Berakhir MOA-->
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Komentar Tanggal MOA -->

                                <hr>

                                <!-- Berkas MOA-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Berkas MOA</div>
                                    <div class="col-sm-8 d-flex align-items-center">
                                        <div id="BerkasMOA" class="pt-1">

                                            @if (isset($proposal->bab2->file_moa) && trim($proposal->bab2->file_moa) !== '')
                                                <a target="_blank" href="{{ route('reviewer.proposal.download', encrypt($proposal->bab2->file_moa)) }}"
                                                    class="btn btn-primary btn-sm">Download <i
                                                        class="fas fa-file-pdf text-white"></i></a>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                        class="fas fa-file-pdf text-white"></i></button>
                                            @endif
                                        </div>
                                        <div class="pt-1 pl-3">
                                            {!! isset($proposal->bab2->file_moa)
                                                ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                                : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Berkas MOA -->

                                <!-- Komentar Berkas MOA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarBerkasMOA" name="komentar_file_moa"
                                            class="form-control @error('komentar_file_moa') is-invalid @enderror" rows="3" placeholder="Komentar">{{ old('komentar_file_moa', $reviewer_bab2->file_moa ?? '') }}</textarea>
                                        @error('komentar_file_moa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Berkas MOA -->

                                <hr>

                                <!-- Misi Program Kerjasama -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Misi Program Kerjasama
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="MisiProgramKerjasama" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->misi_program_kerjasama) && trim($proposal->bab2->misi_program_kerjasama) !== ''
                                                ? $proposal->bab2->misi_program_kerjasama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Misi Program Kerjasama -->

                                <!-- Komentar Misi Program Kerjasama -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarMisiProgramKerjasama" name="komentar_misi_program_kerjasama"
                                            class="form-control @error('komentar_misi_program_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_misi_program_kerjasama', $reviewer_bab2->misi_program_kerjasama ?? '') }}</textarea>
                                        @error('komentar_misi_program_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Misi Program Kerjasama -->

                                <hr>

                                <!-- Target program kerjasama-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Target Program
                                        Kerjasama
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="TargetProgramKerjasama" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->target_program_kerjasama) && trim($proposal->bab2->target_program_kerjasama) !== ''
                                                ? $proposal->bab2->target_program_kerjasama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Target program kerjasama-->

                                <!-- Komentar Target program kerjasama-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarTargetProgramKerjasama" name="komentar_target_program_kerjasama"
                                            class="form-control @error('komentar_target_program_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_target_program_kerjasama', $reviewer_bab2->target_program_kerjasama ?? '') }}</textarea>
                                        @error('komentar_target_program_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Target program kerjasama-->

                                <hr>

                                <!-- Alasan Pemilihan Mitra-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Alasan Pemilihan Mitra
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="AlasanPemilihanMitra" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->alasan_pemilihan_mitra) && trim($proposal->bab2->alasan_pemilihan_mitra) !== ''
                                                ? $proposal->bab2->alasan_pemilihan_mitra
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Alasan Pemilihan Mitra-->

                                <!-- Komentar Alasan Pemilihan Mitra-->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarAlasanPemilihanMitra" name="komentar_alasan_pemilihan_mitra"
                                            class="form-control @error('komentar_alasan_pemilihan_mitra') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_alasan_pemilihan_mitra', $reviewer_bab2->alasan_pemilihan_mitra ?? '') }}</textarea>
                                        @error('komentar_alasan_pemilihan_mitra')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Alasan Pemilihan Mitra-->

                                <hr>

                                <!-- Prinsip Kerja Sama -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Prinsip Kerja Sama
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="PrinsipKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->prinsip_kerjasama) && trim($proposal->bab2->prinsip_kerjasama) !== ''
                                                ? $proposal->bab2->prinsip_kerjasama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Prinsip Kerja Sama -->

                                <!-- Komentar Prinsip Kerja Sama -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarPrinsipKerjaSama" name="komentar_prinsip_kerjasama"
                                            class="form-control @error('komentar_prinsip_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_prinsip_kerjasama', $reviewer_bab2->prinsip_kerjasama ?? '') }}</textarea>
                                        @error('komentar_prinsip_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Prinsip Kerja Sama -->

                                <hr>

                                <!-- Manfaat Kerjasama -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Manfaat Kerjasama</div>
                                    <div class="col-sm-8">
                                        <div id="ManfaatKerjasama" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->manfaat_kerjasama) && trim($proposal->bab2->manfaat_kerjasama) !== ''
                                                ? $proposal->bab2->manfaat_kerjasama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Manfaat Kerjasama -->

                                <!-- Komentar Manfaat Kerjasama -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarManfaatKerjaSama" name="komentar_manfaat_kerjasama"
                                            class="form-control @error('komentar_manfaat_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_manfaat_kerjasama', $reviewer_bab2->manfaat_kerjasama ?? '') }}</textarea>
                                        @error('komentar_manfaat_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Manfaat Kerjasama -->

                                <hr>

                                <!-- TANTANGAN PELAKSANAAN KERJA SAMA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Tantangan Pelaksanaan Kerja
                                        Sama</div>
                                    <div class="col-sm-8">
                                        <div id="TantanganPelaksanaanKerjaSama"
                                            class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->tantangan_pelaksanaan_kerjasama) &&
                                            trim($proposal->bab2->tantangan_pelaksanaan_kerjasama) !== ''
                                                ? $proposal->bab2->tantangan_pelaksanaan_kerjasama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./TANTANGAN PELAKSANAAN KERJA SAMA -->

                                <!-- Komentar TANTANGAN PELAKSANAAN KERJA SAMA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarTantanganPelaksanaanKerjaSama" name="komentar_tantangan_pelaksanaan_kerjasama"
                                            class="form-control @error('komentar_tantangan_pelaksanaan_kerjasama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_tantangan_pelaksanaan_kerjasama', $reviewer_bab2->tantangan_pelaksanaan_kerjasama ?? '') }}</textarea>
                                        @error('komentar_tantangan_pelaksanaan_kerjasama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar TANTANGAN PELAKSANAAN KERJA SAMA -->

                                <hr>

                                <!-- KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Kepemilikan Hak Cipta dan atau
                                        Paten</div>
                                    <div class="col-sm-8">
                                        <div id="KepemilikanHakCipta" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->kepemilikan_hak_cipta_paten) &&
                                            trim($proposal->bab2->kepemilikan_hak_cipta_paten) !== ''
                                                ? $proposal->bab2->kepemilikan_hak_cipta_paten
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->

                                <!-- Komentar KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarKepemilikanHakCipta" name="komentar_kepemilikan_hak_cipta_paten"
                                            class="form-control @error('komentar_kepemilikan_hak_cipta_paten') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_kepemilikan_hak_cipta_paten', $reviewer_bab2->kepemilikan_hak_cipta_paten ?? '') }}</textarea>
                                        @error('komentar_kepemilikan_hak_cipta_paten')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->

                                <hr>

                                <!-- MEKANISME RESIPROKAL -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Mekanisme Resiprokal
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="MekanismeResiprokal" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->mekanisme_resiprokal) && trim($proposal->bab2->mekanisme_resiprokal) !== ''
                                                ? $proposal->bab2->mekanisme_resiprokal
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./MEKANISME RESIPROKAL -->

                                <!-- Komentar MEKANISME RESIPROKAL -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarMekanismeResiprokal" name="komentar_mekanisme_resiprokal"
                                            class="form-control @error('komentar_mekanisme_resiprokal') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_mekanisme_resiprokal', $reviewer_bab2->mekanisme_resiprokal ?? '') }}</textarea>
                                        @error('komentar_mekanisme_resiprokal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar MEKANISME RESIPROKAL -->

                                <hr>

                                <!-- KEBERLANJUTAN KERJA SAMA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Keberlanjutan Kerja
                                        Sama
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="KeberlanjutanKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->keberlanjutan_kerjsama) && trim($proposal->bab2->keberlanjutan_kerjsama) !== ''
                                                ? $proposal->bab2->keberlanjutan_kerjsama
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./KEBERLANJUTAN KERJA SAMA -->

                                <!-- Komentar KEBERLANJUTAN KERJA SAMA -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarKeberlanjutanKerjaSama" name="komentar_keberlanjutan_kerjsama"
                                            class="form-control @error('komentar_keberlanjutan_kerjsama') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_keberlanjutan_kerjsama', $reviewer_bab2->keberlanjutan_kerjsama ?? '') }}</textarea>
                                        @error('komentar_keberlanjutan_kerjsama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar KEBERLANJUTAN KERJA SAMA -->

                                <hr>

                                <!-- HAK DAN KEWAJIBAN -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Hak dan Kewajiban
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="HakdanKewajiban" class="border-bottom border-grey pb-2 pt-2">
                                            {!! isset($proposal->bab2->hak_dan_kewajiban) && trim($proposal->bab2->hak_dan_kewajiban) !== ''
                                                ? $proposal->bab2->hak_dan_kewajiban
                                                : "<b class='text-red'> BELUM DIISI </b>" !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- ./HAK DAN KEWAJIBAN -->

                                <!-- Komentar HAK DAN KEWAJIBAN -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarHakdanKewajiban" name="komentar_hak_dan_kewajiban"
                                            class="form-control @error('komentar_hak_dan_kewajiban') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_hak_dan_kewajiban', $reviewer_bab2->hak_dan_kewajiban ?? '') }}</textarea>
                                        @error('komentar_hak_dan_kewajiban')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar HAK DAN KEWAJIBAN -->

                                <hr>

                                <!-- Hak Tercantum -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Hak Tercantum</div>
                                    <div class="col-sm-8">
                                        <div id="HakTercantum">
                                            <div class="row">
                                                <!-- Apakah hal tersebut tercantum dalam MOA? -->
                                                <div class="col-sm-12 col-form-label text-bold">
                                                    Apakah hak tersebut tercantum dalam MOA? <br>
                                                    <input type="radio" name="hak_dan_kewajiban_moa" value="Ya"
                                                        {{ isset($proposal->bab2->hak_tercantum) && $proposal->bab2->hak_tercantum == 1 ? 'checked' : '' }}
                                                        disabled> Ya
                                                    <input type="radio" name="hak_dan_kewajiban_moa" value="Tidak"
                                                        {{ isset($proposal->bab2->hak_tercantum) && $proposal->bab2->hak_tercantum == 0 ? 'checked' : '' }}
                                                        disabled> Tidak
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Hak Tercantum -->

                                <!-- Komentar Hak Tercantum -->
                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar<code>*</code></div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar perguruan tinggi -->
                                        <textarea id="komentarHakTercantum" name="komentar_hak_tercantum"
                                            class="form-control @error('komentar_hak_tercantum') is-invalid @enderror" rows="3"
                                            placeholder="Komentar">{{ old('komentar_hak_tercantum', $reviewer_bab2->hak_tercantum ?? '') }}</textarea>
                                        @error('komentar_hak_tercantum')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- ./Text area komentar perguruan tinggi -->
                                    </div>
                                </div>
                                <!-- ./Komentar Hak Tercantum -->
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Kolom Koementar Bab 2 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold text-primary mt-1">Komentar Reviewer</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4 col-form-label text-bold">Status Proposal BAB 2</div>
                            <div class="col-sm-8">
                                <select name="status_proposal" id="status_proposal"
                                    class="form-control @error('status_proposal') is-invalid @enderror">
                                    <option value=""> -- Pilih -- </option>
                                    <option value="Ditolak"
                                        {{ old('status_proposal') == 'Ditolak' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab2->status_proposal) && $reviewer_bab2->status_proposal == 'Ditolak' ? 'selected' : '' }}>
                                        Ditolak
                                    </option>
                                    <option value="Revisi" {{ old('status_proposal') == 'Revisi' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab2->status_proposal) && $reviewer_bab2->status_proposal == 'Revisi' ? 'selected' : '' }}>
                                        Revisi
                                    </option>
                                    <option value="Diterima"
                                        {{ old('status_proposal') == 'Diterima' ? 'selected' : '' }}
                                        {{ isset($reviewer_bab2->status_proposal) && $reviewer_bab2->status_proposal == 'Diterima' ? 'selected' : '' }}>
                                        Diterima
                                    </option>
                                </select>
                                @error('status_proposal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 col-xs-12 col-form-label text-bold mt-3">Review BAB 2</div>
                            <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                                <!-- Text area komentar bab2 -->
                                <textarea id="KomentarBab2" name="komentar_bab2" class="form-control @error('komentar_bab2') is-invalid @enderror"
                                    rows="3" placeholder="Tuliskan review anda...">{{ old('komentar_bab2', $reviewer_bab2->komentar ?? '') }}</textarea>
                                @error('komentar_bab2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <!-- ./Text area komentar bab2 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <!-- Bab sebelumnya -->
                <a href="{{ route('reviewer.proposal.viewBab1', encrypt($proposal->id)) }}"
                    class="btn btn-primary float-left">Sebelumnya</a>
                <!-- Simpan dan Lanjutkan -->
                <button type="submit" class="btn btn-warning float-end">Simpan dan Lanjutkan</button>
            </div>
        </form>
    </div>
</div>
