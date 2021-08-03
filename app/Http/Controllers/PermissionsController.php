<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Period;
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
        $projects = project::all();
        $users = User::all();
        return view("Permissions.create")->with(compact('projects','active_user', 'forms', 'users'));
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
            'name' => ['required', 'string', 'max:255'],
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $input = $request->except('_token');
            $input['created_by'] = auth()->user()->id;
            Period::create($input);

        } catch (\Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('dashboard.periods', [$request->form_id])->with('success', 'Period created successfully!');
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
