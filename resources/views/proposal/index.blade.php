@extends('layouts.app')

@section('title','Permohonan Kerjasama')

@section('contents')

@section('breadcrumb')
<ul class="breadcrumb col-lg-5 col-md-4 col-4">
    <li class="breadcrumb-item">
        <a href=""><i class="fas fa-home"></i></a>
    </li>
    <li class="breadcrumb-item">
        <a href="">Pengajuan Izin Kerja Sama</a>
    </li>
</ul>
@endsection

<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Kerma</h6>
    </div>
    
    <div class="card-body">
       
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#myModalNorm">+ Pengajuan Baru</button>

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
            <div class="pagination-wrap">&nbsp &nbsp &nbsp {{$proposal->links('vendor.pagination.bootstrap-5')}}</div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> Pengajuan Ijin Kerja Sama Baru</h4>
            </div>
            <form role="form" action="{{route('proposal.tambah.simpan')}}" method="post">
            @csrf
            <!-- Modal Body -->
            <div class="modal-body">
                
                  <div class="form-group">
                    <label for="nama_universitas">Nama Universitas Asal</label>
                      <input type="text" name="nama_universitas" value="{{auth()->user()->universitas->nama_universitas}}" class="form-control" disabled/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Jenis Kerja Sama</label>
                        <select class="form-control" name="id_jenis_kerjasama" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="" selected disabled hidden>--Pilih Skema Kerja Sama--</option>
							@foreach($kerjasama as $row)
                                <option value="{{ $row->id }}">{{$row->jenis_kerjasama}}</option>
                            @endforeach
					    </select>  
                  </div>
                  <div class="form-group">
                    <label for="nama_prodi_PT_dalam_negeri">Nama Prodi Perguruan Tinggi Asal</label>
                      <input type="text" name="prodi_pt_dalam_negeri" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Nama Perguruan Tinggi Mitra</label>
                      <input type="text" name="pt_mitra_negeri" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Nama Prodi Perguruan Tinggi Mitra</label>
                      <input type="text" name="prodi_pt_mitra_negeri" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Judul</label>
                      <textarea name="judul" class="form-control"> </textarea>
                  </div>
                
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ubahJudul"  tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ubah Judul Proposal</h4>
            </div>
            <form role="form" action="{{route('proposal.tambah.updateJudul')}}" method="post">
            @csrf
            <!-- Modal Body -->
            <div class="modal-body">
                
                  <div class="form-group">
                    <label for="judul">Judul</label>
                      <input type=hidden  name="idProposal" id="idProposal" value="">
                      <textarea name="judul" id="judul" value="" class="form-control" ></textarea>
                  </div>                
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="module">
    $(function(){
        $(document).on('click','#hapus', function(e){
            //e.preventDefault();
            var link = $(this).attr("data-id");
            Swal.fire({
                    title: 'Apakah anda yakin untuk menghapus data ini ?',
                    text: "data yang sudah dihapus tidak dapat kembali !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        //Swal.fire('Terhapus !','Proposal anda telah kami hapus.','success')}
                        window.location = link
                        }
                    });
        });

        $(document).on('click','#ajukanProposal', function(e){
            //e.preventDefault();
            var link = $(this).attr("data-id");
            Swal.fire({
                    title: 'Apakah anda sudah yakin untuk mengajukan proposal ini ?',
                    text: "proposal yang sudah diajukan, tidak dapat diubah kembali !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Ajukan'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        //Swal.fire('Terhapus !','Proposal anda telah kami hapus.','success')}
                        window.location = link
                        }
                    });
        });
    });
</script>

<script type="text/javascript">
    $("#showData").change(function(){
        //console.log(); 
        var id = $(this).val();
        var url = '{{ route("proposal.showAjax", ":id") }}';
        url = url.replace(':id', id);

        location.href = url;
    
    });

    $("#showDataUniversitas").change(function(){
        //console.log(); 
        var id = $(this).val();
        var url = '{{ route("universitas.showAjax", ":id") }}';
        url = url.replace(':id', id);
        location.href = url;
    
    });

    $(document).on("click", ".open-AddBookDialog", function () {
    var judul = $(this).data('id');
    var idProposal = $(this).data('id2');
    $(".modal-body #judul").val( judul );       
    $(".modal-body #idProposal").val( idProposal );
    });

</script>
@endpush