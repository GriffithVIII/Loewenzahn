<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Create</h1>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">    
                            <h4 class="card-title">German verb</h4>
                        {!! Form::open(['url' => ['/de/verbs/create'], 'method' => 'POST', 'class' => 'form-horizontal needs-validation m-t-10', 'novalidate']) !!}
                            <div class="row">
                                <div class="form-group col-2">
                                    {{Form::Label('language_id', 'Language:')}}
                                    {{Form::select('language_id', $languages, null, ['class' => 'form-control', 'tabIndex' => '1'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('grundform', 'Grundform:')}}
                                    {{Form::text('grundform', null, ['class' => 'form-control', 'tabIndex' => '2'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('hilfsverb', 'Auxiliar verb:')}}
                                    {{Form::select('hilfsverb', $hilfsverben, null, ['class' => 'form-control', 'tabIndex' => '3'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('regular', 'Regularity:')}}
                                    {{Form::select('regular', $regularity, null, ['class' => 'form-control', 'tabIndex' => '4'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('preterite', 'Preterite:')}}
                                    {{Form::text('preterite', null, ['class' => 'form-control', 'tabIndex' => '5'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('perfect', 'Perfect participe:')}}
                                    {{Form::text('perfect', null, ['class' => 'form-control', 'tabIndex' => '6'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('konjunktiv_ii', 'Konjunktiv II:')}}
                                    {{Form::text('konjunktiv_ii', null, ['class' => 'form-control', 'tabIndex' => '7'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-2">
                                    {{Form::Label('1p_s', '1st Singular:')}}
                                    {{Form::text('1p_s', null, ['class' => 'form-control', 'tabIndex' => '8'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('2p_s', '2nd Singular:')}}
                                    {{Form::text('2p_s', null, ['class' => 'form-control', 'tabIndex' => '9'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('3p_s', '3th Singular:')}}
                                    {{Form::text('3p_s', null, ['class' => 'form-control', 'tabIndex' => '10'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('1p_p', '1st Plural:')}}
                                    {{Form::text('1p_p', null, ['class' => 'form-control', 'tabIndex' => '11'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('2p_p', '2nd Plural:')}}
                                    {{Form::text('2p_p', null, ['class' => 'form-control', 'tabIndex' => '12'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('3p_p', '3th Plural:')}}
                                    {{Form::text('3p_p', null, ['class' => 'form-control', 'tabIndex' => '13'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-2">
                                    {{Form::Label('2p_s_imperative', '2nd Imperative Singular:')}}
                                    {{Form::text('2p_s_imperative', null, ['class' => 'form-control', 'tabIndex' => '14'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('1p_p_imperative', '1st Imperative Plural:')}}
                                    {{Form::text('1p_p_imperative', null, ['class' => 'form-control', 'tabIndex' => '15'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('2p_p_imperative', '2nd Imperative Plural:')}}
                                    {{Form::text('2p_p_imperative', null, ['class' => 'form-control', 'tabIndex' => '16'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('formel_imperative', 'Formel Imperative:')}}
                                    {{Form::text('formel_imperative', null, ['class' => 'form-control', 'tabIndex' => '17'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::Label('comment', 'Comment:')}}
                                    {{Form::text('comment', null, ['class' => 'form-control'])}}
                                </div>
                            </div>
                        </div>

                            {{Form::button('Save', ['type'=>'submit', 'class'=>'btn btn-primary waves-effect waves-light m-r-10',
                            'style'=> 'margin-top: 10px;'])}}
                            {{Form::button('Translation', ['class'=>'btn btn-primary waves-effect waves-light m-r-10',
                            'style'=> 'margin-top: 10px;', 'onclick' => 'showMoreTrans();', 'id' => 'myBtn'])}}
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).on('keypress', 'input,select', function (e) {
            if (e.which == 13) {
                e.preventDefault();
                var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
                console.log($next.length);
                if (!$next.length) {
               $next = $('[tabIndex=1]');        }
                $next.focus() .click();
            }
        });

        function showMoreTrans(){
            var moreText = document.getElementById("trans-more");
            var btnText = document.getElementById("myBtn");

            if (moreText.style.display == "") {
              moreText.style.display = "block";
              btnText.style.backgroundColor = "red";
              btnText.style.borderColor = "red";
              btnText.style.boxShadow = "0 0 0 0.25rem rgb(253 49 49 / 50%)";
            } else {
              moreText.style.display = "";
              btnText.style.backgroundColor = "#0d6efd";
              btnText.style.borderColor = "#0d6efd";
              btnText.style.boxShadow = "";
            }
        }
    </script>
</x-app-layout>
