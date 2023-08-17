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
                            data-bs-target="#panelMM-collapse" aria-expanded="false" aria-controls="panelMM-collapse">
                            A. MOU & MOA
                        </button>
                    </h2>
                    <div id="panelMM-collapse" class="accordion-collapse collapse" aria-labelledby="panelMM-heading">
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

                            @isset($hasilReview)
                                <!-- Komentar Ringkasan MOU -->

                                <div class="form-group row">
                                    <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                    <div class="col-sm-8">
                                        <!-- Text area komentar Ringkasan MOU -->
                                        <textarea disabled id="KomentarRingkasanMOU" name="komentar_ringkasan_mou" class="form-control" rows="3"
                                            placeholder="Komentar">{{ $hasilReview->ringkasan_mou }}</textarea>

                                        <!-- ./Text area komentar Ringkasan MOU -->
                                    </div>
                                </div>

                                <hr class="mt-0 mb-2">

                                <!-- ./ Komentar Ringkasan MOU -->
                            @endisset

                            <!-- Berkas MOU-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Berkas MOU</div>
                                <div class="col-sm-8">
                                    <div id="BerkasMOU" class="pb-1 pt-1">
                                        @if (isset($proposal->bab2->file_mou) && trim($proposal->bab2->file_mou) !== '')
                                            <a target="_blank" href="{{ route('verifikator.proposal.download', encrypt($proposal->bab2->file_mou)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endif

                                        &nbsp;&nbsp;&nbsp;

                                        {!! isset($proposal->bab2->file_mou)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}

                                    </div>
                                </div>
                            </div>
                            <!-- ./Berkas MOU-->

                            @isset($hasilReview)
                            <!-- Komentar Berkas MOU -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Berkas MOU -->
                                    <textarea disabled id="KomentarBerkasMOU" name="komentar_file_mou" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->file_mou }}</textarea>

                                    <!-- ./Text area komentar Berkas MOU -->
                                </div>
                            </div>
                            <!-- ./ Komentar Berkas MOU -->
                            <hr class="mt-0 mb-2">
                            @endisset

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

                            @isset($hasilReview)
                            <!-- Komentar Nomor MOA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Nomor MOA -->
                                    <textarea disabled id="KomentarNomorMOA" name="komentar_no_moa" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->no_moa }}</textarea>

                                    <!-- ./Text area komentar Nomor MOA -->
                                </div>
                            </div>
                            <!-- ./ Komentar Nomor MOA -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- Deskripsi Singkat MOA-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Deskripsi Singkat MOA</div>
                                <div class="col-sm-8">
                                    <div id="DeskripsiSingkatMOA" class="border-bottom border-grey pb-1 pt-1">
                                        {!! isset($proposal->bab2->deskripsi_singkat_moa) && trim($proposal->bab2->deskripsi_singkat_moa) !== ''
                                            ? $proposal->bab2->deskripsi_singkat_moa
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Deskripsi Singkat MOA-->

                            @isset($hasilReview)
                            <!-- Komentar Deskripsi Singkat MOA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Deskripsi Singkat MOA -->
                                    <textarea disabled id="KomentarDeskripsiSingkatMOA" name="komentar_deskripsi_singkat_moa" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->deskripsi_singkat_moa }}</textarea>

                                    <!-- ./Text area komentar Deskripsi Singkat MOA -->
                                </div>
                            </div>
                            <!-- ./ Komentar Deskripsi Singkat MOA -->
                            <hr class="mt-0 mb-2">
                            @endisset


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
                                            <div id="TanggalBerakhirMOA" class="border-bottom border-grey pb-2 pt-2">
                                                {!! isset($proposal->bab2->tanggal_berakhir_moa) && trim($proposal->bab2->tanggal_berakhir_moa) !== ''
                                                    ? indonesian_date($proposal->bab2->tanggal_berakhir_moa)
                                                    : "<b class='text-red'> BELUM DIISI </b>" !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Tanggal MOA -->

                            @isset($hasilReview)
                            <!-- Komentar Tanggal MOA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <div class = "row">
                                        <!-- Tanggal Mulai MOA-->
                                        <div class="col-sm-6">
                                            <!-- Text area komentar Tanggal Mulai MOA -->
                                            <textarea disabled id="KomentarTanggalMulaiMOA" name="komentar_tanggal_dimulai_moa" class="form-control" rows="3"
                                                placeholder="Komentar">{{ $hasilReview->tanggal_dimulai_moa }}</textarea>

                                            <!-- ./Text area komentar Tanggal Mulai MOA -->
                                        </div>
                                        <!-- Tanggal Berakhir MOA-->
                                        <div class="col-sm-6">
                                            <!-- Text area komentar Tanggal Berakhir MOA -->
                                            <textarea disabled id="KomentarTanggalBerakhirMOA" name="komentar_tanggal_berakhir_moa" class="form-control" rows="3"
                                                placeholder="Komentar">{{ $hasilReview->tanggal_berakhir_moa }}</textarea>

                                            <!-- ./Text area komentar Tanggal Berakhir MOA -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./ Komentar Tanggal MOA -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- Berkas MOA-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Berkas MOA</div>
                                <div class="col-sm-8">
                                    <div id="BerkasMOA" class="pb-1 pt-1">
                                        @if (isset($proposal->bab2->file_moa) && trim($proposal->bab2->file_moa) !== '')
                                            <a target="_blank" href="{{ route('verifikator.proposal.download', encrypt($proposal->bab2->file_moa)) }}"
                                                class="btn btn-primary btn-sm">Download <i
                                                    class="fas fa-file-pdf text-white"></i></a>
                                        @else
                                            <button class="btn btn-danger btn-sm" disabled>Belum Upload <i
                                                    class="fas fa-file-pdf text-white"></i></button>
                                        @endif

                                        &nbsp;&nbsp;&nbsp;

                                        {!! isset($proposal->bab2->file_moa)
                                            ? "<i class='fas fa-check-circle text-success'></i> File telah diunggah"
                                            : "<i class='fas fa-times-circle text-danger'></i> File belum diunggah" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Berkas MOA-->

                            @isset($hasilReview)
                            <!-- Komentar Berkas MOA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Berkas MOA -->
                                    <textarea disabled id="KomentarBerkasMOA" name="komentar_file_moa" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->file_moa }}</textarea>

                                    <!-- ./Text area komentar Berkas MOA -->
                                </div>
                            </div>
                            <!-- ./ Komentar Berkas MOA -->
                            <hr class="mt-0 mb-2">
                            @endisset

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
                            <!-- ./Misi Program Kerjasama-->

                            @isset($hasilReview)
                            <!-- Komentar Misi Program Kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Misi Program Kerjasama -->
                                    <textarea disabled id="KomentarMisiProgramKerjasama" name="komentar_misi_program_kerjasama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->misi_program_kerjasama }}</textarea>

                                    <!-- ./Text area komentar Misi Program Kerjasama -->
                                </div>
                            </div>
                            <!-- ./ Komentar Misi Program Kerjasama -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- Target program kerjasama-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Target Program Kerjasama
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

                            @isset($hasilReview)
                            <!-- Komentar Target program kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Target program kerjasama -->
                                    <textarea disabled id="KomentarTargetProgramKerjasama" name="komentar_target_program_kerjasama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->target_program_kerjasama }}</textarea>

                                    <!-- ./Text area komentar Target program kerjasama -->
                                </div>
                            </div>
                            <!-- ./ Komentar Target program kerjasama -->
                            <hr class="mt-0 mb-2">
                            @endisset
                            
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

                            @isset($hasilReview)
                            <!-- Komentar Alasan Pemilihan Mitra -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Alasan Pemilihan Mitra -->
                                    <textarea disabled id="KomentarAlasanPemilihanMitra" name="komentar_alasan_pemilihan_mitra" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->alasan_pemilihan_mitra }}</textarea>

                                    <!-- ./Text area komentar Alasan Pemilihan Mitra -->
                                </div>
                            </div>
                            <!-- ./ Komentar Alasan Pemilihan Mitra -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- Prinsip Kerja Sama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Prinsip Kerja Sama</div>
                                <div class="col-sm-8">
                                    <div id="PrinsipKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->prinsip_kerjasama) && trim($proposal->bab2->prinsip_kerjasama) !== ''
                                            ? $proposal->bab2->prinsip_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./Prinsip Kerja Sama-->

                            @isset($hasilReview)
                            <!-- Komentar Prinsip Kerja Sama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Prinsip Kerja Sama -->
                                    <textarea disabled id="KomentarPrinsipKerjaSama" name="komentar_prinsip_kerjasama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->prinsip_kerjasama }}</textarea>

                                    <!-- ./Text area komentar Prinsip Kerja Sama -->
                                </div>
                            </div>
                            <!-- ./ Komentar Prinsip Kerja Sama -->
                            <hr class="mt-0 mb-2">
                            @endisset


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
                            <!-- ./Manfaat Kerjasama-->

                            @isset($hasilReview)
                            <!-- Komentar Manfaat Kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Manfaat Kerjasama -->
                                    <textarea disabled id="KomentarManfaatKerjasama" name="komentar_manfaat_kerjasama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->manfaat_kerjasama }}</textarea>

                                    <!-- ./Text area komentar Manfaat Kerjasama -->
                                </div>
                            </div>
                            <!-- ./ Komentar Manfaat Kerjasama -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- TANTANGAN PELAKSANAAN KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Tantangan Pelaksanaan Kerja
                                    Sama</div>
                                <div class="col-sm-8">
                                    <div id="TantanganPelaksanaanKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->tantangan_pelaksanaan_kerjasama) &&
                                        trim($proposal->bab2->tantangan_pelaksanaan_kerjasama) !== ''
                                            ? $proposal->bab2->tantangan_pelaksanaan_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./TANTANGAN PELAKSANAAN KERJA SAMA-->

                            @isset($hasilReview)
                            <!-- Komentar TANTANGAN PELAKSANAAN KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar TANTANGAN PELAKSANAAN KERJA SAMA -->
                                    <textarea disabled id="KomentarTantanganPelaksanaanKerjaSama" name="komentar_tantangan_pelaksanaan_kerjasama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->tantangan_pelaksanaan_kerjasama }}</textarea>

                                    <!-- ./Text area komentar TANTANGAN PELAKSANAAN KERJA SAMA -->
                                </div>
                            </div>
                            <!-- ./ Komentar TANTANGAN PELAKSANAAN KERJA SAMA -->
                            <hr class="mt-0 mb-2">
                            @endisset

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
                            <!-- ./KEPEMILIKAN HAK CIPTA DAN ATAU PATEN-->

                            @isset($hasilReview)
                            <!-- Komentar KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                                    <textarea disabled id="KomentarKepemilikanHakCipta" name="komentar_kepemilikan_hak_cipta_paten" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->kepemilikan_hak_cipta_paten }}</textarea>

                                    <!-- ./Text area komentar KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                                </div>
                            </div>
                            <!-- ./ Komentar KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- MEKANISME RESIPROKAL -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Mekanisme Resiprokal</div>
                                <div class="col-sm-8">
                                    <div id="MekanismeResiprokal" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->mekanisme_resiprokal) && trim($proposal->bab2->mekanisme_resiprokal) !== ''
                                            ? $proposal->bab2->mekanisme_resiprokal
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./MEKANISME RESIPROKAL-->

                            @isset($hasilReview)
                            <!-- Komentar MEKANISME RESIPROKAL -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar MEKANISME RESIPROKAL -->
                                    <textarea disabled id="KomentarMekanismeResiprokal" name="komentar_mekanisme_resiprokal" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->mekanisme_resiprokal }}</textarea>

                                    <!-- ./Text area komentar MEKANISME RESIPROKAL -->
                                </div>
                            </div>
                            <!-- ./ Komentar MEKANISME RESIPROKAL -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- KEBERLANJUTAN KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Keberlanjutan Kerja Sama
                                </div>
                                <div class="col-sm-8">
                                    <div id="KeberlanjutanKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->keberlanjutan_kerjsama) && trim($proposal->bab2->keberlanjutan_kerjsama) !== ''
                                            ? $proposal->bab2->keberlanjutan_kerjsama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./KEBERLANJUTAN KERJA SAMA-->

                            @isset($hasilReview)
                            <!-- Komentar KEBERLANJUTAN KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">

                                    <!-- Text area komentar KEBERLANJUTAN KERJA SAMA -->
                                    <textarea disabled id="KomentarKeberlanjutanKerjaSama" name="komentar_keberlanjutan_kerjsama" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->keberlanjutan_kerjsama }}</textarea>

                                    <!-- ./Text area komentar KEBERLANJUTAN KERJA SAMA -->
                                </div>
                            </div>
                            <!-- ./ Komentar KEBERLANJUTAN KERJA SAMA -->
                            <hr class="mt-0 mb-2">
                            @endisset

                            <!-- HAK DAN KEWAJIBAN -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Hak dan Kewajiban</div>
                                <div class="col-sm-8">
                                    <div id="HakdanKewajiban" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->hak_dan_kewajiban) && trim($proposal->bab2->hak_dan_kewajiban) !== ''
                                            ? $proposal->bab2->hak_dan_kewajiban
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./HAK DAN KEWAJIBAN-->

                            @isset($hasilReview)
                            <!-- Komentar HAK DAN KEWAJIBAN -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar</div>
                                <div class="col-sm-8">

                                    <!-- Text area komentar HAK DAN KEWAJIBAN -->
                                    <textarea disabled id="KomentarHakdanKewajiban" name="komentar_hak_dan_kewajiban" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->hak_dan_kewajiban }}</textarea>

                                    <!-- ./Text area komentar HAK DAN KEWAJIBAN -->
                                </div>
                            </div>
                            <!-- ./ Komentar HAK DAN KEWAJIBAN -->
                            <hr class="mt-0 mb-2">
                            @endisset

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
                            <!-- ./Hak Tercantum-->

                            @isset($hasilReview)
                            <!-- Komentar Hak Tercantum -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Komentar Hak Tercantum</div>
                                <div class="col-sm-8">
                                    <!-- Text area komentar Hak Tercantum -->
                                    <textarea disabled id="KomentarHakTercantum" name="komentar_hak_tercantum" class="form-control" rows="3"
                                        placeholder="Komentar">{{ $hasilReview->hak_tercantum }}</textarea>

                                    <!-- ./Text area komentar Hak Tercantum -->
                                </div>
                            </div>
                            <!-- ./ Komentar Hak Tercantum -->
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
                        <div class="col-sm-4 col-xs-12 col-form-label text-bold">Review BAB 2</div>
                        <div class="col-sm-8 col-xs-12 mt-3 mb-0">
                            <!-- Text area komentar bab2 -->
                            <textarea disabled id="KomentarBab2" name="komentar_bab2" class="form-control"
                                rows="3" placeholder="Tuliskan review anda...">{{ $hasilReview->komentar_bab2 }}</textarea>
                            <!-- ./Text area komentar bab2 -->
                        </div>
                    </div>
                </div>
            </div>
            @endisset

        </div>
        <div class="card-footer">
            @isset($hasilReview)
            <a href="{{ route('verifikator.proposal.viewBab1', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                class="btn btn-primary float-left">Sebelumnya</a>
            <a href="{{ route('verifikator.proposal.viewBab3', [encrypt($proposal->id), 'reviewer' => encrypt($hasilReview->id_reviewer)]) }}"
                class="btn btn-primary float-right">Selanjutnya</a>
            @else
            <a href="{{ route('verifikator.proposal.viewBab1', encrypt($proposal->id)) }}"
                class="btn btn-primary float-left">Sebelumnya</a>
            <a href="{{ route('verifikator.proposal.viewBab3', encrypt($proposal->id)) }}"
                class="btn btn-primary float-right">Selanjutnya</a>
            @endisset
        </div>
    </div>
</div>
