<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\project;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Http\Request;

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
        $projects = project::all();
        return view("permissions.create")->with(compact('projects','active_user', 'forms'));

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
