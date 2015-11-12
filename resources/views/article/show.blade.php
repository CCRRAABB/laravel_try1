@extends('app')
@section('content')
    <h2>{{$article->title}}</h2>

    <article>
        {{$article->body}}
    </article>

    @unless($article->tag->isEmpty())
    <h5>Tags:</h5>
    <ul>
        @foreach($article->tag as $tag)
        <li>{{$tag->name}}</li>
        @endforeach
    </ul>
    @endunless
@stop