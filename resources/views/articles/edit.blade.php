@extends('layouts.master')
 
@section('content')
 
    <h1 class="title"> Modifier article </h1>
 
    <form method="POST" action="/articles/{{ $articles->id }}">
 
    @method('PATCH')
    {{ csrf_field() }}
 
 
        <div class="field">
 
            <label class="lable" for="titre">Titre </label>
 
            <div class="control">
 
                <input type="text" class="input" name="titre" placeholder="Title" value="{{ $articles->titre }}" required>
        
            </div>
       
        </div>
 
        <div class="field">
 
                <label class="lable" for="description">Description </label>
 
                <div class="control">
 
                      <textarea class="textarea" name="description" required>{{ $articles->description }} </textarea>
 
                </div>
 
        </div>
 
        <div class="field">
 
            <div class="control">
 
                <button type="submit" class="button is-link">Mise à jour</button>
 
            </div>
 
        </div>
 
    </form>  
 
    <form method="POST" action="/articles/{{ $articles->id }}">
 
    @method('DELETE')
    @csrf
 
 
        <div class="field">
 
            <div class="control">
 
                <button type="submit" class="button is-link">Supprimer </button>
 
            </div>
 
        </div>         
 
    </form>
 
 
 @endsection