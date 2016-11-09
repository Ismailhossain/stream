@extends('layouts.master')

@section('content')

    @if(isset($errors))
        <div class="bg-danger">


            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach


        </div>
    @endif


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    {!!  Form::open(array('url' => 'alltask/update',  'method'=>'post', 'class'=>'form-horizontal inline','files'=> true)) !!}


    <fieldset>

        <legend>Add/Update All Task</legend>
        <input type="hidden" name="id" value="{{$alltasks->id}}">


        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Parent Task Name</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" name="title" value="{{$alltasks->maintask->title}}" id="title"
                       placeholder="title">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Task Name</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" name="title" value="{{$alltasks->task->title}}" id="title"
                       placeholder="title">
            </div>
        </div>
        <div class="form-group">
            <label for="parent_id" class="col-sm-2 control-label">Parent Task Status ID</label>

            <div class="col-sm-3">
                <select name="status" id="status" class="form-control">
                    @foreach($getstatus as $status)
                        <option value="{{$status->title_id}}"
                                @if($status->title_id==$alltasks->maintask->status) selected='selected' @endif   >{{$status->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="status" class="col-sm-2 control-label">Task Status ID</label>

            <div class="col-sm-3">
                <select name="status" id="status" class="form-control">
                    @foreach($getstatus as $status)
                        <option value="{{$status->title_id}}"
                                @if($status->title_id==$alltasks->task->status) selected='selected' @endif   >{{$status->title}}</option>
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







