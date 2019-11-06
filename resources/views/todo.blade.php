@extends('layout')

@section('content')

<h2>This is todo view</h2><br>
<h3>Hello Todos!</h3>

<p>Create new Todo: </p>
<form action="/create/todo" method="post">
    {{ csrf_field() }}
    <input type="text" name="todoData" id="">
</form>
<hr>
    <table class="table table-light table-responsive">
        <thead>
            <tr>
                <th>Action</th>
                <th>Todo</th>
                <th>Created Date and Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todoKey as $todoValues)
                <tr>
                    <td>
                        <a href="{{ route('todo.delete', ['id'=>$todoValues->id]) }}" class="btn btn-danger" type="button">Del</a>
                        <span> |</span>
                        <a href="{{ route('todo.update', ['id'=>$todoValues->id]) }}" class="btn btn-primary" type="button">Edit</a>
                        <span> |</span>
                        @if(!$todoValues->completed)
                            <a href="{{ route('todo.completed', ['id'=>$todoValues->id]) }}" class="btn btn-success" type="button">End</a>    
                        @else
                            <a href="#" class="btn btn-success" type="button">Ended</a>    
                        @endif
                        
                    </td>
                    <td> {{$todoValues->todo}}</td>
                    <td>{{$todoValues->created_at}}</td>    
                </tr>
            @endforeach
        </tbody>    
    </table>

    <br>

    <a href="../">click to goto Home Page</a>

@endsection

