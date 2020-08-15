@extends('todos.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div>
            <a class="btn btn-sm btn-secondary mb-3" href="{{ route('todos.index') }}"> Back</a>
        </div>
    </div>
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Create a new task</h2>
        </div>        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('todos.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p class="mb-2"><strong>Add Task</strong></p>
                <input type="text" name="task" class="form-control" placeholder="Task">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mb-5">Add</button>
        </div>
    </div>
   
</form>
@endsection