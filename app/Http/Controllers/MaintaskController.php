<?php

namespace App\Http\Controllers;

use App\Maintask;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class MaintaskController extends Controller
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
        $maintasks = Maintask::all();
        $getstatus = Status::all();

        return view('maintask.add', compact('maintasks','getstatus'));
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
            'title' => 'required|unique:maintasks',                        // just a normal required validation
            'status' => 'required',                        // just a normal required validation
        ]);

        $maintask = new Maintask;
        $maintask->title = $request->title;
        $maintask->status = $request->status;
        $maintask->save();

        Session::flash('message', 'Successfully Added Parent Task!');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {
//        $maintasks = Maintask::all();

        $maintasks = Maintask::orderby('title');
        $search = $request->input('search');
        if(!empty($search)){
            $maintasks->Where('title','LIKE','%'.$search.'%');

        }
        $maintasks= $maintasks-> paginate(20);
        return view('maintask.show', compact('maintasks'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maintasks = Maintask::find($id);
        $getstatus = Status::all();
        return view('maintask.update', compact('maintasks','getstatus'));
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
        $maintasks = Maintask::find($parent_id);
        $maintasks->title = $request->title;
        $maintasks->status = $request->status;


        $maintasks->save();

        Session::flash('message', 'Successfully updated the Parent Task!');
        return Redirect::to('maintask/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maintasks = Maintask::find($id);
        $maintasks->delete();
        Session::flash('message', 'Successfully Deleted the Parent Task!');
        return Redirect::to('maintask/show');
    }
}
