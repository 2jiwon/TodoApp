@extends('layout')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6 col-lg-offset-3">
    <form action="/create/todo" method="post">
      {{ csrf_field() }}
      <input class="form-control input-lg" type="text" name="todo" placeholder="Create a new list">
    </form>
  </div>
</div>
            
            @foreach ($todos as $todo)
              {{ $todo->todo }}
              <a href="{{ route('todo.delete', ['id' => $todo->id ]) }}" class="btn btn-sm btn-danger"> X </a>
              <hr>
            @endforeach

@stop
