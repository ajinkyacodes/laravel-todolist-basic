@extends('todos.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="btn pull-left">
            <h2>Todo List</h2>
        </div>
        <div class="btn pull-right">
            <a class="btn btn-sm btn-success mb-3" href="{{ route('todos.create') }}"> Create a new task</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th width="5%" class="text-center" >No</th>
        <th>Task</th>     
        <th width="250px">Action</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $todo->task }}</td>
        <td>
            <form action="{{ route('todos.destroy',$todo->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('todos.show',$todo->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('todos.edit',$todo->id) }}">Edit</a>

                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $todos->links() !!}

@endsection