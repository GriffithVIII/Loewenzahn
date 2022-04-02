<script type="text/javascript">

var array_score = document.getElementById("richtig").innerHTML.split(' ');

var richtig = array_score[1], falsch = 0;
let de_word = @json($nouns_de);
let es_word = @json($nouns_es);
let genres = @json($genres);
let lastOne = 0;

window.onload = function() {
  'use strict';
  shuffle();
};

function shuffle(){
  maximum = Object.keys(de_word).length;
  rand = Math.floor(Math.random() * (maximum + 1) + 1);

  if(rand === lastOne) rand++; if(rand > maximum) rand-=2;

  document.getElementById("word-question").innerHTML = de_word[de_word.findIndex(de_word => de_word.id === rand)].word;
  document.getElementById("word-translation").innerHTML = es_word[es_word.findIndex(es_word => es_word.id === rand)].word;
}

function genreCheck(genre) {
  genreWord = de_word[de_word.findIndex(de_word => de_word.id === rand)].genre_id;
  if(genre == genreWord){
    scoreboard(1);
  }
}

function scoreboard(answer){
    if(answer == 1){
      richtig++;
      document.getElementById("richtig").innerHTML = array_score[0] + " " + richtig;
    }
    else{

    }
    lastOne = rand;
    shuffle();
  }

</script>