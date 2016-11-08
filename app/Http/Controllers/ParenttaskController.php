<?php

namespace App\Http\Controllers;

use App\Parenttask;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class ParenttaskController extends Controller
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
        $parenttasks = Parenttask::all();
        $getstatus = Status::all();

        return view('parenttask.add', compact('parenttasks','getstatus'));
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
            'title' => 'required|unique:parents',                        // just a normal required validation
            'status' => 'required',                        // just a normal required validation
        ]);

        $parenttask = new Parenttask;
        $parenttask->title = $request->title;
        $parenttask->status = $request->status;
        $parenttask->save();

        Session::flash('message', 'Successfully Added Parent Task!');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $parenttasks = Parenttask::all();

//          $parenttasks = Parenttask::paginate(5);

        return view('parenttask.show', compact('parenttasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parenttasks = Parenttask::find($id);
        $getstatus = Status::all();
        return view('parenttask.update', compact('parenttasks','getstatus','selectedstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        $this->validate($request, [
            'title' => 'required',
            'status' => 'required'
        ]);


        $parent_id = Input::get('id');
        $parenttasks = Parenttask::find($parent_id);
        $parenttasks->title = $request->title;
        $parenttasks->status = $request->status;


        $parenttasks->save();

        Session::flash('message', 'Successfully updated the Parent Task!');
        return Redirect::to('parent_task/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parenttasks = Parenttask::find($id);
        $parenttasks->delete();
        Session::flash('message', 'Successfully Deleted the Parent Task!');
        return Redirect::to('parent_task/show');
    }
}
