<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="margin: 2px">
                BAB1 | PROFIL PERGURUAN TINGGI
            </h3>
        </div>

        <div class="card-body">
            <div class="accordion" id="accordionBAB1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelProfilPT-heading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelProfilPT-collapse" aria-expanded="true"
                            aria-controls="panelProfilPT-collapse">
                            Profil Perguruan Tinggi
                        </button>
                    </h2>
                    <div id="panelProfilPT-collapse" class="accordion-collapse collapse show"
                        aria-labelledby="panelProfilPT-heading">
                        <div class="accordion-body">
                            <div class="form-group row">
                                <label for="inputNamaPT" class="col-sm-4 col-form-label">Nama Perguruan
                                    Tinggi<code>*</code></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-border border-width-2" id="inputNamaPT"
                                        value="{{$proposal->bab1->nama_pt}}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAlamatPT" class="col-sm-4 col-form-label">Alamat Perguruan Tinggi
                                    <code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"
                                        id="inputAlamatPT">{{$proposal->bab1->alamat_pt}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputIzinOperasional" class="col-sm-4 col-form-label">Izin Operasional
                                    Perguruan Tinggi<code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"
                                        id="inputIzinOperasional">{{$proposal->bab1->ijin_operasional_pt}}</textarea>
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan Izin Operasional
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="inputScanIzinOperasional" />
                                                    <label class="custom-file-label"
                                                        for="inputScanIzinOperasional">Choose file</label>
                                                </div>
                                            </div>
                                            <code>Maks. 2 MB dan dengan format
                                                .pdf</code>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputStatusAkreditasi" class="col-sm-4 col-form-label">Status Akreditasi
                                    Institusi<code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputStatusAkreditasi"
                                        value="{{$proposal->bab1->id_status_akreditasi_institusi}}" />
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan SK Akreditasi Institusi
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="inputScanSKAkreditasi" />
                                                    <label class="custom-file-label" for="inputScanSKAkreditasi">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <code>Maks. 2 MB dan dengan format
                                                .pdf</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelProfilPTMitra-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelProfilPTMitra-collapse" aria-expanded="false"
                            aria-controls="panelProfilPTMitra-collapse">
                            Profil Perguruan Tinggi Mitra
                        </button>
                    </h2>
                    <div id="panelProfilPTMitra-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelProfilPTMitra-heading">
                        <div class="accordion-body">
                            <div class="form-group row">
                                <label for="inputNamaPTMitra" class="col-sm-4 col-form-label">Nama Perguruan
                                    Tinggi<code>*</code></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputNamaPTMitra"
                                        value="{{$proposal->bab1->nama_pt_mitra}}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAlamatPTMitra" class="col-sm-4 col-form-label">Alamat Perguruan Tinggi
                                    <code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"
                                        id="inputAlamatPTMitra">{{$proposal->bab1->alamat_pt_mitra}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputNegaraPTMitra" class="col-sm-4 col-form-label">Nama Perguruan
                                    Tinggi<code>*</code></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputNegaraPTMitra"
                                        value="{{$proposal->bab1->id_negara_mitra}}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputIzinOperasionalMitra" class="col-sm-4 col-form-label">Izin Operasional
                                    Perguruan Tinggi<code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"
                                        id="inputIzinOperasionalMitra">{{$proposal->bab1->ijin_operasional_pt_mitra}}</textarea>
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan Izin Operasional
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="inputScanIzinOperasionalMitra" />
                                                    <label class="custom-file-label"
                                                        for="inputScanIzinOperasionalMitra">Choose file</label>
                                                </div>
                                            </div>
                                            <code>Maks. 2 MB dan dengan format
                                                .pdf</code>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputStatusAkreditasi" class="col-sm-4 col-form-label">Status Akreditasi
                                    Institusi<code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputStatusAkreditasi"
                                        value="{{$proposal->bab1->id_status_akreditasi_institusi}}" />
                                    <br />
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Scan SK Akreditasi Institusi
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="inputScanSKAkreditasi" />
                                                    <label class="custom-file-label" for="inputScanSKAkreditasi">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <code>Maks. 2 MB dan dengan format
                                                .pdf</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPeringkatPTMitra" class="col-sm-4 col-form-label">Peringkat
                                    Internasional<code>*</code></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPeringkatPTMitra"
                                        value="{{$proposal->bab1->peringkat_internasional_mitra}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelProfilProdi-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelProfilProdi-collapse" aria-expanded="false"
                            aria-controls="panelProfilProdi-collapse">
                            Profil Program Study
                        </button>
                    </h2>
                    <div id="panelProfilProdi-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelProfilProdi-heading">
                        <div class="accordion-body">
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Nama Prodi<code>*</code>
                                </label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputProdiPT">PT</label>
                                        <input type="text" class="form-control" id="inputProdiPT"
                                            value="{{$proposal->bab1->nama_prodi}}" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputProdiPTMitra">PT Mitra</label>
                                        <input type="email" class="form-control" id="inputProdiPT"
                                            value="{{$proposal->bab1->nama_prodi_mitra}}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Akreditasi Prodi<code>*</code>
                                </label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputAkreditasiProdiPT">PT</label>
                                        <input type="text" class="form-control" id="inputAkreditasiProdiPT"
                                            value="{{$proposal->bab1->id_akreditasi_prodi}}" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputAkreditasiProdiPTMitra">PT Mitra</label>
                                        <input type="email" class="form-control" id="inputAkreditasiProdiPTMitra"
                                            value="{{$proposal->bab1->id_akreditasi_prodi_mitra}}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">SK Akreditasi Prodi<code>*</code>
                                </label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputScanAkreditasiProdiPT">PT</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    id="inputScanAkreditasiProdiPT" />
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <code>Maks. 2 MB dan dengan format .pdf</code>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputScanAkreditasiProdiPTMitra">PT Mitra</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    id="inputScanAkreditasiProdiPTMitra" />
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <code>Maks. 2 MB dan dengan format .pdf</code>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Izin Operasional Prodi<code>*</code>
                                </label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputIzinProdiPT">PT</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputIzinProdiPT" />
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <code>Maks. 2 MB dan dengan format .pdf</code>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputIzinProdiPTMitra">PT Mitra</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    id="inputIzinProdiPTMitra" />
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <code>Maks. 2 MB dan dengan format .pdf</code>
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
                            Dokumen Kerjasama
                        </button>
                    </h2>
                    <div id="panelDokumen-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelDokumen-heading">
                        <div class="accordion-body">
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Proposal Usulan Kerja Sama Perguruan
                                    Tinggi<code>*</code>
                                </label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    id="inputDokumenProposal" />
                                                <label class="custom-file-label" for="inputDokumenProposal">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <code>Maks. 2 MB dan dengan format .pdf</code>
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