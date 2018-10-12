@extends('layout')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-6 col-lg-offset-3">
    <form action="/todo/save" method="post">
      {{ csrf_field() }}
      <input class="form-control input-lg" type="text" name="todo" value="{{ $todo->todo }}" placeholder="Modify a list">
    </form>
  </div>
</div>
            
@stop
