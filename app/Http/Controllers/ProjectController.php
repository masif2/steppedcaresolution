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
        ]);

        if ($validator->fails()) {

            return back()
            ->withErrors($validator)
            ->withInput();

        }
        $params=$request->except('_token');
       // dd($params);
        $params["name"]=$request->project_name;

       

           
        if ($request->file('project_image')) {
            $photo = $request->file('project_image');
            $fileName=$photo->getClientOriginalName();
            $extension=$photo->getClientOriginalExtension();
            $request->file('project_image')->move(public_path('/uploads/'), $fileName);
            $params['image_path']='/uploads/'. $fileName;
           
            }
    

        return response()->json(["status"=>"success","data"=>$params,"request"=> $request->all()]);
    die();

        $project=new project;
        $project->create($params);
        # code...
        $data=$project;
        return response()->json(["status"=>"success","data"=>$data,"requests"=>$request->all()]);

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
