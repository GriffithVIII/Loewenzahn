<script type="text/javascript">

var array_score = document.getElementById("richtig").innerHTML.split(' ');

var richtig = array_score[1], falsch = 0;
let de_word = @json($nouns_de);
let es_word = @json($nouns_es);
let genres = @json($genres);

window.onload = function() {
  'use strict';
  shuffle();
};





function shuffle(){
  maximum = Object.keys(de_word).length;
  rand = Math.floor(Math.random() * maximum);

  document.getElementById("word-question").innerHTML = de_word[rand].word;
  document.getElementById("word-translation").innerHTML = es_word[rand].word;
}

function articleCheck(article) {
  articleWord = de_word[rand].article_id;
  if(article == articleWord){
    scoreboard(1);
  }
}

function scoreboard(int){
    if(answer = 1){
      richtig++;
      document.getElementById("richtig").innerHTML = array_score[0] + " " + richtig;
    }
    else{

    }
    shuffle();
  }

</script>