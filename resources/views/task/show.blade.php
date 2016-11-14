

@extends('layouts.master')



@section('content')

    <h1>Task List</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <div class="form-group row add">

        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            {!! Form::open(['method'=>'GET','url'=>'task/show','class'=>'navbar-form navbar-left']) !!}
            <div class="input-group custom-search-form">
                <input type="text" name="search" class="form-control" placeholder="Search ....">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default-sm">
              <i class="fa fa-search"></i>
          </button>
        </span>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    {!! Form::open(array( 'class'=>'form-horizontal inline','method'=>'get','files'=> true)) !!}


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Task Name</td>
            <td>Task Status</td>
            <td>Parent Task ID</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->parent_id }}</td>


                <td>

                    <a class="btn btn-small btn-info" href="{{url('task/edit/'.$task->id)}}">Edit this Task</a>

                    <a class="btn btn-small btn-success" href="{{ url('task/destroy/' . $task->id) }}">Delete this Task</a>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination"> {!! str_replace('/?', '?', $tasks->render()) !!}

    </div>



    {!! Form::close()  !!}


@stop
