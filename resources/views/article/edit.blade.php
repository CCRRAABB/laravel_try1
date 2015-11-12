@extends('app')
@section('content')
    <h1>Edit Article:</h1>
    <hr>
    {!! Form::model($article,['method'=>'PATCH','action'=>['ArticleController@update',$article->id]]) !!}

     @include('article.form',['submitButtonText'=>'Update Article'])

    {!! Form::close() !!}

    {!! delete_form(['ArticleController@destroy',$article]) !!}

@include('errors.list')
@stop