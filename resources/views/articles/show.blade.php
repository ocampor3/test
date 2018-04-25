@extends('layouts.app')

@section('content')
<br><br>
    <h1>{{$article->Title}}</h1>
    <div>
        &nbsp;&nbsp;Latitude and Longitude:&nbsp;{!!$article->Value!!}
    </div>
    <hr>
    <small>ID: {{$article->Id}}</small><br>
    <small>Location: {{$article->Title}}</small><br>
    <small>Latitude and Longitude: {{$article->Value}}</small><br><br> 
    <hr>

    {!!Form::open(['action' => ['ArticlesController@destroy', $article->Id], 'method' => 'article', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        <a href="/articles" class="btn btn-default btn-dark btn-dark">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/articles/{{$article->Id}}/edit" class="btn btn-default btn-dark btn-dark">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
