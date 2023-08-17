<?php

namespace App\DataTables\Verifikator;

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
            ->addColumn('action', 'verifikator.proposal.action')
            ->editColumn('action', function ($data) {
                $button = '<a href="' . route('verifikator.proposal.show', encrypt($data->id)) . '" class="btn btn-sm btn-primary mx-1 shadow edit">Detail</a>';
                return $button;
            })
            ->editColumn('tanggal_pengajuan', function ($data) {
                return date('d-m-Y', strtotime($data->tanggal_pengajuan));
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
        $query = $model->newQuery()->with('statusBerkas','universitas')
                ->where('proposal.id_verifikator',auth()->user()->id_verifikator);
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
                    ->parameters([
                        //Add filter column using dropdown select menu and 
                        'initComplete' => 'function () {
                            this.api().columns([4, 3, 5, 6,7]).every(function () {
                                var column = this;
                                var select = $(\'<select class="form-control"><option value="">Semua</option></select>\')
                                    .appendTo($(column.footer()).empty())
                                    .on(\'change\', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                                        column
                                            .search(val ? \'^\' + val + \'$\' : \'\', true, false)
                                            .draw();
                                    });
                        
                                if (column.index() === 5) {
                                    // If column index is 5 (column 5), use a date picker input
                                    var input = $(\'<input type="date" class="form-control">\')
                                        .appendTo($(column.footer()).empty())
                                        .on(\'change\', function () {
                                            column
                                                .search(this.value, true, false)
                                                .draw();
                                        });
                                } else {
                                    // For other columns, use the select dropdown as before
                                    column.data().unique().sort().each(function (d, j) {
                                        select.append(\'<option value="\' + d + \'">\' + d + \'</option>\');
                                    });
                                }
                            });
                        
                            // Add "Saring data" text under column 2
                            var column2Footer = this.api().columns([2]).footer();
                            $(column2Footer).append(\'<div class="text-right pt-2 pr-1">Saring data</div>\');

                            var table = this;
                            var lastColumnFooter = table.api().columns([8]).footer();
                            
                            $(lastColumnFooter).append(\'<button class="btn btn-md btn-outline-secondary clear-filters">Clear</button>\');

                            // Handle clear filters button click event
                            $(lastColumnFooter).on(\'click\', \'.clear-filters\', function () {
                                table.api().columns().search(\'\').draw();
                            });

                            
                        }'
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
            Column::make('id', 'proposal.id')->hidden(),
            Column::make('judul'),
            Column::make('universitas.nama_universitas','universitas.nama_universitas')->title('PT'),
            Column::make('pt_mitra_negeri')->title('Mitra'),
            Column::make('tanggal_pengajuan')->title('Tanggal Draft'),
            Column::make('status_pengisian')->title('Status Pengisian'),
            Column::make('status_berkas.status','statusBerkas.status')->title('Status Berkas'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
                ->title('Aksi')
                ->orderable(false)
                ->searchable(false)
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
