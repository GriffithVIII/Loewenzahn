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
                            
                            <h4 class="card-title">German noun</h4>
                            
                        {!! Form::open(['url' => ['/de/nouns/create'], 'method' => 'POST', 'class' => 'form-horizontal needs-validation m-t-10', 'novalidate']) !!}
                            <div class="row">
                                <div class="form-group col-2">
                                    {{Form::Label('language_id', 'Language:')}}
                                    {{Form::select('language_id', $languages, null, ['class' => 'form-control', 'tabIndex' => '1'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('genre_id', 'Genre:')}}
                                    {{Form::select('genre_id', $genres, null, ['class' => 'form-control', 'tabIndex' => '2'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('word', 'Word:')}}
                                    {{Form::text('word', null, ['class' => 'form-control', 'tabIndex' => '3'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('plural', 'Plural:')}}
                                    {{Form::text('plural', null, ['class' => 'form-control', 'tabIndex' => '4'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::Label('comment', 'Comment:')}}
                                    {{Form::text('comment', null, ['class' => 'form-control', 'tabIndex' => '5'])}}
                                </div>
                            </div>
                        </div>

                            <span class="row" id="trans-more" style="margin-top: 20px;">
                            <h4 class="card-title">Spanish translation</h4>
                            <div class="row">
                                <div class="form-group col-2">
                                    {{Form::Label('language_id_es', 'Language:')}}
                                    {{Form::select('language_id_es', $languages_es, null, ['class' => 'form-control', 'tabIndex' => '6'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('genre_id_es', 'Genre:')}}
                                    {{Form::select('genre_id_es', $genres_es, null, ['class' => 'form-control', 'tabIndex' => '7'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('word_es', 'Word:')}}
                                    {{Form::text('word_es', null, ['class' => 'form-control', 'tabIndex' => '8'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('plural_es', 'Plural:')}}
                                    {{Form::text('plural_es', null, ['class' => 'form-control', 'tabIndex' => '9'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::Label('comment_es', 'Comment:')}}
                                    {{Form::text('comment_es', null, ['class' => 'form-control', 'tabIndex' => '10'])}}
                                </div>
                            </div>
                            </span>

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
