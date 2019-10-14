
@extends('layouts.master')

@section('content')
    
<h1 class="title">Créer un nouveau article</h1>

 
    <form method="POST" action="/articles">

        {{ csrf_field() }}
 
       <div>
          <label >titre</label>
          <input type="text" name="titre" placeholder="titre article" required>
      </div>
      
      <div>
            <label >Description</label>
            <textarea name="description" placeholder="description article" required></textarea>
      </div>

      <div>
            <input type="submit" value="Créer un article">
 
      </div>
 
    </form>   
@stop
