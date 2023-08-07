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

use RealRashid\SweetAlert\Facades\Alert;

class ProposalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \App\Datatables\ProposalDatatable $datatable
     * 
     */
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

        //Id prososal dikirim ke tabel reviewer agar bisa diproses di ajukanReviewer, masih bentuk encrypted
        // aksi_reviewer1 dan aksi_reviewer2 adalah nama kolom kustom di fungsi reviewerTabelJSON
        $reviewer1Table = $this->reviewerTabel(app(HtmlBuilder::class), $id, 'aksi_reviewer1');
        $reviewer2Table = $this->reviewerTabel(app(HtmlBuilder::class), $id, 'aksi_reviewer2');
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
    
    /**
     * Download file proposal
     * Input : $path (path file yang akan didownload, passed from admin.proposal.download)
     * Output : file yang akan didownload
     * Note : 'app/public/' masih sementara, nanti diganti setelah konfirmasi
     */
    public function download($path)
    {
        $path = decrypt($path);
        return response()->download(storage_path('app/public/' . $path));
    }

    /**
    * Proses pengajuan reviewer1
    * Input : $request->id_proposal (id proposal yang akan diajukan reviewer, passed from admin.proposal.show route)
    * Output : redirect ke halaman sebelumnya dengan pesan sukses
    */
    public function ajukanReviewer1(Request $request)
    {
        $proposal = Proposal::find(decrypt($request->id_proposal));
        $proposal->id_reviewer1 = decrypt($request->id_reviewer1);
        if($proposal->id_reviewer1 == $proposal->id_reviewer2){
            return redirect()->back()->with('error', 'Reviewer 1 dan Reviewer 2 tidak boleh sama');
        }
        if($proposal->save()){
            return redirect()->back()->with('success', 'Reviewer 1 berhasil diajukan');
        }
        return redirect()->back()->with('error', 'Reviewer 1 gagal diajukan');
        
    }

    /**
    * Proses pengajuan reviewer2
    * Input : $request->id_proposal (id proposal yang akan diajukan reviewer, passed from admin.proposal.show route)
    * Output : redirect ke halaman sebelumnya dengan pesan sukses
    */
    public function ajukanReviewer2(Request $request)
    {
        $proposal = Proposal::find(decrypt($request->id_proposal));
        $proposal->id_reviewer2 = decrypt($request->id_reviewer2);
        if($proposal->id_reviewer1 == $proposal->id_reviewer2){
            return redirect()->back()->with('error', 'Reviewer 1 dan Reviewer 2 tidak boleh sama');
        }
        if($proposal->save()){
            return redirect()->back()->with('success', 'Reviewer 2 berhasil diajukan');
        }
        return redirect()->back()->with('error', 'Reviewer 2 gagal diajukan');
    }

    /**
    * Fetch data dari database untuk datatable pengajuan reviewer.
    * Input : $id_proposal (id proposal yang akan diajukan reviewer, passed from admin.proposal.reviewer1TabelJSON route)
    * Output : JSON data untuk ditampilkan di datatable
    * Note : $id_proposal digunakan untuk mengirim id proposal ke route ajukanReviewer1
    * 
    * TODO : 1. Tambahkan fitur agar reviewer1 tidak boleh sama dengan reviewer2 (done, look at ajukanReviewer1 function)
    *        2. Tambahkan fungsi penyaringan reviewer1 yang sudah diajukan ke proposal ini
    */
    public function reviewerTabelJSON()
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
            $table->addColumn('aksi_reviewer1', function($data) use ($id_proposal){
                $button = '<form action="'.route('admin.proposal.ajukanReviewer1').'" method="POST">';
                $button .= csrf_field();
                $button .= '<input type="hidden" name="id_reviewer1" value="'.encrypt($data->id).'">';
                $button .= '<input type="hidden" name="id_proposal" value="'.$id_proposal.'">';
                $button .= '<button type="submit" class="btn btn-sm btn-primary">Ajukan</button>';
                $button .= '</form>';
                return $button;
            });
            $table->addColumn('aksi_reviewer2', function($data) use ($id_proposal){
                $button = '<form action="'.route('admin.proposal.ajukanReviewer2').'" method="POST">';
                $button .= csrf_field();
                $button .= '<input type="hidden" name="id_reviewer2" value="'.encrypt($data->id).'">';
                $button .= '<input type="hidden" name="id_proposal" value="'.$id_proposal.'">';
                $button .= '<button type="submit" class="btn btn-sm btn-primary">Ajukan</button>';
                $button .= '</form>';
                return $button;
            });
            $table->rawColumns(['aksi_reviewer1', 'aksi_reviewer2']);
            return $table->toJson();
        }
    }

    /**
    * Menghasilkan html datatable pengajuan reviewer1.
    * Input : HtmlBuilder:class (html builder dari yajra datatable).
    * Input : $id_proposal (id proposal yang akan diajukan reviewer, dikirim ke reviewer1TabelJSON via route 
    *         admin.proposal.reviewer1TabelJSON)
    * Output: $html (html datatable yang akan ditampilkan di view)
    */
    public function reviewerTabel(HtmlBuilder $html, $id_proposal, $aksi_reviewer)
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
            Column::computed($aksi_reviewer)
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                ->title('Aksi')
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
        $html->minifiedAjax(route('admin.proposal.reviewerTabelJSON', ['id_proposal' => $id_proposal]));
        return $html;
    }
}
