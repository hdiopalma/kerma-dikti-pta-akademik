@extends('layouts.app')
@section('title','Daftar Permohonan Kerja Sama')
@section('contents')
<div class="card card-dark card-tabs">
    <div class="card-header p-0 pt-1">
        <div class="card-tools">
            <!-- This will cause the card to maximize when clicked -->
            <button
                type="button"
                class="btn btn-tool"
                data-card-widget="maximize"
            >
                <i class="fas fa-expand"></i>
            </button>
            <!-- This will cause the card to collapse when clicked -->
            <button
                type="button"
                class="btn btn-tool"
                data-card-widget="collapse"
            >
                <i class="fas fa-minus"></i>
            </button>
        </div>

        <ul class="nav nav-tabs" id="pelanggan-tabs" role="tablist">
            <li class="nav-item">
                <a
                    class="nav-link active"
                    id="pelanggan-tabs-table-tab"
                    data-toggle="pill"
                    href="#pelanggan-tabs-table"
                    role="tab"
                    aria-controls="pelanggan-tabs-table"
                    aria-selected="true"
                >
                    <i class="fas fa-xs fa-table fa-fw"></i>
                    Daftar pelanggan</a
                >
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="pelanggan-tabs-add-tab"
                    data-toggle="pill"
                    href="#pelanggan-tabs-add"
                    role="tab"
                    aria-controls="pelanggan-tabs-add"
                    aria-selected="false"
                >
                    <i class="fas fa-xs fa-plus fa-fw"></i>
                    Tambah pelanggan Baru</a
                >
            </li>
        </ul>
    </div>

    <div class="card-body">
        <div class="tab-content" id="pelangganTabContent">
            <div
                class="tab-pane active show"
                id="pelanggan-tabs-table"
                role="tabpanel"
                aria-labelledby="pelanggan-tabs-table-tab"
            >
                <div class="table-responsive">
                    <div
                        id="pelanggan-table_wrapper"
                        class="dataTables_wrapper dt-bootstrap4 no-footer"
                    >
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div
                                    class="dataTables_length"
                                    id="pelanggan-table_length"
                                >
                                    <label
                                        >Show
                                        <select
                                            name="pelanggan-table_length"
                                            aria-controls="pelanggan-table"
                                            class="custom-select custom-select-sm form-control form-control-sm"
                                        >
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries</label
                                    >
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div
                                    id="pelanggan-table_filter"
                                    class="dataTables_filter"
                                >
                                    <label
                                        >Search:<input
                                            type="search"
                                            class="form-control form-control-sm"
                                            placeholder=""
                                            aria-controls="pelanggan-table"
                                    /></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    id="pelanggan-table"
                                    class="table table-striped table-hover table-bordered dataTable no-footer"
                                    aria-describedby="pelanggan-table_info"
                                    style="width: 1115px"
                                >
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center sorting sorting_asc"
                                                tabindex="0"
                                                aria-controls="pelanggan-table"
                                                rowspan="1"
                                                colspan="1"
                                                style="width: 15.2px"
                                                aria-sort="ascending"
                                                aria-label="ID: activate to sort column descending"
                                            >
                                                ID
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="pelanggan-table"
                                                rowspan="1"
                                                colspan="1"
                                                style="width: 334.2px"
                                                aria-label="Nama pelanggan: activate to sort column ascending"
                                            >
                                                Nama pelanggan
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="pelanggan-table"
                                                rowspan="1"
                                                colspan="1"
                                                style="width: 291.2px"
                                                aria-label="Alamat: activate to sort column ascending"
                                            >
                                                Alamat
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="pelanggan-table"
                                                rowspan="1"
                                                colspan="1"
                                                style="width: 176.2px"
                                                aria-label="Kontak: activate to sort column ascending"
                                            >
                                                Kontak
                                            </th>
                                            <th
                                                class="text-center sorting_disabled"
                                                rowspan="1"
                                                colspan="1"
                                                style="width: 102.2px"
                                                aria-label="Aksi"
                                            >
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td
                                                valign="top"
                                                colspan="5"
                                                class="dataTables_empty"
                                            >
                                                No data available in table
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div
                                    id="pelanggan-table_processing"
                                    class="dataTables_processing card"
                                    style="display: none"
                                >
                                    Processing...
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div
                                    class="dataTables_info"
                                    id="pelanggan-table_info"
                                    role="status"
                                    aria-live="polite"
                                >
                                    Showing 0 to 0 of 0 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div
                                    class="dataTables_paginate paging_simple_numbers"
                                    id="pelanggan-table_paginate"
                                >
                                    <ul class="pagination">
                                        <li
                                            class="paginate_button page-item previous disabled"
                                            id="pelanggan-table_previous"
                                        >
                                            <a
                                                href="#"
                                                aria-controls="pelanggan-table"
                                                data-dt-idx="0"
                                                tabindex="0"
                                                class="page-link"
                                                >Previous</a
                                            >
                                        </li>
                                        <li
                                            class="paginate_button page-item next disabled"
                                            id="pelanggan-table_next"
                                        >
                                            <a
                                                href="#"
                                                aria-controls="pelanggan-table"
                                                data-dt-idx="1"
                                                tabindex="0"
                                                class="page-link"
                                                >Next</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="tab-pane fade"
                id="pelanggan-tabs-add"
                role="tabpanel"
                aria-labelledby="pelanggan-tabs-add-tab"
            >
                <form id="form_tambah_pelanggan">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group col-md-12">
                                <label for="nama_pelanggan">
                                    Nama pelanggan
                                </label>

                                <div class="input-group">
                                    <input
                                        id="nama_pelanggan"
                                        name="nama_pelanggan"
                                        value=""
                                        class="form-control"
                                        placeholder="Contoh : Ivan"
                                    />
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="alamat_pelanggan">
                                    Alamat pelanggan
                                </label>

                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-purple">
                                            <i
                                                class="fas fa-lg fa-location-dot text-light"
                                            ></i>
                                        </div>
                                    </div>

                                    <textarea
                                        id="alamat_pelanggan"
                                        name="alamat_pelanggan"
                                        class="form-control"
                                        rows="5"
                                        placeholder="Masukan alamat pelanggan..."
                                    ></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="kontak_pelanggan">
                                    Kontak pelanggan
                                </label>

                                <div class="input-group">
                                    <input
                                        id="kontak_pelanggan"
                                        name="kontak_pelanggan"
                                        value=""
                                        class="form-control"
                                        placeholder="083xxxxxxx"
                                    />
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-default btn bg-purple col-12"
                            >
                                <i class="fas fa fa-fw fa-save"></i> Simpan Data
                            </button>
                        </div>
                        <div
                            class="col-sm-6 border-left d-flex align-items-center justify-content-center"
                        >
                            <span class="d-none d-sm-block fa-stack fa-8x">
                                <span
                                    class="fa-flip"
                                    style="
                                        --fa-flip-x: 1.5;
                                        --fa-flip-y: 0.7;
                                        --fa-animation-duration: 3s;
                                    "
                                >
                                    <i
                                        class="fa-regular fa-circle text-purple fa-stack-2x fa-flip"
                                        style="
                                            --fa-flip-x: 1;
                                            --fa-flip-y: 0.3;
                                            --fa-animation-duration: 12s;
                                        "
                                    ></i>
                                </span>
                                <i
                                    class="fas fa-user fa-flip text-purple fa-stack-1x"
                                    style="
                                        --fa-flip-x: 0;
                                        --fa-flip-y: 1;
                                        --fa-animation-duration: 6s;
                                    "
                                ></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection