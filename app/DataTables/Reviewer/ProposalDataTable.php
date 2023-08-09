<?php

namespace App\DataTables\Reviewer;

use App\Models\Proposal;
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
            ->setRowId('id')
            ->addIndexColumn()
            ->addColumn('action', 'reviewer.proposal.action')
            ->editColumn('action', function ($data) {
                $button = '<a href="' . route('reviewer.proposal.show', encrypt($data->id)) . '" class="btn btn-sm btn-primary mx-1 shadow edit">Detail</a>';
                return $button;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Proposal $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Proposal $model): QueryBuilder
    {
        $query = $model->newQuery()->with('statusBerkas','universitas')->where(function ($query) {
            $query->where('id_reviewer1', auth()->user()->id_reviewer)
                ->orWhere('id_reviewer2', auth()->user()->id_reviewer);
        });
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
                    ->setTableId('proposal-table')
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
            Column::computed('no')->title('No.')->width(20)->addClass('text-center'),
            //proposal.id
            Column::make('id', 'proposal.id')->hidden(),
            Column::make('judul'),
            Column::make('universitas.nama_universitas','universitas.nama_universitas')->title('PT'),
            Column::make('pt_mitra_negeri')->title('Mitra'),
            Column::make('tanggal_pengajuan')->title('Tanggal Draft'),
            Column::make('status_pengisian')->title('Status Pengisian'),
            Column::make('status_berkas.status', 'statusBerkas.status')->title('Status Berkas'),
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
