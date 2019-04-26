<?php

namespace App\Http\Controllers\Web\AGS\Salary;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AGS\SalaryStructure;
use Session;

class SalaryStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.salaryStructure.index')
            ->with('settings', SalaryStructure::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salaryStructure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|max:255',
            'date' => 'required',
        ]);

        $setting = new SalaryStructure;

        $setting->type = $request->type;
        $setting->date = $request->date;
        
        $setting->save();
        Session::flash('success', 'The salary setting was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = SalaryStructure::find($id);

        return view('admin.salaryStructure.show')
                ->with('setting', $setting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = SalaryStructure::find($id);

        return view('admin.salaryStructure.edit')
                ->with('setting', $setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required|max:255',
            'date' => 'required',
        ]);

        $setting = SalaryStructure::find($id);
        $setting->fill($request->only(['type', 'date']));

        $setting->user_id = Auth()->user()->id;
        
        $setting->save();
        Session::flash('success', 'The salary structure was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $setting->delete();
        Session::flash('success', 'You successfully deleted the salary setting');
        return redirect()->route('salary-structure.index');
    }
}
