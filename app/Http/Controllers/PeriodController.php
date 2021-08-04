<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Period;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search_keyword = $request->input('keyword') ?? null;
        $perPage = $request->show_rows ?? 10;

        $periods = Period::when($search_keyword, function ($query, $value) {
            $query->where('periods.name', 'like', '%' . $value . '%')
                ->orWhere('start_date', 'like', '%' . $value . '%')
                ->orWhere('end_date', 'like', '%' . $value . '%');
        })
            ->orderBy('id', 'DESC')
            ->paginate($perPage);

        $row_show = $perPage;
        return view('periods.index')->with(compact('periods', 'row_show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("periods.create");
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

    public function edit($id)
    {
        $period = Period::find(decrypt($id));
        return view('periods.edit')->with(compact('period'));
    }


    public function update(Request $request, $id)
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
            $input['updated_by'] = auth()->user()->id;

            Period::where('id', $id)->update($input);

        } catch (\Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('dashboard.periods')->with('success', 'Period updated successfully!');

    }

    public function delete(Request $request)
    {
        try {
            Period::find(decrypt($request->ref))->delete();
            return back()->with('success', 'Period deleted successfully!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
