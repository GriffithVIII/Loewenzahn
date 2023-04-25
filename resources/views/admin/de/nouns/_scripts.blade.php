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
                if (pluralChild == null){ pluralChild = ""; }
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