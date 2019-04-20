@extends('layouts.master')

@section('content')

    {{--    Add Task Form--}}
    <div class="row mt-2">
        <div class="col-md-8">
            {{--            @if ($errors->any())--}}
            {{--                @foreach($errors->all() as $error)--}}
            {{--                    <div class="alert alert-danger">--}}
            {{--                        {{ $error }}--}}
            {{--                    </div>--}}
            {{--                @endforeach--}}
            {{--            @endif--}}

            @if (session()->has('msg'))
                <div class="alert alert-success"> {{ session()->get('msg') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    Add Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="post" class="form-group">
                        {{--                        {{ csrf_token() }}--}}
                        @csrf
                        <div class="form-group">
{{--                            <label for="task" class="task">Title</label>--}}
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
    <div class="row mt-3">
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
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>

                        @forelse($tasks as $t)
                            <tr>
                                <td>{{ $t->id }}</td>
                                <td>{{ $t->title }}</td>
                                <td>{{ $t->completed }}</td>
                                <td>{{ $t->created_at }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Update</button> {{ '   ' }}
                                    <form action="{{ route('tasks.destroy', $t->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <div class="alert alert-warning">No task is found</div>
                                </td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection