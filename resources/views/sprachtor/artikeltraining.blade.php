@extends('layouts.sprachtor.main')
@section('content')
<body>
  <div class="ubung-top">
    <a href="{{ url('/home') }}"><i class="fa-solid fa-house"></i></a>
   <h1>Artikeltraining</h1>
   <p>Wählen Sie den richtigen Artikel.</p>
  </div>

  <div class="ubung-content">
    <div class="word-card">
      <span class="word-question"><h2 id="word-question"></h2></span>
      <p class="word-translation" id="word-translation"></p>
    </div>

    <div class="genre-choice">
      <span class="genre-masculine" onclick="genreCheck(1)"><a>Der</a></span>
      <span class="genre-feminine" onclick="genreCheck(2)"><a>Die</a></span>
      <span class="genre-neuter" onclick="genreCheck(3)"><a>Das</a></span>
    </div>

    <div class="scoreboard">
      <span class="scoreboard-falsch"><a id="falsch">Falsch: 0</a></span>
      <span class="scoreboard-richtig"><a id="richtig">Richtig: 0</a></span>
    </div>
  </div>
</body>

@include('layouts.sprachtor.shuffler')
@endsection
