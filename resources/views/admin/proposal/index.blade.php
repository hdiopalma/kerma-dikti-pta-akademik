@extends('layouts.app')

@section('title','LIST PERMOHONAN KERJA SAMA')

@section('contents')

<!-- DataTales Example -->

<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="">Pengajuan Izin Kerja Sama</a>
		</li>
	</ul>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Kerma</h6>
    </div>

    <div class="card-body">

        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModalNorm">+ Pengajuan Baru</button>

        <div class="form-row align-items-center">

            <table border="0" width="100%" class="">
            <tr>
                <td width="9.5%">Tampilkan data</td>

                <td width="8%">

                    <select class="custom-select" id="showData" name="testAjax">
                            <option value="5" {{ isset($proposal) ? ($lastPagination == 5 ? 'selected' : '') :'' }} >5</option>
                            <option value="10" {{ isset($proposal) ? ($lastPagination == 10 ? 'selected' : '') :'' }} >10</option>
                            <option value="20" {{ isset($proposal) ? ($lastPagination == 20 ? 'selected' : '') :'' }} >20</option>
                            <option value="30" {{ isset($proposal) ? ($lastPagination == 30 ? 'selected' : '') :'' }} >30</option>
                            <option value="50" {{ isset($proposal) ? ($lastPagination == 50 ? 'selected' : '') :'' }} >50</option>
                            <option value="100" {{ isset($proposal) ? ($lastPagination == 100 ? 'selected' : '') :'' }} >100</option>
                    </select>

                </td>

                <td></td>

                <td width="5%">Filter by</td>
                <form role="form" action="{{route('proposal.cari')}}" method="post">
                @csrf
                <td width="15%">

                    <select class="custom-select" id="" name="kriteria">
                            <option value="judul" >Judul</option>
                            <option value="pt_mitra_negeri" >Mitra</option>
                            <option value="tanggal_pengajuan" >Tanggal</option>
                            <!--
                            <option value="status_pengisian" >Status Pengisian</option>
                            <option value="id_status_berkas" >Status Berkas</option>
                            -->
                    </select>

                </td>
                <td width="15%"><input type="text" name="filterInput" class="form-control"> </td>
                <td width="4.5%"><button type="submit" class="btn btn-primary">Cari</button></td>
                </form>
            </tr>
            </table>
        </div>

        <br>
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align: center; vertical-align: middle; background-color: #172b4d;">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Mitra</th>
                        <th>Tanggal Draf</th>
                        <th>Status Pengisian</th>
                        <th>Status Berkas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($proposal) && $proposal->count())
                @php($no = 1)
                @foreach ($proposal as $row)
                    <tr style="text-align: center; vertical-align: middle;">
                        <th>{{ $no++ }}</th>
                        <td style="text-align: left; width:290px; word-wrap:break-word;">{{ $row->judul }}
                        @if($row->id_status_berkas=='5')
                        <a data-toggle="modal" data-id="{{ $row->judul }}" data-id2="{{ encrypt($row->id) }}" data-target="#ubahJudul" title="Ubah judul proposal" class="open-AddBookDialog fas fa-fw fa-pencil-alt" href="#"><span class=""></span></a>
                        @endif
                        <td style="text-align:left; width:250px; word-wrap:break-word;">{{ $row->pt_mitra_negeri }}</td>
                        <td>{{ $row->tanggal_pengajuan }}</td>
                        <td>{{ $row->status_pengisian }}</td>
                        <td>{{ $row->statusBerkas->status }}</td>
                        <td>
                            <a href="{{ route('proposal.viewBab1', encrypt($row->id))}}" class="btn btn-success btn-sm">View</a>
                            @if($row->id_status_berkas=='5')
                            <a href="{{ route('proposal.editBab1', encrypt($row->id))}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#"  id="ajukanProposal" data-id = "{{ route('proposal.ajukan', encrypt($row->id))}}" class="btn btn-primary btn-sm">Ajukan</a>
                            <a href="#" id="hapus" data-id = "{{ route('proposal.hapus', encrypt($row->id))}}" class="btn btn-danger btn-sm">Hapus</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="7"> there is no data. </td>
                    </tr>
                @endif
                </tbody>
            </table>
            <div class="pagination-wrap">&nbsp &nbsp &nbsp</div>
        </div>

    </div>
</div>



<!-- Modal -->





@endsection
