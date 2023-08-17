<?php

namespace App\Http\Controllers\Verifikator;

use App\Models\Proposal;
use App\Models\bab1;
use App\Models\bab2;
use App\Models\bab3;
use App\Models\bab4;
use App\Models\statusBerkas;

use App\Models\ReviewerBab1;
use App\Models\ReviewerBab2;
use App\Models\ReviewerBab3;
use App\Models\ReviewerBab4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Encryption\DecryptException;

use App\DataTables\Verifikator\ProposalDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class ProposalController extends Controller
{
    public function index(ProposalDataTable $dataTable)
    {
        return $dataTable->render('verifikator.proposal.index');
    }

    public function show($id)
    {
        try {
            $id = decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }
        
        $proposal = Proposal::with(
            'statusBerkas',
            'universitas',
            'kerjasama',
            'reviewer1',
            'reviewer2',
            )->find($id);

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

        $hasil_review1 = [
            'bab1' => ReviewerBab1::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer1)->first(),
            'bab2' => ReviewerBab2::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer1)->first(),
            'bab3' => ReviewerBab3::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer1)->first(),
            'bab4' => ReviewerBab4::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer1)->first(),
        ];

        $hasil_review2 = [
            'bab1' => ReviewerBab1::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer2)->first(),
            'bab2' => ReviewerBab2::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer2)->first(),
            'bab3' => ReviewerBab3::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer2)->first(),
            'bab4' => ReviewerBab4::where('id_proposal', $proposal->id)->where('id_reviewer', $proposal->id_reviewer2)->first(),
        ];

        return view('verifikator.proposal.show', ['proposal' => $proposal, 'hasil_review1' => $hasil_review1, 'hasil_review2' => $hasil_review2]);
        return response()->json(['proposal' => $proposal, 'hasil_review1' => $hasil_review1, 'hasil_review2' => $hasil_review2]);
    }

    public function update(Request $request, $id)
    {
        try {
            $id = decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }
        
        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = $request->id_status_berkas;
        $proposal->save();
        return redirect()->route('verifikator.proposal.index')->with('success', 'Proposal berhasil diverifikasi');
    }

    public function viewbab1(Proposal $proposal, $id)
    {

        try {
            $id = decrypt($id);
            $id_reviewer = isset(request()->reviewer) ? decrypt(request()->reviewer) : null;
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::with(
            'bab1'
            )->find($id);
        
        $hasilReview = isset(request()->reviewer) ? ReviewerBab1::where('id_proposal', $proposal->id)->where('id_reviewer', $id_reviewer)->first() : null;
        return view('verifikator.proposal.viewBab1', ['proposal' => $proposal,'bab' => 1, 'hasilReview' => $hasilReview]);
        //return response()->json(['proposal' => $proposal, 'bab' => 1, 'hasilReview' => $hasilReview]);
    }

    public function viewbab2(Proposal $proposal, $id)
    {

        try {
            $id = decrypt($id);
            $id_reviewer = isset(request()->reviewer) ? decrypt(request()->reviewer) : null;
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::with(
            'bab2',
            )->find($id);

        $hasilReview = isset(request()->reviewer) ? ReviewerBab2::where('id_proposal', $proposal->id)->where('id_reviewer', $id_reviewer)->first() : null;
        return view('verifikator.proposal.viewBab2', ['proposal' => $proposal,'bab' => 2, 'hasilReview' => $hasilReview]);
        //return response()->json(['proposal' => $proposal, 'bab' => 2, 'hasilReview' => $hasilReview]);
    }

    public function viewbab3(Proposal $proposal, $id)
    {

        try {
            $id = decrypt($id);
            $id_reviewer = isset(request()->reviewer) ? decrypt(request()->reviewer) : null;
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::with(
            'bab3',
            )->find($id);

        $hasilReview = isset(request()->reviewer) ? ReviewerBab3::where('id_proposal', $proposal->id)->where('id_reviewer', $id_reviewer)->first() : null;
        return view('verifikator.proposal.viewBab3', ['proposal' => $proposal,'bab' => 3, 'hasilReview' => $hasilReview]);
        //return response()->json(['proposal' => $proposal, 'bab' => 1, 'hasilReview' => $hasilReview]);
    }

    public function viewbab4(Proposal $proposal, $id)
    {

        try {
            $id = decrypt($id);
            $id_reviewer = isset(request()->reviewer) ? decrypt(request()->reviewer) : null;
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::with(
            'bab4', 'bab4.kerjasama',
            )->find($id);

        $hasilReview = isset(request()->reviewer) ? ReviewerBab4::where('id_proposal', $proposal->id)->where('id_reviewer', $id_reviewer)->first() : null;
        //select id 1 3 4 5 of status berkas
        $statusBerkas = statusBerkas::whereIn('id', [8, 9])->get();
        return view('verifikator.proposal.viewBab4', ['proposal' => $proposal,'bab' => 4, 'statusBerkas' => $statusBerkas, 'hasilReview' => $hasilReview]);
        //return response()->json(['proposal' => $proposal, 'bab' => 1, 'hasilReview' => $hasilReview]);
    }

    public function verifikasi(Request $request)
    {
        try {
            $id = decrypt($request->id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }
        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = $request->id_status_berkas;
        $proposal->komentar = $request->komentar;
        $proposal->save();
        return redirect()->route('verifikator.proposal.show', encrypt($id))->with('success', 'Proposal berhasil diverifikasi');
    }

    public function tolakProposal(Request $request){
        try {
            $id = decrypt($request->id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = 15; //tolak proposal, sementara, nanti diganti yang official.
        $proposal->save();
        return redirect()->route('verifikator.proposal.show', encrypt($id))->with('success', 'Status Proposal Diubah Menjadi Ditolak');
    }

    public function revisiProposal(Request $request){
        try {
            $id = decrypt($request->id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = 12; //revisi proposal, sementara, nanti diganti yang official.
        $proposal->save();
        return redirect()->route('verifikator.proposal.show', encrypt($id))->with('success', 'Status Proposal Diubah Menjadi Revisi');
    }

    public function setujuiProposal(Request $request){
        try {
            $id = decrypt($request->id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Proposal tidak ditemukan');
        }

        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = 18; //setujui proposal, sementara, nanti diganti yang official.
        $proposal->save();
        return redirect()->route('verifikator.proposal.show', encrypt($id))->with('success', 'Status Proposal Diubah Menjadi Disetujui');
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
