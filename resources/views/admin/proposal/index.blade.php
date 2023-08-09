@extends('layouts.app')
@section('title', 'Daftar Permohonan Kerja Sama')
@section('header-title', 'Daftar Proposal')
@section('breadcrumb')
    {{ Breadcrumbs::render('admin.proposal') }}
@endsection
@section('contents')
    <div class="card card-dark card-tabs">
        <div class="card-header p-0 pt-1">
            <div class="card-tools">
                <!-- This will cause the card to maximize when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <!-- This will cause the card to collapse when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>

            <ul class="nav nav-tabs" id="proposal-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="proposal-tabs-table-tab" data-toggle="pill" href="#proposal-tabs-table"
                        role="tab" aria-controls="proposal-tabs-table" aria-selected="true">
                        <i class="fas fa-xs fa-table fa-fw"></i>
                        Daftar proposal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="proposal-tabs-add-tab" data-toggle="pill" href="#proposal-tabs-add"
                        role="tab" aria-controls="proposal-tabs-add" aria-selected="false">
                        <i class="fas fa-xs fa-plus fa-fw"></i>
                        Tambah proposal Baru</a>
                </li>
            </ul>
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
