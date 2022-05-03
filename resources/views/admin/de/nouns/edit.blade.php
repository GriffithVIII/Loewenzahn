<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-2xl text-gray-800 leading-tight">Edit</h1>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$nouns_de->genre->word}} {{$nouns_de->word}}</h4>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                        {!! Form::open(['route' => ['admin.de.nouns.edit', 'nouns_de' => $nouns_de->id], 'method' => 'POST']) !!}
                            {{Form::hidden('_method','PUT')}}
                            <div class="row">
                                <div class="form-group col-2">
                                    {{Form::Label('language_id', 'Language:')}}
                                    {{Form::select('language_id', $languages, $nouns_de->language_id, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-2">
                                    {{Form::Label('genre_id', 'Genre:')}}
                                    {{Form::select('genre_id', $genres, $nouns_de->genre_id, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('word', 'Word:')}}
                                    {{Form::text('word', $nouns_de->word, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-4">
                                    {{Form::Label('plural', 'Plural:')}}
                                    {{Form::text('plural', $nouns_de->plural, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {{Form::Label('comment', 'Comment:')}}
                                    {{Form::textarea('comment', $nouns_de->comment, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            {{Form::button('Update', ['type'=>'submit', 'class'=>'btn btn-primary waves-effect waves-light m-r-10'])}}
								<a href="{{url()->previous()}}" class="btn btn-secondary">Cancel</a>									
								{!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>