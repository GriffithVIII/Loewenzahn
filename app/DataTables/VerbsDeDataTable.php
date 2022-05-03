<?php

namespace App\DataTables;

use App\Models\Verbs_de;
use App\Models\Verbs_es;
use App\Models\Languages;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VerbsDeDataTable extends DataTable
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
            ->orderColumn('translated', 'id $1')
            ->editColumn('language_id', function ($model) {
                return $model->language->long_name;
            })
            ->escapeColumns([])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Verbs_de $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Verbs_de $model)
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
                    ->setTableId('verbs_de-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->lengthChange(true)
				    ->pageLength(25)
                    ->orderBy(0, 'asc')
                    ->buttons(
                        ['extend' => 'create', 'editor' => 'editor'],
                        ['extend' => 'edit', 'editor' => 'editor'],
                        ['extend' => 'remove', 'editor' => 'editor'],
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
            Column::make('id')->title('#')->width(40),
            Column::make('grundform')->title('Infinitive'),
            Column::make('preterite'),
            'perfect',
            Column::make('konjunktiv_ii')->title('Konjunktiv II'),
            //Column::make('1p_s')->title('1st Singular'),
            //Column::make('2p_s')->title('2nd Singular'),
            //Column::make('3p_s')->title('3th Singular'),
            //Column::make('1p_p')->title('1st Plural'),
            //Column::make('2p_p')->title('2nd Plural'),
            //Column::make('3p_p')->title('3th Plural'),
            //Column::make('formel')->title('Formel'),
            //Column::make('2p_s_imperative')->title('2nd Imperative Singular'),
            //Column::make('1p_p_imperative')->title('1st Imperative Plural'),
            //Column::make('2p_p_imperative')->title('2nd Imperative Plural'),
            //Column::make('formel_imperative')->title('Formel Imperative'),
            Column::make('hilfsverb')->title('Auxiliar'),
            'comment',
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(160)
            ->addClass('text-center'),
            Column::make('translated')
            ->width(0)
            ->addClass('text-center')
        ];
    }

    protected function getActionColumn($data): string
    {
        $translateUrl = route('admin.de.nouns.translate', $data->id);
        $editUrl = route('admin.de.nouns.edit', $data->id);

        return "<a class='waves-effect btn btn-group btn-action' data-value='$data->id' href='$translateUrl'><i class='fa-solid fa-language'></i></a>
        <a class='waves-effect btn btn-group btn-action' id='childButton$data->id' onclick='showChild($data->id);'><i class='fas fa-eye'></i></a>
        <a class='waves-effect btn btn-group btn-action' data-value='$data->id' href='$editUrl'><i class='fas fa-pencil-alt'></i></a>";
    }
    
    protected function getTranslatedColumn($data): string
    {
        if(Verbs_es::where('id', $data->id)->exists()){
            $isTranslated = "<i style='color: green' class='fa-solid fa-circle-check'></i>";
            $BoolId = "1";
        }
        else{
            $isTranslated = "<i stlye='color: blackc' class='fa-solid fa-circle-exclamation'></i>";
            $BoolId = "0";
        }
        
        return "<div style='display:hidden' data-order='$BoolId'></div>
        <a>$isTranslated</a>";
    }
    
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'VerbsDe_' . date('YmdHis');
    }
}
