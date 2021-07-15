<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\project;
class UserController extends Controller
{
    //
    public function index()
    {
        # code...
        
        $data=[];
        $data["users"]=User::orderBy('id','desc')->get();
        return view('members.index',$data);
    }

     //
     public function show($id)
     {
         # code...
         
         $data=[];
         $data["user"]=User::find(decrypt($id));
         $data["projects"]=project::all();
         return view('members.show',$data);
     }
    
    //
    public function create()
    {
        # code...
        $data=[];
        $data["projects"]=project::all();
        
        return view('members.create',$data);
    }
    
    //
    public function store(Request $request)
    {
        $params=$request->except('_token');
       // dd($params);
        $params["name"]=$request->firstname.' '.$request->lastname;
        $params["project_id"]=$request->project;
        $params["password"]=bcrypt('12345678');
        $user=new User;
        $user->create($params);
        # code...
        $data=[];
        return back();
    }
    
    //
    public function edit(Request $request)
    {
        # code...
        
        $data=[];
        $data["user"]=User::find(decrypt($request->ref));
        $data["projects"]=project::all();
        return view('members.edit',$data);
    }
    //
    public function update()
    {
        # code...
        $data=[];
       // return view('members.index',$data);
    }
    //
    public function delete()
    {
        # code...
        $data=[];
        return view('members.index',$data);
    }
}
