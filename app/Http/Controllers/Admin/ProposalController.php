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

class ProposalController extends Controller
{

    public function index()
    {
        $proposal = Proposal::all()->sortByDesc('id')->take(5);
        return view('admin.proposal.index', ['proposal' => $proposal, 'lastPagination'=>5]);
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
        $proposal = Proposal::find(decrypt($id));
        $reviewer = Reviewer::all();
        $bab_proposal = [
            'bab1' => bab1::where('id', $proposal->id_bab1)->first(),
            'bab2' => bab2::where('id', $proposal->id_bab2)->first(),
            'bab3' => bab3::where('id', $proposal->id_bab3)->first(),
            'bab4' => bab4::where('id', $proposal->id_bab4)->first(),
        ];
        //return view('admin.proposal.show', ['proposal' => $proposal]);
        return response()->json([
            'proposal' => $proposal,
            'reviewer' => $reviewer,
            'bab_proposal' => $bab_proposal,
        ]);
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
}
