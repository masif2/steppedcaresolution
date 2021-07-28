<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index(){

        $projects = project::all();
        $forms = Form::leftjoin('projects as p', 'p.id', '=', 'forms.project_id')
            ->select('forms.id AS form_id', 'forms.name as form_name', 'p.name as project_name', 'p.id as project_id')
            ->get();
        return view('forms.index')->with(compact('projects', 'forms'));
    }

    public function create(){
        return view("forms.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $input = $request->except('_token');
            $input['created_by'] = auth()->user()->id;

            Form::create($input);

        } catch (\Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
        return back()->with('success', 'Form created successfully!');
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $input = $request->only('name', 'project_id');
            $input['updated_by'] = auth()->user()->id;

            Form::where('id', $id)->update($input);

        } catch (\Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
        return back()->with('success', 'Form updated successfully!');
    }

    public function show(){
        return view("forms.show");
    }
    public function stream(Request $request){
        $stream=$request->id??null;
        if(!empty($stream)){
            return view("forms.stream");
        }else{
            return view("forms.index");   
        }
    }
    public function addstream(){
        return view("forms.addstream");
    }
    
}
