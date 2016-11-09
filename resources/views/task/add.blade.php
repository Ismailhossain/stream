@extends('layouts.master')


@section('title')
    @parent

    | Add Task
@stop

@section('content')

    @if(isset($errors))
        <div class="alert-danger">


            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach


        </div>
    @endif


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    {!!   Form::open(array('url' => 'task/store',  'method'=>'post', 'class'=>'form-horizontal inline','files'=> true)) !!}


    <fieldset>

        <legend>Add Task</legend>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label"> Task Name</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" name="title" value="{{Input::old('title')}}" id="title"
                       placeholder="Title">

            </div>
        </div>
        <div class="form-group">
            <label for="status" class="col-sm-2 control-label">Status</label>

            <div class="col-sm-3">
                <select name="status" id="status" class="form-control" >
                    @foreach($getstatus as $status)
                        <option value="{{$status->title_id}}">{{$status->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="parent_id" class="col-sm-2 control-label">Parent Task ID</label>

            <div class="col-sm-3">
                <select name="parent_id" id="parent_id" class="form-control" >
                    @foreach($maintasks as $maintask)
                        <option value="{{$maintask->id}}">{{$maintask->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </fieldset>


    {!! Form::close() !!}



@stop







