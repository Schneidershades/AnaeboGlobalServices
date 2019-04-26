<?php

namespace App\Http\Controllers\Web\AGS\Customer;

use Session;

use App\Models\AGS\Customer;
use App\Models\AGS\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.index')
            ->with('customers', Customer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create')
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

        $customer = new Customer;

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->contact = $request->contact;

        $customer->user_id = Auth()->user()->id;
        $customer->branch_id = Auth()->user()->branch_id;

        $customer->save();

        Session::flash('success', 'The Branch was Sucessfully saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AGS\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
         return view('admin.customer.show')
                ->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AGS\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('admin.customer.edit')
                ->with('branches', Branch::all())
                ->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AGS\Customer  $customer
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

        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->contact = $request->contact;

        $customer->user_id = Auth()->user()->id;
        $customer->branch_id = Auth()->user()->branch_id;

        $customer->save();

        Session::flash('success', 'You successfully updated the Customer');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AGS\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        Session::flash('success', 'You successfully deleted the Customer');
        return redirect()->route('customers.index');
    }
}
