<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

use App\Task;
use App\Parenttask;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
//use Illuminate\Contracts\Pagination;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = Task::all();
        $parenttasks = Parenttask::all();
        $getstatus = Status::all();

        return view('task.add', compact('tasks','getstatus','parenttasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:tasks',                        // just a normal required validation
            'status' => 'required',                        // just a normal required validation
            'parent_id' => 'required',                        // just a normal required validation
        ]);

        $tasks = new Task;
        $tasks->title = $request->title;
        $tasks->status = $request->status;
        $tasks->parent_id = $request->parent_id;

        $tasks->save();

        Session::flash('message', 'Successfully created Task!');
        return Redirect::to('task/show');
//        return Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tasks = Task::all();

//          $tasks = Task::paginate(5);

        return view('task.show', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tasks = Task::find($id);
        $parenttasks = Parenttask::all();
        $getstatus = Status::all();
        return view('task.update', compact('parenttasks','getstatus','tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'status' => 'required',
            'parent_id' => 'required'
        ]);


        $task_id = Input::get('id');
        $tasks = Task::find($task_id);
        $tasks->title = $request->title;
        $tasks->status = $request->status;
        $tasks->parent_id = $request->parent_id;


        $tasks->save();

        Session::flash('message', 'Successfully updated the Task!');
        return Redirect::to('task/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();
        Session::flash('message', 'Successfully Deleted the Task!');
        return Redirect::to('task/show');
    }
}
