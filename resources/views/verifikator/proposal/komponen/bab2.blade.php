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
                                <div class="col-sm-4 col-form-label text-bold">Ringkasan MOU<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="RingkasanMOU" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->ringkasan_mou) && trim($proposal->bab2->ringkasan_mou) !== ''
                                            ? $proposal->bab2->ringkasan_mou
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Berkas MOU-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Berkas MOU<code>*</code></div>
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
                                    </div>
                                </div>
                            </div>

                            <!-- Nomor MOA-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Nomor MOA<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="NomorMOA" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->no_moa) && trim($proposal->bab2->no_moa) !== ''
                                            ? $proposal->bab2->no_moa
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Deskripsi Singkat MOA-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Deskripsi Singkat MOA<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="DeskripsiSingkatMOA" class="border-bottom border-grey pb-1 pt-1">
                                        {!! isset($proposal->bab2->deskripsi_singkat_moa) && trim($proposal->bab2->deskripsi_singkat_moa) !== ''
                                            ? $proposal->bab2->deskripsi_singkat_moa
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Tanggal MOA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Tanggal<code>*</code></div>
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

                            <!-- Berkas MOA-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Berkas MOA<code>*</code></div>
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
                                    </div>
                                </div>
                            </div>

                            <!-- Misi Program Kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Misi Program Kerjasama<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="MisiProgramKerjasama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->misi_program_kerjasama) && trim($proposal->bab2->misi_program_kerjasama) !== ''
                                            ? $proposal->bab2->misi_program_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Target program kerjasama-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Target Program Kerjasama<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="TargetProgramKerjasama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->target_program_kerjasama) && trim($proposal->bab2->target_program_kerjasama) !== ''
                                            ? $proposal->bab2->target_program_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Alasan Pemilihan Mitra-->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Alasan Pemilihan Mitra<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="AlasanPemilihanMitra" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->alasan_pemilihan_mitra) && trim($proposal->bab2->alasan_pemilihan_mitra) !== ''
                                            ? $proposal->bab2->alasan_pemilihan_mitra
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Prinsip Kerja Sama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Prinsip Kerja Sama<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="PrinsipKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->prinsip_kerjasama) && trim($proposal->bab2->prinsip_kerjasama) !== ''
                                            ? $proposal->bab2->prinsip_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Manfaat Kerjasama -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Manfaat Kerjasama<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="ManfaatKerjasama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->manfaat_kerjasama) && trim($proposal->bab2->manfaat_kerjasama) !== ''
                                            ? $proposal->bab2->manfaat_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- TANTANGAN PELAKSANAAN KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Tantangan Pelaksanaan Kerja
                                    Sama<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="TantanganPelaksanaanKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->tantangan_pelaksanaan_kerjasama) &&
                                        trim($proposal->bab2->tantangan_pelaksanaan_kerjasama) !== ''
                                            ? $proposal->bab2->tantangan_pelaksanaan_kerjasama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- KEPEMILIKAN HAK CIPTA DAN ATAU PATEN -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Kepemilikan Hak Cipta dan atau
                                    Paten<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="KepemilikanHakCipta" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->kepemilikan_hak_cipta_paten) &&
                                        trim($proposal->bab2->kepemilikan_hak_cipta_paten) !== ''
                                            ? $proposal->bab2->kepemilikan_hak_cipta_paten
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- MEKANISME RESIPROKAL -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Mekanisme Resiprokal<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="MekanismeResiprokal" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->mekanisme_resiprokal) && trim($proposal->bab2->mekanisme_resiprokal) !== ''
                                            ? $proposal->bab2->mekanisme_resiprokal
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- KEBERLANJUTAN KERJA SAMA -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Keberlanjutan Kerja Sama<code>*</code>
                                </div>
                                <div class="col-sm-8">
                                    <div id="KeberlanjutanKerjaSama" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->keberlanjutan_kerjsama) && trim($proposal->bab2->keberlanjutan_kerjsama) !== ''
                                            ? $proposal->bab2->keberlanjutan_kerjsama
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- HAK DAN KEWAJIBAN -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Hak dan Kewajiban<code>*</code></div>
                                <div class="col-sm-8">
                                    <div id="HakdanKewajiban" class="border-bottom border-grey pb-2 pt-2">
                                        {!! isset($proposal->bab2->hak_dan_kewajiban) && trim($proposal->bab2->hak_dan_kewajiban) !== ''
                                            ? $proposal->bab2->hak_dan_kewajiban
                                            : "<b class='text-red'> BELUM DIISI </b>" !!}
                                    </div>
                                </div>
                            </div>

                            <!-- Hak Tercantum -->
                            <div class="form-group row">
                                <div class="col-sm-4 col-form-label text-bold">Hak Tercantum<code>*</code></div>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <!-- Bab sebelumnya -->
            <a href="{{ route('verifikator.proposal.viewBab1', encrypt($proposal->id)) }}"
                class="btn btn-primary float-left">Sebelumnya</a>
            <!-- Bab selanjutnya -->
            <a href="{{ route('verifikator.proposal.viewBab3', encrypt($proposal->id)) }}"
                class="btn btn-primary float-right">Selanjutnya</a>
        </div>
    </div>
</div>
