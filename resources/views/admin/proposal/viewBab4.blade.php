@extends('layouts.app') 
@section('title') 
    @php
        $title = 'Bab 4 - ' . $proposal->judul;
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
    {{ Breadcrumbs::render('admin.proposal.viewBab4', $proposal) }}
@endsection

@section('contents')
<div class="row">
    @include('admin.proposal.komponen.navigasi-bab')
    @include('admin.proposal.komponen.bab4')
</div>
@stop

