<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    //
    public function index()
    {
        # code...
        
        $data=[];
        $data["users"]=User::orderBy('id','desc')->get();
      //  dd($data);
       
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
        $data["countries"]=DB::table("countries")->get();
        return view('members.create',$data);
    }
    
    //
    public function store(Request  $request)
    {
       

        $path="";
       
        if ($request->file('project_image_1')) {
            $imagePath = $request->file('project_image_1');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('project_image_1')->storeAs('uploads', $imageName, 'public');
        }
            dd( $request->all(),$path);
       

        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {

            return back()
            ->withErrors($validator)
            ->withInput();

        }
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
