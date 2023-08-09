@extends('layouts.app')
@section('title', 'Daftar Permohonan Kerja Sama')
@section('header-title', 'Daftar Proposal')
@section('breadcrumb')
    {{ Breadcrumbs::render('verifikator.proposal') }}
@endsection
@section('contents')
    <div class="card card-dark">
        <div class="card-header bg-primary">
            <h3 class="card-title" style="margin: 2px">
                Tabel Proposal Kerja Sama
            </h3>
            <div class="card-tools">
                <!-- This will cause the card to collapse when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            {{ $dataTable->table(['id' => 'proposal-table', 'class' => 'table table-striped table-hover']) }}
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
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
