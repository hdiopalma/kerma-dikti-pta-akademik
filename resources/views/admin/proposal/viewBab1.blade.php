@extends('layouts.app') 
@section('title') 
    @php
        $title = 'Bab 1 - ' . $proposal->judul;
        $characterLimit = 50;

        if (strlen($title) > $characterLimit) {
            $title = substr($title, 0, $characterLimit) . ' ...';
        }
    @endphp

    {{ $title }}
@endsection
@section('header-title')
@php
    $title = $proposal->judul;
@endphp
    {{ $title }}
@endsection

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.proposal.viewBab1', $proposal) }}
@endsection

@section('contents')
<div class="row">
    @include('admin.proposal.komponen.navigasi-bab')
    @include('admin.proposal.komponen.bab1')
</div>
@stop

