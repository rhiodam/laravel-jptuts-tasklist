@extends('layouts.master')

@section('content')

{{--    Add Task Form--}}
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add Task
                </div>
                <div class="card-body">
                    <form action="" class="form-group">
                        <div class="form-group">
                            <label for="task" class="task">Task</label>
                            <input type="text" id="task" name="task" placeholder="Task" class="form-control">
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