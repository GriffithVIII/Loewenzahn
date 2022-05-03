<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Translate') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h2 class="card-title">{{ $nouns_de->genre->word . " " . $nouns_de->word }}</h2>
                <section style="padding-top: 20px;">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                        {!! Form::open(['url' => ['/de/nouns/translate'], 'method' => 'POST', 'class' => 'form-horizontal needs-validation m-t-10', 'novalidate']) !!}
                            <div class="row">
                                <div class="form-group col-2">
                                    {{ Form::hidden('id', $nouns_de->id) }}
                                    {{Form::Label('language_id', 'Language:')}}
                                    {{Form::select('language_id', $languages, null, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('genre_id', 'Genre:')}}
                                    {{Form::select('genre_id', $genres, null, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('word', 'Word:')}}
                                    {{Form::text('word', null, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('plural', 'Plural:')}}
                                    {{Form::text('plural', null, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::Label('comment', 'Comment:')}}
                                    {{Form::textarea('comment', null, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            {{Form::button('Insert', ['type'=>'submit', 'class'=>'btn btn-primary waves-effect waves-light m-r-10'])}}
                        {!! Form::close() !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
