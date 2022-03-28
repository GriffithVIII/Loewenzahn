@extends('layouts.sprachtor.main')
@section('content')
<body>
  <div class="">
   <h1>Artikeltraining</h1>
   <p>Wählen Sie den richtigen Artikel.</p>
  </div>

  <div>
    <span class="word-question"><h2 id="word-question"></h2></span>
    <h2 class="word-translation" id="word-translation"></h2>
  </div>
  
  <div class="genre-choice">
    <span class="genre-masculine" onclick="articleCheck(1)"><a>Der</a></span>
    <span class="genre-feminine" onclick="articleCheck(2)"><a>Die</a></span>
    <span class="genre-neuter" onclick="articleCheck(3)"><a>Das</a></span>
  </div>

  <div class="scoreboard">
    <span class="scoreboard-richtig"><a id="richtig">Richtig: 0</a></span>
  </div>
  
</body>

@include('layouts.sprachtor.shuffler')
@endsection
