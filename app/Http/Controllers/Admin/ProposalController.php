<?php

namespace App\Http\Controllers\Admin;
use App\Models\Proposal;
use App\Models\bab1;
use App\Models\bab2;
use App\Models\bab3;
use App\Models\bab4;
use App\Models\Reviewer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Datatables\ProposalDatatable;

class ProposalController extends Controller
{

    public function index(ProposalDatatable $datatable)
    {
        return $datatable->render('admin.proposal.index');
    }

    public function showPaginationAjax($id)
    {
        $proposal = Proposal::all()->sortByDesc('id')->take($id);
        return view('admin.proposal.pagination', ['proposal' => $proposal, 'lastPagination'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'statusBerkas',
            'universitas',
            'kerjasama',
            //'bab1',
            //'bab2',
            //'bab3',
            //'bab4',
            )->find(decrypt($id));

        $reviewer = Reviewer::all();
        //return response()->json(['proposal' => $proposal,'reviewer' => $reviewer]);
        return view('admin.proposal.show', ['proposal' => $proposal,'reviewer' => $reviewer]);
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
        return view('admin.proposal.viewBab1', ['proposal' => $proposal,'bab' => 1]);
    }

    public function viewbab2(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab2',
            )->find(decrypt($id));

        return response()->json(['proposal' => $proposal, 'bab' => 2]);
        //return view('admin.proposal.viewBab2', ['proposal' => $proposal]);
    }

    public function viewbab3(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab3',
            )->find(decrypt($id));

        $reviewer = Reviewer::all();
        return response()->json(['proposal' => $proposal, 'bab' => 3]);
        //return view('admin.proposal.viewBab3', ['proposal' => $proposal]);
    }

    public function viewbab4(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab4',
            )->find(decrypt($id));

        $reviewer = Reviewer::all();
        return response()->json(['proposal' => $proposal, 'bab' => 4]);
        //return view('admin.proposal.viewBab4', ['proposal' => $proposal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }

    public function download($path)
    {
        $path = decrypt($path);
        return response()->download(storage_path('app/public/' . $path));
    }
}
