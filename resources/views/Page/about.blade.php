@extends('app')
@section('content')
<h1>About me!</h1>

    @if(count($people))
      <h1>People i like:</h1>
      <ul>
         @foreach($people as $person)
           <li>{{$person}}</li>
         @endforeach
      </ul>
    @endif

<p>this is a paragraph! </p>
@stop
