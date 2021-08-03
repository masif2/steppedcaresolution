<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Form;
use App\Models\project;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


        if(Auth::user()->role=="User"){
            $search_keyword = $request->input('keyword') ?? null;
            $active_user = User::where('id', auth()->user()->id)->first();
            $perPage = $request->show_rows ?? 10;
    
            $forms = Form::when($search_keyword, function ($query, $value) {
                $query->where('forms.name', 'like', '%' . $value . '%')
                    ->orWhere('p.name', 'like', '%' . $value . '%');
            })
                ->leftjoin('projects as p', 'p.id', '=', 'forms.project_id')
                ->where(function ($q) use($active_user) {
                    if ($active_user->role == 'Admin') {
    
                    }else{
                        $q->where('forms.created_by', $active_user->id);
                    }
                })
                ->select('forms.id AS form_id', 'forms.name as form_name', 'p.name as project_name', 'p.id as project_id')
                ->orderBy('form_id', 'DESC')
                ->paginate($perPage);
    
            $projects = project::all();
            $row_show = $perPage;

            return view('dashboard')->with(compact('projects', 'forms', 'active_user', 'row_show'));
        }else{
            return view('dashboard');
        }
       


        
    }
}
