@extends('layouts.master')


@section('title')
    @parent

    | Add Parent Task
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


    {!!   Form::open(array('url' => 'parent_task/store',  'method'=>'post', 'class'=>'form-horizontal inline','files'=> true)) !!}


    <fieldset>

        <legend>Add Parent Task</legend>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Parent Task Name</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" name="title" value="{{Input::old('title')}}" id="title"
                       placeholder="Title">

            </div>
        </div>

        {{--<div class="form-group">--}}
            {{--<label for="status" class="col-sm-2 control-label">Parent Task Status</label>--}}

            {{--<div class="col-sm-3">--}}
                {{--<input type="status" class="form-control" name="status" value="{{Input::old('status')}}" id="status"--}}
                       {{--placeholder="Status">--}}

            {{--</div>--}}
        {{--</div>--}}

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
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </fieldset>


    {!! Form::close() !!}



@stop







