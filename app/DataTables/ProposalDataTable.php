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
            ->setRowId('proposal.id')
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
        $query = $model->newQuery()->with('statusBerkas');
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
                   ->parameters([
                        //Add filter column using dropdown select menu and 
                        'initComplete' => 'function () {
                            this.api().columns([3, 4, 5, 6]).every(function () {
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
                        
                                if (column.index() === 4) {
                                    // If column index is 4 (column 4), use a date picker input
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
                            var lastColumnFooter = table.api().columns([7]).footer();
                            
                            $(lastColumnFooter).append(\'<button class="btn btn-md btn-outline-secondary clear-filters">Clear</button>\');

                            // Handle clear filters button click event
                            $(lastColumnFooter).on(\'click\', \'.clear-filters\', function () {
                                table.api().columns().search(\'\').draw();
                            });

                            
                        }',
                    ])
                    ;
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
            //proposal.id
            Column::make('id', 'proposal.id')->hidden(),
            Column::make('judul'),
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
