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
            
<div class="pt-5"></div>

  @foreach ($todos as $todo)
    {{ $todo->todo }}
    
    @if (!$todo->completed)
      <a href="{{ route('todo.completed', ['id' => $todo->id ]) }}" class="btn btn-sm btn-success">&check;</a>
    @else
      <span class="alert-success">completed</span>
    @endif
    <a href="{{ route('todo.update', ['id' => $todo->id ]) }}" class="btn btn-sm btn-primary">update</a>
    <a href="{{ route('todo.delete', ['id' => $todo->id ]) }}" class="btn btn-sm btn-danger"> X </a>
    <hr>
  @endforeach

@stop
