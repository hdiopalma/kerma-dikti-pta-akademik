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
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;

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
            'reviewer1',
            'reviewer2',
            )->find(decrypt($id));

        $reviewer1Table = $this->reviewer1Tabel(app(HtmlBuilder::class), $id);
        $reviewer2Table = $this->reviewer2Tabel(app(HtmlBuilder::class), $id);
        //return response()->json([compact('proposal', 'reviewer1Table')]);
        return view('admin.proposal.show', compact('proposal', 'reviewer1Table','reviewer2Table'));
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

        //return response()->json(['proposal' => $proposal, 'bab' => 2]);
        return view('admin.proposal.viewBab2', ['proposal' => $proposal,'bab' => 2]);
    }

    public function viewbab3(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab3',
            )->find(decrypt($id));

        $reviewer = Reviewer::all();
        //return response()->json(['proposal' => $proposal, 'bab' => 3]);
        return view('admin.proposal.viewBab3', ['proposal' => $proposal,'bab' => 3]);
    }

    public function viewbab4(Proposal $proposal, $id)
    {
        $proposal = Proposal::with(
            'bab4', 'bab4.kerjasama',
            )->find(decrypt($id));

        $reviewer = Reviewer::all();
        //return response()->json(['proposal' => $proposal, 'bab' => 4]);
        return view('admin.proposal.viewBab4', ['proposal' => $proposal,'bab' => 4]);
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

    public function ajukanReviewer1(Request $request)
    {
        $proposal = Proposal::find(decrypt($request->id_proposal));
        $proposal->id_reviewer1 = decrypt($request->id_reviewer1);
        $proposal->save();
        return redirect()->back()->with('success', 'Reviewer 1 berhasil diajukan');
    }

    public function ajukanReviewer2(Request $request)
    {
        $proposal = Proposal::find(decrypt($request->id_proposal));
        $proposal->id_reviewer2 = decrypt($request->id_reviewer2);
        $proposal->save();
        return redirect()->back()->with('success', 'Reviewer 2 berhasil diajukan');
    }

    public function reviewer1TabelJSON()
    {
        if(request()->ajax())
        {   
            $id_proposal = request()->get('id_proposal');
            $reviewer = Reviewer::all();
            $table = DataTables::of($reviewer);
            $table->addColumn('no', function($data){
                static $no = 1;
                return $no++;
            });
            $table->addColumn('action', function($data) use ($id_proposal){
                $button = '<form action="'.route('admin.proposal.ajukanReviewer1').'" method="POST">';
                $button .= csrf_field();
                $button .= '<input type="hidden" name="id_reviewer1" value="'.encrypt($data->id).'">';
                $button .= '<input type="hidden" name="id_proposal" value="'.$id_proposal.'">';
                $button .= '<button type="submit" class="btn btn-sm btn-primary">Ajukan</button>';
                $button .= '</form>';
                return $button;
            });
            $table->rawColumns(['action']);
            return $table->toJson();
        }
    }

    public function reviewer2TabelJSON()
    {
        if(request()->ajax())
        {   
            $id_proposal = request()->get('id_proposal');
            $reviewer = Reviewer::all();
            $table = DataTables::of($reviewer);
            $table->addColumn('no', function($data){
                static $no = 1;
                return $no++;
            });
            $table->addColumn('action', function($data) use ($id_proposal){
                $button = '<form action="'.route('admin.proposal.ajukanReviewer2').'" method="POST">';
                $button .= csrf_field();
                $button .= '<input type="hidden" name="id_reviewer2" value="'.encrypt($data->id).'">';
                $button .= '<input type="hidden" name="id_proposal" value="'.$id_proposal.'">';
                $button .= '<button type="submit" class="btn btn-sm btn-primary">Ajukan</button>';
                $button .= '</form>';
                return $button;
            });
            $table->rawColumns(['action']);
            return $table->toJson();
        }
    }

    public function reviewer1Tabel(HtmlBuilder $html, $id_proposal)
    {
        $html->columns([
            Column::computed('no')
                ->title('No')
                ->width(30)
                ->addClass('text-center'),
            Column::make('nama_reviewer'),
            Column::make('email'),
            Column::make('institusi'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
        ]);
        $html->parameters([
            'responsive' => false,
            'autoWidth' => false,
            'scrollX' => false,
            'order' => [[0, 'asc']],
            'language' => [
                'searchPlaceholder' => 'Cari'
            ],

        ]);
        $html->minifiedAjax(route('admin.proposal.reviewer1TabelJSON', ['id_proposal' => $id_proposal]));
        return $html;
    }

    public function reviewer2Tabel(HtmlBuilder $html, $id_proposal)
    {
        $html->columns([
            Column::computed('no')
                ->title('No')
                ->width(30)
                ->addClass('text-center'),
            Column::make('nama_reviewer'),
            Column::make('email'),
            Column::make('institusi'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
        ]);
        $html->parameters([
            'responsive' => false,
            'autoWidth' => false,
            'scrollX' => false,
            'order' => [[0, 'asc']],
            'language' => [
                'searchPlaceholder' => 'Cari'
            ],

        ]);
        $html->minifiedAjax(route('admin.proposal.reviewer2TabelJSON', ['id_proposal' => $id_proposal]));
        return $html;
    }
}
