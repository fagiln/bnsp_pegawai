<?php

namespace App\DataTables\pegawai;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PegawaiDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))

            ->addColumn('action', function (Pegawai $pegawai) {
                return view('pegawai.action', compact('pegawai'));
            })
            ->addColumn('DT_RowIndex', function ($row) {
                return $row->DT_RowIndex;
            })
            ->editColumn('jk', function (Pegawai $pegawai) {
                if ($pegawai->jk == 'L') {
                    return 'Laki-laki';
                }
                return 'Perempuan';
            })->editColumn('alamat', function (Pegawai $pegawai) {
                return '<span>' . Str::limit($pegawai->alamat, 10, '..') . '</span>';
            })
            ->editColumn('created_at', function (Pegawai $pegawai) {
                return Carbon::parse($pegawai->created_at)->format('d-m-Y');
            })->editColumn('updated_at', function (Pegawai $pegawai) {
                return Carbon::parse($pegawai->updated_at)->format('d-m-Y');
            })
            ->rawColumns(['action', 'alamat'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Pegawai $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('pegawai-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->responsive(true)
            ->parameters([
                'responsive' => true,
                'autoWidth' => false,  // Untuk memastikan lebar kolom diatur secara otomatis
            ])
            //->dom('Bfrtip')
            ->orderBy([1])
            ->selectStyleSingle()
            ->buttons([]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::computed('DT_RowIndex')
                ->title('No')
                ->searchable(false)
                ->orderable(false)
                ->width(30)
                ->addClass('text-center'),
            Column::make('nip')->title('NIP'),
            Column::make('first_name'),
            Column::make('last_name'),
            Column::make('jk')->title('Jenis Kelamin'),
            Column::make('alamat'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Pegawai_' . date('YmdHis');
    }
}
