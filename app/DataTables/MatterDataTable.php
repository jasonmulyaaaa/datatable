<?php

namespace App\DataTables;

use App\Models\Matter;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Inertia\Inertia;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class MatterDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Matter $model): QueryBuilder
    {
        return $model->newQuery()->with('client');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('matter-table')
            ->columns($this->getColumns())
            ->addTableClass('table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold')
            ->setTableHeadClass('text-start text-muted fw-bold fs-7 text-uppercase gs-0')
            ->orderBy(2);
    }

    /**
     * Get the dataTable columns definition.
     */

    //definisikan kolomnya apa saja
    public function getColumns(): array
    {
        return [
            Column::make('matter_name')->name('matter_name')->title('Matter Name'),
            Column::make('matter_description')->name('matter_description')->title('Description'),
            Column::make('matter_status')->name('matter_status')->title('Status'),
            Column::make('matter_type')->name('matter_type')->title('Type'),
            Column::make('matter_priority')->name('matter_priority')->title('Priority'),
            Column::make('matter_assignee')->name('matter_assignee')->title('Assignee'),
            Column::make('matter_reporter')->name('matter_reporter')->title('Reporter'),
            Column::make('matter_due_date')->name('matter_due_date')->title('Due Date'),
            Column::make('matter_start_date')->name('matter_start_date')->title('Start Date'),
            Column::make('matter_end_date')->name('matter_end_date')->title('End Date'),
            Column::make('matter_tags')->name('matter_tags')->title('Tags'),
            Column::make('client.client_name')->name('client.client_name')->title('Client Name'),
            Column::make('created_by')->name('created_by')->title('Created By'),
            Column::make('updated_by')->name('updated_by')->title('Updated By'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Matters_' . date('YmdHis');
    }


    //function untuk render ke view
    public function customRender($view, $data = [], $mergerData = [])
    {
        if ($this->request()->has('dt_options')) {
            return $this->getHtmlBuilder()->getOptions();
        }

        if ($this->request()->ajax() && $this->request()->wantsJson()) {
            return app()->call([$this, 'ajax']);
        }

        if ($action = $this->request()->get('action') and in_array($action, $this->actions)) {
            if ($action == 'print') {
                return app()->call([$this, 'printPreview']);
            }

            return app()->call([$this, $action]);
        }

        return Inertia::render($view,
            array_merge($data,
                ['dt_options' => $this->getHtmlBuilder()->getOptions()]
            )
        );
    }
}
