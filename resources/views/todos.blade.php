@extends('layouts')

@section('content')

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <form class="" action="/create/todo" method="post">
          <input type="text"
                  class="form-control input-lg"
                  placeholder="Create a new todo"
                  name="todo">
          {{ csrf_field() }}
        </form>

      </div>
    </div>

    <hr>
    @foreach($todos as $todo)

    {{$todo->todo}}
    <hr>

    @endforeach
@stop
