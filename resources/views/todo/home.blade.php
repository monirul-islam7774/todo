@extends('layouts.app')
@section('body')
    <br>
    @include('todo.partials.message')
    <a href="todo/create" class="btn btn-info">Add new</a>
    <div class="col-lg-6 offset-lg-3">
        <center><h1>Todo Lists</h1></center>
        <ul class="list-group col-lg-8" style="display: inline-block">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
                    <span class="pull-right">{{$todo->created_at->diffforhumans()}}</span>
                </li>
            @endforeach
        </ul>
        <ul class="list-group col-lg-3" style="display: inline-block">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{'/todo/'.$todo->id.'/edit'}}"><i class="fa fa-edit"></i></a  >
                    <form action="{{'/todo/'.$todo->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button style="border: none" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection