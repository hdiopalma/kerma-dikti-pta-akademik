<?php

namespace App\Http\Controllers\Verifikator;

use App\Models\Proposal;
use App\Models\bab1;
use App\Models\bab2;
use App\Models\bab3;
use App\Models\bab4;
use App\Models\statusBerkas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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

        return view('verifikator.proposal.show', compact('proposal'));
        //return response()->json($proposal);
    }

    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = $request->id_status_berkas;
        $proposal->save();
        return redirect()->route('verifikator.proposal.index')->with('success', 'Proposal berhasil diverifikasi');
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
        return view('verifikator.proposal.viewBab1', ['proposal' => $proposal,'bab' => 1]);
    }

    public function viewbab2(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab2',
            )->find(decrypt($id));

        //return response()->json(['proposal' => $proposal, 'bab' => 2]);
        return view('verifikator.proposal.viewBab2', ['proposal' => $proposal,'bab' => 2]);
    }

    public function viewbab3(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab3',
            )->find(decrypt($id));
        //return response()->json(['proposal' => $proposal, 'bab' => 3]);
        return view('verifikator.proposal.viewBab3', ['proposal' => $proposal,'bab' => 3]);
    }

    public function viewbab4(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab4', 'bab4.kerjasama',
            )->find(decrypt($id));

        //select id 1 3 4 5 of status berkas
        $statusBerkas = statusBerkas::whereIn('id', [8, 9])->get();
        
        //return response()->json(['proposal' => $proposal, 'bab' => 4]);
        return view('verifikator.proposal.viewBab4', ['proposal' => $proposal,'bab' => 4, 'statusBerkas' => $statusBerkas]);
    }

    public function verifikasi(Request $request)
    {
        $id = decrypt($request->id_proposal);
        $proposal = Proposal::find($id);
        $proposal->id_status_berkas = $request->id_status_berkas;
        $proposal->komentar = $request->komentar;
        $proposal->save();
        return redirect()->route('verifikator.proposal.show', encrypt($id))->with('success', 'Proposal berhasil diverifikasi');
    }

    public function download($path)
    {
        $path = decrypt($path);
        return response()->download(storage_path('app/public/' . $path));
    }
}
