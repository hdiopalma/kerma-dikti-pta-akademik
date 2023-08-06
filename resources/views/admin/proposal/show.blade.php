@extends('layouts.app') 
@section('title', 'Proposal - '. $proposal->judul) 
@section('header-title', 'Proposal')
@section('contents')
<div class="row">
    @include('admin.proposal.komponen.navigasi-bab')
</div>
<div class="row">
    
    <div class="col-8 col-lg-8 col-md-8 col-sm-12">
        <div class="row">
            @include('admin.proposal.komponen.detail-proposal')
        </div>
    </div>
    <div class="col-4 col-lg-4 col-md-4 col-sm-12">
        <div class="row">
            @include('admin.proposal.komponen.administrasi')
        </div>
    </div>

</div>
@stop

