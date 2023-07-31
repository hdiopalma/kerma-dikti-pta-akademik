<?php

namespace App\DataTables;

use App\Models\proposal;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProposalDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('no', 'proposal.no')
            ->editColumn('no', function () {
                static $row_number = 0;
                return ++$row_number;
            })
            ->addColumn('action', 'proposal.action')
            ->editColumn('action', function ($data) {
                $button = '<a href="' . route('admin.proposal.show', encrypt($data->id)) . '" class="btn btn-sm btn-primary mx-1 shadow edit">Detail</a>';
                return $button;
            })
            ->setRowId('id')
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Proposal $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Proposal $model): QueryBuilder
    {
        //join proposal with status_berkas
        $query = $model->newQuery()->select('proposal.*', 'status_berkas.status')
            ->join('status_berkas', 'proposal.id_status_berkas', '=', 'status_berkas.id');
        return $query;
        
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            //add numbering
            Column::computed('no')->title('No.')->width(30)->addClass('text-center'),
            Column::make('id')->hidden(),
            Column::make('judul'),
            Column::make('pt_mitra_negeri')->title('Mitra'),
            Column::make('tanggal_pengajuan')->title('Tanggal Draft'),
            Column::make('status_pengisian')->title('Status Pengisian'),
            Column::make('status', 'status_berkas.status')->title('Status Berkas'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center')
            ->title('Aksi'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Proposal_' . date('YmdHis');
    }
}
