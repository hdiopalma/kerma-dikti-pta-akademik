@extends('layouts.app') 
@section('title') 
    @php
        $title = 'Bab 2 - ' . $proposal->judul;
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
    {{ Breadcrumbs::render('reviewer.proposal.viewBab2', $proposal) }}
@endsection

@section('contents')
<div class="row">
    @include('reviewer.proposal.komponen.navigasi-bab')
    @include('reviewer.proposal.komponen.bab2')
</div>
@stop

