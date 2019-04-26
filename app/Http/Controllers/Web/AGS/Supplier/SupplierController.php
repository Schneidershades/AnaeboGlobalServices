<?php

namespace App\Http\Controllers\Web\AGS\Supplier;

use Session;
use App\Models\AGS\Supplier;
use App\Models\AGS\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.supplier.index')
            ->with('suppliers', Supplier::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create')
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
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $supplier = new Supplier;

        $supplier->fill($request->only(['name', 'email','address','contact']));

        $supplier->user_id = Auth()->user()->id;
        $supplier->branch_id = Auth()->user()->branch_id;

        $supplier->save();

        Session::flash('success', 'The supplier was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AGS\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);
         return view('admin.supplier.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AGS\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('admin.supplier.edit')
                ->with('branches', Branch::all())
                ->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AGS\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'name' => 'required|max:255',
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $supplier = Supplier::find($id);

        $supplier->fill($request->only(['name', 'email','address','contact']));

        $supplier->user_id = Auth()->user()->id;
        $supplier->branch_id = Auth()->user()->branch_id;

        $supplier->save();

        Session::flash('success', 'The supplier was Sucessfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AGS\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = Customer::find($id);
        $suppliers->delete();
        Session::flash('success', 'You successfully deleted the Supplier');
        return redirect()->route('suppliers.index');
    }
}
