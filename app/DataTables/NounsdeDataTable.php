<?php

namespace App\DataTables;

use App\Models\Nouns_de;
use App\Models\Nouns_es;
use App\Models\Languages;
use App\Models\Genres;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NounsDeDataTable extends DataTable
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
            ->addColumn('action', function ($model) {
                return $this->getActionColumn($model);
            })
            ->addColumn('translated', function ($model){
                return $this->getTranslatedColumn($model);
            })
            ->editColumn('language_id', function ($model) {
                return $model->language->long_name;
            })
            ->editColumn('genre_id', function ($model) {
                return $model->genre->word;
            })->escapeColumns([])
            ->setRowId('id');
    }

 

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Nouns_de $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Nouns_de $model)
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
                    ->setTableId('nouns_de-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create')->text('<i class="fa-solid fa-circle-plus"></i> Create'),
                        Button::make('print'),
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
            Column::make('id')->title('#'),
            Column::make('language_id')->title('Language'),
            Column::make('genre_id')->title('Article'),
            'word',
            'plural',
            'comment',
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(120)
            ->addClass('text-center'),
            Column::computed('translated')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    protected function getActionColumn($data): string
    {
        $slug= 'id=' . $data->id;
        $translateUrl = route('admin.nouns_de.translate', $slug);

        return "<a class='waves-effect btn btn-group btn-action' data-value='$data->id' href='$translateUrl'><i class='fa-solid fa-language'></i></a>
        <a class='waves-effect btn btn-group btn-action' id='childButton$data->id' onclick='showChild($data->id);'><i class='fas fa-eye'></i></a>";
    }
    
    protected function getTranslatedColumn($data): string
    {
        if(Nouns_es::where('id', $data->id)->exists()){
            $isTranslated = "<i style='color: green' class='fa-solid fa-circle-check'></i>";
        }
        else{
            $isTranslated = "<i stlye='color: blackc' class='fa-solid fa-circle-exclamation'></i>";
        }
        
        $boolTranslated = 0;
        
        return "<a>$isTranslated</a>";
    }
    
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'NounsDe_' . date('YmdHis');
    }
}
