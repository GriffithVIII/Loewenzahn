<script type="text/javascript">

var scoreRichtig = document.getElementById("richtig").innerHTML.split(' ');
var scoreFalsch = document.getElementById("falsch").innerHTML.split(' ');

var richtig = scoreRichtig[1], falsch = scoreFalsch[1];
let de_word = @json($nouns_de);
let es_word = @json($nouns_es);
let genres = @json($genres);
let lastOne = 0;
let alreadyUsed = [];
let wordQuestion = document.getElementById("word-question");

window.onload = function() {
  'use strict';
  shuffle();
};

document.addEventListener('keydown', (button) => {
  if(button.key == "1"){
    genreCheck(1);
  }
  else if(button.key == "2"){
    genreCheck(2);
  }
  else if(button.key == "3"){
    genreCheck(3);
  }
});

function shuffle(){
  maximum = Object.keys(de_word).length;
  rand = Math.floor(Math.random() * (maximum) + 1);

  while(alreadyUsed.includes(rand) == true){
    rand = Math.floor(Math.random() * (maximum) + 1);
  }

  alreadyUsed.push(rand);
  if(alreadyUsed.length == maximum){
    alreadyUsed = [];
    //# Reset the scoreboard
    richtig = falsch = 0;
    document.getElementById("richtig").innerHTML = scoreRichtig[0] + " " + richtig;
    document.getElementById("falsch").innerHTML = scoreFalsch[0] + " " + falsch;
  }

  wordQuestion.innerHTML = de_word[de_word.findIndex(de_word => de_word.id === rand)].word;
  document.getElementById("word-translation").innerHTML = es_word[es_word.findIndex(es_word => es_word.id === rand)].word;
}

function genreCheck(genre) {
  genreWord = de_word[de_word.findIndex(de_word => de_word.id === rand)].genre_id;
  if(genre == genreWord){
    scoreboard(1, genreWord);
  }
  else{
    scoreboard(0, genreWord);
  }
}

async function scoreboard(answer, genre){
    if(answer == 1){
      richtig++;
      document.getElementById("richtig").innerHTML = scoreRichtig[0] + " " + richtig;
    }
    else{
      falsch++;
      document.getElementById("falsch").innerHTML = scoreFalsch[0] + " " + falsch;
    }
    genreWord = genres[genres.findIndex(genres => genres.genre_id === genre)].word;
    actualWord = de_word[de_word.findIndex(de_word => de_word.id === rand)].word;
    wordQuestion.innerHTML = genreWord + " " + actualWord;
    await sleep(1,5);
    shuffle();
  }

  async function sleep(seconds){
    return new Promise((resolve) => setTimeout(resolve, seconds * 1000));
  }

</script>