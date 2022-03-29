<?php

namespace App\DataTables;

use App\Models\Nouns_de;
use App\Models\Languages;
use App\Models\Genres;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class Nouns_deDataTable extends DataTable
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
            ->addColumn('action', 'nouns_de.action')
            ->editColumn('language_id', function ($model) {
                return $model->language->long_name;
            })
            ->editColumn('genre_id', function ($model) {
                return $model->genre->word;
            });
    }

 

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Nouns_de $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Nouns_de $model)
    {
        return $model->newQuery()->with(['language']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('nouns_de-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
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
            //Column::make('id')->title('#'),
            Column::make('language_id')->title('Language'),
            Column::make('genre_id')->title('Article'),
            'word',
            'comment'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Nouns_de_' . date('YmdHis');
    }
}
