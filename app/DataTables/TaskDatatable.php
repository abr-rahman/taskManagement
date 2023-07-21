<?php

namespace App\DataTables;

use App\Models\Task;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TaskDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $html = '<div class="dropdown">';
                $html .= '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>';
                $html .= '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                $html .= '<a class="dropdown-item edit-btn"  href="' . route('tasks.edit', $row->id) . '">Edit</a>';
                $html .= '<a class="dropdown-item delete-btn" href="' . route('tasks.destroy', $row->id) . '">Delete</a>';
                $html .= '</div>';
                $html .= '</div>';

                return $html;
            })
            ->editColumn('status', function ($row) {
                if ($row->status == 1) {
                    $html = '<div class="col-sm-5"><a href="' . route('task.active', $row->id) . '" class="btn btn-success" id="check_status"></a> </div>';
                    return $html;
                } else {
                    $html = '<div class="col-sm-5"><a href="' . route('task.inactive', $row->id) . '" class="btn btn-danger" id="check_status"></a> </div>';
                    return $html;
                }
            })
            ->editColumn('asign', function ($row) {
                $html = '<div class="col-sm-5"><span class="badge">'. $row->user->name.'</span> </div>';
                return $html;
            })
            ->editColumn('asign', function ($row) {
                $html = '<div class="col-sm-5"><span>'. $row->user->name.'</span> </div>';
                return $html;
            })
            ->editColumn('date_line', function ($row) {
                    $html = '<div class="col-sm-5"><span>' . date('Y-m-d', strtotime($row->date_line)) . '</span> </div>';
                    return $html;
            })
            ->editColumn('created_at', function ($row) {
                    $html = '<div class="col-sm-5"><span>' . date('Y-m-d', strtotime($row->created_at)) . '</span> </div>';
                    return $html;
            })
            ->rawColumns(['action', 'status', 'asign', 'date_line', 'created_at']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\TaskDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Task $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('taskdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('print'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex', 'SL NO'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('title'),
            Column::computed('asign'),
            // Column::make('description'),
            Column::computed('status'),
            Column::computed('date_line'),
            Column::computed('created_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Task_' . date('YmdHis');
    }
}
