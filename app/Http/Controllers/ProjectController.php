<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProjectController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
        $validator = Validator::make($request->all(), [
            'project_name' => ['required', 'string', 'max:255'],
            'period_id' => ['required'],
            'project_image' => 'required|image|mimes:png,jpg,jpeg|max:2000',
        ]);
        //
        if ($validator->fails()) {
            return back() ->withErrors($validator)->withInput();
        }
        //

        $params=$request->except('_token');
        $params["name"]=$request->project_name;
        $params["period_id"]=$request->period_id;
         //
        if ($request->file('project_image')) {
            $photo = $request->file('project_image');
            $fileName=$photo->getClientOriginalName();
            $extension=$photo->getClientOriginalExtension();
            $path = $request->file('project_image')->storeAs('uploads', $fileName);
            $params['image']='/storage/'.$path;
        }
        //
        $project=new project;
        $project->create($params);
        # code...
        return back()->with('success','Project created successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
