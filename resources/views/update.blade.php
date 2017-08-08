@extends('layouts')

@section('content')

    <div class="row">
      <div class="col-md-12">
        <form class="" action="{{ route('todos.save', ['id' => $todo->id]) }}" method="post">
          <input type="text"
                  class="form-control input-lg"
                  placeholder="Update a new todo"
                  value="{{$todo->todo}}"
                  name="todo">
          {{ csrf_field() }}
        </form>

      </div>
    </div>


@stop
