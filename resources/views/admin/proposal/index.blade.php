@extends('layouts.app')
@section('title', 'Daftar Permohonan Kerja Sama')
@section('header-title', 'Daftar Permohonan Kerja Sama')
@section('breadcrumb')
    {{ Breadcrumbs::render('admin.proposal') }}
@endsection
@section('contents')
    <div class="card card-dark">
        <div class="card-header bg-primary">
            <h3 class="card-title pt-2">Tabel Daftar Kerma</h3>
        </div>

        <div class="card-body">
            {!! $dataTable->table(['id' => 'proposal-table', 'class' => 'table table-striped table-hover'], true) !!}
        </div>
    </div>
@endsection

@push('styles')
    <style>
        #proposal-table {
            width: 100% !important;
        }

        #proposal-table thead th {
            vertical-align: middle !important;
        }
    </style>
@endpush

@push('scripts')
    {!! $dataTable->scripts(attributes: ['type' => 'module']) !!}
@endpush
