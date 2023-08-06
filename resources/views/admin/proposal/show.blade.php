@extends('layouts.app') 
@section('title', 'Proposal - '. $proposal->judul) 
@section('header-title', 'Proposal')
@section('contents')
<div class="row">
    @include('admin.proposal.komponen.navigasi-bab')
</div>
<div class="row">
    <div class="col-12">
        <div class="row">
            @include('admin.proposal.komponen.administrasi')
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            @include('admin.proposal.komponen.detail-proposal')
        </div>
    </div>

</div>
@stop

