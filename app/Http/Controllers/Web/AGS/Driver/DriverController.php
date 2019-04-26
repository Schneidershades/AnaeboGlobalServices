<?php

namespace App\Http\Controllers\Web\AGS\Driver;

use App\Models\AGS\Driver;
use App\Models\AGS\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.driver.index')
            ->with('drivers', Driver::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.driver.create')
            ->with('branches', Branch::all());
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
            'name' => 'required|max:255',
            'contact' => 'required',
            'branch_id' => 'required',
        ]);

        $driver = new Driver;
        $driver->name  = $request->name;
        $driver->contact  = $request->contact;
        $driver->branch_id  = $request->branch_id;
        $driver->user_id = Auth()->user()->id;
        $driver->save();
        Session::flash('success', 'The Driver was Sucessfully saved');
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
        $driver = Driver::find($id);

        return view('admin.driver.show')
                ->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);

        return view('admin.driver.edit')
                ->with('driver', $driver)
                ->with('branches', Branch::all());
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
            'name' => 'required|max:255',
            'contact' => 'required',
            'branch_id' => 'required',
        ]);

        $branch = Branch::find($id);

        $driver->name  = $request->name;
        $driver->contact  = $request->contact;
        $driver->branch_id  = $request->branch_id;
        $driver->user_id = Auth()->user()->id;
        $driver->save();
        Session::flash('success', 'The Driver was Sucessfully Updated');
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
        $driver = Driver::find($id);

        $driver->delete();
        Session::flash('success', 'You successfully deleted the driver');
        return redirect()->route('drivers.index');
    }
}
