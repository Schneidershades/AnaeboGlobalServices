<?php

namespace App\Http\Controllers\Web\AGS\Branch;

use Session;
use App\Models\AGS\Branch;
use App\Models\AGS\StockTransfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.branch.index')
            ->with('branches', Branch::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.create');
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
            'area' => 'required',
            'state' => 'required',
            'country' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);

        $branch = new Branch;

        $branch->name = $request->name;
        $branch->area = $request->area;
        $branch->state = $request->state;
        $branch->country = $request->country;
        $branch->address = $request->address;
        $branch->contact = $request->contact;
        
        $branch->save();
        Session::flash('success', 'The Branch was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AGS\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);

        return view('admin.branch.show')
                ->with('branch', $branch)
                ->with('incoming', StockTransfer::where('branch_id_to', $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AGS\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);

        return view('admin.branch.edit')
                ->with('branch', $branch);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AGS\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'area' => 'required',
            'state' => 'required',
            'country' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);

        $branch = Branch::find($id);

        $branch->name = $request->name;
        $branch->area = $request->area;
        $branch->state = $request->state;
        $branch->country = $request->country;
        $branch->address = $request->address;
        $branch->contact = $request->contact;

        // $branch->user_id = Auth()->user()->id;
        
        $branch->save();
        Session::flash('success', 'The Branch was Sucessfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AGS\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);

        $branch->delete();
        Session::flash('success', 'You successfully deleted the Branch');
        return redirect()->route('branches.index');
    }
}
