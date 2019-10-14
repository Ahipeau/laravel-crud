@extends('layouts.master')
 
@section('content')
 
</<!DOCTYPE html>
<html>
<head>
   
</head>
<style>
 
 
</style>
<body>
 <br>
<h1 class="title">Nos articles</h1>
 
<form action="/articles/create">
    <div class="field">
        <div class="control">
           <button type="submit" class="button is-link" >Créer un nouveau article</button>
      </div>
   </div>
</form
 
 
@foreach ($articles as $article)
<li> 
    <a href="/players/{{ $article->id }}">
 
    {{ $article->titre}}  
 
    </a>
 
</li>
@endforeach
 
 
</body>
</html>
 
 
@endsection