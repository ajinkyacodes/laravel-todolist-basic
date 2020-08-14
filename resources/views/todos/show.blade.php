@extends('todos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mb-3" href="{{ route('todos.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Task:</strong>
                {{ $todo->task }}
            </div>
        </div>        
    </div>
@endsection