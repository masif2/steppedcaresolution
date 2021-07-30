<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->show_rows ?? 10;
        $form_streams = Form::with(['streams'])->paginate($perPage);
        $row_show = $perPage;

        return view("Reports.index")->with(compact('form_streams', 'row_show'));
    }
}
