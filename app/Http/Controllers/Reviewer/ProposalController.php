<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Proposal;
use App\Models\bab1;
use App\Models\bab2;
use App\Models\bab3;
use App\Models\bab4;
use App\Models\statusBerkas;

use App\Models\Reviewer;
use App\Models\ReviewerBab1;
use App\Models\ReviewerBab2;
use App\Models\ReviewerBab3;
use App\Models\ReviewerBab4;


use App\DataTables\Reviewer\ProposalDataTable;

class ProposalController extends Controller
{
    public function index(ProposalDataTable $dataTable)
    {
        return $dataTable->render('reviewer.proposal.index');
    }

    public function show($id)
    {

        $id_proposal = decrypt($id);
        $id_reviewer = auth()->user()->id_reviewer;

        $proposal = Proposal::with(
            'statusBerkas',
            'universitas',
            'kerjasama',
            )->find($id_proposal);

        $reviewer = [
            'bab1' => ReviewerBab1::where('id_proposal', $id_proposal)
                        ->where('id_reviewer', $id_reviewer)
                        ->first(),
            'bab2' => ReviewerBab2::where('id_proposal', $id_proposal)
                        ->where('id_reviewer', $id_reviewer)
                        ->first(),
            'bab3' => ReviewerBab3::where('id_proposal', $id_proposal)
                        ->where('id_reviewer', $id_reviewer)
                        ->first(),
            'bab4' => ReviewerBab4::where('id_proposal', $id_proposal)
                        ->where('id_reviewer', $id_reviewer)
                        ->first(),
        ];    

        //Nanti disesuaikan dengan database
        $status_proposal = ['' => '-- Pilih Status --', 12 => 'Revisi', 18 => 'Disetujui', 15 => 'Ditolak'];
    
        return view('reviewer.proposal.show', ['proposal' => $proposal, 'reviewer' => $reviewer, 'status_proposal' => $status_proposal]);
        //return response()->json(['proposal' => $proposal, 'reviewer' => $reviewer]);
    }

    public function viewbab1(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab1',
            'bab1.status_akreditasi_institusi',
            'bab1.status_akreditasi_institusi_mitra',
            'bab1.status_akreditasi_prodi',
            'bab1.status_akreditasi_prodi_mitra',
            'bab1.negara_mitra',
            )->find(decrypt($id));
        //$reviewer = Reviewer::all();
        //return response()->json(['proposal' => $proposal]);

        $reviewer_bab1 = ReviewerBab1::with('proposal')
                            ->where('id_proposal', decrypt($id))
                            ->where('id_reviewer', auth()->user()->id_reviewer)
                            ->get()->first();
        return view('reviewer.proposal.viewBab1', ['proposal' => $proposal,'bab' => 1, 'reviewer_bab1' => $reviewer_bab1]);
        //return response()->json(['proposal' => $proposal, 'bab' => 1, 'reviewer_bab1' => $reviewer_bab1]);
    }

    public function viewbab2(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab2',
            )->find(decrypt($id));

        $reviewer_bab2 = ReviewerBab2::with(
            'proposal',
            )->where('id_proposal', decrypt($id))->where('id_reviewer', auth()->user()->id_reviewer)->get()->first();
        //return response()->json(['proposal' => $proposal, 'bab' => 2]);
        return view('reviewer.proposal.viewBab2', ['proposal' => $proposal,'bab' => 2, 'reviewer_bab2' => $reviewer_bab2]);
    }

    public function viewbab3(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab3',
            )->find(decrypt($id));
        $reviewer_bab3 = ReviewerBab3::with(
            'proposal',
            )->where('id_proposal', decrypt($id))->where('id_reviewer', auth()->user()->id_reviewer)->get()->first();
        //return response()->json(['proposal' => $proposal, 'bab' => 3]);
        return view('reviewer.proposal.viewBab3', ['proposal' => $proposal,'bab' => 3, 'reviewer_bab3' => $reviewer_bab3]);
    }

    public function viewbab4(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab4', 'bab4.kerjasama',
            )->find(decrypt($id));
        $reviewer_bab4 = ReviewerBab4::with(
            'proposal',
            )->where('id_proposal', decrypt($id))->where('id_reviewer', auth()->user()->id_reviewer)->get()->first();
        //select id 1 3 4 5 of status berkas
        $statusBerkas = statusBerkas::whereIn('id', [8, 9])->get();
        
        //return response()->json(['proposal' => $proposal, 'bab' => 4]);
        return view('reviewer.proposal.viewBab4', ['proposal' => $proposal,'bab' => 4, 'statusBerkas' => $statusBerkas, 'reviewer_bab4' => $reviewer_bab4]);
    }

    public function simpanReviewBab1(Request $request){
        $id_proposal = decrypt($request->id_proposal);
        $id_reviewer = auth()->user()->id_reviewer;

        //Validation rules
        $rules = [
            'komentar_nama_pt' => ['required', 'max:1800'],
            'komentar_alamat_pt' => ['required', 'max:1800'],
            'komentar_ijin_operasional_pt' => ['required', 'max:1800'],
            'komentar_scan_ijin_operasional_pt' => ['required', 'max:1800'],
            'komentar_status_akreditasi_institusi' => ['required', 'max:1800'],
            'komentar_scan_status_akreditasi_institusi' => ['required', 'max:1800'],
            'komentar_nama_pt_mitra' => ['required', 'max:1800'],
            'komentar_alamat_pt_mitra' => ['required', 'max:1800'],
            'komentar_ijin_operasional_pt_mitra' => ['required', 'max:1800'],
            'komentar_scan_ijin_operasional_pt_mitra' => ['required', 'max:1800'],
            'komentar_status_akreditasi_institusi_mitra' => ['required', 'max:1800'],
            'komentar_scan_status_akreditasi_institusi_mitra' => ['required', 'max:1800'],
            'komentar_negara_mitra' => ['required', 'max:1800'],
            'komentar_peringkat_internasional_mitra' => ['required', 'max:1800'],
            'komentar_nama_prodi' => ['required', 'max:1800'],
            'komentar_nama_prodi_mitra' => ['required', 'max:1800'],
            'komentar_akreditasi_prodi' => ['required', 'max:1800'],
            'komentar_akreditasi_prodi_mitra' => ['required', 'max:1800'],
            'komentar_scan_sk_akreditasi_prodi' => ['required', 'max:1800'],
            'komentar_scan_sk_akreditasi_prodi_mitra' => ['required', 'max:1800'],
            'komentar_scan_ijin_operasional_prodi' => ['required', 'max:1800'],
            'komentar_scan_ijin_operasional_prodi_mitra' => ['required', 'max:1800'],
            'komentar_proposal_usulan_kerjsama' => ['required', 'max:1800'],
            'komentar_bab1' => ['required', 'max:1800'],
            //'status_proposal' => ['required'],
        ];

        //Custom validation messages
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter!',
        ];

        //validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //validate the request
        $request->validate($rules, $messages);


            //reviewer bab1 exist update else create
            try {
                $reviewerBab1 = ReviewerBab1::updateOrCreate(
                    ['id_proposal' => $id_proposal, 'id_reviewer' => $id_reviewer],
                    [
                        'nama_pt' => $request->komentar_nama_pt,
                        'alamat_pt' => $request->komentar_alamat_pt,
                        'ijin_operasional_pt' => $request->komentar_ijin_operasional_pt,
                        'scan_ijin_operasional_pt' => $request->komentar_scan_ijin_operasional_pt,
                        'status_akreditasi_institusi' => $request->komentar_status_akreditasi_institusi,
                        'scan_status_akreditasi_institusi' => $request->komentar_scan_status_akreditasi_institusi,
                        'nama_pt_mitra' => $request->komentar_nama_pt_mitra,
                        'alamat_pt_mitra' => $request->komentar_alamat_pt_mitra,
                        'ijin_operasional_pt_mitra' => $request->komentar_ijin_operasional_pt_mitra,
                        'scan_ijin_operasional_pt_mitra' => $request->komentar_scan_ijin_operasional_pt_mitra,
                        'status_akreditasi_institusi_mitra' => $request->komentar_status_akreditasi_institusi_mitra,
                        'scan_status_akreditasi_institusi_mitra' => $request->komentar_scan_status_akreditasi_institusi_mitra,
                        'negara_mitra' => $request->komentar_negara_mitra,
                        'peringkat_internasional_mitra' => $request->komentar_peringkat_internasional_mitra,
                        'nama_prodi' => $request->komentar_nama_prodi,
                        'nama_prodi_mitra' => $request->komentar_nama_prodi_mitra,
                        'akreditasi_prodi' => $request->komentar_akreditasi_prodi,
                        'akreditasi_prodi_mitra' => $request->komentar_akreditasi_prodi_mitra,
                        'scan_sk_akreditasi_prodi' => $request->komentar_scan_sk_akreditasi_prodi,
                        'scan_sk_akreditasi_prodi_mitra' => $request->komentar_scan_sk_akreditasi_prodi_mitra,
                        'scan_ijin_operasional_prodi' => $request->komentar_scan_ijin_operasional_prodi,
                        'scan_ijin_operasional_prodi_mitra' => $request->komentar_scan_ijin_operasional_prodi_mitra,
                        'proposal_usulan_kerjsama' => $request->komentar_proposal_usulan_kerjsama,
                        'komentar_bab1' => $request->komentar_bab1,
                        //'status_proposal' => $request->status_proposal,
                    ]);

                    //redirect to bab2
                    return redirect()->route('reviewer.proposal.viewBab2', encrypt($id_proposal))->with('success', 'Review BAB 1 berhasil disimpan');

            } catch (\Throwable $th) {
                //return with error code
                return redirect()->route('reviewer.proposal.viewBab1', encrypt($id_proposal))->with('error', 'Review BAB 1 gagal disimpan');
            }
            
    }

    public function simpanReviewBab2(Request $request){
        $id_proposal = decrypt($request->id_proposal);
        $id_reviewer = auth()->user()->id_reviewer;

        //validate request
        $rules = [
            'komentar_ringkasan_mou' => ['required', 'max:1800'],
            'komentar_file_mou' => ['required', 'max:1800'],
            'komentar_no_moa' => ['required', 'max:1800'],
            'komentar_deskripsi_singkat_moa' => ['required', 'max:1800'],
            'komentar_tanggal_mulai_moa' => ['required', 'max:1800'],
            'komentar_tanggal_berakhir_moa' => ['required', 'max:1800'],
            'komentar_file_moa' => ['required', 'max:1800'],
            'komentar_file_moa' => ['required', 'max:1800'],
            'komentar_misi_program_kerjasama' => ['required', 'max:1800'],
            'komentar_target_program_kerjasama' => ['required', 'max:1800'],
            'komentar_alasan_pemilihan_mitra' => ['required', 'max:1800'],
            'komentar_prinsip_kerjasama' => ['required', 'max:1800'],
            'komentar_manfaat_kerjasama' => ['required', 'max:1800'],
            'komentar_tantangan_pelaksanaan_kerjasama' => ['required', 'max:1800'],
            'komentar_kepemilikan_hak_cipta_paten' => ['required', 'max:1800'],
            'komentar_mekanisme_resiprokal' => ['required', 'max:1800'],
            'komentar_keberlanjutan_kerjsama' => ['required', 'max:1800'],
            'komentar_hak_dan_kewajiban' => ['required', 'max:1800'],
            'komentar_hak_tercantum' => ['required', 'max:1800'],
            //'status_proposal' => ['required'],
            'komentar_bab2' => ['required', 'max:1800']
        ];

        //Custom validation messages
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter!',
        ];

        //validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $reviewerBab2 = ReviewerBab2::updateOrCreate(
                ['id_proposal' => $id_proposal, 'id_reviewer' => $id_reviewer],
                [
                    'ringkasan_mou' => $request->komentar_ringkasan_mou,
                    'file_mou' => $request->komentar_file_mou,
                    'no_moa' => $request->komentar_no_moa,
                    'deskripsi_singkat_moa' => $request->komentar_deskripsi_singkat_moa,
                    'tanggal_mulai_moa' => $request->komentar_tanggal_mulai_moa,
                    'tanggal_berakhir_moa' => $request->komentar_tanggal_berakhir_moa,
                    'file_moa' => $request->komentar_file_moa,
                    'misi_program_kerjasama' => $request->komentar_misi_program_kerjasama,
                    'target_program_kerjasama' => $request->komentar_target_program_kerjasama,
                    'alasan_pemilihan_mitra' => $request->komentar_alasan_pemilihan_mitra,
                    'prinsip_kerjasama' => $request->komentar_prinsip_kerjasama,
                    'manfaat_kerjasama' => $request->komentar_manfaat_kerjasama,
                    'tantangan_pelaksanaan_kerjasama' => $request->komentar_tantangan_pelaksanaan_kerjasama,
                    'kepemilikan_hak_cipta_paten' => $request->komentar_kepemilikan_hak_cipta_paten,
                    'mekanisme_resiprokal' => $request->komentar_mekanisme_resiprokal,
                    'keberlanjutan_kerjsama' => $request->komentar_keberlanjutan_kerjsama,
                    'hak_dan_kewajiban' => $request->komentar_hak_dan_kewajiban,
                    'hak_tercantum' => $request->komentar_hak_tercantum,
                    //'status_proposal' => $request->status_proposal,
                    'komentar_bab2' => $request->komentar_bab2
                    
                ]);

                //redirect to bab3
                return redirect()->route('reviewer.proposal.viewBab3', encrypt($id_proposal))->with('success', 'Review BAB 2 berhasil disimpan');

        } catch (\Throwable $th) {
            //return with error code
            return redirect()->route('reviewer.proposal.viewBab2', encrypt($id_proposal))->with('error', 'Review BAB 2 gagal disimpan');
        }

    }

    public function simpanReviewBab3(Request $request){
        $id_proposal = decrypt($request->id_proposal);
        $id_reviewer = auth()->user()->id_reviewer;

        //validate request
        $rules = [
            'komentar_deskripsi_singkat_kesiapan_sdm_pt' => ['required', 'max:1800'],
            'komentar_deskripsi_singkat_kesiapan_sdm_mitra' => ['required', 'max:1800'],
            'komentar_jumlah_dosen_terlibat_pt' => ['required', 'max:1800'],
            'komentar_jumlah_dosen_terlibat_mitra' => ['required', 'max:1800'],
            'komentar_file_data_dosen_terlibat_pt' => ['required', 'max:1800'],
            'komentar_file_data_dosen_terlibat_mitra' => ['required', 'max:1800'],
            'komentar_deskripsi_singkat_pt' => ['required', 'max:1800'],
            'komentar_deskripsi_singkat_mitra' => ['required', 'max:1800'],
            'komentar_file_lampiran_sarana_prasarana_pt' => ['required', 'max:1800'],
            'komentar_file_lampiran_sarana_prasarana_mitra' => ['required', 'max:1800'],
            //'status_proposal' => ['required'],
            'komentar_bab3' => ['required', 'max:1800']
        ];

        //Custom validation messages
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter!',
        ];

        //validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $reviewerBab3 = ReviewerBab3::updateOrCreate(
                ['id_proposal' => $id_proposal, 'id_reviewer' => $id_reviewer],
                [
                    'deskripsi_singkat_kesiapan_sdm_pt' => $request->komentar_deskripsi_singkat_kesiapan_sdm_pt,
                    'deskripsi_singkat_kesiapan_sdm_mitra' => $request->komentar_deskripsi_singkat_kesiapan_sdm_mitra,
                    'jumlah_dosen_terlibat_pt' => $request->komentar_jumlah_dosen_terlibat_pt,
                    'jumlah_dosen_terlibat_mitra' => $request->komentar_jumlah_dosen_terlibat_mitra,
                    'file_data_dosen_terlibat_pt' => $request->komentar_file_data_dosen_terlibat_pt,
                    'file_data_dosen_terlibat_mitra' => $request->komentar_file_data_dosen_terlibat_mitra,
                    'deskripsi_singkat_pt' => $request->komentar_deskripsi_singkat_pt,
                    'deskripsi_singkat_mitra' => $request->komentar_deskripsi_singkat_mitra,
                    'file_lampiran_sarana_prasarana_pt' => $request->komentar_file_lampiran_sarana_prasarana_pt,
                    'file_lampiran_sarana_prasarana_mitra' => $request->komentar_file_lampiran_sarana_prasarana_mitra,
                    //'status_proposal' => $request->status_proposal,
                    'komentar_bab3' => $request->komentar_bab3
                ]);

                //redirect to bab3
                return redirect()->route('reviewer.proposal.viewBab4', encrypt($id_proposal))->with('success', 'Review BAB 3 berhasil disimpan');

        } catch (\Throwable $th) {
            //return with error code
            return redirect()->route('reviewer.proposal.viewBab3', encrypt($id_proposal))->with('error', 'Review BAB 3 gagal disimpan');
        }
    }

    public function simpanReviewBab4(Request $request){
        $id_proposal = decrypt($request->id_proposal);
        $id_reviewer = auth()->user()->id_reviewer;

        //validate request
        $rules = [
            'komentar_rencana_pelaksanaan_pembelajaran' => ['required', 'max:1800'],
            'komentar_scan_desain_kurikulum_pt' => ['required', 'max:1800'],
            'komentar_scan_desain_kurikulum_mitra' => ['required', 'max:1800'],
            'komentar_scan_desain_kurikulum_gabungan' => ['required', 'max:1800'],
            'komentar_jenis_kerjasama' => ['required', 'max:1800'],
            'komentar_jumlah_ijazah_terbit' => ['required', 'max:1800'],
            'komentar_nama_ttd_ijazah_pt' => ['required', 'max:1800'],
            'komentar_jabatan_ttd_ijazah_pt' => ['required', 'max:1800'],
            'komentar_nama_ttd_ijazah_mitra' => ['required', 'max:1800'],
            'komentar_jabatan_ttd_ijazah_mitra' => ['required', 'max:1800'],
            'komentar_kriteria_calon_mahasiswa' => ['required', 'max:1800'],
            'komentar_proses_seleksi' => ['required', 'max:1800'],
            'komentar_skema_pembiayaan' => ['required', 'max:1800'],
            'komentar_file_penjadwalan_kerjasama' => ['required', 'max:1800'],
            'komentar_file_skpi' => ['required', 'max:1800'],
            'komentar_keberlanjutan_studi_lanjut' => ['required', 'max:1800'],
            'komentar_studi_lanjut_moa' => ['required', 'max:1800'],
            //'status_proposal' => ['required'],
            'komentar_bab4' => ['required', 'max:1800']
        ];

        //Custom validation messages
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter!',
        ];

        //validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $reviewerBab4 = ReviewerBab4::updateOrCreate(
                ['id_proposal' => $id_proposal, 'id_reviewer' => $id_reviewer],
                [
                    'rencana_pelaksanaan_pembelajaran' => $request->komentar_rencana_pelaksanaan_pembelajaran,
                    'scan_desain_kurikulum_pt' => $request->komentar_scan_desain_kurikulum_pt,
                    'scan_desain_kurikulum_mitra' => $request->komentar_scan_desain_kurikulum_mitra,
                    'scan_desain_kurikulum_gabungan' => $request->komentar_scan_desain_kurikulum_gabungan,
                    'jenis_kerjasama' => $request->komentar_jenis_kerjasama,
                    'jumlah_ijazah_terbit' => $request->komentar_jumlah_ijazah_terbit,
                    'nama_ttd_ijazah_pt' => $request->komentar_nama_ttd_ijazah_pt,
                    'jabatan_ttd_ijazah_pt' => $request->komentar_jabatan_ttd_ijazah_pt,
                    'nama_ttd_ijazah_mitra' => $request->komentar_nama_ttd_ijazah_mitra,
                    'jabatan_ttd_ijazah_mitra' => $request->komentar_jabatan_ttd_ijazah_mitra,
                    'kriteria_calon_mahasiswa' => $request->komentar_kriteria_calon_mahasiswa,
                    'proses_seleksi' => $request->komentar_proses_seleksi,
                    'skema_pembiayaan' => $request->komentar_skema_pembiayaan,
                    'file_penjadwalan_kerjasama' => $request->komentar_file_penjadwalan_kerjasama,
                    'file_skpi' => $request->komentar_file_skpi,
                    'keberlanjutan_studi_lanjut' => $request->komentar_keberlanjutan_studi_lanjut,
                    'studi_lanjut_moa' => $request->komentar_studi_lanjut_moa,
                    //'status_proposal' => $request->status_proposal,
                    'komentar_bab4' => $request->komentar_bab4
                ]);
                
                return redirect()->route('reviewer.proposal.show', encrypt($id_proposal))->with('success', 'Review BAB 4 berhasil disimpan');
            } catch (\Throwable $th) {
                //return th
                //return response()->json($th);
                return redirect()->route('reviewer.proposal.viewBab4', encrypt($id_proposal))->with('error', 'Review BAB 4 gagal disimpan');
            }
    }

    public function simpanReviewProposal(Request $request){
        $id_proposal = decrypt($request->id_proposal);
        $id_reviewerBab1 = decrypt($request->id_reviewerBab1);
        $id_reviewerBab2 = decrypt($request->id_reviewerBab2);
        $id_reviewerBab3 = decrypt($request->id_reviewerBab3);
        $id_reviewerBab4 = decrypt($request->id_reviewerBab4);

        $statusBerkas = statusBerkas::where('id', $request->status_proposal)->first();

        $rules = ['status_proposal' => ['required'], 'komentar' => ['required', 'max:1800']];
        $messages = ['required' => 'Kolom :attribute tidak boleh kosong!', 'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter!'];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput(); }

        try {
            //update status proposal
            $proposal = Proposal::find($id_proposal);
            $proposal->id_status_berkas = $request->status_proposal;
            $proposal->komentar = $request->komentar;
            $proposal->save();

            $reviewerBab = [
                ReviewerBab1::class => $id_reviewerBab1,
                ReviewerBab2::class => $id_reviewerBab2,
                ReviewerBab3::class => $id_reviewerBab3,
                ReviewerBab4::class => $id_reviewerBab4,
            ];

            foreach ($reviewerBab as $key => $value) {
                $reviewerBab = $key::find($value);
                $reviewerBab->status_proposal = $statusBerkas->status;
                $reviewerBab->save();
            }

            return redirect()->route('reviewer.proposal.show', encrypt($id_proposal))->with('success', 'Review proposal berhasil disimpan');
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }

    public function download($path)
    {
        $path = decrypt($path);
        $file_name = basename($path);
        if(!file_exists(public_path($path))){
            return redirect()->back()->with('error', 'File tidak ditemukan');
        }
        return response()->file(public_path($path), ['Content-Disposition' => 'inline; filename="'.$file_name.'"']);
    }

}
