<?php

namespace App\Http\Controllers\Web\AGS\Sale;

use Auth;
use App\Models\AGS\Sale;
use App\Models\AGS\Transaction;
use App\Models\AGS\Customer;
use App\Models\AGS\Stock;
use App\Models\AGS\StockApproval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();

        return view('admin.sales.index')->with('sales', $sales);
    }

    protected function createAndReturnSkeletonfile()
    {
        return auth()->user()->sales()->create([
            'status' => 'cancelled',
            'paymentType' => 'none',
            'customer_id' => 1,
            'paid' => 0,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sale $sale)
    {
        if(!$sale->exists){
            $sale = $this->createAndReturnSkeletonfile();
            $customers = Customer::all();

            // foreach ($customers as $customer) {
            //     return $customer_list = "<option value='$customer->id'>$customer->name</option>";
            // }

            return view('admin.sales.create')
                ->with('sale', $sale)
                ->with('customers', $customers)
                ->with('stocks', Stock::all());
        }
        return view('admin.sales.create')
            ->with('sale', $sale)
            ->with('stocks', Stock::all());
    }


    public function createPrevious(Sale $sale)
    {
        if(!$sale->exists){
            $sale = $this->createAndReturnSkeletonfile();
            $customers = Customer::all();

            // foreach ($customers as $customer) {
            //     return $customer_list = "<option value='$customer->id'>$customer->name</option>";
            // }

            return view('admin.sales.create-previous')
                ->with('sale', $sale)
                ->with('customers', $customers)
                ->with('stocks', Stock::all());
        }
        return view('admin.sales.create-previous')
            ->with('sale', $sale)
            ->with('stocks', Stock::all());
    }

    public function ajaxStock(Sale $sale)
    {
        $receipts = Stock::all();
        return $receipt;
    }

   
     
    public function store(Request $request, $id)
    {
        $sale = Sale::find($id);

        $sale->customer_id = $request->customer_id;
        $sale->user->id = Auth()->user()->id;
        $sale->discount = $request->discount;
        $sale->grandTotal = $request->grandTotal;
        $sale->paid = $request->paid;
        $sale->due = $request->due;
        $sale->paymentType = $request->paymentType;
        $sale->paymentStatus = $request->paymentStatus;
        $sale->finished = true;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);
        return view('admin.sales.show')
            ->with('sale', $sale);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
