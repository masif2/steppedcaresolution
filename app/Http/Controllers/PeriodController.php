<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index(){
        return view("Periods.index");
    }
    public function create(){
        return view("Periods.addPeriod");
    }
   
    
}
