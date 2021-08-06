<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Period;
use App\Models\Permission;
use App\Models\project;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionsController extends Controller
{

    public function create()
    {
        $active_user = User::where('id', auth()->user()->id)->first();
        if ($active_user->role != 'Admin'){
            $forms = Form::where('project_id', $active_user->project_id)->get();
        }else{
            $forms = (object) array();
        }

        $periods = Period::all();
        $projects = project::all();
        $users = User::whereNotIn('role', ['Admin'])->get();

        return view("Permissions.create")->with(compact('projects','active_user', 'forms', 'users', 'periods'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'period_id' => ['required'],
            'project_id' => ['required'],
            'form_id' => ['required'],
            'stream_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $input = $request->except('_token');
            $input['created_by'] = auth()->user()->id;
            
            $input['unassigned_user'] = $request->unassigned_user??0;
            $input['assigned_user'] = $request->assigned_user??0;
            
            Permission::create($input);

        } catch (\Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('dashboard.permissions', [$request->form_id])->with('success', 'permissions created successfully!');
    }

    public function getUsers($project_id)
    {
        $users = User::where('project_id', $project_id)->whereNotIn('role', ['Admin'])->pluck("name","id");
        return response()->json($users);
    }

    public function getForms($project_id)
    {
        $forms = Form::where('project_id', $project_id)->pluck("name","id");
        return response()->json($forms);
    }

    public function getStreams($form_id)
    {
        $streams = Stream::where('form_id', $form_id)->pluck("name","id");
        return response()->json($streams);
    }
}
