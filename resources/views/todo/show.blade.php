@extends('layouts.app')
@section('body')
    <br>
    <a href="/todo" class="btn btn-info">Back</a>
    <div class="col col-lg-4 offset-lg-4">
        <h1>{{$item->title}}</h1>
        <p>{{$item->body}}</p>
    </div>
@endsection