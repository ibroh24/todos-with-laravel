@extends('layout')

@section('content')

<p>Update Todo: </p>
<form action="{{route('todo.save', ['id'=>$todo->id])}}" method="post">
    {{ csrf_field() }}
<input type="text" value="{{$todo->todo}}" name="todo" id="">
</form>
    
@endsection