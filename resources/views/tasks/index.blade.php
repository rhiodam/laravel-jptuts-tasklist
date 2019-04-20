@extends('layouts.master')

@section('content')

{{--    Add Task Form--}}
    <div class="row mt-5">
        <div class="col-md-8">
{{--            @if ($errors->any())--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        {{ $error }}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
            <div class="card">
                <div class="card-header">
                    Add Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.create') }}"  method="post" class="form-group">
{{--                        {{ csrf_token() }}--}}
                        @csrf
                        <div class="form-group">
                            <label for="task" class="task">Title</label>
                            <input
                                    type="text"
                                    id="task"
                                    name="title"
                                    placeholder="Task title"
                                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            >
                            <div class="invalid-feedback">
{{--                                Please add a valid task title.--}}
                                {{ $errors->has('title') ? $errors->first('title') : '' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{{--    Task Table--}}
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add Task
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Task</th>
                            <th>Completed?</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Task</td>
                            <td>N</td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection