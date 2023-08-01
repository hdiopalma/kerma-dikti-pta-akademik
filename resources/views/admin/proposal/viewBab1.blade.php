@extends('layouts.app') 
@section('title', 'Proposal - '. $proposal->judul) 
@section('header-title', 'Proposal')
@section('contents')
<div class="row">
    @include('admin.proposal.komponen.navigasi-bab')
    @include('admin.proposal.komponen.bab1')
</div>
@stop

