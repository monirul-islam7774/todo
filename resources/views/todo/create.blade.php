@extends('layouts.app')
@section('body')
    <br>
    <a href="/todo" class="btn btn-info">Back</a>
    <div class="col-lg-4 offset-lg-4">
        <h1>{{ucfirst(substr(Route::currentRouteName(),5))}} item</h1>
        <form class="form-horizontal" action="/todo/@yield('editId')" method="post">
            {{csrf_field()}}
            @section('editMethod')
                @show
            <fieldset>
                <div class="form-group">
                    <div>
                        <input class="form-control" name="title" id="exampleInput" value="@yield('editTitle')" placeholder="Title" ></input>
                        <br>
                    </div>
                    <div>
                        <textarea class="form-control" name="body" id="exampleTextarea" rows="5" placeholder="Body">@yield('editBody')</textarea>
                        <br>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
       @include('todo.partials.errors')
    </div>

@endsection