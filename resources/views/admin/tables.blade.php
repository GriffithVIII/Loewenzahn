<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tables') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section style="padding-top: 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dataTable->table() !!}
                            </div>
                        </div>
                    </div>
                </section>
                {!! $dataTable->scripts() !!}
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let de_word = @json($nouns_de);
        let es_word = @json($nouns_es);
        let genres = @json($genres);
        let languages = @json($languages);
        
            function showChild($id){
                var buttonId = "childButton" + $id;
                var tableId = "tableId" + $id;
                let buttonTar = document.getElementById(buttonId);
                let languageChild = es_word[es_word.findIndex(es_word => es_word.id === $id)].language_id - 1;
                let genreChild = es_word[es_word.findIndex(es_word => es_word.id === $id)].genre_id - 1;
                let wordChild = es_word[es_word.findIndex(es_word => es_word.id === $id)].word;
                let pluralChild = es_word[es_word.findIndex(es_word => es_word.id === $id)].plural;
                let template =      '<tr>'+
                                        '<td><a style="transform: scaleX(-1); font-size: 25px; position: absolute; margin-top: -7px;">&#8629;</a></td>'+
                                        '<td>'+languages[languageChild].long_name+'</td>'+
                                        '<td>'+genres[genreChild].word+'</td>'+
                                        '<td>'+wordChild+'</td>'+
                                        '<td>'+pluralChild+'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>'
                let checkExists = document.getElementById(tableId);
                if(checkExists==null){
                    let container = document.getElementById($id);
                    let table = document.createElement('tr');
                    table.style = "background-color: orange";
                    table.id = tableId;
                    table.innerHTML = template;
                    container.after(table);
                    buttonTar.addEventListener('click', function(){
                        table.remove();
                    });
                }
            }            
    </script>
</x-app-layout>
