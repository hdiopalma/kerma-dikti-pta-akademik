<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title" style="margin: 2px">
                BAB 3 | KESIAPAN SUMBER DAYA
            </h3>
        </div>

        <div class="card-body">
            <div class="accordion" id="accordionBAB3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelKJSDM-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelKJSDM-collapse" aria-expanded="false"
                            aria-controls="panelKJSDM-collapse">
                            A. KESIAPAN KERJA SAMA DARI SEGI SDM
                        </button>
                    </h2>
                    <div id="panelKJSDM-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelKJSDM-heading">
                        <div class="accordion-body">
                            BODYYYY
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelKJSS-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelKJSS-collapse" aria-expanded="false"
                            aria-controls="panelKJSS-collapse">
                            B. KESIAPAN KERJA SAMA DARI SEGI SARANA
                        </button>
                    </h2>
                    <div id="panelKJSS-collapse" class="accordion-collapse collapse"
                        aria-labelledby="panelKJSS-heading">
                        <div class="accordion-body">
                            OOOO
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <!-- Bab sebelumnya -->
            <a href="{{ route('admin.proposal.viewBab2', encrypt($proposal->id)) }}" class="btn btn-primary float-left">Sebelumnya</a>
            <!-- Bab selanjutnya -->
            <a href="{{ route('admin.proposal.viewBab4', encrypt($proposal->id)) }}" class="btn btn-primary float-right">Selanjutnya</a>
        </div> 
    </div>
</div>
