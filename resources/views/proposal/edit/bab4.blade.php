@extends('layouts.app') @section('title','EDIT BAB 4') @section('contents')
<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="">Pengajuan Izin Kerja Sama</a>
		</li>
		<li class="breadcrumb-item">Edit Proposal BAB 4</li>
	</ul>
</div>
<!-- Header -->
<div class="card-header shadow">
	<div class="container-fluid">
		<div class="header-body">
			<input type="hidden" id="statusView" value="N">
			<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab1')}}">BAB 1<br>
					PROFIL PERGURUAN<br>TINGGI</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab2')}}">BAB 2<br>DOKUMEN KERJA SAMA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab3')}}">BAB 3<br>KESIAPAN SUMBER DAYA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.editBab4')}}">BAB 4<br>
					RENCANA PELAKSANAAN<br>KERJA SAMA</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col">
		<div class="card mb-4 shadow">
			<div class="card-header" style="padding-bottom: 0 !important;">
				<h2 class="">BAB 4. RENCANA PELAKSANAAN KERJA SAMA</h2>
				<table class="table" style="width: 100% !important;">
				<tbody>
				<tr>
					<td style="padding-bottom: 0; padding-top: 0.5;" width="20%">
						<h4>No Berkas</h4>
					</td>
					<td style="padding-bottom: 0; padding-top: 0.5;" width="5%">:</td>
					<td style="padding-bottom: 0; padding-top: 0.5;" width="75%">2305140001.1</td>
				</tr>
				<tr>
					<td style="padding-bottom: 0; padding-top: 0;" width="20%">
						<h4>Judul Kerma</h4>
					</td>
					<td style="padding-bottom: 0; padding-top: 0;" width="5%">:</td>
					<td style="padding-bottom: 0; padding-top: 0;" width="75%">
						 Gelar Ganda (Double Degree) Universitas Halu Oleo S1 Teknik Rekayasa Infrastruktur dan Lingkungan dengan ddd ssss
					</td>
				</tr>
				</tbody>
				</table>
			</div>
			<div class="card-body border-bottom-info">
				<form role="form" method="post" id="edit_bab_form" enctype="multipart/form-data" action="" onkeydown="return event.key != &#39;Enter&#39;;">
					<input type="hidden" name="idkerma" value="2305140001.1">
					<input type="hidden" id="kodeuniv" value="001029">
					<table width="100%" class="table">
					<thead class="bg-info">
					<tr>
						<th style="font-size:0.8rem;" colspan="4" class="text-center ">KESIAPAN PELAKSANAAN KERJA SAMA</th>
					</tr>
					</thead>
					<tbody>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 RENCANA PELAKSANAAN PEMBELAJARAN<em style="color:red;">*</em>
						</td>
						<td class="block" width="40%" colspan="3">
							<textarea rows="4" cols="60" class=" tiny form-control field" name="field_53" placeholder="" maxlength="1800" id="mce_5" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 DESAIN KURIKULUM<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="20%">PT:</td>
						<td class="block bottomborder" width="20%">PT Mitra:</td>
						<td class="block bottomborder" width="20%">Gabungan:</td>
					</tr>
					<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="item block" width="">
							<span>Kurikulum Prodi</span><br>
							<input type="file" name="file_54" value="" class="form-control field " data-size="500 KB"><small class="keterangan" style="color:red;">Maks. 500 KB</small>
						</td>
						<td class="item block" width="">
							<span>Kurikulum Prodi</span><br>
							<input type="file" name="file_56" value="" class="form-control field " data-size="500 KB"><small class="keterangan" style="color:red;">Maks. 500 KB</small>
						</td>
						<td class="item block" width="">
							<span>Kurikulum Prodi</span><br>
							<input type="file" name="file_57" value="" class="form-control field " data-size="500 KB"><small class="keterangan" style="color:red;">Maks. 500 KB</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 JENIS KERJA SAMA<em style="color:red;">*</em>
						</td>
						<td class="item block" width="30%" colspan="3">
							<select class="form-control" name="field_55" data-select2-id="1" tabindex="-1" aria-hidden="true">
								<option value="" data-select2-id="3">Pilih</option>
								<option value="200">Gelar Ganda (Double Degree)</option>
								<option value="201">Gelar Bersama (Joint Degree)</option>
								<option value="202">Gelar Ganda Percepatan (Acceleration)</option>
							</select>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 JUMLAH IJAZAH YANG AKAN DITERBITKAN<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<small>Ditulis dalam angka (1,2,...)</small><br>
							<input value="" type="text" name="field_58" class="form-control field " placeholder="" oninput="validateNumber(this)"></td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 PENANDATANGANAN IJAZAH<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="30%">PT:</td>
						<td class="block bottomborder" width="30%" colspan="2">PT Mitra:</td>
					</tr>
					<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="block" width="30%">
							<span>Nama</span><br>	
							<textarea name="field_60" class=" form-control field " placeholder="Nama" maxlength="1000" id="mce_0" style="display: true;" aria-hidden="true"></textarea>
							<br>
							<span>Jabatan</span><br>
							<textarea name="field_61" class=" form-control field " placeholder="Jabatan" maxlength="1000" id="mce_2" style="display: true;" aria-hidden="true"></textarea>
						</td>
						<td class="block" width="30%" colspan="2">
							<span>Nama</span><br>
							<textarea name="field_69" class=" form-control field " placeholder="Nama" maxlength="1000" id="mce_3" style="display: true;" aria-hidden="true"></textarea>
							<br>
							<span>Jabatan</span><br>
							<textarea name="field_70" class=" form-control field " placeholder="Jabatan" maxlength="1000" id="mce_4" style="display: true;" aria-hidden="true"></textarea>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 KRITERIA CALON MAHASISWA<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<textarea rows="4" cols="70" class=" tiny form-control field" name="field_62" placeholder="" maxlength="1800" id="mce_6" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 PROSES SELEKSI<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<textarea rows="4" cols="70" class=" tiny form-control field" name="field_63" placeholder="" maxlength="1800" id="mce_7" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 SKEMA PEMBIAYAAN<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<textarea rows="4" cols="70" class=" tiny form-control field" name="field_64" placeholder="" maxlength="1800" id="mce_8" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 PENJADWALAN PROGRAM KERJASAMA<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<input type="file" name="file_65" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 SURAT KETERANGAN PENDAMPING IJAZAH<br>
							 (SKPI)<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<input type="file" name="file_66" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 KEBERLANJUTAN UNTUK STUDI LANJUT (<br>
							 DESKRIPSI)<em style="color:red;">*</em>
						</td>
						<td class="block" width="60%" colspan="3">
							<textarea rows="4" cols="70" class=" tiny form-control field" name="field_67" placeholder="" maxlength="1800" id="mce_9" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="border-bottom: 0.1px solid rgb(173, 181, 189); background: rgb(163, 255, 188);">
						<td class="item block">Studi Lanjut MOA</td>
						<td class="block" width="60%" colspan="3">
							<Apakah hal tersebut tercantum dalam MOA? <br>
							<input type="radio" class="field " name="field_72" value="Ya"> Ya<br>
							<input type="radio" class="field " name="field_72" value="Tidak">Tidak</td>
					</tr>
					</tbody>
					</table>
					<div class="row">
						<div class="form-group col-md-6"></div>
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-success mt-4 float-right mx-2" name="submit" id="submit_form">SIMPAN &amp; LANJUTKAN</button><a href="https://izinkerma.kemdikbud.go.id/akademik/index.php/Univ/editBab/3/2305140001.1" type="button" class="btn btn-default mt-4 float-right text-white" name="submit">KEMBALI</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection