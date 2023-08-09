@extends('layouts.app')
@section('title', 'Proposal - '. $proposal->judul)
@section('header-title', 'Detail Proposal')
@section('breadcrumb')
    {{ Breadcrumbs::render('verifikator.proposal.show', $proposal) }}
@endsection
@section('contents')
<div class="row">
    @include('verifikator.proposal.komponen.navigasi-bab')
</div>
<div class="row">
    
    <div class="col-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">
            @include('verifikator.proposal.komponen.detail-proposal')
        </div>
    </div>
    <div class="col-4 col-lg-4 col-md-4 col-sm-12">
        <div class="row">
           @include('verifikator.proposal.komponen.administrasi')
        </div>
    </div>

</div>
@stop