@extends('layouts.master')
 
@section('content')
 

 <br>
<h1 class="title">Nos articles</h1>
 
<form action="/articles/create">
    <div class="field">
        <div class="control">
           <button type="submit" class="button is-link" >Créer un nouveau article</button>
      </div>
   </div>
</form
 
@if (count($articles)>0)
@foreach ($articles as $article)
<li> 
    <a href="/articles/{{ $article->id }}">
 
    {{ $article->titre}}  
 
    </a>
 
</li>
@endforeach
@else
  <p>Aucun article </p>  
@endif


 
@endsection