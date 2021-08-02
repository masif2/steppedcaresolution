<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Period;

class PeriodController extends Controller
{
    //
    public function index()
    {
        # code...
        
        $data=[];
        return view('periods.index',$data);
    }

    //
    public function create()
    { 
        return view('periods.create');
    }

    //
    public function store(Request $request)
    {
        // $params=$request->except('_token');
        $params["name"] = $request->period_name;
        $params["status"] = $request->period_status;
        $params["start"] = $request->period_start;
        $params["end"] = $request->period_end;
        // dd($params);
        $period = new Period;
        $period->create($params);
        //
        return back();
    }
}
