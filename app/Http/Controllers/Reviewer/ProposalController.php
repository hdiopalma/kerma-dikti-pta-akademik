<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Proposal;
use App\Models\bab1;
use App\Models\bab2;
use App\Models\bab3;
use App\Models\bab4;
use App\Models\statusBerkas;

use App\Models\ReviewerBab1;

use App\DataTables\Reviewer\ProposalDataTable;

class ProposalController extends Controller
{
    public function index(ProposalDataTable $dataTable)
    {
        return $dataTable->render('reviewer.proposal.index');
    }

    public function show($id)
    {
        $proposal = Proposal::with(
            'statusBerkas',
            'universitas',
            'kerjasama',
            )->find(decrypt($id));

        /**
         * Status Berkas:
         * 1 = 
         * 2 = 
         * 3 = 
         * 4 = 
         * 5 = Dalam Pengisian
         * 6 = Menunggu Verifikasi
         * 7 = Dalam Proses Verifikasi
         * 8 = Diverifikasi
         * 9 = Dan lain lain, masih asumsi, nanti diganti yang official.
         */

        return view('reviewer.proposal.show', compact('proposal'));
        return response()->json($proposal);
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

        $reviewer_bab1 = ReviewerBab1::with(
            'proposal',
            )->where('id_proposal', decrypt($id))->get()->first();
        return view('reviewer.proposal.viewBab1', ['proposal' => $proposal,'bab' => 1, 'reviewer_bab1' => $reviewer_bab1]);
        //return response()->json(['proposal' => $proposal, 'bab' => 1, 'reviewer_bab1' => $reviewer_bab1]);
    }

    public function viewbab2(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab2',
            )->find(decrypt($id));

        //return response()->json(['proposal' => $proposal, 'bab' => 2]);
        return view('reviewer.proposal.viewBab2', ['proposal' => $proposal,'bab' => 2]);
    }

    public function viewbab3(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab3',
            )->find(decrypt($id));
        //return response()->json(['proposal' => $proposal, 'bab' => 3]);
        return view('reviewer.proposal.viewBab3', ['proposal' => $proposal,'bab' => 3]);
    }

    public function viewbab4(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab4', 'bab4.kerjasama',
            )->find(decrypt($id));

        //select id 1 3 4 5 of status berkas
        $statusBerkas = statusBerkas::whereIn('id', [8, 9])->get();
        
        //return response()->json(['proposal' => $proposal, 'bab' => 4]);
        return view('reviewer.proposal.viewBab4', ['proposal' => $proposal,'bab' => 4, 'statusBerkas' => $statusBerkas]);
    }

    public function simpanReviewBab1(Request $request){
        $id_proposal = decrypt($request->id_proposal);
        $id_reviewer = auth()->user()->id_reviewer;

        //validation rules required and maks 1800 char
        $request->validate([
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
        ]);

        //reviewer bab1 exist update else create
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
            ]);

        //update status proposal
        return redirect()->route('reviewer.proposal.viewBab2', encrypt($id_proposal))->with('success', 'Review BAB 1 berhasil disimpan');
    }

    public function download($path)
    {
        $path = decrypt($path);
        return response()->download(storage_path('app/public/' . $path));
    }

}
