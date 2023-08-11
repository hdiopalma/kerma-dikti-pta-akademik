<div class="col-12 col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header bg-primary" role="button" data-card-widget="collapse">
            <h3 class="card-title" style="margin: 2px"><b>Administrasi Proposal</b></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus text-white"></i>
                </button>
            </div>
        </div>

        <!-- Status Berkas Proposal -->
        <div class="card-body">
            <div class="row mb-2 border-bottom">
                <div class="col-5">
                    <h6 class="text-bold">Status Berkas :</h6>
                </div>
                <div class="col-6 text-left">
                    <h6><span class="card-text text-success text-bold">{{ $proposal->statusBerkas->status }}</span></h6>
                </div>
            </div>

            <div class="row mb-2 border-bottom">
                <div class="col-5 ">
                    <h6 class="text-bold">BAB 1 :</h6>
                </div>
                <div class="col-6 text-left">
                    <h6><span class="card-text text-success text-bold">{!! $reviewer['bab1']->status_proposal ?? 'Belum di review<code>*</code>' !!}</span></h6>
                </div>
            </div>



            <div class="row mb-2 border-bottom">
                <div class="col-5 ">
                    <h6 class="text-bold">BAB 2 :</h6>
                </div>
                <div class="col-6 text-left">
                    <h6><span class="card-text text-success text-bold">{!! $reviewer['bab2']->status_proposal ?? 'Belum di review<code>*</code>' !!}</span></h6>
                </div>
            </div>

            <div class="row mb-2 border-bottom">
                <div class="col-5 ">
                    <h6 class="text-bold">BAB 3 :</h6>
                </div>
                <div class="col-6 text-left">
                    <h6><span class="card-text text-success text-bold">{!! $reviewer['bab3']->status_proposal ?? 'Belum di review<code>*</code>' !!}</span></h6>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-5 ">
                    <h6 class="text-bold">BAB 4 :</h6>
                </div>
                <div class="col-6 text-left">
                    <h6><span class="card-text text-success text-bold">{!! $reviewer['bab4']->status_proposal ?? 'Belum di review<code>*</code>' !!}</span></h6>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12 col-md-12 col-sm-12">
                    <a type="button" class="btn btn-primary btn-md btn-block"
                        href="{{ route('reviewer.proposal.viewBab1', encrypt($proposal->id)) }}">
                        <i class="fas fa-file-alt"></i>&nbsp;
                        Review Proposal
                    </a>
                </div>
            </div>

            @if (optional($reviewer['bab1'])->status_proposal &&
                    optional($reviewer['bab2'])->status_proposal &&
                    optional($reviewer['bab3'])->status_proposal &&
                    optional($reviewer['bab4'])->status_proposal)
                <!-- Ajukan Review with Modal -->
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12">
                        <button type="button" class="btn btn-warning btn-md btn-block" data-bs-toggle="modal"
                            data-bs-target="#ajukanReview">
                            <i class="fas fa-paper-plane"></i>&nbsp;
                            Ajukan Hasil Review
                        </button>
                    </div>
                </div>
                <!-- /.Ajukan Review with Modal -->
            @else
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12">
                        <button type="button" class="btn btn-secondary btn-md btn-block"
                            style="cursor: not-allowed; pointer-events: all !important;"
                            onclick="event.preventDefault(); document.getElementById('alertAjukan').style.display = 'block';">
                            <i class="fas fa-paper-plane"></i>&nbsp;
                            Ajukan Hasil Review
                        </button>

                        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert"
                            id="alertAjukan" style="display: none;">
                            <strong>Perhatian!</strong> <br>
                            <p>Anda belum dapat mengajukan hasil review karena masih ada bab yang belum di review</p>
                            <button type="button" class="btn-close"
                                onclick="document.getElementById('alertAjukan').style.display = 'none';"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- /.Status Berkas Proposal -->
        <hr style="margin: 0px">
    </div>
</div>

@push('modals')

    @if (optional($reviewer['bab1'])->status_proposal &&
            optional($reviewer['bab2'])->status_proposal &&
            optional($reviewer['bab3'])->status_proposal &&
            optional($reviewer['bab4'])->status_proposal)
        <!-- Modal ajukanReview bootstrap 5 -->
        <div class="modal fade" id="ajukanReview" tabindex="-1" aria-labelledby="ajukanReviewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">


                <div class="modal-content">
                    <form id="formSimpanProposal" method="POST" enctype="multipart/form-data"
                        action="{{ route('reviewer.proposal.simpanReviewProposal') }}">
                        @csrf
                        <input type="hidden" name="id_proposal" value="{{ encrypt($proposal->id) }}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ajukanReviewLabel">Ajukan Hasil Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputStatusProposal">Status Proposal</label>
                                <select class="form-control" id="inputStatusProposal" name="status_proposal">
                                    @foreach ($status_proposal as $key => $value)
                                        <option value="{{ $key }}" @if (old('status_proposal', $proposal->statusBerkas->id) == $key) selected @endif>
                                            {{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('status_proposal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputKomentarProposal">Komentar Proposal</label>
                                <textarea name="komentar" class="form-control @error('komentar') is-invalid @enderror" id="inputKomentarProposal" rows="3"
                                    placeholder="Masukkan komentar proposal">{{ old('komentar', $proposal->komentar ?? '') }}</textarea>
                                @error('komentar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endif
@endpush
