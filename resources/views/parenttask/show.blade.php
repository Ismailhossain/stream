

@extends('layouts.master')



@section('content')

    <h1>Parent Task List</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    {!! Form::open(array( 'class'=>'form-horizontal inline','method'=>'get','files'=> true)) !!}


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Parent Task Name</td>
            <td>Status</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($parenttasks as $parenttask)
            <tr>
                <td>{{ $parenttask->id }}</td>

                <td>{{ $parenttask->title }}</td>


                <td>{{ $parenttask->status }}</td>

                <td>

                    <a class="btn btn-small btn-info" href="{{url('parent_task/edit/'.$parenttask->id)}}">Edit this Task</a>

                    <a class="btn btn-small btn-success" href="{{ url('parent_task/destroy/' . $parenttask->id) }}">Delete this Task</a>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{--<div class="pagination"> {!! str_replace('/?', '?', $parenttask->render()) !!}--}}

    </div>



    {!! Form::close()  !!}


@stop
