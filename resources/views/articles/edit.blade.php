@extends('layouts.app')

@section('content')
    <h1>Edit Articles</h1>
    {!! Form::open(['action' => ['ArticlesController@update', $article->Id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('Title', 'Location')}}
                {{Form::text('Title', $article->Title, ['class' => 'form-control', 'placeholder' => 'Location'])}}
            </div>
            <div class="form-group">
                {{Form::label('Type', 'Type')}}
                {{Form::text('Type', $article->Type, ['class' => 'form-control', 'placeholder' => 'Type'])}}
            </div>
            <div class="form-group">
                {{Form::label('Value', 'Latitude and Longitude')}}
                {{Form::textarea('Value', $article->Value, ['class' => 'form-control', 'placeholder' => 'Latitude and Longitude'])}}
            </div>
            <a href="/articles/{{$article->Id}}" class="btn btn-default btn-dark btn-dark">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::hidden('_method','PUT') !!}       
    {!! Form::close() !!}
@endsection
