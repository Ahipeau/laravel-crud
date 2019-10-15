
@extends('layouts.master')

@section('content')
    
<h1 class="title" > Détails article </h1>
 
<table>
  <tr>
    <td>Name: {{ $article->titre}}</td>
  </tr>
 
  <tr>
     <td>Sport: {{ $article->description}}</td>
  </tr>  
 
 </table> 
 
<br>
<p>
 
    <a href="/articles/{{ $article->id }}/edit">Modifier article </a>
 
</p>
<br>
 
@stop
