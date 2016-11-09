

@extends('layouts.master')



@section('content')

    <h1>All Task List</h1>

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
            <td>Parent Task Status</td>
            <td>Task Name</td>
            <td>Task Status</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($alltasks as $alltask)
            <tr>
                <td>{{ $alltask->id }}</td>

                <td>{{ $alltask->maintask->title }}</td>
                <td>{{ $alltask->maintask->status }}</td>
                <td>{{ $alltask->task->title }}</td>
                {{--<td>--}}
                    {{--@foreach ($alltask->tasks as $task)--}}


                        {{--<li>{{ $task->title }}</li>--}}
                    {{--@endforeach--}}
                {{--</td>--}}


                <td>{{ $alltask->task->status }}</td>
                {{--<td>{{ $alltask->tasks->status }}</td>--}}

                <td>

                    <a class="btn btn-small btn-info" href="{{url('alltask/edit/'.$alltask->id)}}">Edit this Task List</a>

                    <a class="btn btn-small btn-success" href="{{ url('alltask/destroy/' . $alltask->id) }}">Delete this Task List</a>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{--<div class="pagination"> {!! str_replace('/?', '?', $alltasks->render()) !!}--}}

    </div>



    {!! Form::close()  !!}


@stop
